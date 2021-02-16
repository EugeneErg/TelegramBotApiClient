<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

use DateInterval;

class Voice extends AbstractFile
{
    public function __construct(
        string $id,
        string $uid,
        DateInterval $duration,
        string $mimeType = null,
        int $size = null
    ) {
        parent::__construct($id, $uid, $size);
    }
}