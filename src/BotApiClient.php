<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient;

use DateInterval;
use DateTimeImmutable;
use EugeneErg\TelegramBotApiClient\Curl\Accept\Application\JsonAccept;
use EugeneErg\TelegramBotApiClient\Curl\Accept\Application\OctetStream;
use EugeneErg\TelegramBotApiClient\Curl\Content\Application\XWwwFormUrlencodedContent;
use EugeneErg\TelegramBotApiClient\Curl\Curl;
use EugeneErg\TelegramBotApiClient\ValueObject\Keyboard\KeyboardActionInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Location;
use EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage\FileSendingMessage;
use EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage\SendingMessageInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage\TextSendingMessage;
use EugeneErg\TelegramBotApiClient\ValueObject\OrderInfo;
use EugeneErg\TelegramBotApiClient\ValueObject\Poll;
use EugeneErg\TelegramBotApiClient\ValueObject\PollAnswer;
use EugeneErg\TelegramBotApiClient\ValueObject\Query\CallbackQuery;
use EugeneErg\TelegramBotApiClient\ValueObject\Query\ChosenInlineResult;
use EugeneErg\TelegramBotApiClient\ValueObject\Query\InlineQuery;
use EugeneErg\TelegramBotApiClient\ValueObject\Query\PreCheckoutQuery;
use EugeneErg\TelegramBotApiClient\ValueObject\Query\ShippingQuery;
use EugeneErg\TelegramBotApiClient\ValueObject\ShippingAddress;
use EugeneErg\TelegramBotApiClient\ValueObject\Update\AbstractUpdate;
use EugeneErg\TelegramBotApiClient\ValueObject\Update\MessageUpdate;
use EugeneErg\TelegramBotApiClient\ValueObject\Update\PollAnswerUpdate;
use EugeneErg\TelegramBotApiClient\ValueObject\Update\PollUpdate;
use EugeneErg\TelegramBotApiClient\ValueObject\Update\QueryUpdate;
use EugeneErg\TelegramBotApiClient\ValueObject\User;
use Money\Currency;
use Money\Money;

class BotApiClient
{
    public const ACTION_UPLOAD_PHOTO = 'upload_photo';
    public const ACTION_UPLOAD_VIDEO = 'upload_video';
    public const ACTION_UPLOAD_AUDIO = 'upload_audio';
    public const ACTION_UPLOAD_DOCUMENT = 'upload_document';
    public const ACTION_UPLOAD_FIND_LOCATION = 'find_location';
    public const ACTION_UPLOAD_VIDEO_NOTE = 'upload_video_note';

    private $baseUri = 'https://api.telegram.org/';

    /**
     * @var string
     */
    private $token;

    public function __construct(string $token)
    {
        $this->token = $token;
    }

    /**
     * @param int|null $offset
     * @param int|null $limit
     * @param DateInterval|null $timeout
     * @param string[] $allowedUpdates
     * @return AbstractUpdate[]
     */
    public function getUpdates(
        int $offset = null,
        int $limit = null,
        DateInterval $timeout = null,
        array $allowedUpdates = []
    ): array {
        $updates = $this->sendRequest('getUpdates', [
            'offset' => $offset,
            'limit' => $limit,
            'timeout' => $this->dateIntervalToSeconds($timeout),
            'allowed_updates' => $allowedUpdates,
        ]);
        $result = [];

        if (empty($allowedUpdates)) {
            $allowedUpdates = [
                AbstractUpdate::TYPE_CALLBACK_QUERY,
                AbstractUpdate::TYPE_CHANNEL_POST,
                AbstractUpdate::TYPE_CHOSEN_INLINE_RESULT,
                AbstractUpdate::TYPE_EDITED_CHANNEL_POST,
                AbstractUpdate::TYPE_EDITED_MESSAGE,
                AbstractUpdate::TYPE_INLINE_QUERY,
                AbstractUpdate::TYPE_MESSAGE,
                AbstractUpdate::TYPE_POLL,
                AbstractUpdate::TYPE_POLL_ANSWER,
                AbstractUpdate::TYPE_PRE_CHECKOUT_QUERY,
                AbstractUpdate::TYPE_SHIPPING_QUERY,
            ];
        }

        foreach ($updates as $update) {
            $type = $this->getUpdateType($update, $allowedUpdates);

            if ($type === null) {
                continue;
            }

            switch ($type) {
                case AbstractUpdate::TYPE_CALLBACK_QUERY:
                    $result[] = new QueryUpdate($update->update_id, $type, $this->createCallbackQuery($update->$type));
                    break;
                case AbstractUpdate::TYPE_INLINE_QUERY:
                    $result[] = new QueryUpdate($update->update_id, $type, $this->createInlineQuery($update->$type));
                    break;
                case AbstractUpdate::TYPE_PRE_CHECKOUT_QUERY:
                    $result[] = new QueryUpdate($update->update_id, $type, $this->createPreCheckoutQuery($update->$type));
                    break;
                case AbstractUpdate::TYPE_SHIPPING_QUERY:
                    $result[] = new QueryUpdate($update->update_id, $type, $this->createShippingQuery($update->$type));
                    break;
                case AbstractUpdate::TYPE_CHOSEN_INLINE_RESULT:
                    $result[] = new QueryUpdate($update->update_id, $type, $this->createChosenInlineResult($update->$type));
                    break;
                case AbstractUpdate::TYPE_CHANNEL_POST:
                case AbstractUpdate::TYPE_EDITED_CHANNEL_POST:
                case AbstractUpdate::TYPE_EDITED_MESSAGE:
                case AbstractUpdate::TYPE_MESSAGE:
                    $result[] = new MessageUpdate($update->update_id, $type, $this->createMessage($update->$type));
                    break;
                case AbstractUpdate::TYPE_POLL:
                    $result[] = new PollUpdate($update->update_id, $type, $this->createPoll($update->$type));
                    break;
                case AbstractUpdate::TYPE_POLL_ANSWER:
                    $result[] = new PollAnswerUpdate($update->update_d, $type, $this->createPollAnswer($update->$type));
                    break;
                default: continue(2);
            }
        }

        return $result;
    }

