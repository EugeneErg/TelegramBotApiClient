<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Curl\Content\Application;

use EugeneErg\TelegramBotApiClient\Curl\Content\TextContentInterface;

class XWwwFormUrlencodedContent implements TextContentInterface
{
    private $content;

    public function __construct(array $content)
    {
        $this->content = http_build_query($content);
    }

    public function getName(): string
    {
        return 'application/x-www-form-urlencoded';
    }

    public function __toString(): string
    {
        return $this->content;
    }
}
