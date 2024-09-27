# Analytics
(*analytics*)

## Overview

### Available Operations

* [retrieve](#retrieve) - Retrieve analytics for a link, a domain, or the authenticated workspace.

## retrieve

Retrieve analytics for a link, a domain, or the authenticated workspace. The response type depends on the `event` and `type` query parameters.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$security = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();
try {
    $request = new Operations\RetrieveAnalyticsRequest(
        timezone: 'America/New_York',
        city: 'New York',
        device: 'Desktop',
        browser: 'Chrome',
        os: 'Windows',
        referer: 'google.com',
        refererUrl: 'https://dub.co/blog',
    );
    $response = $sdk.analytics->retrieve(
        request: $request
    );

    if ($response->oneOf !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RetrieveAnalyticsRequest](../../Models/Operations/RetrieveAnalyticsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RetrieveAnalyticsResponse](../../Models/Operations/RetrieveAnalyticsResponse.md)**

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
