<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Update;

use EugeneErg\TelegramBotApiClient\ValueObject\Message;

class MessageUpdate extends AbstractUpdate
{
    public function __construct(int $id, string $type, Message $message)
    {
        parent::__construct($id, $type);
    }
}
