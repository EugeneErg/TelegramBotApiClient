<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Message;

use DateTimeInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\Chat;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class ServiceMessage extends AbstractMessage
{
    public const TYPE_DELETE_CHAT_PHOTO = 'delete_chat_photo';
    public const TYPE_GROUP_CHAT_CREATED = 'group_chat_created';
    public const TYPE_SUPERGROUP_CHAT_CREATED = 'supergroup_chat_created';
    public const TYPE_CHANNEL_CHAT_CREATED = 'channel_chat_created';

    public function __construct(
        int $id,
        DateTimeInterface $date,
        Chat $chat,
        string $type,
        User $from = null,
        User $viaBot = null
    ) {
        parent::__construct($id, $date, $chat, $from, $viaBot);
    }
}
