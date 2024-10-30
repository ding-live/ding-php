<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


class BalanceUpdate
{
    /**
     * The amount of the balance update.
     *
     * @var ?float $amount
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('amount')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?float $amount = null;

    /**
     *
     * @var ?BalanceUpdateType $balanceUpdateType
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('balance_update_type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ding\DingSDK\Models\Shared\BalanceUpdateType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?BalanceUpdateType $balanceUpdateType = null;

    /**
     *
     * @var ?\DateTime $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('created_at')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?\DateTime $createdAt = null;

    /**
     * The type of the event.
     *
     * @var ?AuthenticationStatusResponseSchemasEventsType $type
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('type')]
    #[\Speakeasy\Serializer\Annotation\Type('\Ding\DingSDK\Models\Shared\AuthenticationStatusResponseSchemasEventsType|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?AuthenticationStatusResponseSchemasEventsType $type = null;

    /**
     * @param  ?float  $amount
     * @param  ?BalanceUpdateType  $balanceUpdateType
     * @param  ?\DateTime  $createdAt
     * @param  ?AuthenticationStatusResponseSchemasEventsType  $type
     */
    public function __construct(?float $amount = null, ?BalanceUpdateType $balanceUpdateType = null, ?\DateTime $createdAt = null, ?AuthenticationStatusResponseSchemasEventsType $type = null)
    {
        $this->amount = $amount;
        $this->balanceUpdateType = $balanceUpdateType;
        $this->createdAt = $createdAt;
        $this->type = $type;
    }
}