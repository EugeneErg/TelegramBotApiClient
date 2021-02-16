<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class User
{
    private $id;
    private $isBot;
    private $firstName;
    private $lastName;
    private $username;
    private $languageCode;

    public function __construct(
        int $id,
        bool $isBot,
        string $firstName,
        string $lastName = null,
        string $username = null,
        string $languageCode = null
    ) {
        $this->id = $id;
        $this->isBot = $isBot;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->username = $username;
        $this->languageCode = $languageCode;
    }
}
