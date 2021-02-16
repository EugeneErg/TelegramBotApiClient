<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity\Message;

use EugeneErg\TelegramBotApiClient\ValueObject\User;

class TextMentionMessageEntity extends AbstractMessageEntity
{
    /**
     * @var User
     */
    private $user;

    public function __construct(int $offset, string $value, User $user)
    {
        parent::__construct($offset, $value);
        $this->user = $user;
    }
}
