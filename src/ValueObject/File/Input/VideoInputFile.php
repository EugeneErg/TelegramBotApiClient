<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File\Input;

use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\Entity\InputEntityFileInterface;
use DateInterval;

class VideoInputFile extends AbstractInputFile
{
    public function __construct(
        InputEntityFileInterface $entityFile,
        DateInterval $duration = null,
        ?int $width = null,
        ?int $height = null,
        PhotoInputFile $thumb = null,
        bool $supportsStreaming = false
    ) {
        parent::__construct($entityFile);
    }
}
