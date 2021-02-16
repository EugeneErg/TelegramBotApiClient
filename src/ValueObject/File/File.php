<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

class File extends AbstractFile
{
    public function __construct(string $id, string $uid, int $size = null, string $path = null)
    {
        parent::__construct($id, $uid, $size);
    }
}
