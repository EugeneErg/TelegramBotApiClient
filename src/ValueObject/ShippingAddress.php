<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class ShippingAddress
{
    public function __construct(
        string $countryCode,
        string $state,
        string $city,
        string $streetLine1,
        string $streetLine2,
        string $postCode
    ) {
    }
}
