<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

abstract class AbstractFile implements FileInterface
{
    public function __construct(string $id, string $uid, int $size = null)
    {
    }
}
