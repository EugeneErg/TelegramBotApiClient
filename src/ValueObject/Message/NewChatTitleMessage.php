<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class NewChatTitleMessage extends AbstractMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        string $title,
        User $from = null,
        User $viaBot = null
    ) {
        parent::__construct($id, $date, $chat, $from, $viaBot);
    }
}
