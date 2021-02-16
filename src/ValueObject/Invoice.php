<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

use Money\Money;

class Invoice
{
    public function __construct(
        string $title,
        string $description,
        string $startParameter,
        Money $total
    ) {
    }
}
