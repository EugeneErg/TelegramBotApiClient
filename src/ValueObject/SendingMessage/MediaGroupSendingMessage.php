<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage;

use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\PhotoInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\VideoInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\Format\ModeFormat;

class MediaGroupSendingMessage implements SendingMessageInterface
{
    /**
     * MediaGroupMessage constructor.
     * @param PhotoInputFile[]|VideoInputFile $media
     * @param ModeFormat|null $formatCaption
     */
    public function __construct(array $media, ?ModeFormat $formatCaption = null)
    {
        //при отправке доп параметры помещаются в первый файл
    }
}
