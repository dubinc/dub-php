# QRCodes


### Available Operations

* [get](#get) - Retrieve a QR code

## get

Retrieve a QR code for a link.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetQRCodeRequest();
    $request->url = 'https://brief-micronutrient.org';
    $request->size = 5442.21;
    $request->level = Operations\Level::H;
    $request->fgColor = '<value>';
    $request->bgColor = '<value>';
    $request->includeMargin = false;;

    $response = $sdk->qrCodes->get($request);

    if ($response->res !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [\Dub\Models\Operations\GetQRCodeRequest](../../Models/Operations/GetQRCodeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |


### Response

**[?\Dub\Models\Operations\GetQRCodeResponse](../../Models/Operations/GetQRCodeResponse.md)**

