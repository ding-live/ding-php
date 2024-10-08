# Lookup
(*lookup*)

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

### Parameters

| Parameter          | Type               | Required           | Description        |
| ------------------ | ------------------ | ------------------ | ------------------ |
| `customerUuid`     | *string*           | :heavy_check_mark: | N/A                |
| `phoneNumber`      | *string*           | :heavy_check_mark: | N/A                |

### Response

**[?Operations\LookupResponse](../../Models/Operations/LookupResponse.md)**

### Errors

| Error Type            | Status Code           | Content Type          |
| --------------------- | --------------------- | --------------------- |
| Errors\ErrorResponse1 | 400                   | application/json      |
| Errors\SDKException   | 4XX, 5XX              | \*/\*                 |