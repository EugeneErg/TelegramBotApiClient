<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Buttons;

use EugeneErg\TelegramBotApiClient\ValueObject\LoginUrl;

class LoginUrlInlineKeyboardButton
    extends AbstractInlineKeyboardButton
    implements OtherInlineKeyboardButtonInterface
{
    public function __construct(string $text, LoginUrl $loginUrl)
    {
        parent::__construct($text);
    }
}
