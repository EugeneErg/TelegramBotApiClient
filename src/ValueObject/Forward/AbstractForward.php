<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity\Forward;

use DateTimeInterface;

abstract class AbstractForward
{
    public function __construct(DateTimeInterface $date)
    {

    }
}
