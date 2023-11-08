# Otp


## Overview

Send OTP codes to your users using their phone numbers.

### Available Operations

* [check](#check) - Check an authentication code
* [createAutentication](#createautentication) - Create an authentication
* [retry](#retry) - Retry an authentication

## check

Check an authentication code

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \ding\sdk;
use \ding\sdk\Models\Components;

$security = new Components\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = sdk\Ding::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Components\CreateCheckRequest();
    $request->authenticationUuid = 'e0e7b0e9-739d-424b-922f-1c2cb48ab077';
    $request->checkCode = '123456';
    $request->customerUuid = '8f1196d5-806e-4b71-9b24-5f96ec052808';

    $response = $sdk->otp->check($request);

    if ($response->createCheckResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                       | Type                                                                                            | Required                                                                                        | Description                                                                                     |
| ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------- |
| `$request`                                                                                      | [\ding\sdk\Models\Components\CreateCheckRequest](../../Models/Components/CreateCheckRequest.md) | :heavy_check_mark:                                                                              | The request object to use for the request.                                                      |


### Response

**[?\ding\sdk\Models\Operations\CheckResponse](../../Models/Operations/CheckResponse.md)**


## createAutentication

Create an authentication

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \ding\sdk;
use \ding\sdk\Models\Components;

$security = new Components\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = sdk\Ding::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Components\CreateAuthenticationRequest();
    $request->appRealm = 'string';
    $request->appVersion = 'string';
    $request->callbackUrl = 'https://quiet-swing.com';
    $request->customerUuid = '92ab9e1e-b217-45b1-bfcb-79a32fcc4c39';
    $request->deviceId = 'string';
    $request->deviceModel = 'string';
    $request->deviceType = Components\DeviceType::Web;
    $request->ip = '97.139.118.123';
    $request->isReturningUser = false;
    $request->osVersion = 'string';
    $request->phoneNumber = '+1234567890';

    $response = $sdk->otp->createAutentication($request);

    if ($response->createAuthenticationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\ding\sdk\Models\Components\CreateAuthenticationRequest](../../Models/Components/CreateAuthenticationRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\ding\sdk\Models\Operations\CreateAutenticationResponse](../../Models/Operations/CreateAutenticationResponse.md)**


## retry

Retry an authentication

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \ding\sdk;
use \ding\sdk\Models\Components;

$security = new Components\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = sdk\Ding::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Components\RetryAuthenticationRequest();
    $request->authenticationUuid = 'a74ee547-564d-487a-91df-37fb25413a91';
    $request->customerUuid = '3c8b3a46-881e-4cdd-93a6-f7f238bf020a';

    $response = $sdk->otp->retry($request);

    if ($response->retryAuthenticationResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\ding\sdk\Models\Components\RetryAuthenticationRequest](../../Models/Components/RetryAuthenticationRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\ding\sdk\Models\Operations\RetryResponse](../../Models/Operations/RetryResponse.md)**
