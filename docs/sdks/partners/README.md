# Partners

## Overview

### Available Operations

* [list](#list) - List all partners
* [create](#create) - Create or update a partner
* [retrieveLinks](#retrievelinks) - Retrieve a partner's links.
* [createLink](#createlink) - Create a link for a partner
* [upsertLink](#upsertlink) - Upsert a link for a partner
* [analytics](#analytics) - Retrieve analytics for a partner
* [ban](#ban) - Ban a partner
* [deactivate](#deactivate) - Deactivate a partner

## list

List all partners for a partner program.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPartners" method="get" path="/partners" -->
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

$request = new Operations\ListPartnersRequest(
    status: Operations\ListPartnersQueryParamStatus::Approved,
    country: 'US',
    email: 'panic@thedis.co',
    tenantId: '1K0NM7HCN944PEMZ3CQPH43H8',
    search: 'john',
    pageSize: 50,
);

$response = $sdk->partners->list(
    request: $request
);

if ($response->responseBodies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListPartnersRequest](../../Models/Operations/ListPartnersRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListPartnersResponse](../../Models/Operations/ListPartnersResponse.md)**

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

Creates or updates a partner record (upsert behavior). If a partner with the same email already exists, their program enrollment will be updated with the provided tenantId. If no existing partner is found, a new partner will be created using the supplied information.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPartner" method="post" path="/partners" -->
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
    email: 'Summer50@yahoo.com',
    linkProps: new Operations\LinkProps(
        externalId: '123456',
        tagIds: [
            'clux0rgak00011...',
        ],
        testVariants: [
            new Operations\CreatePartnerTestVariants(
                url: 'https://example.com/variant-1',
                percentage: 50,
            ),
            new Operations\CreatePartnerTestVariants(
                url: 'https://example.com/variant-2',
                percentage: 50,
            ),
        ],
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

## retrieveLinks

Retrieve a partner's links by their partner ID or tenant ID.

### Example Usage

<!-- UsageSnippet language="php" operationID="retrieveLinks" method="get" path="/partners/links" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->partners->retrieveLinks(

);

if ($response->responseBodies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `partnerId`                                                                                                         | *?string*                                                                                                           | :heavy_minus_sign:                                                                                                  | The ID of the partner to create a link for. Will take precedence over `tenantId` if provided.                       |
| `tenantId`                                                                                                          | *?string*                                                                                                           | :heavy_minus_sign:                                                                                                  | The ID of the partner in your system. If both `partnerId` and `tenantId` are not provided, an error will be thrown. |

### Response

**[?Operations\RetrieveLinksResponse](../../Models/Operations/RetrieveLinksResponse.md)**

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

Create a link for a partner that is enrolled in your program.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPartnerLink" method="post" path="/partners/links" -->
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
    linkProps: new Operations\CreatePartnerLinkLinkProps(
        externalId: '123456',
        tagIds: [
            'clux0rgak00011...',
        ],
        testVariants: [
            new Operations\CreatePartnerLinkTestVariants(
                url: 'https://example.com/variant-1',
                percentage: 50,
            ),
            new Operations\CreatePartnerLinkTestVariants(
                url: 'https://example.com/variant-2',
                percentage: 50,
            ),
        ],
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

## upsertLink

Upsert a link for a partner that is enrolled in your program. If a link with the same URL already exists, return it (or update it if there are any changes). Otherwise, a new link will be created.

### Example Usage

<!-- UsageSnippet language="php" operationID="upsertPartnerLink" method="put" path="/partners/links/upsert" -->
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
    url: 'https://bad-intent.org/',
    linkProps: new Operations\UpsertPartnerLinkLinkProps(
        externalId: '123456',
        tagIds: [
            'clux0rgak00011...',
        ],
        testVariants: [
            new Operations\UpsertPartnerLinkTestVariants(
                url: 'https://example.com/variant-1',
                percentage: 50,
            ),
            new Operations\UpsertPartnerLinkTestVariants(
                url: 'https://example.com/variant-2',
                percentage: 50,
            ),
        ],
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

## analytics

Retrieve analytics for a partner within a program. The response type vary based on the `groupBy` query parameter.

### Example Usage

<!-- UsageSnippet language="php" operationID="retrievePartnerAnalytics" method="get" path="/partners/analytics" -->
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
    timezone: 'America/New_York',
    query: 'metadata[\'key\']:\'value\'',
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

## ban

Ban a partner from your program. This will disable all links and mark all commissions as canceled.

### Example Usage

<!-- UsageSnippet language="php" operationID="banPartner" method="post" path="/partners/ban" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->partners->ban(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\BanPartnerRequestBody](../../Models/Operations/BanPartnerRequestBody.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\BanPartnerResponse](../../Models/Operations/BanPartnerResponse.md)**

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

## deactivate

This will deactivate the partner from your program and disable all their active links. Their commissions and payouts will remain intact. You can reactivate them later if needed.

### Example Usage

<!-- UsageSnippet language="php" operationID="deactivatePartner" method="post" path="/partners/deactivate" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->partners->deactivate(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\DeactivatePartnerRequestBody](../../Models/Operations/DeactivatePartnerRequestBody.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\DeactivatePartnerResponse](../../Models/Operations/DeactivatePartnerResponse.md)**

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