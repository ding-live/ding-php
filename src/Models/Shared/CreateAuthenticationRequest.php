<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


class CreateAuthenticationRequest
{
    /**
     * The Android SMS Retriever API hash code that identifies your app. This allows you to automatically retrieve and fill the OTP code on Android devices.
     *
     * @var ?string $appRealm
     */
    #[\JMS\Serializer\Annotation\SerializedName('app_realm')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $appRealm = null;

    /**
     * The version of your application.
     *
     * @var ?string $appVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('app_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $appVersion = null;

    /**
     * A webhook URL to which delivery statuses will be sent.
     *
     * @var ?string $callbackUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('callback_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $callbackUrl = null;

    /**
     * A unique, user-defined identifier that will be included in webhook events
     *
     * @var ?string $correlationId
     */
    #[\JMS\Serializer\Annotation\SerializedName('correlation_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $correlationId = null;

    /**
     * Your customer UUID, which can be found in the API settings in the dashboard.
     *
     * @var string $customerUuid
     */
    #[\JMS\Serializer\Annotation\SerializedName('customer_uuid')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $customerUuid;

    /**
     * Unique identifier for the user's device. For Android, this corresponds to the `ANDROID_ID` and for iOS, this corresponds to the `identifierForVendor`.
     *
     * @var ?string $deviceId
     */
    #[\JMS\Serializer\Annotation\SerializedName('device_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $deviceId = null;

    /**
     * The model of the user's device.
     *
     * @var ?string $deviceModel
     */
    #[\JMS\Serializer\Annotation\SerializedName('device_model')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $deviceModel = null;

    /**
     * The type of device the user is using.
     *
     * @var ?\Ding\DingSDK\Models\Shared\DeviceType $deviceType
     */
    #[\JMS\Serializer\Annotation\SerializedName('device_type')]
    #[\JMS\Serializer\Annotation\Type('enum<Ding\DingSDK\Models\Shared\DeviceType>')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?DeviceType $deviceType = null;

    /**
     * The IP address of the user's device.
     *
     * @var ?string $ip
     */
    #[\JMS\Serializer\Annotation\SerializedName('ip')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $ip = null;

    /**
     * Whether the user is a returning user on your app.
     *
     * @var ?bool $isReturningUser
     */
    #[\JMS\Serializer\Annotation\SerializedName('is_returning_user')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $isReturningUser = null;

    /**
     * The version of the user's device operating system.
     *
     * @var ?string $osVersion
     */
    #[\JMS\Serializer\Annotation\SerializedName('os_version')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $osVersion = null;

    /**
     * An E.164 formatted phone number to send the OTP to.
     *
     * @var string $phoneNumber
     */
    #[\JMS\Serializer\Annotation\SerializedName('phone_number')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $phoneNumber;

    /**
     * The template id associated with the message content variant to be sent.
     *
     * @var ?string $templateId
     */
    #[\JMS\Serializer\Annotation\SerializedName('template_id')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $templateId = null;

    public function __construct()
    {
        $this->appRealm = null;
        $this->appVersion = null;
        $this->callbackUrl = null;
        $this->correlationId = null;
        $this->customerUuid = '';
        $this->deviceId = null;
        $this->deviceModel = null;
        $this->deviceType = null;
        $this->ip = null;
        $this->isReturningUser = null;
        $this->osVersion = null;
        $this->phoneNumber = '';
        $this->templateId = null;
    }
}