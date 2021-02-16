<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Keyboard;

class ReplyKeyboardRemove implements KeyboardActionInterface
{
    public function __construct(bool $selective = false)
    {

    }
}
