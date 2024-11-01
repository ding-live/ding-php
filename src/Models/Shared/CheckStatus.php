<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Ding\DingSDK\Models\Shared;


/**
 * The status of the check. Possible values are:
 *
 *   * `unknown` - The status is unknown.
 *   * `valid` - The code is valid.
 *   * `invalid` - The code is invalid.
 *   * `without_attempt` - No attempt was sent yet, so a check cannot be completed.
 *   * `rate_limited` - The authentication was rate limited and cannot be checked.
 *   * `already_validated` - The authentication has already been validated.
 *   * `expired_auth` - The authentication has expired and cannot be checked.
 *
 */
enum CheckStatus: string
{
    case Unknown = 'unknown';
    case Valid = 'valid';
    case Invalid = 'invalid';
    case WithoutAttempt = 'without_attempt';
    case RateLimited = 'rate_limited';
    case AlreadyValidated = 'already_validated';
    case ExpiredAuth = 'expired_auth';
}
