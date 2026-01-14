# Bounties

## Overview

### Available Operations

* [listSubmissions](#listsubmissions) - List bounty submissions
* [approveSubmission](#approvesubmission) - Approve a bounty submission
* [rejectSubmission](#rejectsubmission) - Reject a bounty submission

## listSubmissions

List all submissions for a specific bounty.

### Example Usage

<!-- UsageSnippet language="php" operationID="listBountySubmissions" method="get" path="/bounties/{bountyId}/submissions" -->
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

$request = new Operations\ListBountySubmissionsRequest(
    bountyId: '<id>',
    pageSize: 50,
);

$response = $sdk->bounties->listSubmissions(
    request: $request
);

if ($response->responseBodies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListBountySubmissionsRequest](../../Models/Operations/ListBountySubmissionsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListBountySubmissionsResponse](../../Models/Operations/ListBountySubmissionsResponse.md)**

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

## approveSubmission

Approve a bounty submission. Optionally specify a custom reward amount.

### Example Usage

<!-- UsageSnippet language="php" operationID="approveBountySubmission" method="post" path="/bounties/{bountyId}/submissions/{submissionId}/approve" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->bounties->approveSubmission(
    bountyId: '<id>',
    submissionId: '<id>',
    requestBody: $requestBody

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `bountyId`                                                                                                      | *string*                                                                                                        | :heavy_check_mark:                                                                                              | N/A                                                                                                             |
| `submissionId`                                                                                                  | *string*                                                                                                        | :heavy_check_mark:                                                                                              | N/A                                                                                                             |
| `requestBody`                                                                                                   | [?Operations\ApproveBountySubmissionRequestBody](../../Models/Operations/ApproveBountySubmissionRequestBody.md) | :heavy_minus_sign:                                                                                              | N/A                                                                                                             |

### Response

**[?Operations\ApproveBountySubmissionResponse](../../Models/Operations/ApproveBountySubmissionResponse.md)**

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

## rejectSubmission

Reject a bounty submission with a specified reason and optional note.

### Example Usage

<!-- UsageSnippet language="php" operationID="rejectBountySubmission" method="post" path="/bounties/{bountyId}/submissions/{submissionId}/reject" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->bounties->rejectSubmission(
    bountyId: '<id>',
    submissionId: '<id>',
    requestBody: $requestBody

);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `bountyId`                                                                                                    | *string*                                                                                                      | :heavy_check_mark:                                                                                            | N/A                                                                                                           |
| `submissionId`                                                                                                | *string*                                                                                                      | :heavy_check_mark:                                                                                            | N/A                                                                                                           |
| `requestBody`                                                                                                 | [?Operations\RejectBountySubmissionRequestBody](../../Models/Operations/RejectBountySubmissionRequestBody.md) | :heavy_minus_sign:                                                                                            | N/A                                                                                                           |

### Response

**[?Operations\RejectBountySubmissionResponse](../../Models/Operations/RejectBountySubmissionResponse.md)**

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