<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class PinnedMessage extends AbstractMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        AbstractChatMessage $message,
        User $from = null,
        User $viaBot = null
    ) {
        parent::__construct($id, $date, $chat, $from, $viaBot);
    }
}