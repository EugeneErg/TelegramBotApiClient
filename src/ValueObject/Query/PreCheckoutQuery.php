<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Query;

use EugeneErg\TelegramBotApiClient\ValueObject\OrderInfo;
use EugeneErg\TelegramBotApiClient\ValueObject\User;
use Money\Money;

class PreCheckoutQuery extends AbstractQuery
{
    public function __construct(
        string $id,
        User $from,
        Money $total,
        string $invoicePayload,
        string $shippingOptionId = null,
        OrderInfo $orderInfo = null
    ) {
        parent::__construct($id, $from);
    }
}
