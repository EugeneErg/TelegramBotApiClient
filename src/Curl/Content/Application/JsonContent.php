<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Curl\Content\Application;

use EugeneErg\TelegramBotApiClient\Curl\Content\TextContentInterface;

class JsonContent implements TextContentInterface
{
    /**
     * @var string
     */
    private $content;

    public function __construct(
        $value,
        int $options = 0,
        int $depth = 512
    ) {
        $this->content = json_encode($value, $options, $depth);
    }

    public function getName(): string
    {
        return 'application/json';
    }

    public function __toString(): string
    {
        return $this->content;
    }
}
