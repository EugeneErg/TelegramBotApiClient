<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

class Document extends AbstractFile
{
    public function __construct(
        string $id,
        string $uid,
        int $size = null,
        PhotoSize $thumb = null,
        string $name = null,
        string $mimeType = null
    ) {
        parent::__construct($id, $uid, $size);
    }
}
