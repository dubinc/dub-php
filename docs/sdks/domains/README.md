# Domains

## Overview

### Available Operations

* [list](#list) - Retrieve a list of domains
* [create](#create) - Create a domain
* [delete](#delete) - Delete a domain
* [update](#update) - Update a domain

## list

Retrieve a list of domains associated with the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {

    $response = $sdk->domains->list(false, '<value>', 1, 50);

    if ($response->domainSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                 | Type                                                                                      | Required                                                                                  | Description                                                                               | Example                                                                                   |
| ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------- |
| `archived`                                                                                | *bool*                                                                                    | :heavy_minus_sign:                                                                        | Whether to include archived domains in the response. Defaults to `false` if not provided. |                                                                                           |
| `search`                                                                                  | *string*                                                                                  | :heavy_minus_sign:                                                                        | The search term to filter the domains by.                                                 |                                                                                           |
| `page`                                                                                    | *float*                                                                                   | :heavy_minus_sign:                                                                        | The page number for pagination.                                                           | 1                                                                                         |
| `pageSize`                                                                                | *float*                                                                                   | :heavy_minus_sign:                                                                        | The number of items per page.                                                             | 50                                                                                        |

### Response

**[?Operations\ListDomainsResponse](../../Models/Operations/ListDomainsResponse.md)**

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


## create

Create a domain for the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateDomainRequestBody(
        slug: 'acme.com',
        archived: false,
        expiredUrl: 'https://acme.com/expired',
        placeholder: 'https://dub.co/help/article/what-is-dub',
    );
    $response = $sdk->domains->create($request);

    if ($response->domainSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateDomainRequestBody](../../Models/Operations/CreateDomainRequestBody.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateDomainResponse](../../Models/Operations/CreateDomainResponse.md)**

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


## delete

Delete a domain from a workspace. It cannot be undone. This will also delete all the links associated with the domain.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {

    $response = $sdk->domains->delete('acme.com');

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        | Example            |
| ------------------ | ------------------ | ------------------ | ------------------ | ------------------ |
| `slug`             | *string*           | :heavy_check_mark: | The domain name.   | acme.com           |

### Response

**[?Operations\DeleteDomainResponse](../../Models/Operations/DeleteDomainResponse.md)**

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


## update

Update a domain for the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $requestBody = new Operations\UpdateDomainRequestBody(
        slug: 'acme.com',
        archived: false,
        expiredUrl: 'https://acme.com/expired',
        placeholder: 'https://dub.co/help/article/what-is-dub',
    );
    $response = $sdk->domains->update('acme.com', $requestBody);

    if ($response->domainSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              | Example                                                                                  |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `slug`                                                                                   | *string*                                                                                 | :heavy_check_mark:                                                                       | The domain name.                                                                         | acme.com                                                                                 |
| `requestBody`                                                                            | [Operations\UpdateDomainRequestBody](../../Models/Operations/UpdateDomainRequestBody.md) | :heavy_minus_sign:                                                                       | N/A                                                                                      |                                                                                          |

### Response

**[?Operations\UpdateDomainResponse](../../Models/Operations/UpdateDomainResponse.md)**

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
