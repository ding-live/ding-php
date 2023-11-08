<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace ding\sdk\Models\Components;


/** The type of device the user is using. */
enum DeviceType: string
{
    case Ios = 'IOS';
    case Android = 'ANDROID';
    case Web = 'WEB';
}