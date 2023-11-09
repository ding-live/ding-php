# Lookup


## Overview

Retrieve up-to-date metadata about a specific phone number

### Available Operations

* [lookup](#lookup) - Lookup a phone number

## lookup

Lookup a phone number

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \ding\sdk;
use \ding\sdk\Models\Shared;
use \ding\sdk\Models\Operations;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = sdk\Ding::builder()
    ->setSecurity($security)
    ->build();

try {
    $lookupRequest = new Shared\LookupRequest();
    $lookupRequest->phoneNumber = '+1234567890';

    $response = $sdk->lookup->lookup('6e93aa15-9177-4d09-8395-b69ce50db1c8', $lookupRequest);

    if ($response->lookupResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                     | Type                                                                          | Required                                                                      | Description                                                                   |
| ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- | ----------------------------------------------------------------------------- |
| `customerUuid`                                                                | *string*                                                                      | :heavy_check_mark:                                                            | N/A                                                                           |
| `lookupRequest`                                                               | [\ding\sdk\Models\Shared\LookupRequest](../../Models/Shared/LookupRequest.md) | :heavy_minus_sign:                                                            | N/A                                                                           |


### Response

**[?\ding\sdk\Models\Operations\LookupResponse](../../Models/Operations/LookupResponse.md)**

