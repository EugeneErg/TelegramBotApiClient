<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File\Input\Entity;

class RemoteInputEntityFile implements InputEntityFileInterface
{
    public function __construct(string $url)
    {
    }
}
