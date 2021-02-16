<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity;

interface EntityInterface
{
    public function send(): void;

    public function refresh(): void;

    public function
}