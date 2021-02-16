<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Update;

use EugeneErg\TelegramBotApiClient\ValueObject\Poll;

class PollUpdate extends AbstractUpdate
{
    public function __construct(int $id, string $type, Poll $poll)
    {
        parent::__construct($id, $type);
    }
}
