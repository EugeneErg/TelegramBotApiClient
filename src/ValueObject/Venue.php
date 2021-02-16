<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class Venue
{
    public function __construct(
        Location $location,
        string $title,
        string $address,
        string $foursquareId = null,
        string $foursquareType = null
    ) {
    }
}
