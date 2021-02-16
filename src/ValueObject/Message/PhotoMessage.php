<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\Entity\Forward\AbstractForward;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\File\PhotoSize;
use EugeneErg\TelegramBotApiClient\ValueObject\InlineKeyboardMarkup;
use EugeneErg\TelegramBotApiClient\ValueObject\PassportData;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class PhotoMessage extends AbstractMediaGroupMessage
{
    /**
     * PhotoMessage constructor.
     * @param int $id
     * @param DateTimeInterface $date
     * @param Chat $chat
     * @param PhotoSize[] $photo
     * @param string|null $mediaGroupId
     * @param string|null $caption
     * @param array $captionEntities
     * @param User|null $from
     * @param User|null $viaBot
     * @param AbstractForward|null $forward
     * @param AbstractMessage|null $replyTo
     * @param DateTimeInterface|null $editDate
     * @param string|null $authorSignature
     * @param string|null $connectedWebsite
     * @param PassportData|null $passportData
     * @param InlineKeyboardMarkup|null $replyMarkup
     */
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        array $photo,
        string $mediaGroupId = null,
        string $caption = null,
        array $captionEntities = [],
        User $from = null,
        User $viaBot = null,
        AbstractForward $forward = null,
        AbstractMessage $replyTo = null,
        DateTimeInterface $editDate = null,
        string $authorSignature = null,
        string $connectedWebsite = null,
        PassportData $passportData = null,
        InlineKeyboardMarkup $replyMarkup = null
    ) {
        parent::__construct(
            $id,
            $date,
            $chat,
            $mediaGroupId,
            $caption,
            $captionEntities,
            $from,
            $viaBot,
            $forward,
            $replyTo,
            $editDate,
            $authorSignature,
            $connectedWebsite,
            $passportData,
            $replyMarkup
        );
    }
}
