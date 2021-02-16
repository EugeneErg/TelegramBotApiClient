<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\Update;

abstract class AbstractUpdate
{
    public const TYPE_MESSAGE = 'message';
    public const TYPE_EDITED_MESSAGE = 'edited_message';
    public const TYPE_CHANNEL_POST = 'channel_post';
    public const TYPE_EDITED_CHANNEL_POST = 'edited_channel_post';
    public const TYPE_INLINE_QUERY = 'inline_query';
    public const TYPE_CHOSEN_INLINE_RESULT = 'chosen_inline_query';
    public const TYPE_CALLBACK_QUERY = 'callback_query';
    public const TYPE_SHIPPING_QUERY = 'shipping_query';
    public const TYPE_PRE_CHECKOUT_QUERY = 'pre_checkout_query';
    public const TYPE_POLL = 'poll';
    public const TYPE_POLL_ANSWER = 'poll_answer';

    /**
     * @var int
     */
    private $id;
    /**
     * @var string
     */
    private $type;

    public function __construct(int $id, string $type)
    {
        $this->id = $id;
        $this->type = $type;
    }
}
