# Customers
(*customers*)

## Overview

### Available Operations

* [list](#list) - Retrieve a list of customers
* [~~create~~](#create) - Create a customer :warning: **Deprecated**
* [get](#get) - Retrieve a customer
* [update](#update) - Update a customer
* [delete](#delete) - Delete a customer

## list

Retrieve a list of customers for the authenticated workspace.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCustomers" method="get" path="/customers" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();

$request = new Operations\GetCustomersRequest(
    pageSize: 50,
);

$response = $sdk->customers->list(
    request: $request
);

if ($response->responseBodies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetCustomersRequest](../../Models/Operations/GetCustomersRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetCustomersResponse](../../Models/Operations/GetCustomersResponse.md)**

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

## ~~create~~

[Deprecated]: Customer creation can only be done via tracking a lead event. Use the /track/lead endpoint instead.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCustomer" method="post" path="/customers" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->customers->create(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateCustomerRequestBody](../../Models/Operations/CreateCustomerRequestBody.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateCustomerResponse](../../Models/Operations/CreateCustomerResponse.md)**

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

## get

Retrieve a customer by ID for the authenticated workspace.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCustomer" method="get" path="/customers/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->customers->get(
    id: '<id>'
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                     | Type                                                                                                                                                                                                          | Required                                                                                                                                                                                                      | Description                                                                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                                                                                                          | *string*                                                                                                                                                                                                      | :heavy_check_mark:                                                                                                                                                                                            | The unique ID of the customer. You may use either the customer's `id` on Dub (obtained via `/customers` endpoint) or their `externalId` (unique ID within your system, prefixed with `ext_`, e.g. `ext_123`). |
| `includeExpandedFields`                                                                                                                                                                                       | *?bool*                                                                                                                                                                                                       | :heavy_minus_sign:                                                                                                                                                                                            | Whether to include expanded fields on the customer (`link`, `partner`, `discount`).                                                                                                                           |

### Response

**[?Operations\GetCustomerResponse](../../Models/Operations/GetCustomerResponse.md)**

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

## update

Update a customer for the authenticated workspace.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCustomer" method="patch" path="/customers/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();

$request = new Operations\UpdateCustomerRequest(
    id: '<id>',
);

$response = $sdk->customers->update(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCustomerRequest](../../Models/Operations/UpdateCustomerRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCustomerResponse](../../Models/Operations/UpdateCustomerResponse.md)**

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

Delete a customer from a workspace.

### Example Usage

<!-- UsageSnippet language="php" operationID="deleteCustomer" method="delete" path="/customers/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->customers->delete(
    id: '<id>'
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                                                                                                     | Type                                                                                                                                                                                                          | Required                                                                                                                                                                                                      | Description                                                                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `id`                                                                                                                                                                                                          | *string*                                                                                                                                                                                                      | :heavy_check_mark:                                                                                                                                                                                            | The unique ID of the customer. You may use either the customer's `id` on Dub (obtained via `/customers` endpoint) or their `externalId` (unique ID within your system, prefixed with `ext_`, e.g. `ext_123`). |

### Response

**[?Operations\DeleteCustomerResponse](../../Models/Operations/DeleteCustomerResponse.md)**

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