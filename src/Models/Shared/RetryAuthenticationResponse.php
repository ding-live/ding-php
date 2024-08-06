<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


class RetryAuthenticationResponse
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

    #[\JMS\Serializer\Annotation\SerializedName('created_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $createdAt = null;

    /**
     * The time at which the next retry will be available.
     *
     * @var ?\DateTime $nextRetryAt
     */
    #[\JMS\Serializer\Annotation\SerializedName('next_retry_at')]
    #[\JMS\Serializer\Annotation\Type("DateTime<'Y-m-d\TH:i:s.up'>")]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?\DateTime $nextRetryAt = null;

    /**
     * The number of remaining retries.
     *
     * @var ?int $remainingRetry
     */
    #[\JMS\Serializer\Annotation\SerializedName('remaining_retry')]
    #[\JMS\Serializer\Annotation\Type('int')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?int $remainingRetry = null;

    /**
     * The status of the retry. Possible values are:
     *
     *   * `approved` - The retry was approved and a new code was sent.
     *   * `denied` - The retry was denied.
     *   * `no_attempt` - No attempt was sent yet, so a retry cannot be completed.
     *   * `rate_limited` - The authentication was rate limited and cannot be retried.
     *   * `expired_auth` - The authentication has expired and cannot be retried.
     *   * `already_validated` - The authentication has already been validated.
     *
     *
     * @var ?\Ding\DingSDK\Models\Shared\RetryAuthenticationResponseStatus $status
     */
    #[\JMS\Serializer\Annotation\SerializedName('status')]
    #[\JMS\Serializer\Annotation\Type('enum<Ding\DingSDK\Models\Shared\RetryAuthenticationResponseStatus>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?RetryAuthenticationResponseStatus $status = null;

    public function __construct()
    {
        $this->authenticationUuid = null;
        $this->createdAt = null;
        $this->nextRetryAt = null;
        $this->remainingRetry = null;
        $this->status = null;
    }
}