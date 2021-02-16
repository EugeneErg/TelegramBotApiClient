<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\Entity\Forward\AbstractForward;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\Contact;
use EugeneErg\TelegramBotApiClient\ValueObject\InlineKeyboardMarkup;
use EugeneErg\TelegramBotApiClient\ValueObject\PassportData;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class ContactMessage extends AbstractFinalMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        Contact $contact,
        User $from = null,
        User $viaBot = null,
        AbstractForward $forward = null,
        string $authorSignature = null,
        string $connectedWebsite = null,
        PassportData $passportData = null,
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
