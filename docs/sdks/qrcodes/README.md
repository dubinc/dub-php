# QRCodes
(*qrCodes*)

## Overview

### Available Operations

* [get](#get) - Retrieve a QR code

## get

Retrieve a QR code for a link.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$security = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

$request = new Operations\GetQRCodeRequest(
    url: 'https://normal-making.name',
);

$response = $sdk->qrCodes->get(
    request: $request
);

if ($response->res !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\GetQRCodeRequest](../../Models/Operations/GetQRCodeRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\GetQRCodeResponse](../../Models/Operations/GetQRCodeResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |
