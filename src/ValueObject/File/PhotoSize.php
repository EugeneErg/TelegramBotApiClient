<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

class PhotoSize extends AbstractFile
{
    public function __construct(
        string $id,
        string $uid,
        int $width,
        int $height,
        int $size = null
    ) {
        parent::__construct($id, $uid, $size);
    }
}
