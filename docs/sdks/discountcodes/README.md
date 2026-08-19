# DiscountCodes

## Overview

### Available Operations

* [list](#list) - List discount codes
* [create](#create) - Create a discount code
* [delete](#delete) - Delete a discount code

## list

Retrieve a paginated list of discount codes for a partner / a given discount / the whole program.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDiscountCodes" method="get" path="/discount-codes" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->discountCodes->list(
    page: 1,
    pageSize: 50

);

if ($response->discountCodeSchemas !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     | Example                                                                                                         |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `partnerId`                                                                                                     | *?string*                                                                                                       | :heavy_minus_sign:                                                                                              | The ID of the partner to retrieve discount codes for. If omitted, returns discount codes for the whole program. |                                                                                                                 |
| `discountId`                                                                                                    | *?string*                                                                                                       | :heavy_minus_sign:                                                                                              | Filter discount codes by discount ID.                                                                           |                                                                                                                 |
| `page`                                                                                                          | *?int*                                                                                                          | :heavy_minus_sign:                                                                                              | The page number for pagination. The first page is `1`.                                                          | 1                                                                                                               |
| `pageSize`                                                                                                      | *?int*                                                                                                          | :heavy_minus_sign:                                                                                              | The number of items per page.                                                                                   | 50                                                                                                              |

### Response

**[?Operations\ListDiscountCodesResponse](../../Models/Operations/ListDiscountCodesResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\BadRequest          | 400                        | application/json           |
| Errors\Unauthorized        | 401                        | application/json           |
| Errors\Forbidden           | 403                        | application/json           |
| Errors\NotFound            | 404                        | application/json           |
| Errors\Conflict            | 409                        | application/json           |
| Errors\InviteExpired       | 410                        | application/json           |
| Errors\UnprocessableEntity | 422                        | application/json           |
| Errors\RateLimitExceeded   | 429                        | application/json           |
| Errors\InternalServerError | 500                        | application/json           |
| Errors\SDKException        | 4XX, 5XX                   | \*/\*                      |

## create

Create a discount code for a partner. The partner's group must already have a discount assigned to it, and the discount code must be associated with a link that is not already linked with another discount code.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDiscountCode" method="post" path="/discount-codes" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->discountCodes->create(
    request: $request
);

if ($response->discountCodeSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateDiscountCodeRequestBody](../../Models/Operations/CreateDiscountCodeRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateDiscountCodeResponse](../../Models/Operations/CreateDiscountCodeResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\BadRequest          | 400                        | application/json           |
| Errors\Unauthorized        | 401                        | application/json           |
| Errors\Forbidden           | 403                        | application/json           |
| Errors\NotFound            | 404                        | application/json           |
| Errors\Conflict            | 409                        | application/json           |
| Errors\InviteExpired       | 410                        | application/json           |
| Errors\UnprocessableEntity | 422                        | application/json           |
| Errors\RateLimitExceeded   | 429                        | application/json           |
| Errors\InternalServerError | 500                        | application/json           |
| Errors\SDKException        | 4XX, 5XX                   | \*/\*                      |

## delete

Delete a discount code for a partner by its unique ID or alphanumeric code. This will also disable the code in your connected discount provider (Stripe, Shopify, or custom via `disccount.deleted` webhook).

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteDiscountCode" method="delete" path="/discount-codes/{idOrCode}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->discountCodes->delete(
    idOrCode: 'dcode_1JVR7XRCSR0EDBAF39FZ4PMYE'
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           | Example                                                                                               |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `idOrCode`                                                                                            | *string*                                                                                              | :heavy_check_mark:                                                                                    | The unique ID (e.g. `dcode_...`) or alphanumeric code (e.g. `ABC123`) of the discount code to delete. | dcode_1JVR7XRCSR0EDBAF39FZ4PMYE                                                                       |

### Response

**[?Operations\DeleteDiscountCodeResponse](../../Models/Operations/DeleteDiscountCodeResponse.md)**

### Errors

| Error Type                 | Status Code                | Content Type               |
| -------------------------- | -------------------------- | -------------------------- |
| Errors\BadRequest          | 400                        | application/json           |
| Errors\Unauthorized        | 401                        | application/json           |
| Errors\Forbidden           | 403                        | application/json           |
| Errors\NotFound            | 404                        | application/json           |
| Errors\Conflict            | 409                        | application/json           |
| Errors\InviteExpired       | 410                        | application/json           |
| Errors\UnprocessableEntity | 422                        | application/json           |
| Errors\RateLimitExceeded   | 429                        | application/json           |
| Errors\InternalServerError | 500                        | application/json           |
| Errors\SDKException        | 4XX, 5XX                   | \*/\*                      |