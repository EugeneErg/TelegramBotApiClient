<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Buttons;

class CallbackDataInlineKeyboardButton
    extends AbstractInlineKeyboardButton
    implements OtherInlineKeyboardButtonInterface
{
    public function __construct(string $text, string $callbackData)
    {
        parent::__construct($text);
    }
}
