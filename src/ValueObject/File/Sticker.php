<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

use EugeneErg\TelegramBotApiClient\ValueObject\MaskPosition;

class Sticker extends AbstractFile
{
    public function __construct(
        string $id,
        string $uid,
        int $width,
        int $height,
        bool $isAnimated,
        PhotoSize $thumb,
        int $size = null,
        string $emoji = null,
        string $setName = null,
        MaskPosition $maskPosition = null
    ) {
        parent::__construct($id, $uid, $size);
    }
}
