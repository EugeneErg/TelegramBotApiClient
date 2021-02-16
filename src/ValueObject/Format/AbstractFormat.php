<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Format;

abstract class AbstractFormat
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }
}
