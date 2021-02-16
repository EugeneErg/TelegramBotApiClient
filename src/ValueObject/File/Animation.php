<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

use DateInterval;

class Animation extends AbstractFile
{
    public function __construct(
        string $id,
        string $uid,
        int $width,
        int $height,
        DateInterval $duration,
        int $size = null,
        PhotoSize $thumb = null,
        string $name = null,
        string $mimeType = null
    ) {
        parent::__construct($id, $uid, $size);
    }
}
