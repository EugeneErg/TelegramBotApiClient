<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File\Input;

use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\Entity\InputEntityFileInterface;
use DateInterval;

class VideoNoteInputFile extends AbstractInputFile
{
    public function __construct(
        InputEntityFileInterface $entityFile,
        DateInterval $duration = null,
        int $length = null,
        PhotoInputFile $thumb = null
    ) {
        parent::__construct($entityFile);
    }
}
