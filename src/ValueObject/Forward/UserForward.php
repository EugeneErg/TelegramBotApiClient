<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity\Forward;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class UserForward extends AbstractForward
{
    public function __construct(DateTimeInterface $date, User $from)
    {
        parent::__construct($date);
    }
}
