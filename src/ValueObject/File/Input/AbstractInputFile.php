<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File\Input;

use EugeneErg\TelegramBotApiClient\ValueObject\File\FileInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\Entity\InputEntityFileInterface;

abstract class AbstractInputFile implements FileInterface
{
    public function __construct(
        InputEntityFileInterface $entityFile
    ) {

    }
}