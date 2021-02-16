<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Entity\Message;

class CustomMessageEntity extends AbstractMessageEntity
{
    public const TYPE_MENTION = 'mention';
    public const TYPE_HASHTAG = 'hashtag';
    public const TYPE_CASH_TAG = 'cashtag';
    public const TYPE_BOT_COMMAND = 'bot_command';
    public const TYPE_URL = 'url';
    public const TYPE_EMAIL = 'email';
    public const TYPE_PHONE_NUMBER = 'phone_number';
    public const TYPE_BOLD = 'bold';
    public const TYPE_ITALIC = 'italic';
    public const TYPE_UNDERLINE = 'underline';
    public const TYPE_STRIKETHROUGH = 'strikethrough';
    public const TYPE_CODE = 'code';
    public const TYPE_PRE = 'pre';
    public const TYPE_TEXT_LINK = 'text_link';
    public const TYPE_TEXT_MENTION = 'text_mention';

    /**
     * @var string
     */
    private $type;
    /**
     * @var array
     */
    private $data;

    public function __construct(int $offset, string $value, string $type, array $data = [])
    {
        parent::__construct($offset, $value);
        $this->type = $type;
        $this->data = $data;
    }
}
