<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $defaultClient = null;

    public ?\GuzzleHttp\ClientInterface $securityClient = null;

    public ?Models\Shared\Security $security = null;

    /** @var pure-Closure(): string */
    public ?\Closure $securitySource = null;

    public string $serverUrl = '';

    public int $serverIndex = 0;

    public string $language = 'php';

    public string $openapiDocVersion = '1.0.0';

    public string $sdkVersion = '0.12.0';

    public string $genVersion = '2.429.0';

    public string $userAgent = 'speakeasy-sdk/php 0.12.0 2.429.0 1.0.0 ding-live/ding-php';

    public function getServerUrl(): string
    {

        if ($this->serverUrl !== '') {
            return $this->serverUrl;
        }

        return Ding::SERVERS[$this->serverIndex];
    }
    public function hasSecurity(): bool
    {
        return $this->security !== null || $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Shared\Security
    {
        if ($this->securitySource !== null) {
            $security = new Models\Shared\Security(
                apiKey: $this->securitySource->call($this)
            );

            return $security;
        } else {
            return $this->security;
        }
    }
}