<!-- Start SDK Example Usage [usage] -->
### Send a code

Send an OTP code to a user's phone number.


```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()
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
} catch (Exception $e) {
    // handle exception
}

```
<!-- End SDK Example Usage [usage] -->