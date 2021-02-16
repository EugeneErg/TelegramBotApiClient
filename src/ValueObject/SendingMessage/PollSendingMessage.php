<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage;

use EugeneErg\TelegramBotApiClient\ValueObject\Input\Poll;

class PollSendingMessage implements SendingMessageInterface
{
    public function __construct(Poll $poll)
    {

    }
}
