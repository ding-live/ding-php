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
        customerUuid: 'cf2edc1c-7fc6-48fb-86da-b7508c6b7b71',
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
        authenticationUuid: 'eebe792b-2fcc-44a0-87f1-650e79259e02',
        checkCode: '123456',
        customerUuid: '64f66a7c-4b2c-4131-a8ff-d5b954cca05f',
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
        authenticationUuid: 'a4e4548a-1f7b-451a-81cb-a68ed5aff3b0',
        customerUuid: '28532118-1b33-420a-b57b-648c9bf85fee',
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