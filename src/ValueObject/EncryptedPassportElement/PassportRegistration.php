<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\ValueObject\EncryptedPassportElement;

use EugeneErg\TelegramBotApiClient\ValueObject\File\PassportFile;

class PassportRegistration extends AbstractEncryptedPassportElement
{
    /**
     * PassportRegistration constructor.
     * @param string $hash
     * @param PassportFile[] $files
     * @param PassportFile[] $translation
     */
    public function __construct(string $hash, array $files = [], array $translation = [])
    {

    }
}
