<?php

declare(strict_types=1);

namespace EugeneErg\TelegramBotApiClient\Curl;

use EugeneErg\TelegramBotApiClient\Curl\Accept\AcceptInterface;
use EugeneErg\TelegramBotApiClient\Curl\Content\ArrayContentInterface;
use EugeneErg\TelegramBotApiClient\Curl\Content\ContentInterface;
use function in_array;

class Curl
{
    public const REQUEST_METHOD_GET = 'GET';
    public const REQUEST_METHOD_POST = 'POST';

    private $options = [];

    public function __construct(string $url = null, array $parameters = null)
    {
        $this->setUrl($url);
    }

    public function setRequestMethod(string $requestMethod): self
    {
        return $this->setOption(
            CURLOPT_CUSTOMREQUEST,
            in_array(
                $requestMethod,
                [
                    self::REQUEST_METHOD_GET,
                    self::REQUEST_METHOD_POST
                ],
                true
            ) ? null : $requestMethod
        )->setOption(
            CURLOPT_POST,
            $requestMethod === self::REQUEST_METHOD_POST
        );
    }

    public function setPostFields(ContentInterface $content): self
    {
        return $this->setOption(CURLOPT_POSTFIELDS, $content);
    }

    public function getPostFields(): ?ContentInterface
    {
        return $this->getOption(CURLOPT_POSTFIELDS);
    }

    public function getRequestMethod(): string
    {
        return $this->getOption(CURLOPT_POST)
            ? self::REQUEST_METHOD_POST
            : $this->getOption(CURLOPT_CUSTOMREQUEST, self::REQUEST_METHOD_GET);
    }

    public function setUrl(?string $url, array $parameters = null): self
    {
        return $this->setOption(CURLOPT_URL, $url);
    }

    public function getUrl(): string
    {
        return $this->getOption(CURLOPT_URL);
    }

    private function setOption(int $key, $value, $default = null): self
    {
        if ($value === $default) {
            unset($this->options[$key]);
        } else {
            $this->options[$key] = $value;
        }

        return $this;
    }

    private function getOption(int $key, $default = null)
    {
        return $this->options[$key] ?? $default;
    }

    public function enableFailOnError(): self
    {
        return $this->setOption(CURLOPT_FAILONERROR, true, false);
    }

    public function isFailOnError(): bool
    {
        return $this->getOption(CURLOPT_FAILONERROR, false);
    }

    public function disableFailOnError(): self
    {
        return $this->setOption(CURLOPT_FAILONERROR, true, false);
    }

    /**
     * @var AcceptInterface $accept
     * @param string $accept
     * @var AcceptInterface[] $accepts
     * @param string ...$accepts
     * @return AcceptInterface
     */
    public function returnTransfer(
        string $accept,
        string ...$accepts
    ): AcceptInterface {
        $curl = curl_init();
        $headerAccepts = [$accept::getName() => $accept];

        foreach ($accepts as $accept) {
            $headerAccepts[$accept::getName()] = $accept;
        }

        $options = [
            CURLOPT_HEADERFUNCTION => function(string $header) use (&$resultHeaders): int {
                $keyValue = explode(' ', $header, 2);

                if (count($keyValue) === 2) {
                    list($key, $value) = $keyValue;
                    $resultHeaders[$key] = $value;
                } else {
                    $resultHeaders[] = $header;
                }

                return strlen($header);
            },
            CURLOPT_HTTPHEADER => [],
        ];
        $headers = [
            'Accept' => implode(',', array_keys($headerAccepts)),
        ];

        foreach ($this->options as $option => $value) {
            switch ($option) {
                case CURLOPT_POSTFIELDS:
                    /** @var ContentInterface $value */
                    $options[$option] = $value instanceof ArrayContentInterface
                        ? $value->toArray()
                        : $value->__toString();

                    $headers['Content-Type'] = $value->getName();

                    break;
                default:
                    $options[$option] = $value;
            }
        }

        foreach ($headers as $key => $header) {
            if (is_numeric($key)) {
                $options[CURLOPT_HTTPHEADER][] = $header;
            } else {
                $options[CURLOPT_HTTPHEADER][] = "$key: $header";
            }
        }

        curl_setopt_array($curl, $options);
        $content = curl_exec($curl);

        if ($content === false) {
            $errorMessage = curl_error($curl);
            $errorCode = curl_errno($curl);
            curl_close($curl);

            new CurlException( $errorMessage, $errorCode);
        }

        curl_close($curl);
        $class = $headerAccepts[$resultHeaders['Content-Type']];

        return new $class($content);
    }
}
