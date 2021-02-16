<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Curl\Content;

interface ArrayContentInterface extends ContentInterface
{
    public function toArray(): array;
}
