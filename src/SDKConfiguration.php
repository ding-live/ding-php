<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK;

class SDKConfiguration
{
	public ?\GuzzleHttp\ClientInterface $defaultClient = null;
	public ?\GuzzleHttp\ClientInterface $securityClient = null;
	public ?Models\Shared\Security $security = null;
	public string $serverUrl = '';
	public int $serverIndex = 0;
	public string $language = 'php';
	public string $openapiDocVersion = '1.0.0';
	public string $sdkVersion = '0.9.6';
	public string $genVersion = '2.312.1';
	public string $userAgent = 'speakeasy-sdk/php 0.9.6 2.312.1 1.0.0 ding-live/ding-php';
	

	public function getServerUrl(): string
	{
		
		if ($this->serverUrl !== '') {
			return $this->serverUrl;
		};
		return Ding::SERVERS[$this->serverIndex];
	}
	
}