<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Keyboard;

use EugeneErg\TelegramBotApiClient\ValueObject\Buttons\KeyboardButton;

class ReplyKeyboardMarkup implements KeyboardActionInterface
{
    /**
     * ReplyKeyboardMarkup constructor.
     * @param KeyboardButton[][] $keyboard
     * @param bool $resizeKeyboard
     * @param bool $oneTimeKeyboard
     * @param bool $selective
     */
    public function __construct(
        array $keyboard,
        bool $resizeKeyboard = false,
        bool $oneTimeKeyboard = false,
        bool $selective = false
    ) {

    }
}
