<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class EncryptedCredentials
{
    public function __construct(string $data, string $hash, string $secret)
    {
    }
}
