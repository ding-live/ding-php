<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


/**
 * CreateAuthenticationResponse - A successful response to an authentication creation request.
 * 
 * @package Ding\DingSDK\Models\Shared
 * @access public
 */
class CreateAuthenticationResponse
{
    /**
     * A unique identifier for the authentication that you can use on the /check and /retry endpoints.
     * 
     * @var ?string $authenticationUuid
     */
	#[\JMS\Serializer\Annotation\SerializedName('authentication_uuid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $authenticationUuid = null;
    
	#[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;
    
    /**
     * The time at which the authentication expires and can no longer be checked or retried.
     * 
     * @var ?\DateTime $expiresAt
     */
	#[\JMS\Serializer\Annotation\SerializedName('expires_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $expiresAt = null;
    
    /**
     * The status of the authentication. Possible values are:
     * 
     *   * `pending` - The OTP code is being sent.
     *   * `rate_limited` - This user is rate-limited and cannot receive another code.
     *   * `spam_detected` - This attempt is flagged as spam. Go to the dashboard for more details.
     * 
     * 
     * @var ?\Ding\DingSDK\Models\Shared\Status $status
     */
	#[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Ding\DingSDK\Models\Shared\Status>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Status $status = null;
    
	public function __construct()
	{
		$this->authenticationUuid = null;
		$this->createdAt = null;
		$this->expiresAt = null;
		$this->status = null;
	}
}
