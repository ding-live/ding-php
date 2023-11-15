<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK;

/**
 * Ding - Ding: The OTP API allows you to send authentication codes to your users using their phone numbers.
 * 
 * @package Ding\DingSDK
 * @access public
 */
class Ding
{
    /** SERVER_PRODUCTION - The production Ding API server */
	public const SERVER_PRODUCTION = 'production';
	
	public const SERVERS = [
        /** The production Ding API server */
		Ding::SERVER_PRODUCTION => 'https://api.ding.live/v1',
	];
  	
    /**
     * Send OTP codes to your users using their phone numbers.
     * 
     * @var Otp $$otp
     */
	public Otp $otp;
	
    /**
     * Retrieve up-to-date metadata about a specific phone number
     * 
     * @var Lookup $$lookup
     */
	public Lookup $lookup;
		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return DingBuilder
	 */
	public static function builder(): DingBuilder
	{
		return new DingBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
		
		$this->otp = new Otp($this->sdkConfiguration);
		
		$this->lookup = new Lookup($this->sdkConfiguration);
	}
}