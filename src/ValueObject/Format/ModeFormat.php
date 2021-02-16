<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Format;

class ModeFormat extends AbstractFormat
{
    public const MODE_MARKDOWN_V2 = 'MarkdownV2';
    public const MODE_HTML = 'HTML';
    public const MODE_MARKDOWN = 'Markdown';

    private $mode;

    public function __construct(string $text, string $mode = self::MODE_MARKDOWN_V2)
    {
        parent::__construct($text);
        $this->mode = $mode;
    }

    public function getMode(): string
    {
        return $this->mode;
    }
}