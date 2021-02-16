<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Keyboard;

use EugeneErg\TelegramBotApiClient\ValueObject\Buttons\FirstInlineKeyboardButtonInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Buttons\OtherInlineKeyboardButtonInterface;

class InlineKeyboardMarkup implements KeyboardActionInterface
{
    /**
     * InlineKeyboardMarkup constructor.
     * @param OtherInlineKeyboardButtonInterface[][] $inlineKeyboard
     * @param FirstInlineKeyboardButtonInterface|null $firstButton
     */
    public function __construct(
        array $inlineKeyboard,
        FirstInlineKeyboardButtonInterface $firstButton = null
    ) {

    }
}
