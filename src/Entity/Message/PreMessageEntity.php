<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity\Message;

class PreMessageEntity extends AbstractMessageEntity
{
    /**
     * @var string
     */
    private $language;

    public function __construct(int $offset, string $value, string $language)
    {
        parent::__construct($offset, $value);
        $this->language = $language;
    }
}
