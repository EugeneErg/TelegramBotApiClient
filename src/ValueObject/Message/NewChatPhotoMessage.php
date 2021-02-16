<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\File\PhotoSize;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class NewChatPhotoMessage extends AbstractMessage
{
    /**
     * NewChatPhotoMessage constructor.
     * @param int $id
     * @param DateTimeInterface $date
     * @param Chat $chat
     * @param PhotoSize[] $photo
     * @param User|null $from
     * @param User|null $viaBot
     */
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        array $photo,
        User $from = null,
        User $viaBot = null
    ) {
        parent::__construct($id, $date, $chat, $from, $viaBot);
    }
}
