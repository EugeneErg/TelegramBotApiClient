<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Query;

use EugeneErg\TelegramBotApiClient\ValueObject\ShippingAddress;
use EugeneErg\TelegramBotApiClient\ValueObject\User;

class ShippingQuery extends AbstractQuery
{
    /**
     * @var string
     */
    private $invoicePayload;
    /**
     * @var ShippingAddress
     */
    private $shippingAddress;

    public function __construct(
        string $id,
        User $from,
        string $invoicePayload,
        ShippingAddress $shippingAddress
    ) {
        parent::__construct($id, $from);
        $this->invoicePayload = $invoicePayload;
        $this->shippingAddress = $shippingAddress;
    }
}
