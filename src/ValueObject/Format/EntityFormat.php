<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Format;

use EugeneErg\TelegramBotApiClient\Entity\Message\AbstractMessageEntity;

class EntityFormat extends AbstractFormat
{
    /**
     * EntityFormat constructor.
     * @param string $text
     * @param AbstractMessageEntity[] $entities
     */
    public function __construct(string $text, array $entities)
    {
        parent::__construct($text);
    }
}
