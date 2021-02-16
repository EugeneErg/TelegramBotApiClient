<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\SendingMessage;

use EugeneErg\TelegramBotApiClient\ValueObject\File\Animation;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Audio;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Document;
use EugeneErg\TelegramBotApiClient\ValueObject\File\FileInterface;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\AnimationInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\AudioInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\DocumentInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\PhotoInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\StickerInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\VideoInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\VideoNoteInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Input\VoiceInputFile;
use EugeneErg\TelegramBotApiClient\ValueObject\File\PhotoSize;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Sticker;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Video;
use EugeneErg\TelegramBotApiClient\ValueObject\File\VideoNote;
use EugeneErg\TelegramBotApiClient\ValueObject\File\Voice;
use EugeneErg\TelegramBotApiClient\ValueObject\Format\ModeFormat;

class FileSendingMessage implements SendingMessageInterface
{
    /**
     * @var FileInterface
     */
    private $file;
    /**
     * @var ModeFormat|null
     */
    private $formatCaption;

    public function __construct(FileInterface $file, ?ModeFormat $formatCaption = null)
    {
        $this->file = $file;
        $this->formatCaption = $formatCaption;
    }

    public function toArray(): array
    {
        return [


        ];
    }

    public function getType(): string
    {
        $fileTypes = [
            AnimationInputFile::class => 'animation',
            Animation::class => 'animation',
            AudioInputFile::class => 'audio',
            Audio::class => 'audio',
            DocumentInputFile::class => 'document',
            Document::class => 'document',
            PhotoInputFile::class => 'photo',
            PhotoSize::class => 'photo',
            StickerInputFile::class => 'sticker',
            Sticker::class => 'sticker',
            VideoInputFile::class => 'video',
            Video::class => 'video',
            VideoNoteInputFile::class => 'videoNote',
            VideoNote::class => 'videoNote',
            VoiceInputFile::class => 'voice',
            Voice::class => 'voice',
        ];

        return $fileTypes[get_class($this->file)];
    }
}
