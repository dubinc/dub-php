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
        $requestBody = new Operations\TrackLeadRequestBody();
    $requestBody->clickId = '<value>';
    $requestBody->eventName = 'Sign up';
    $requestBody->customerId = '<value>';
    $requestBody->customerName = '<value>';
    $requestBody->customerEmail = 'Katelin24@hotmail.com';
    $requestBody->customerAvatar = '<value>';
    $requestBody->metadata = [
        'Assistant' => '<value>',
    ];

    $response = $sdk->track->lead('<value>', '<value>', $requestBody);

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
| `workspaceId`                                                                                  | *string*                                                                                       | :heavy_minus_sign:                                                                             | The ID of the workspace.                                                                       |
| `projectSlug`                                                                                  | *string*                                                                                       | :heavy_minus_sign:                                                                             | The slug of the project. This field is deprecated – use `workspaceId` instead.                 |
| `requestBody`                                                                                  | [\Dub\Models\Operations\TrackLeadRequestBody](../../Models/Operations/TrackLeadRequestBody.md) | :heavy_minus_sign:                                                                             | N/A                                                                                            |


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
        $requestBody = new Operations\TrackSaleRequestBody();
    $requestBody->customerId = '<value>';
    $requestBody->amount = 996500;
    $requestBody->paymentProcessor = Operations\PaymentProcessor::Shopify;
    $requestBody->eventName = 'Purchase';
    $requestBody->invoiceId = '<value>';
    $requestBody->currency = 'European Unit of Account 17(E.U.A.-17)';
    $requestBody->metadata = [
        'Stage' => '<value>',
    ];

    $response = $sdk->track->sale('<value>', '<value>', $requestBody);

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
| `workspaceId`                                                                                  | *string*                                                                                       | :heavy_minus_sign:                                                                             | The ID of the workspace.                                                                       |
| `projectSlug`                                                                                  | *string*                                                                                       | :heavy_minus_sign:                                                                             | The slug of the project. This field is deprecated – use `workspaceId` instead.                 |
| `requestBody`                                                                                  | [\Dub\Models\Operations\TrackSaleRequestBody](../../Models/Operations/TrackSaleRequestBody.md) | :heavy_minus_sign:                                                                             | N/A                                                                                            |


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
        $requestBody = new Operations\TrackCustomerRequestBody();
    $requestBody->customerId = '<value>';
    $requestBody->customerName = '<value>';
    $requestBody->customerEmail = 'Wilson.Smith@gmail.com';
    $requestBody->customerAvatar = '<value>';

    $response = $sdk->track->customer('<value>', '<value>', $requestBody);

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
| `workspaceId`                                                                                          | *string*                                                                                               | :heavy_minus_sign:                                                                                     | The ID of the workspace.                                                                               |
| `projectSlug`                                                                                          | *string*                                                                                               | :heavy_minus_sign:                                                                                     | The slug of the project. This field is deprecated – use `workspaceId` instead.                         |
| `requestBody`                                                                                          | [\Dub\Models\Operations\TrackCustomerRequestBody](../../Models/Operations/TrackCustomerRequestBody.md) | :heavy_minus_sign:                                                                                     | N/A                                                                                                    |


### Response

**[?\Dub\Models\Operations\TrackCustomerResponse](../../Models/Operations/TrackCustomerResponse.md)**

