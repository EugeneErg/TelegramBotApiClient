<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity\Forward;

use DateTimeInterface;

class HiddenUserForward extends AbstractForward
{
    public function __construct(DateTimeInterface $date, string $from)
    {
        parent::__construct($date);
    }
}
