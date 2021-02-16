<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

use DateInterval;
use EugeneErg\TelegramBotApiClient\ValueObject\Message\PinnedMessage;

class ChatInfo
{
    public const PERMISSION_SEND_MESSAGES = 1;
    public const PERMISSION_SEND_MEDIA_MESSAGES = 2;
    public const PERMISSION_SEND_POLLS = 4;
    public const PERMISSION_SEND_OTHER_MESSAGES = 8;
    public const PERMISSION_ADD_WEB_PAGE_PREVIEWS = 16;
    public const PERMISSION_CHANGE_INFO = 32;
    public const PERMISSION_INVITE_USERS = 64;
    public const PERMISSION_PIN_MESSAGES = 128;

    /**
     * @var Chat
     */
    private $chat;
    /**
     * @var ChatPhoto
     */
    private $photo;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $inviteLink;
    /**
     * @var PinnedMessage
     */
    private $pinnedMessage;
    /**
     * @var int
     */
    private $permissions;
    /**
     * @var DateInterval
     */
    private $slowModeDelay;
    /**
     * @var string
     */
    private $stickerSetName;
    /**
     * @var bool
     */
    private $canSetStickerSet;

    public function __construct(
        Chat $chat,
        ChatPhoto $photo,
        string $description,
        string $inviteLink,
        PinnedMessage $pinnedMessage,
        int $permissions,
        DateInterval $slowModeDelay,
        string $stickerSetName,
        bool $canSetStickerSet
    ) {
        $this->chat = $chat;
        $this->photo = $photo;
        $this->description = $description;
        $this->inviteLink = $inviteLink;
        $this->pinnedMessage = $pinnedMessage;
        $this->permissions = $permissions;
        $this->slowModeDelay = $slowModeDelay;
        $this->stickerSetName = $stickerSetName;
        $this->canSetStickerSet = $canSetStickerSet;
    }
}
