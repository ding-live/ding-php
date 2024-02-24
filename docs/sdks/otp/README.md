# Otp


## Overview

Send OTP codes to your users using their phone numbers.

### Available Operations

* [check](#check) - Check a code
* [createAutentication](#createautentication) - Send a code
* [retry](#retry) - Perform a retry

## check

Check a code

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Ding\DingSDK;
use \Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateCheckRequest();
    $request->authenticationUuid = 'e0e7b0e9-739d-424b-922f-1c2cb48ab077';
    $request->checkCode = '123456';
    $request->customerUuid = '8f1196d5-806e-4b71-9b24-5f96ec052808';;

    $response = $sdk->otp->check($request);

    if ($response->createCheckResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                   | Type                                                                                        | Required                                                                                    | Description                                                                                 |
| ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------- |
| `$request`                                                                                  | [\Ding\DingSDK\Models\Shared\CreateCheckRequest](../../Models/Shared/CreateCheckRequest.md) | :heavy_check_mark:                                                                          | The request object to use for the request.                                                  |


### Response

**[?\Ding\DingSDK\Models\Operations\CheckResponse](../../Models/Operations/CheckResponse.md)**


## createAutentication

Send a code

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Ding\DingSDK;
use \Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {
        $request = new Shared\CreateAuthenticationRequest();
    $request->appRealm = '<value>';
    $request->appVersion = '<value>';
    $request->callbackUrl = 'https://quiet-swing.com';
    $request->customerUuid = '92ab9e1e-b217-45b1-bfcb-79a32fcc4c39';
    $request->deviceId = '<value>';
    $request->deviceModel = '<value>';
    $request->deviceType = Shared\DeviceType::Web;
    $request->ip = '97.139.118.123';
    $request->isReturningUser = false;
    $request->osVersion = '<value>';
    $request->phoneNumber = '+1234567890';;

    $response = $sdk->otp->createAutentication($request);

    if ($response->createAuthenticationResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Ding\DingSDK\Models\Shared\CreateAuthenticationRequest](../../Models/Shared/CreateAuthenticationRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Ding\DingSDK\Models\Operations\CreateAutenticationResponse](../../Models/Operations/CreateAutenticationResponse.md)**


## retry

Perform a retry

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Ding\DingSDK;
use \Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {
        $request = new Shared\RetryAuthenticationRequest();
    $request->authenticationUuid = 'a74ee547-564d-487a-91df-37fb25413a91';
    $request->customerUuid = '3c8b3a46-881e-4cdd-93a6-f7f238bf020a';;

    $response = $sdk->otp->retry($request);

    if ($response->retryAuthenticationResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Ding\DingSDK\Models\Shared\RetryAuthenticationRequest](../../Models/Shared/RetryAuthenticationRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Ding\DingSDK\Models\Operations\RetryResponse](../../Models/Operations/RetryResponse.md)**

