<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class Chat
{
    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $type;
    /**
     * @var string|null
     */
    private $title;
    /**
     * @var string|null
     */
    private $username;
    /**
     * @var string|null
     */
    private $firstName;
    /**
     * @var string|null
     */
    private $lastName;

    public function __construct(
        int $id,
        string $type,
        string $title = null,
        string $username = null,
        string $firstName = null,
        string $lastName = null
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->title = $title;
        $this->username = $username;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
}