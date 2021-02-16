<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Curl\ContentType\Multipart;

use CURLFile;
use EugeneErg\TelegramBotApiClient\Curl\Content\ArrayContentInterface;

class FormDataContent implements ArrayContentInterface
{
    private $data;

    /**
     * FormDataContentType constructor.
     * @param array $data
     * @see CURLFile
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function toArray(): array
    {
        return $this->data;
    }

    public function getName(): string
    {
        return 'multipart/form-data';
    }
}
