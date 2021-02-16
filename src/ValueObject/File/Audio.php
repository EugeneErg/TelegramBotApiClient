<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

use DateInterval;

class Audio extends AbstractFile
{
    public function __construct(
        string $id,
        string $uid,
        DateInterval $duration,
        int $size = null,
        string $path = null,
        string $performer = null,
        string $title = null,
        PhotoSize $thumb = null,
        string $mimeType = null
    ) {
        parent::__construct($id, $uid, $size);
    }
}