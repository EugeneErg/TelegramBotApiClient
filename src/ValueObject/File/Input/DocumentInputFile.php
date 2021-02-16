<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File\Input;

use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\Entity\InputEntityFileInterface;

class DocumentInputFile extends AbstractInputFile
{
    public function __construct(InputEntityFileInterface $entityFile, PhotoInputFile $thumb = null)
    {
        parent::__construct($entityFile);
    }
}
