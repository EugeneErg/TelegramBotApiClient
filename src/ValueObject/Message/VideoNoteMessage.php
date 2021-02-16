<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\File\VideoNote;

class VideoNoteMessage extends AbstractMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        VideoNote $videoNote
    ) {
        parent::__construct($id, $date, $chat);
    }
}
