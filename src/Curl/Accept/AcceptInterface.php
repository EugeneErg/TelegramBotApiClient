<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Curl\Accept;

interface AcceptInterface
{
    public function __construct(string $content);
    public static function getName(): string;
}
