<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Buttons;

class SwitchQueryInlineKeyboardButton
    extends AbstractInlineKeyboardButton
    implements OtherInlineKeyboardButtonInterface
{
    public function __construct(string $text, string $switchInlineQuery)
    {
        parent::__construct($text);
    }
}
