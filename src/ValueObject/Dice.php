<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject;

class Dice
{
    public const EMOJI_DICE = '🎲';
    public const EMOJI_DARTS = '🎯';
    public const EMOJI_BALL = '🏀';

    public function __construct(string $emoji, int $value)
    {

    }
}
