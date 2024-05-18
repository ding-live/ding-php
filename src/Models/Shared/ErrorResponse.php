<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


class ErrorResponse
{
    /**
     * A machine-readable code that describes the error. Possible values are:
     *
     *   * `invalid_phone_number` - This is not a valid E.164 number.
     *   * `internal_server_error` - An internal server error occurred.
     *   * `bad_request` - The request was malformed.
     *   * `account_invalid` - The provided customer UUID is invalid.
     *   * `negative_balance` - You have a negative balance.
     *   * `invalid_line` - Ding does not support this type of phone number.
     *   * `unsupported_region` - Ding does not support this region yet.
     *   * `invalid_auth_uuid` - The provided authentication UUID is invalid.
     *   * `blocked_number` - The phone number is in the blocklist.
     *   * `invalid_app_version` - The provided application version is invalid.
     *   * `invalid_os_version` - The provided OS version is invalid.
     *   * `invalid_device_model` - The provided device model is invalid.
     *   * `invalid_device_id` - The provided device ID is invalid.
     *   * `no_associated_auth_found` - The associated authentication was not found.
     *   * `duplicated_feedback_status` - Duplicated feedback status has found.
     *   * `invalid_feedback_status` - The provided feedback status is invalid.
     *   * `invalid_template_id` - The provided template ID is invalid.
     *   * `suspended_account` - Your account has been suspended.
     *
     *
     * @var ?\Ding\DingSDK\Models\Shared\Code $code
     */
    #[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('enum<Ding\DingSDK\Models\Shared\Code>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?Code $code = null;

    /**
     * A link to the documentation that describes the error.
     *
     * @var ?string $docUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('doc_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $docUrl = null;

    /**
     * A human-readable message that describes the error.
     *
     * @var ?string $message
     */
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $message = null;

    public function __construct()
    {
        $this->code = null;
        $this->docUrl = null;
        $this->message = null;
    }
}