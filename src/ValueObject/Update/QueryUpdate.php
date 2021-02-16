<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Update;

use EugeneErg\TelegramBotApiClient\ValueObject\Query\AbstractQuery;

class QueryUpdate extends AbstractUpdate
{
    public function __construct(int $id, string $type, AbstractQuery $query)
    {
        parent::__construct($id, $type);
    }
}
