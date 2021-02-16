<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Buttons;

class CallbackGameInlineKeyboardButton
    extends AbstractInlineKeyboardButton
    implements FirstInlineKeyboardButtonInterface
{
    public function __construct(string $text, CallbackGame $callbackGame)
    {
        parent::__construct($text);
    }
}