    /**
     * @param SendingMessageInterface $message
     * @param int|string $chatId
     * @param int|null $replyToMessageId
     * @param bool $disableNotification
     * @param KeyboardActionInterface|null $replyMarkup
     * @return SendingMessageInterface
     */
    public function send(
        SendingMessageInterface $message,
        $chatId,
        ?int $replyToMessageId = null,
        bool $disableNotification = false,
        ?KeyboardActionInterface $replyMarkup = null
    ): SendingMessageInterface {
        $data = array_replace($message->toArray(), [
            'chat_id' => $chatId,
            'reply_to_message_id' => $replyToMessageId,
            'disable_notification' => $disableNotification,
        ]);
        $this->sendRequest('send' . ucfirst($message->getType()), $data);
    }

    /**
     * @param int|string $chatId
     * @param string $action
     */
    public function sendAction($chatId, string $action)
    {



        //$this->sendRequest()
    }


    public function forward(
        int $chatId,
        int $fromChatId,
        int $messageId,
        bool $disableNotification = false
    ): SendingMessageInterface {

    }

    private function sendRequest(string $method, array $data): array
    {
        return (new Curl("{$this->baseUri}bot{$this->token}/$method"))
            ->setPostFields(new XWwwFormUrlencodedContent($data))
            ->enableFailOnError()
            ->setRequestMethod('POST')
            ->returnTransfer(JsonAccept::class)
            ->getValue(true);
    }

    public function getFileContent(string $path): string
    {
        return (new Curl("file/{$this->baseUri}bot{$this->token}/getFile/{$path}"))
            ->enableFailOnError()
            ->returnTransfer(OctetStream::class)
            ->getContent();
    }

    private function dateIntervalToSeconds(DateInterval $dateInterval = null): ?int
    {
        if ($dateInterval === null) {
            return null;
        }

        $reference = new DateTimeImmutable;
        $endTime = $reference->add($dateInterval);

        return $endTime->getTimestamp() - $reference->getTimestamp();
    }

    private function getUpdateType(object $update, array $allowedTypes): ?string
    {
        foreach ($allowedTypes as $type) {
            if (isset($update->$type)) {
                return $type;
            }
        }

        return null;
    }

    public function createCallbackQuery(object $query): CallbackQuery
    {
        return new CallbackQuery(
            $query->id,
            $this->createUser($query->from),
            $query->chat_instance,
            isset($query->message) ? $this->createMessage($query->message) : null,
            $query->inline_message_id ?? null,
            $query->data ?? null,
            $query->game_short_name ?? null
        );
    }

    public function createInlineQuery(object $query): InlineQuery
    {
        return new InlineQuery(
            $query->id,
            $this->createUser($query->from),
            $query->query,
            $query->offset,
            isset($query->location) ? $this->createLocation($query->location) : null
        );
    }

    public function createPreCheckoutQuery(object $query): PreCheckoutQuery
    {
        return new PreCheckoutQuery(
            $query->id,
            $this->createUser($query->from),
            new Money($query->total_amount, new Currency($query->currency)),
            $query->invoice_payload,
            $query->shipping_option_id ?? null,
            isset($query->order_info) ? $this->createOrderInfo($query->order_info) : null
        );
    }

    public function createShippingQuery(object $query): ShippingQuery
    {
        new ShippingQuery(
            $query->id,
            $this->createUser($query->from),
            $query->invoice_payload,
            $this->createShippingAddress($query->shipping_address)
        );
    }

    public function createChosenInlineResult(object $query): ChosenInlineResult
    {
        return new ChosenInlineResult(
            $query->id,
            $this->createUser($query->from),
            $query->query,
            isset($query->location) ? $this->createLocation($query->location) : null,
            $query->inline_message_id ?? null
        );
    }

    private function createMessage(object $message): Message
    {
        return new Message(
            $message->message_id,
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            '',
            ''
        );
    }

    private function createPoll(object $poll): Poll
    {

    }

    private function createPollAnswer(object $pollAnswer): PollAnswer
    {

    }

    private function createUser(object $user): User
    {

    }

    private function createLocation(object $location): Location
    {

    }

    private function createOrderInfo(object $orderInfo): OrderInfo
    {

    }

    private function createShippingAddress(object $shippingAddress): ShippingAddress
    {

    }
}
