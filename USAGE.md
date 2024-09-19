<!-- Start SDK Example Usage [usage] -->
### Send a code

Send an OTP code to a user's phone number.


```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: "YOUR_API_KEY",
);

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {
    $request = new Shared\CreateAuthenticationRequest(
        customerUuid: 'c9f826e0-deca-41ec-871f-ecd6e8efeb46',
        phoneNumber: '+1234567890',
    );
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
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: "YOUR_API_KEY",
);

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

### Perform a retry

Perform a retry if a user has not received the code.


```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security(
    apiKey: "YOUR_API_KEY",
);

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
<!-- End SDK Example Usage [usage] -->