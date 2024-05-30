# Tags


### Available Operations

* [list](#list) - Retrieve a list of tags
* [create](#create) - Create a new tag

## list

Retrieve a list of tags for the authenticated workspace.

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
    

    $response = $sdk->tags->list('<value>', '<value>');

    if ($response->tagSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `workspaceId`                                                                  | *string*                                                                       | :heavy_minus_sign:                                                             | The ID of the workspace.                                                       |
| `projectSlug`                                                                  | *string*                                                                       | :heavy_minus_sign:                                                             | The slug of the project. This field is deprecated – use `workspaceId` instead. |


### Response

**[?\Dub\Models\Operations\GetTagsResponse](../../Models/Operations/GetTagsResponse.md)**


## create

Create a new tag for the authenticated workspace.

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
        $requestBody = new Operations\CreateTagRequestBody();
    $requestBody->tag = '<value>';
    $requestBody->color = Operations\Color::Blue;

    $response = $sdk->tags->create('<value>', '<value>', $requestBody);

    if ($response->tagSchema !== null) {
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
| `requestBody`                                                                                  | [\Dub\Models\Operations\CreateTagRequestBody](../../Models/Operations/CreateTagRequestBody.md) | :heavy_minus_sign:                                                                             | N/A                                                                                            |


### Response

**[?\Dub\Models\Operations\CreateTagResponse](../../Models/Operations/CreateTagResponse.md)**

