# Partners
(*partners*)

## Overview

### Available Operations

* [create](#create) - Create a new partner
* [createLink](#createlink) - Create a link for a partner
* [analytics](#analytics) - Retrieve analytics for a partner
* [updateSale](#updatesale) - Update a sale for a partner.
* [upsertLink](#upsertlink) - Upsert a link for a partner

## create

Create a new partner for a program. If partner exists, automatically enrolls them.

### Example Usage

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

$request = new Operations\CreatePartnerRequestBody(
    programId: '<id>',
    name: '<value>',
    email: 'Loyal79@yahoo.com',
    linkProps: new Operations\LinkProps(
        tagIds: [
            'clux0rgak00011...',
        ],
        externalId: '123456',
    ),
);

$response = $sdk->partners->create(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreatePartnerRequestBody](../../Models/Operations/CreatePartnerRequestBody.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreatePartnerResponse](../../Models/Operations/CreatePartnerResponse.md)**

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

## createLink

Create a new link for a partner that is enrolled in your program.

### Example Usage

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

$request = new Operations\CreatePartnerLinkRequestBody(
    programId: '<id>',
    linkProps: new Operations\CreatePartnerLinkLinkProps(
        tagIds: [
            'clux0rgak00011...',
        ],
        externalId: '123456',
    ),
);

$response = $sdk->partners->createLink(
    request: $request
);

if ($response->linkSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreatePartnerLinkRequestBody](../../Models/Operations/CreatePartnerLinkRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreatePartnerLinkResponse](../../Models/Operations/CreatePartnerLinkResponse.md)**

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

## analytics

Retrieve analytics for a partner within a program. The response type vary based on the `groupBy` query parameter.

### Example Usage

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

$request = new Operations\RetrievePartnerAnalyticsRequest(
    programId: '<id>',
);

$response = $sdk->partners->analytics(
    request: $request
);

if ($response->oneOf !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RetrievePartnerAnalyticsRequest](../../Models/Operations/RetrievePartnerAnalyticsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RetrievePartnerAnalyticsResponse](../../Models/Operations/RetrievePartnerAnalyticsResponse.md)**

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

## updateSale

Update an existing sale amount. This is useful for handling refunds (partial or full) or fraudulent sales.

### Example Usage

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

$request = new Operations\UpdatePartnerSaleRequestBody(
    programId: '<id>',
    invoiceId: '<id>',
);

$response = $sdk->partners->updateSale(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdatePartnerSaleRequestBody](../../Models/Operations/UpdatePartnerSaleRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdatePartnerSaleResponse](../../Models/Operations/UpdatePartnerSaleResponse.md)**

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

## upsertLink

Upsert a link for a partner that is enrolled in your program. If a link with the same URL already exists, return it (or update it if there are any changes). Otherwise, a new link will be created.

### Example Usage

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

$request = new Operations\UpsertPartnerLinkRequestBody(
    programId: '<id>',
    linkProps: new Operations\UpsertPartnerLinkLinkProps(
        tagIds: [
            'clux0rgak00011...',
        ],
        externalId: '123456',
    ),
);

$response = $sdk->partners->upsertLink(
    request: $request
);

if ($response->linkSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpsertPartnerLinkRequestBody](../../Models/Operations/UpsertPartnerLinkRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpsertPartnerLinkResponse](../../Models/Operations/UpsertPartnerLinkResponse.md)**

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