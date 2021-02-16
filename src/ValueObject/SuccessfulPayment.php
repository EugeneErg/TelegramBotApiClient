<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

use Money\Money;

class SuccessfulPayment
{
    public function __construct(
        Money $total,
        string $invoicePayload,
        string $telegramPaymentChargeId,
        string $providerPaymentChargeId,
        string $shippingOptionId = null,
        OrderInfo $orderInfo = null
    ) {
    }
}
