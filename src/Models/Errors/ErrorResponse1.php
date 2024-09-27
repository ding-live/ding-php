<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Errors;


use Ding\DingSDK\Utils;

class ErrorResponse1
{
    /**
     * A machine-readable code that describes the error.
     *
     * @var ?Code $code
     */
    #[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('\Ding\DingSDK\Models\Errors\Code|null')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?Code $code = null;

    /**
     * A link to the documentation that describes the error.
     *
     * @var ?string $docUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('doc_url')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $docUrl = null;

    /**
     * A human-readable message that describes the error.
     *
     * @var ?string $message
     */
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $message = null;

    /**
     * @param  ?Code  $code
     * @param  ?string  $docUrl
     * @param  ?string  $message
     */
    public function __construct(?Code $code = null, ?string $docUrl = null, ?string $message = null)
    {
        $this->code = $code;
        $this->docUrl = $docUrl;
        $this->message = $message;
    }

    public function toException(): ErrorResponse1Throwable
    {
        $serializer = Utils\JSON::createSerializer();
        $message = $serializer->serialize($this, 'json');
        if ($this->code !== null) {
            $code = $this->code;
        } else {
            $code = -1;
        }

        return new ErrorResponse1Throwable($message, (int) $code, $this);
    }
}