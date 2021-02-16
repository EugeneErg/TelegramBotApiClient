<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity\Forward;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;

class ChannelForward extends AbstractForward
{
    public function __construct(
        DateTimeInterface $date,
        Chat $from,
        int $messageId,
        string $signature = null
    ) {
        parent::__construct($date);
    }
}
