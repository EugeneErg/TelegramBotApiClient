<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class UserInfo
{
    /**
     * @var User
     */
    private $user;
    /**
     * @var bool
     */
    private $canJoinGroups;
    /**
     * @var bool
     */
    private $canReadAllGroupMessages;
    /**
     * @var bool
     */
    private $supportsInlineQueries;

    public function __construct(
        User $user,
        bool $canJoinGroups,
        bool $canReadAllGroupMessages,
        bool $supportsInlineQueries
    ) {
        $this->user = $user;
        $this->canJoinGroups = $canJoinGroups;
        $this->canReadAllGroupMessages = $canReadAllGroupMessages;
        $this->supportsInlineQueries = $supportsInlineQueries;
    }
}
