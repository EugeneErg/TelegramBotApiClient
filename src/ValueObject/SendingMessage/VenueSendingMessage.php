<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage;

use EugeneErg\TelegramBotApiClient\ValueObject\Venue;

class VenueSendingMessage implements SendingMessageInterface
{
    public function __construct(Venue $venue)
    {
    }
}
