# PartnerApplications

## Overview

### Available Operations

* [list](#list) - List all pending partner applications
* [approve](#approve) - Approve a partner application
* [reject](#reject) - Reject a partner application

## list

Retrieve a paginated list of pending applications for your partner program.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPartnerApplications" method="get" path="/partners/applications" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->partnerApplications->list(
    country: 'US',
    groupId: 'grp_123',
    page: 1,
    pageSize: 50

);

if ($response->responseBodies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                    | Type                                                         | Required                                                     | Description                                                  | Example                                                      |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `country`                                                    | *?string*                                                    | :heavy_minus_sign:                                           | A filter on the list based on the partner's `country` field. | US                                                           |
| `groupId`                                                    | *?string*                                                    | :heavy_minus_sign:                                           | A filter on the list based on the partner's `groupId` field. | grp_123                                                      |
| `page`                                                       | *?int*                                                       | :heavy_minus_sign:                                           | The page number for pagination.                              | 1                                                            |
| `pageSize`                                                   | *?int*                                                       | :heavy_minus_sign:                                           | The number of items per page.                                | 50                                                           |

### Response

**[?Operations\ListPartnerApplicationsResponse](../../Models/Operations/ListPartnerApplicationsResponse.md)**

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

## approve

Approve a pending partner application to your program. The partner will be enrolled in the specified group and notified of the approval.

### Example Usage

<!-- UsageSnippet language="php" operationID="approvePartnerApplication" method="post" path="/partners/applications/approve" -->
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

$request = new Operations\ApprovePartnerApplicationRequestBody(
    partnerId: '<id>',
);

$response = $sdk->partnerApplications->approve(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\ApprovePartnerApplicationRequestBody](../../Models/Operations/ApprovePartnerApplicationRequestBody.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\ApprovePartnerApplicationResponse](../../Models/Operations/ApprovePartnerApplicationResponse.md)**

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

## reject

Reject a pending partner application to your program. The partner will be notified via email that their application was not approved.

### Example Usage

<!-- UsageSnippet language="php" operationID="rejectPartnerApplication" method="post" path="/partners/applications/reject" -->
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

$request = new Operations\RejectPartnerApplicationRequestBody(
    partnerId: '<id>',
);

$response = $sdk->partnerApplications->reject(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\RejectPartnerApplicationRequestBody](../../Models/Operations/RejectPartnerApplicationRequestBody.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\RejectPartnerApplicationResponse](../../Models/Operations/RejectPartnerApplicationResponse.md)**

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