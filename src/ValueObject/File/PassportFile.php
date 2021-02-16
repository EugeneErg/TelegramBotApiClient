<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\File;

use DateTimeInterface;

class PassportFile extends AbstractFile
{
    public function __construct(string $id, string $uid, int $size, DateTimeInterface $date)
    {
        parent::__construct($id, $uid, $size);
    }
}
