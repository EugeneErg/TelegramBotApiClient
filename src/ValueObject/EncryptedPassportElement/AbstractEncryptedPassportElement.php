<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\EncryptedPassportElement;

abstract class AbstractEncryptedPassportElement
{
    public function __construct(string $hash)
    {
    }
}
