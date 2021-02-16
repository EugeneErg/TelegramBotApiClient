<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class NewChatMembersMessage extends AbstractMessage
{
    /**
     * NewChatMembersMessage constructor.
     * @param int $id
     * @param DateTimeInterface $date
     * @param Chat $chat
     * @param User[] $members
     * @param User|null $from
     * @param User|null $viaBot
     */
    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        array $members,
        User $from = null,
        User $viaBot = null
    ) {
        parent::__construct($id, $date, $chat, $from, $viaBot);
    }
}
