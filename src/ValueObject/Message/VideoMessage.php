<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\Entity\Forward\AbstractForward;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Video;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class VideoMessage extends AbstractMediaMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        Video $video,
        string $mediaGroupId = null,
        string $caption = null,
        array $captionEntities = [],
        User $from = null,
        User $viaBot = null,
        AbstractForward $forward = null,
        AbstractMessage $replyTo = null,
        DateTimeInterface $editDate = null
    ) {
        parent::__construct(
            $id,
            $date,
            $chat,
            $mediaGroupId,
            $caption,
            $captionEntities,
            $from,
            $viaBot,
            $forward,
            $replyTo,
            $editDate
        );
    }
}
