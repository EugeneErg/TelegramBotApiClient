<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage;

use EugeneErg\TelegramBotApiClient\ValueObject\Format\ModeFormat;

class TextSendingMessage implements SendingMessageInterface
{
    /**
     * @var ModeFormat
     */
    private $formatText;
    /**
     * @var bool
     */
    private $enableWebPagePreview;

    public function __construct(ModeFormat $formatText, bool $enableWebPagePreview = true)
    {
        $this->formatText = $formatText;
        $this->enableWebPagePreview = $enableWebPagePreview;
    }

    public function toArray(): array
    {
        $result = $this->formatText ? [
            'parse_mode' => $this->formatText->getMode(),
            'text' => $this->formatText->getText(),
        ] : [];
        $result['disable_web_page_preview'] = !$this->enableWebPagePreview;

        return $result;
    }

    public function getType(): string
    {
        return 'message';
    }
}
