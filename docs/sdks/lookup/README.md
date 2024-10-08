# Lookup

## Overview

Retrieve up-to-date metadata about a specific phone number

### Available Operations

* [lookup](#lookup) - Perform a phone number lookup

## lookup

Perform a phone number lookup

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Ding\DingSDK;
use Ding\DingSDK\Models\Shared;

$security = new Shared\Security();
$security->apiKey = 'YOUR_API_KEY';

$sdk = DingSDK\Ding::builder()->setSecurity($security)->build();

try {

    $response = $sdk->lookup->lookup('6e93aa15-9177-4d09-8395-b69ce50db1c8', '<value>');

    if ($response->lookupResponse !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `customerUuid`     | *string*           | :heavy_check_mark: | N/A                |
| `phoneNumber`      | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\LookupResponse](../../Models/Operations/LookupResponse.md)**

### Errors

| Error Object                            | Status Code                             | Content Type                            |
| --------------------------------------- | --------------------------------------- | --------------------------------------- |
| Errors\ErrorResponse                    | 400                                     | application/json                        |
| Ding\DingSDK\Models\Errors.SDKException | 4xx-5xx                                 | */*                                     |
