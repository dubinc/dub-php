# Track

## Overview

### Available Operations

* [lead](#lead) - Track a lead
* [sale](#sale) - Track a sale
* [customer](#customer) - Track a customer

## lead

Track a lead for a short link.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security(
    token: "DUB_API_KEY",
);

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\TrackLeadRequestBody(
        clickId: '<value>',
        eventName: 'Sign up',
        customerId: '<value>',
    );
    $response = $sdk->track->lead($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\TrackLeadRequestBody](../../Models/Operations/TrackLeadRequestBody.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\TrackLeadResponse](../../Models/Operations/TrackLeadResponse.md)**

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


## sale

Track a sale for a short link.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security(
    token: "DUB_API_KEY",
);

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\TrackSaleRequestBody(
        customerId: '<value>',
        amount: 996500,
        paymentProcessor: Operations\PaymentProcessor::Paddle,
        eventName: 'Purchase',
    );
    $response = $sdk->track->sale($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\TrackSaleRequestBody](../../Models/Operations/TrackSaleRequestBody.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\TrackSaleResponse](../../Models/Operations/TrackSaleResponse.md)**

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


## customer

Track a customer for an authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security(
    token: "DUB_API_KEY",
);

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\TrackCustomerRequestBody(
        customerId: '<value>',
    );
    $response = $sdk->track->customer($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\TrackCustomerRequestBody](../../Models/Operations/TrackCustomerRequestBody.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\TrackCustomerResponse](../../Models/Operations/TrackCustomerResponse.md)**

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
