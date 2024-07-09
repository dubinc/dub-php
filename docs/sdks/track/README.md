# Track


### Available Operations

* [lead](#lead) - Track a lead
* [sale](#sale) - Track a sale
* [customer](#customer) - Track a customer

## lead

Track a lead for a short link.

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

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TrackLeadRequestBody();
    $request->clickId = '<value>';
    $request->eventName = 'Sign up';
    $request->customerId = '<value>';
    $request->customerName = '<value>';
    $request->customerEmail = 'Katelin24@hotmail.com';
    $request->customerAvatar = '<value>';
    $request->metadata = [
        'Assistant' => '<value>',
    ];;

    $response = $sdk->track->lead($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\Dub\Models\Operations\TrackLeadRequestBody](../../Models/Operations/TrackLeadRequestBody.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\Dub\Models\Operations\TrackLeadResponse](../../Models/Operations/TrackLeadResponse.md)**


## sale

Track a sale for a short link.

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

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TrackSaleRequestBody();
    $request->customerId = '<value>';
    $request->amount = 996500;
    $request->paymentProcessor = Operations\PaymentProcessor::Shopify;
    $request->eventName = 'Purchase';
    $request->invoiceId = '<value>';
    $request->currency = 'European Unit of Account 17(E.U.A.-17)';
    $request->metadata = [
        'Stage' => '<value>',
    ];;

    $response = $sdk->track->sale($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\Dub\Models\Operations\TrackSaleRequestBody](../../Models/Operations/TrackSaleRequestBody.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\Dub\Models\Operations\TrackSaleResponse](../../Models/Operations/TrackSaleResponse.md)**


## customer

Track a customer for an authenticated workspace.

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

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $request = new Operations\TrackCustomerRequestBody();
    $request->customerId = '<value>';
    $request->customerName = '<value>';
    $request->customerEmail = 'Wilson.Smith@gmail.com';
    $request->customerAvatar = '<value>';;

    $response = $sdk->track->customer($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [\Dub\Models\Operations\TrackCustomerRequestBody](../../Models/Operations/TrackCustomerRequestBody.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?\Dub\Models\Operations\TrackCustomerResponse](../../Models/Operations/TrackCustomerResponse.md)**

