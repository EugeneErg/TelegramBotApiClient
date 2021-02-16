<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Query;

use EugeneErg\TelegramBotApiClient\ValueObject\Message;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class CallbackQuery extends AbstractQuery
{
    /**
     * @var Message
     */
    private $message;
    /**
     * @var string
     */
    private $inlineMessageId;
    /**
     * @var string
     */
    private $chatInstance;
    /**
     * @var string
     */
    private $data;
    /**
     * @var string
     */
    private $gameShortName;

    public function __construct(
        string $id,
        User $from,
        string $chatInstance,
        Message $message = null,
        string $inlineMessageId = null,
        string $data = null,
        string $gameShortName = null
    ) {
        parent::__construct($id, $from);
        $this->message = $message;
        $this->inlineMessageId = $inlineMessageId;
        $this->chatInstance = $chatInstance;
        $this->data = $data;
        $this->gameShortName = $gameShortName;
    }
}