<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity\Message;

abstract class AbstractMessageEntity
{
    /**
     * @var int
     */
    private $offset;
    /**
     * @var string
     */
    private $value;

    public function __construct(int $offset, string $value)
    {
        $this->offset = $offset;
        $this->value = $value;
    }
}