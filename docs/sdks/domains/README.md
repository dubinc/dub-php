# Domains
(*domains*)

## Overview

### Available Operations

* [create](#create) - Create a domain
* [list](#list) - Retrieve a list of domains
* [update](#update) - Update a domain
* [delete](#delete) - Delete a domain

## create

Create a domain for the authenticated workspace.

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

$request = new Operations\CreateDomainRequestBody(
    slug: 'acme.com',
    expiredUrl: 'https://acme.com/expired',
    notFoundUrl: 'https://acme.com/not-found',
    placeholder: 'https://dub.co/help/article/what-is-dub',
);

$response = $sdk->domains->create(
    request: $request
);

if ($response->domainSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateDomainRequestBody](../../Models/Operations/CreateDomainRequestBody.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateDomainResponse](../../Models/Operations/CreateDomainResponse.md)**

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

## list

Retrieve a list of domains associated with the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$responses = $sdk->domains->list(
    archived: true,
    search: '<value>',
    page: 1,
    pageSize: 50

);


foreach ($responses as $response) {
    if ($response->statusCode === 200) {
        // handle response
    }
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               | Example                                                                                   |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `archived`                                                                                | *?bool*                                                                                   | :heavy_minus_sign:                                                                        | Whether to include archived domains in the response. Defaults to `false` if not provided. |                                                                                           |
| `search`                                                                                  | *?string*                                                                                 | :heavy_minus_sign:                                                                        | The search term to filter the domains by.                                                 |                                                                                           |
| `page`                                                                                    | *?float*                                                                                  | :heavy_minus_sign:                                                                        | The page number for pagination.                                                           | 1                                                                                         |
| `pageSize`                                                                                | *?float*                                                                                  | :heavy_minus_sign:                                                                        | The number of items per page.                                                             | 50                                                                                        |

### Response

**[?Operations\ListDomainsResponse](../../Models/Operations/ListDomainsResponse.md)**

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

Update a domain for the authenticated workspace.

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

$requestBody = new Operations\UpdateDomainRequestBody(
    slug: 'acme.com',
    expiredUrl: 'https://acme.com/expired',
    notFoundUrl: 'https://acme.com/not-found',
    placeholder: 'https://dub.co/help/article/what-is-dub',
);

$response = $sdk->domains->update(
    slug: 'acme.com',
    requestBody: $requestBody

);

if ($response->domainSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               | Example                                                                                   |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `slug`                                                                                    | *string*                                                                                  | :heavy_check_mark:                                                                        | The domain name.                                                                          | acme.com                                                                                  |
| `requestBody`                                                                             | [?Operations\UpdateDomainRequestBody](../../Models/Operations/UpdateDomainRequestBody.md) | :heavy_minus_sign:                                                                        | N/A                                                                                       |                                                                                           |

### Response

**[?Operations\UpdateDomainResponse](../../Models/Operations/UpdateDomainResponse.md)**

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

Delete a domain from a workspace. It cannot be undone. This will also delete all the links associated with the domain.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->domains->delete(
    slug: 'acme.com'
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter          | Type               | Required           | Description        | Example            |
| ------------------ | ------------------ | ------------------ | ------------------ | ------------------ |
| `slug`             | *string*           | :heavy_check_mark: | The domain name.   | acme.com           |

### Response

**[?Operations\DeleteDomainResponse](../../Models/Operations/DeleteDomainResponse.md)**

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