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
    $request->callbackUrl = 'https://cuddly-ignorant.info';
    $request->customerUuid = '90129667-9178-4532-b940-17ce3f0faa19';
    $request->deviceId = 'string';
    $request->deviceModel = 'string';
    $request->deviceType = Shared\DeviceType::Android;
    $request->ip = '69.99.185.232';
    $request->isReturningUser = false;
    $request->osVersion = 'string';
    $request->phoneNumber = '+1234567890';

    $response = $sdk->otp->send($request);

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

### Retry an authentication

Retry an authentication if a user has not received the code.


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