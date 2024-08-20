# Events


### Available Operations

* [list](#list) - Retrieve a list of events

## list

Retrieve a paginated list of events for the authenticated workspace.

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
    $request = new Operations\ListEventsRequest(
        event: Operations\QueryParamEvent::Composite,
        domain: 'burly-math.biz',
        key: '<key>',
        linkId: '<value>',
        externalId: '<value>',
        interval: Operations\QueryParamInterval::Oney,
        start: '<value>',
        end: '<value>',
        timezone: 'America/New_York',
        continent: Components\ContinentCode::As,
        country: Components\CountryCode::Cx,
        city: 'New York',
        device: 'Desktop',
        browser: 'Chrome',
        os: 'Windows',
        referer: 'google.com',
        url: 'https://elliptical-auditorium.com',
        tagId: '<value>',
        qr: false,
        root: false,
        page: 9174.16,
        limit: 6355.32,
        order: Operations\Order::Desc,
        sortBy: Operations\SortBy::Amount,
    );
    $response = $sdk->events->list($request);

    if ($response->clickEvents !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\ListEventsRequest](../../Models/Operations/ListEventsRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |


### Response

**[?Operations\ListEventsResponse](../../Models/Operations/ListEventsResponse.md)**
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
