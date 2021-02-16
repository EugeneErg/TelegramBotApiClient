<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Keyboard;

class ForceReply implements KeyboardActionInterface
{
    public function __construct(bool $selective = false)
    {

    }
}
