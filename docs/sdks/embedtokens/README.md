# EmbedTokens
(*embedTokens*)

## Overview

### Available Operations

* [referrals](#referrals) - Create a referrals embed token

## referrals

Create a referrals embed token for the given partner/tenant.

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

$request = new Operations\CreateReferralsEmbedTokenRequestBody(
    programId: '<id>',
    partner: new Operations\Partner(
        name: '<value>',
        email: 'Letha_Wuckert2@yahoo.com',
        linkProps: new Operations\CreateReferralsEmbedTokenLinkProps(
            externalId: '123456',
            tagIds: [
                'clux0rgak00011...',
            ],
            testVariants: [
                new Operations\CreateReferralsEmbedTokenTestVariants(
                    url: 'https://example.com/variant-1',
                    percentage: 50,
                ),
                new Operations\CreateReferralsEmbedTokenTestVariants(
                    url: 'https://example.com/variant-2',
                    percentage: 50,
                ),
            ],
        ),
    ),
);

$response = $sdk->embedTokens->referrals(
    request: $request
);

if ($response->object !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\CreateReferralsEmbedTokenRequestBody](../../Models/Operations/CreateReferralsEmbedTokenRequestBody.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\CreateReferralsEmbedTokenResponse](../../Models/Operations/CreateReferralsEmbedTokenResponse.md)**

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