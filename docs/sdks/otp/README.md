# Otp
(*otp*)

## Overview

Send OTP codes to your users using their phone numbers.

### Available Operations

* [check](#check) - Check a code
* [createAuthentication](#createauthentication) - Send a code
* [feedback](#feedback) - Send feedback
* [getAuthenticationStatus](#getauthenticationstatus) - Get authentication status
* [retry](#retry) - Perform a retry

## check

Check a code

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

$request = new Shared\CreateCheckRequest(
    authenticationUuid: 'eebe792b-2fcc-44a0-87f1-650e79259e02',
    checkCode: '123456',
    customerUuid: '64f66a7c-4b2c-4131-a8ff-d5b954cca05f',
);

$response = $sdk->otp->check(
    request: $request
);

if ($response->createCheckResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                              | Type                                                                   | Required                                                               | Description                                                            |
| ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- | ---------------------------------------------------------------------- |
| `$request`                                                             | [Shared\CreateCheckRequest](../../Models/Shared/CreateCheckRequest.md) | :heavy_check_mark:                                                     | The request object to use for the request.                             |

### Response

**[?Operations\CheckResponse](../../Models/Operations/CheckResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAuthentication

Send a code

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

$request = new Shared\CreateAuthenticationRequest(
    customerUuid: 'cf2edc1c-7fc6-48fb-86da-b7508c6b7b71',
    phoneNumber: '+1234567890',
    locale: 'fr-FR',
);

$response = $sdk->otp->createAuthentication(
    request: $request
);

if ($response->createAuthenticationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Shared\CreateAuthenticationRequest](../../Models/Shared/CreateAuthenticationRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateAuthenticationResponse](../../Models/Operations/CreateAuthenticationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## feedback

Send feedback

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

$request = new Shared\FeedbackRequest(
    customerUuid: 'cc0f6c04-40de-448f-8301-3cb0e6565dff',
    phoneNumber: '+1234567890',
    status: Shared\FeedbackRequestStatus::Onboarded,
);

$response = $sdk->otp->feedback(
    request: $request
);

if ($response->feedbackResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                        | Type                                                             | Required                                                         | Description                                                      |
| ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- | ---------------------------------------------------------------- |
| `$request`                                                       | [Shared\FeedbackRequest](../../Models/Shared/FeedbackRequest.md) | :heavy_check_mark:                                               | The request object to use for the request.                       |

### Response

**[?Operations\FeedbackResponse](../../Models/Operations/FeedbackResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAuthenticationStatus

Get authentication status

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();



$response = $sdk->otp->getAuthenticationStatus(
    authUuid: 'd8446450-f2fa-4dd9-806b-df5b8c661f23'
);

if ($response->authenticationStatusResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `authUuid`         | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\GetAuthenticationStatusResponse](../../Models/Operations/GetAuthenticationStatusResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## retry

Perform a retry

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

$request = new Shared\RetryAuthenticationRequest(
    authenticationUuid: 'a4e4548a-1f7b-451a-81cb-a68ed5aff3b0',
    customerUuid: '28532118-1b33-420a-b57b-648c9bf85fee',
);

$response = $sdk->otp->retry(
    request: $request
);

if ($response->retryAuthenticationResponse !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Shared\RetryAuthenticationRequest](../../Models/Shared/RetryAuthenticationRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RetryResponse](../../Models/Operations/RetryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |