# Metatags
(*metatags*)

## Overview

### Available Operations

* [get](#get) - Retrieve the metatags for a URL

## get

Retrieve the metatags for a URL.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$security = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();



$response = $sdk->metatags->get(
    url: 'https://dub.co'
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                         | Type                              | Required                          | Description                       | Example                           |
| --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- | --------------------------------- |
| `url`                             | *string*                          | :heavy_check_mark:                | The URL to retrieve metatags for. | https://dub.co                    |

### Response

**[?Operations\GetMetatagsResponse](../../Models/Operations/GetMetatagsResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |
