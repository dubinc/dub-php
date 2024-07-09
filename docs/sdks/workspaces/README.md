# Workspaces


### Available Operations

* [get](#get) - Retrieve a workspace
* [update](#update) - Update a workspace

## get

Retrieve a workspace for the authenticated user.

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
    

    $response = $sdk->workspaces->get('<value>');

    if ($response->workspaceSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                        | Type                             | Required                         | Description                      |
| -------------------------------- | -------------------------------- | -------------------------------- | -------------------------------- |
| `idOrSlug`                       | *string*                         | :heavy_check_mark:               | The ID or slug of the workspace. |


### Response

**[?\Dub\Models\Operations\GetWorkspaceResponse](../../Models/Operations/GetWorkspaceResponse.md)**


## update

Update a workspace by ID or slug.

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
        $requestBody = new Operations\UpdateWorkspaceRequestBody();
    $requestBody->name = '<value>';
    $requestBody->slug = '<value>';

    $response = $sdk->workspaces->update('<value>', $requestBody);

    if ($response->workspaceSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `idOrSlug`                                                                                                 | *string*                                                                                                   | :heavy_check_mark:                                                                                         | The ID or slug of the workspace to update.                                                                 |
| `requestBody`                                                                                              | [\Dub\Models\Operations\UpdateWorkspaceRequestBody](../../Models/Operations/UpdateWorkspaceRequestBody.md) | :heavy_minus_sign:                                                                                         | N/A                                                                                                        |


### Response

**[?\Dub\Models\Operations\UpdateWorkspaceResponse](../../Models/Operations/UpdateWorkspaceResponse.md)**

