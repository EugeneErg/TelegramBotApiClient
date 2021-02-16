<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\EncryptedPassportElement;

use EugeneErg\TelegramBotApiClient\ValueObject\File\PassportFile;

class InternalPassport extends AbstractEncryptedPassportElement
{
    /**
     * InternalPassport constructor.
     * @param string $hash
     * @param string|null $data
     * @param PassportFile|null $frontSide
     * @param PassportFile|null $selfie
     * @param PassportFile[] $translation
     */
    public function __construct(
        string $hash,
        string $data = null,
        PassportFile $frontSide = null,
        PassportFile $selfie = null,
        array $translation = []
    ) {

    }
}
