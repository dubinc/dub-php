# Analytics


### Available Operations

* [retrieve](#retrieve) - Retrieve analytics for a link, a domain, or the authenticated workspace.

## retrieve

Retrieve analytics for a link, a domain, or the authenticated workspace. The response type depends on the `event` and `type` query parameters.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

try {
        $request = new Operations\RetrieveAnalyticsRequest();
    $request->event = Operations\Event::Leads;
    $request->groupBy = Operations\GroupBy::Trigger;
    $request->domain = 'vacant-platter.biz';
    $request->key = '<key>';
    $request->linkId = '<value>';
    $request->externalId = '<value>';
    $request->interval = Operations\Interval::Ninetyd;
    $request->start = '<value>';
    $request->end = '<value>';
    $request->timezone = 'America/New_York';
    $request->country = Components\CountryCode::Gh;
    $request->city = 'Boscotown';
    $request->device = '<value>';
    $request->browser = '<value>';
    $request->os = '<value>';
    $request->referer = '<value>';
    $request->url = 'https://bewitched-playroom.org';
    $request->tagId = '<value>';
    $request->qr = false;
    $request->root = false;;

    $response = $sdk->analytics->retrieve($request);

    if ($response->oneOf !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\Dub\Models\Operations\RetrieveAnalyticsRequest](../../Models/Operations/RetrieveAnalyticsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\Dub\Models\Operations\RetrieveAnalyticsResponse](../../Models/Operations/RetrieveAnalyticsResponse.md)**

