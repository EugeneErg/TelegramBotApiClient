<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Buttons;

class SwitchQueryCurrentChatInlineKeyboardButton extends AbstractInlineKeyboardButton
{
    public function __construct(string $text, string $switchInlineQueryCurrentChat)
    {
        parent::__construct($text);
    }
}
