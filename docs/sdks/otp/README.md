# Otp


## Overview

Send OTP codes to your users using their phone numbers.

### Available Operations

* [check](#check) - Check a code
* [createAuthentication](#createauthentication) - Send a code
* [feedback](#feedback) - Send feedback
* [retry](#retry) - Perform a retry

## check

Check a code

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {
    $request = new Shared\CreateCheckRequest(
        authenticationUuid: 'e0e7b0e9-739d-424b-922f-1c2cb48ab077',
        checkCode: '123456',
        customerUuid: '8f1196d5-806e-4b71-9b24-5f96ec052808',
    );
    $response = $sdk->otp->check($request);

    if ($response->createCheckResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Shared\CreateCheckRequest](../../Models/Shared/CreateCheckRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |


### Response

**[?Operations\CheckResponse](../../Models/Operations/CheckResponse.md)**
### Errors

| Error Object                            | Status Code                             | Content Type                            |
| --------------------------------------- | --------------------------------------- | --------------------------------------- |
| Errors\ErrorResponse                    | 400                                     | application/json                        |
| Ding\DingSDK\Models\Errors.SDKException | 4xx-5xx                                 | */*                                     |

## createAuthentication

Send a code

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {
    $request = new Shared\CreateAuthenticationRequest(
        customerUuid: 'c9f826e0-deca-41ec-871f-ecd6e8efeb46',
        phoneNumber: '+1234567890',
        appRealm: '<value>',
        appVersion: '<value>',
        callbackUrl: 'https://thin-television.name',
        correlationId: '<value>',
        deviceId: '<value>',
        deviceModel: '<value>',
        deviceType: Shared\DeviceType::Android,
        ip: '176.157.112.67',
        isReturningUser: false,
        osVersion: '<value>',
        templateId: '<value>',
    );
    $response = $sdk->otp->createAuthentication($request);

    if ($response->createAuthenticationResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Shared\CreateAuthenticationRequest](../../Models/Shared/CreateAuthenticationRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\CreateAuthenticationResponse](../../Models/Operations/CreateAuthenticationResponse.md)**
### Errors

| Error Object                            | Status Code                             | Content Type                            |
| --------------------------------------- | --------------------------------------- | --------------------------------------- |
| Errors\ErrorResponse                    | 400                                     | application/json                        |
| Ding\DingSDK\Models\Errors.SDKException | 4xx-5xx                                 | */*                                     |

## feedback

Send feedback

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {
    $request = new Shared\FeedbackRequest(
        customerUuid: 'c0c405fa-6bcb-4094-9430-7d6e2428ff23',
        phoneNumber: '+1234567890',
        status: Shared\FeedbackRequestStatus::Onboarded,
    );
    $response = $sdk->otp->feedback($request);

    if ($response->feedbackResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                        | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `$request`                                                       | [Shared\FeedbackRequest](../../Models/Shared/FeedbackRequest.md) | :heavy_check_mark:                                               | The request object to use for the request.                       |


### Response

**[?Operations\FeedbackResponse](../../Models/Operations/FeedbackResponse.md)**
### Errors

| Error Object                            | Status Code                             | Content Type                            |
| --------------------------------------- | --------------------------------------- | --------------------------------------- |
| Ding\DingSDK\Models\Errors.SDKException | 4xx-5xx                                 | */*                                     |

## retry

Perform a retry

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {
    $request = new Shared\RetryAuthenticationRequest(
        authenticationUuid: 'a74ee547-564d-487a-91df-37fb25413a91',
        customerUuid: '3c8b3a46-881e-4cdd-93a6-f7f238bf020a',
    );
    $response = $sdk->otp->retry($request);

    if ($response->retryAuthenticationResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Shared\RetryAuthenticationRequest](../../Models/Shared/RetryAuthenticationRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?Operations\RetryResponse](../../Models/Operations/RetryResponse.md)**
### Errors

| Error Object                            | Status Code                             | Content Type                            |
| --------------------------------------- | --------------------------------------- | --------------------------------------- |
| Errors\ErrorResponse                    | 400                                     | application/json                        |
| Ding\DingSDK\Models\Errors.SDKException | 4xx-5xx                                 | */*                                     |
