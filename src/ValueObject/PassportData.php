<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

use EugeneErg\TelegramBotApiClient\ValueObject\EncryptedPassportElement\AbstractEncryptedPassportElement;

class PassportData
{
    /**
     * PassportData constructor.
     * @param AbstractEncryptedPassportElement[] $data
     * @param EncryptedCredentials $credentials
     */
    public function __construct(array $data, EncryptedCredentials $credentials)
    {
    }
}
