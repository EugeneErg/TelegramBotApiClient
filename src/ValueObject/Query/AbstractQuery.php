<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Query;

use EugeneErg\TelegramBotApiClient\ValueObject\User;

abstract class AbstractQuery
{
    /**
     * @var string
     */
    private $id;
    /**
     * @var User
     */
    private $from;

    public function __construct(string $id, User $from)
    {
        $this->id = $id;
        $this->from = $from;
    }
}
