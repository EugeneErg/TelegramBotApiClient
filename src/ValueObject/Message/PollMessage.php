<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\Poll;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class PollMessage extends AbstractMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        Poll $poll,
        User $from = null,
        User $viaBot = null
    ) {
        parent::__construct($id, $date, $chat, $from, $viaBot);
    }
}
