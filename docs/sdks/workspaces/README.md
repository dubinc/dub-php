# Workspaces
(*workspaces*)

## Overview

### Available Operations

* [get](#get) - Retrieve a workspace
* [update](#update) - Update a workspace

## get

Retrieve a workspace for the authenticated user.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$security = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();



$response = $sdk->workspaces->get(
    idOrSlug: '<value>'
);

if ($response->workspaceSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                        | Type                             | Required                         | Description                      |
| -------------------------------- | -------------------------------- | -------------------------------- | -------------------------------- |
| `idOrSlug`                       | *string*                         | :heavy_check_mark:               | The ID or slug of the workspace. |

### Response

**[?Operations\GetWorkspaceResponse](../../Models/Operations/GetWorkspaceResponse.md)**

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

Update a workspace by ID or slug.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$security = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

$requestBody = new Operations\UpdateWorkspaceRequestBody();

$response = $sdk->workspaces->update(
    idOrSlug: '<value>',
    requestBody: $requestBody

);

if ($response->workspaceSchema !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `idOrSlug`                                                                                     | *string*                                                                                       | :heavy_check_mark:                                                                             | The ID or slug of the workspace to update.                                                     |
| `requestBody`                                                                                  | [Operations\UpdateWorkspaceRequestBody](../../Models/Operations/UpdateWorkspaceRequestBody.md) | :heavy_minus_sign:                                                                             | N/A                                                                                            |

### Response

**[?Operations\UpdateWorkspaceResponse](../../Models/Operations/UpdateWorkspaceResponse.md)**

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