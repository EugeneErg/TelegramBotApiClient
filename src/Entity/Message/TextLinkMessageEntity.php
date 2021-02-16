<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity\Message;

class TextLinkMessageEntity extends AbstractMessageEntity
{
    /**
     * @var string
     */
    private $url;

    public function __construct(int $offset, string $value, string $url)
    {
        parent::__construct($offset, $value);
        $this->url = $url;
    }
}
