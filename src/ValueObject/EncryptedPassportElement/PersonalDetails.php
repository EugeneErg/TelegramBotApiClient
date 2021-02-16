<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\EncryptedPassportElement;

class PersonalDetails extends AbstractEncryptedPassportElement
{
    public function __construct(string $hash, string $data = null)
    {

    }
}
