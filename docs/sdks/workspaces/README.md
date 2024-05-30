# Workspaces


### Available Operations

* [list](#list) - Retrieve a list of workspaces
* [create](#create) - Create a workspace
* [get](#get) - Retrieve a workspace

## list

Retrieve a list of workspaces for the authenticated user.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

try {
    $response = $sdk->workspaces->list();

    if ($response->workspaceSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Dub\Models\Operations\GetWorkspacesResponse](../../Models/Operations/GetWorkspacesResponse.md)**


## create

Create a new workspace for the authenticated user.

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
        $request = new Operations\CreateWorkspaceRequestBody();
    $request->name = '<value>';
    $request->slug = '<value>';
    $request->domain = 'lighthearted-kilogram.name';;

    $response = $sdk->workspaces->create($request);

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
| `$request`                                                                                                 | [\Dub\Models\Operations\CreateWorkspaceRequestBody](../../Models/Operations/CreateWorkspaceRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\Dub\Models\Operations\CreateWorkspaceResponse](../../Models/Operations/CreateWorkspaceResponse.md)**


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

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

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

