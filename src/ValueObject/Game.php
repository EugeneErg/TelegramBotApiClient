<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

use EugeneErg\TelegramBotApiClient\Entity\Message\AbstractMessageEntity;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Animation;
use EugeneErg\TelegramBotApiClient\ValueObject\File\PhotoSize;

class Game
{
    /**
     * Game constructor.
     * @param string $title
     * @param string $description
     * @param PhotoSize[] $photo
     * @param string|null $text
     * @param AbstractMessageEntity[] $textEntities
     * @param Animation|null $animation
     */
    public function __construct(
        string $title,
        string $description,
        array $photo,
        string $text = null,
        array $textEntities = [],
        Animation $animation = null
    ) {
    }
}
