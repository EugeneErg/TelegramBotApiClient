<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Voice;

class VoiceMessage extends AbstractMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        Voice $voice
    ) {
        parent::__construct($id, $date, $chat);
    }
}
