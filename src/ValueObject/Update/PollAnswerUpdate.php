<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Update;

use EugeneErg\TelegramBotApiClient\ValueObject\PollAnswer;

class PollAnswerUpdate extends AbstractUpdate
{
    public function __construct(int $id, string $type, PollAnswer $pollAnswer)
    {
        parent::__construct($id, $type);
    }
}
