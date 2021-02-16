<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage;

interface SendingMessageInterface
{
    public function toArray(): array;
    public function getType(): string;
}
