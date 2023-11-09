# Ding PHP SDK

The Ding PHP library provides convenient access to the Ding API from applications written in the PHP language.

# SDK Installation

## Composer

```bash
composer require "ding/sdk"
```

<!-- End SDK Installation -->

## SDK Example Usage

<!-- Start SDK Example Usage -->
### Send a code

Send an OTP code to a user's phone number.


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use ding\sdk;
use ding\sdk\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = sdk\Ding::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\CreateAuthenticationRequest();
    $request->appRealm = 'string';
    $request->appVersion = 'string';
    $request->callbackUrl = 'https://quiet-swing.com';
    $request->customerUuid = '92ab9e1e-b217-45b1-bfcb-79a32fcc4c39';
    $request->deviceId = 'string';
    $request->deviceModel = 'string';
    $request->deviceType = Shared\DeviceType::Web;
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

### Check a code

Check that a code entered by a user is valid.


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use ding\sdk;
use ding\sdk\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = sdk\Ding::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\CreateCheckRequest();
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

### Perform a retry

Perform a retry if a user has not received the code.


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use ding\sdk;
use ding\sdk\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = sdk\Ding::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\RetryAuthenticationRequest();
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
<!-- End SDK Example Usage -->

<!-- Start SDK Available Operations -->
## Available Resources and Operations


### [Otp](docs/sdks/otp/README.md)

* [check](docs/sdks/otp/README.md#check) - Check a code
* [createAutentication](docs/sdks/otp/README.md#createautentication) - Send a code
* [retry](docs/sdks/otp/README.md#retry) - Perform a retry

### [Lookup](docs/sdks/lookup/README.md)

* [lookup](docs/sdks/lookup/README.md#lookup) - Lookup a number
<!-- End SDK Available Operations -->

<!-- Start Dev Containers -->

<!-- End Dev Containers -->



<!-- Start SDK Installation -->
## SDK Installation

### Composer

```bash
composer require "ding/sdk"
```
<!-- End SDK Installation -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!
