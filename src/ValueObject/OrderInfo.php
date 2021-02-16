<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class OrderInfo
{
    public function __construct(
        string $name = null,
        string $phoneNumber = null,
        string $email = null,
        ShippingAddress $shippingAddress = null
    ) {
    }
}
