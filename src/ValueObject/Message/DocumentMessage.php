<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\Entity\Forward\AbstractForward;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Document;
use EugeneErg\TelegramBotApiClient\ValueObject\InlineKeyboardMarkup;
use EugeneErg\TelegramBotApiClient\ValueObject\PassportData;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class DocumentMessage extends AbstractMediaMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        Document $document,
        string $mediaGroupId = null,
        string $caption = null,
        array $captionEntities = [],
        User $from = null,
        User $viaBot = null,
        AbstractForward $forward = null,
        AbstractMessage $replyTo = null,
        DateTimeInterface $editDate = null,
        string $authorSignature = null,
        string $connectedWebsite = null,
        PassportData $passportData = null,
        InlineKeyboardMarkup $replyMarkup = null
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
            $editDate,
            $authorSignature,
            $connectedWebsite,
            $passportData,
            $replyMarkup
        );
    }
}
