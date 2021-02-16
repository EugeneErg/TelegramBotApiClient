<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

use DateTimeInterface;

abstract class AbstractMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        User $from = null,
        User $viaBot = null
    ) {

    }
}
