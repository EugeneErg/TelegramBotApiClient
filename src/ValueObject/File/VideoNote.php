<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

use DateInterval;

class VideoNote extends AbstractFile
{
    public function __construct(
        string $id,
        string $uid,
        int $length,
        DateInterval $duration,
        PhotoSize $thumb = null,
        int $size = null
    ) {
        parent::__construct($id, $uid, $size);
    }
}