<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use EugeneErg\TelegramBotApiClient\Entity\Forward\AbstractForward;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\File\AbstractFile;
use EugeneErg\TelegramBotApiClient\ValueObject\Format\EntityFormat;
use EugeneErg\TelegramBotApiClient\ValueObject\Keyboard\InlineKeyboardMarkup;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

abstract class AbstractChatMessage extends AbstractFinalMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        User $from = null,
        User $viaBot = null,
        AbstractFile $file,
        EntityFormat $caption = null,
        AbstractForward $forward = null,
        AbstractMessage $replyTo = null,
        DateTimeInterface $editDate = null,
        string $authorSignature = null,
        InlineKeyboardMarkup $replyMarkup = null
    ) {
        parent::__construct(
            $id,
            $date,
            $chat,
            $from,
            $viaBot,
            $forward,
            $authorSignature,
            $connectedWebsite,
            $passportData,
            $replyMarkup
        );
    }
}
