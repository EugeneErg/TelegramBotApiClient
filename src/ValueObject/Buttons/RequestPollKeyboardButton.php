<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Buttons;

use EugeneErg\TelegramBotApiClient\ValueObject\Poll;

class RequestPollKeyboardButton extends KeyboardButton
{
    public function __construct(string $text, ?string $pollType = Poll::TYPE_REGULAR)
    {
        parent::__construct($text);
    }
}
