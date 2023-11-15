<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


class CreateCheckResponse
{
    /**
     * The UUID of the corresponding authentication.
     * 
     * @var ?string $authenticationUuid
     */
	#[\JMS\Serializer\Annotation\SerializedName('authentication_uuid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $authenticationUuid = null;
    
    /**
     * The status of the check. Possible values are:
     * 
     *   * `valid` - The code is valid.
     *   * `invalid` - The code is invalid.
     *   * `without_attempt` - No attempt was sent yet, so a check cannot be completed.
     *   * `rate_limited` - The authentication was rate limited and cannot be checked.
     *   * `already_validated` - The authentication has already been validated.
     *   * `expired_auth` - The authentication has expired and cannot be checked.
     * 
     * 
     * @var ?\Ding\DingSDK\Models\Shared\CreateCheckResponseStatus $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Ding\DingSDK\Models\Shared\CreateCheckResponseStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?CreateCheckResponseStatus $status = null;
    
	public function __construct()
	{
		$this->authenticationUuid = null;
		$this->status = null;
	}
}
