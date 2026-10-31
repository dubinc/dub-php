# Messages

## Overview

### Available Operations

* [list](#list) - List all messages
* [create](#create) - Send a message to a partner

## list

Retrieve a paginated list of direct messages between your partner program and its partners, newest first.

### Example Usage

<!-- UsageSnippet language="php" operationID="listMessages" method="get" path="/messages" -->
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

$request = new Operations\ListMessagesRequest(
    endingBefore: 'msg_1KAP4CDPBSVMMBMH9XX3YZZ0Z',
    startingAfter: 'msg_1KAP4CDPBSVMMBMH9XX3YZZ0Z',
    pageSize: 50,
);

$response = $sdk->messages->list(
    request: $request
);

if ($response->responseBodies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListMessagesRequest](../../Models/Operations/ListMessagesRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListMessagesResponse](../../Models/Operations/ListMessagesResponse.md)**

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

Send a direct message from your partner program to a partner. Until the partner replies, you can only send one message to a partner who isn't enrolled in your program. Sending a message marks the partner's unread messages to your program as read. You can send up to 10 messages a minute to the same partner.

### Example Usage

<!-- UsageSnippet language="php" operationID="createMessage" method="post" path="/messages" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();



$response = $sdk->messages->create(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateMessageRequestBody](../../Models/Operations/CreateMessageRequestBody.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateMessageResponse](../../Models/Operations/CreateMessageResponse.md)**

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