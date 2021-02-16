<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

use DateInterval;

class Video extends AbstractFile
{
    public function __construct(
        string $id,
        string $uid,
        int $width,
        int $height,
        DateInterval $duration = null,
        PhotoSize $thumb = null,
        string $mimeType = null,
        int $size = null
    ) {
        parent::__construct($id, $uid, $size);
    }
}