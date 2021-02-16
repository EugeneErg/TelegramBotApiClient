<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use EugeneErg\TelegramBotApiClient\Entity\Forward\AbstractForward;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\File\AbstractFile;
use EugeneErg\TelegramBotApiClient\ValueObject\Format\EntityFormat;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

abstract class AbstractMediaGroupMessage extends FileMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        AbstractFile $file,
        int $mediaGroupId,
        EntityFormat $caption = null,
        User $from = null,
        User $viaBot = null,
        AbstractForward $forward = null,
        AbstractMessage $replyTo = null,
        DateTimeInterface $editDate = null,
        string $authorSignature = null
    ) {
        parent::__construct(
            $id,
            $date,
            $chat,
            $file,
            $caption,
            $from,
            $viaBot,
            $forward,
            $replyTo,
            $editDate,
            $authorSignature
        );
    }
}
