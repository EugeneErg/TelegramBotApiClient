<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\Entity\Forward\AbstractForward;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\InlineKeyboardMarkup;
use EugeneErg\TelegramBotApiClient\ValueObject\Location;
use EugeneErg\TelegramBotApiClient\ValueObject\PassportData;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class LocationMessage extends AbstractFinalMessage
{
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        Location $location,
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
