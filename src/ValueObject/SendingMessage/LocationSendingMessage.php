<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage;

use EugeneErg\TelegramBotApiClient\ValueObject\Location;
use DateInterval;

class LocationSendingMessage implements SendingMessageInterface
{
    public function __construct(Location $location, ?DateInterval $livePeriod = null)
    {

    }
}
