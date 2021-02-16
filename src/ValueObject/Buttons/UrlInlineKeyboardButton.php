<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Buttons;

class UrlInlineKeyboardButton
    extends AbstractInlineKeyboardButton
    implements OtherInlineKeyboardButtonInterface
{
    public function __construct(string $text, string $url)
    {
        parent::__construct($text);
    }
}
