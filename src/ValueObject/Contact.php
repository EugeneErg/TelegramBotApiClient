<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class Contact
{
    public function __construct(
        string $phoneNumber,
        string $firstName,
        string $lastName = null,
        int $userId = null,
        string $vcard = null
    ) {
    }
}
