<?php

namespace EugeneErg\TelegramBotApiClient\ValueObject\Input;

use EugeneErg\TelegramBotApiClient\ValueObject\Format\ModeFormat;
use DateInterval;
use DateTimeInterface;

class Poll
{
    public const TYPE_QUIZ = 'quiz';
    public const TYPE_REGULAR = 'regular';

    public function __construct(
        string $question,
        array $answers,
        bool $isAnonymous = false,
        string $type = self::TYPE_REGULAR,
        bool $allowsMultipleAnswers = false,
        ?int $correctOptionId = null,
        ?ModeFormat $explanation = null,
        DateInterval $openPeriod = null,
        DateTimeInterface $closeDate = null,
        bool $isClosed = false
    ) {
    }
}
