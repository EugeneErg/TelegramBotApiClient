<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage;

use EugeneErg\TelegramBotApiClient\ValueObject\Dice;

class DiceSendingMessage implements SendingMessageInterface
{
    public function __construct(string $diceEmoji = Dice::EMOJI_DICE)
    {

    }
}
