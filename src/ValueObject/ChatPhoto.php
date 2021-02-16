<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

use EugeneErg\TelegramBotApiClient\ValueObject\File\File;

class ChatPhoto
{
    public function __construct(File $small, File $big)
    {
    }
}
