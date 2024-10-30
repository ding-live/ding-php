<!-- Start SDK Example Usage [usage] -->
### Send a code

Send an OTP code to a user's phone number.


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

### Check a code

Check that a code entered by a user is valid.


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

### Perform a retry

Perform a retry if a user has not received the code.


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

### Send feedback

Send feedback about the authentication process.


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

### Get authentication status

Get the status of an authentication.


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

### Look up for phone number

Perform a phone number lookup.


```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;

$security = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();



$response = $sdk->lookup->lookup(
    customerUuid: '69a197d9-356c-45d1-a807-41874e16b555',
    phoneNumber: '<value>'

);

if ($response->lookupResponse !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->