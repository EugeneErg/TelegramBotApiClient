<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Query;

use EugeneErg\TelegramBotApiClient\ValueObject\Location;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class ChosenInlineResult extends AbstractQuery
{
    /**
     * @var string
     */
    private $query;
    /**
     * @var Location|null
     */
    private $location;
    /**
     * @var string|null
     */
    private $inlineMessageId;

    public function __construct(
        string $id,
        User $from,
        string $query,
        Location $location = null,
        string $inlineMessageId = null
    ) {
        parent::__construct($id, $from);
        $this->query = $query;
        $this->location = $location;
        $this->inlineMessageId = $inlineMessageId;
    }
}