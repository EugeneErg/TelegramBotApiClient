<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage;

use EugeneErg\TelegramBotApiClient\ValueObject\Contact;

class ContactSendingMessage implements SendingMessageInterface
{
    public function __construct(Contact $contact)
    {
    }
}
