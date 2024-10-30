<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


class FeedbackRequest
{
    /**
     * Your customer UUID, which can be found in the API settings in the dashboard.
     *
     * @var string $customerUuid
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('customer_uuid')]
    public string $customerUuid;

    /**
     * An E.164 formatted phone number.
     *
     * @var string $phoneNumber
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('phone_number')]
    public string $phoneNumber;

    /**
     * The type of the feedback.
     *
     * @var FeedbackRequestStatus $status
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('status')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ding\DingSDK\Models\Shared\FeedbackRequestStatus')]
    public FeedbackRequestStatus $status;

    /**
     * @param  string  $customerUuid
     * @param  string  $phoneNumber
     * @param  FeedbackRequestStatus  $status
     */
    public function __construct(string $customerUuid, string $phoneNumber, FeedbackRequestStatus $status)
    {
        $this->customerUuid = $customerUuid;
        $this->phoneNumber = $phoneNumber;
        $this->status = $status;
    }
}