<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Query;

use EugeneErg\TelegramBotApiClient\ValueObject\Location;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class InlineQuery extends AbstractQuery
{
    /**
     * @var string
     */
    private $query;
    /**
     * @var string
     */
    private $offset;
    /**
     * @var Location|null
     */
    private $location;

    public function __construct(string $id, User $from, string $query, string $offset, Location $location = null)
    {
        parent::__construct($id, $from);
        $this->query = $query;
        $this->offset = $offset;
        $this->location = $location;
    }
}
