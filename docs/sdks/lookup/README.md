# Lookup


## Overview

Retrieve up-to-date metadata about a specific phone number

### Available Operations

* [lookup](#lookup) - Perform a phone number lookup

## lookup

Perform a phone number lookup

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Ding\DingSDK;
use \Ding\DingSDK\Models\Shared;
use \Ding\DingSDK\Models\Operations;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()
    ->setSecurity($security)
    ->build();

try {


    $response = $sdk->lookup->lookup('6e93aa15-9177-4d09-8395-b69ce50db1c8', 'string');

    if ($response->lookupResponse !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `customerUuid`     | *string*           | :heavy_check_mark: | N/A                |
| `phoneNumber`      | *string*           | :heavy_check_mark: | N/A                |


### Response

**[?\Ding\DingSDK\Models\Operations\LookupResponse](../../Models/Operations/LookupResponse.md)**

