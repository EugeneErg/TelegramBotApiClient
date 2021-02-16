<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class LoginUrl
{
    public function __construct(
        string $url,
        string $forwardText = null,
        string $botUsername = null,
        bool $requestWriteAccess = false
    ) {
    }
}
