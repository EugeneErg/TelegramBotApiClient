<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Curl\Accept\Application;

use EugeneErg\TelegramBotApiClient\Curl\Accept\AcceptInterface;

class JsonAccept implements AcceptInterface
{
    /**
     * @var string
     */
    private $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public static function getName(): string
    {
        return 'application/json';
    }

    public function getValue(bool $assoc = false, int $depth = 512, int $options = 0)
    {
        return json_decode($this->content,$assoc, $depth, $options);
    }
}
