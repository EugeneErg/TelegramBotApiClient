<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class PollAnswer
{
    /**
     * @var int
     */
    private $pollId;
    /**
     * @var User
     */
    private $user;
    /**
     * @var int[]
     */
    private $optionIds;

    /**
     * PollAnswer constructor.
     * @param int $pollId
     * @param User $user
     * @param int[] $optionIds
     */
    public function __construct(int $pollId, User $user, array $optionIds)
    {
        $this->pollId = $pollId;
        $this->user = $user;
        $this->optionIds = $optionIds;
    }
}
