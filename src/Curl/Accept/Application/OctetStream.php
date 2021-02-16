<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Curl\Accept\Application;

use EugeneErg\TelegramBotApiClient\Curl\Accept\AcceptInterface;

class OctetStream implements AcceptInterface
{
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public static function getName(): string
    {
        return 'application/octet-stream';
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
