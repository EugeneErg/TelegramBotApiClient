<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Curl\Content;

interface TextContentInterface extends ContentInterface
{
    public function __toString(): string;
}