<!-- Start SDK Example Usage [usage] -->
### Send a code

Send an OTP code to a user's phone number.


```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\CreateAuthenticationRequest();
    $request->appRealm = '<value>';
    $request->appVersion = '<value>';
    $request->callbackUrl = 'https://piercing-volcano.name';
    $request->correlationId = '<value>';
    $request->customerUuid = '26e0deca-1ec4-471f-acd6-e8efeb46fdea';
    $request->deviceId = '<value>';
    $request->deviceModel = '<value>';
    $request->deviceType = Shared\DeviceType::Android;
    $request->ip = '176.157.112.67';
    $request->isReturningUser = false;
    $request->osVersion = '<value>';
    $request->phoneNumber = '+1234567890';
    $request->templateId = '<value>';

    $response = $sdk->otp->createAuthentication($request);

    if ($response->createAuthenticationResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```

### Check a code

Check that a code entered by a user is valid.


```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()
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
} catch (Throwable $e) {
    // handle exception
}

```

### Perform a retry

Perform a retry if a user has not received the code.


```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()
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
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->