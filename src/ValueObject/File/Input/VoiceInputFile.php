<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File\Input;

use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\Entity\InputEntityFileInterface;
use DateInterval;

class VoiceInputFile extends AbstractInputFile
{
    public function __construct(
        InputEntityFileInterface $entityFile,
        DateInterval $duration = null
    ) {
        parent::__construct($entityFile);
    }
}
