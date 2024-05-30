# Domains


### Available Operations

* [list](#list) - Retrieve a list of domains
* [add](#add) - Add a domain
* [delete](#delete) - Delete a domain
* [update](#update) - Update a domain
* [setPrimary](#setprimary) - Set a domain as primary
* [transfer](#transfer) - Transfer a domain

## list

Retrieve a list of domains associated with the authenticated workspace.

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
    

    $response = $sdk->domains->list('<value>', '<value>');

    if ($response->domainSchemas !== null) {
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

**[?\Dub\Models\Operations\ListDomainsResponse](../../Models/Operations/ListDomainsResponse.md)**


## add

Add a domain to the authenticated workspace.

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
        $requestBody = new Operations\AddDomainRequestBody();
    $requestBody->slug = 'acme.com';
    $requestBody->type = Operations\Type::Redirect;
    $requestBody->target = 'https://acme.com/landing';
    $requestBody->expiredUrl = 'https://acme.com/expired';
    $requestBody->archived = false;
    $requestBody->noindex = false;
    $requestBody->placeholder = 'https://dub.co/help/article/what-is-dub';

    $response = $sdk->domains->add('<value>', '<value>', $requestBody);

    if ($response->domainSchema !== null) {
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
| `requestBody`                                                                                  | [\Dub\Models\Operations\AddDomainRequestBody](../../Models/Operations/AddDomainRequestBody.md) | :heavy_minus_sign:                                                                             | N/A                                                                                            |


### Response

**[?\Dub\Models\Operations\AddDomainResponse](../../Models/Operations/AddDomainResponse.md)**


## delete

Delete a domain from a workspace. It cannot be undone. This will also delete all the links associated with the domain.

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
        $request = new Operations\DeleteDomainRequest();
    $request->slug = 'acme.com';;

    $response = $sdk->domains->delete($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\Dub\Models\Operations\DeleteDomainRequest](../../Models/Operations/DeleteDomainRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\Dub\Models\Operations\DeleteDomainResponse](../../Models/Operations/DeleteDomainResponse.md)**


## update

Update a domain for the authenticated workspace.

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
        $request = new Operations\UpdateDomainRequest();
    $request->slug = 'acme.com';
    $request->requestBody = new Operations\UpdateDomainRequestBody();
    $request->requestBody->slug = 'acme.com';
    $request->requestBody->type = Operations\UpdateDomainType::Redirect;
    $request->requestBody->target = 'https://acme.com/landing';
    $request->requestBody->expiredUrl = 'https://acme.com/expired';
    $request->requestBody->archived = false;
    $request->requestBody->noindex = false;
    $request->requestBody->placeholder = 'https://dub.co/help/article/what-is-dub';;

    $response = $sdk->domains->update($request);

    if ($response->domainSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [\Dub\Models\Operations\UpdateDomainRequest](../../Models/Operations/UpdateDomainRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?\Dub\Models\Operations\UpdateDomainResponse](../../Models/Operations/UpdateDomainResponse.md)**


## setPrimary

Set a domain as primary for the authenticated workspace.

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
        $request = new Operations\SetPrimaryDomainRequest();
    $request->slug = 'acme.com';;

    $response = $sdk->domains->setPrimary($request);

    if ($response->domainSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [\Dub\Models\Operations\SetPrimaryDomainRequest](../../Models/Operations/SetPrimaryDomainRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\Dub\Models\Operations\SetPrimaryDomainResponse](../../Models/Operations/SetPrimaryDomainResponse.md)**


## transfer

Transfer a domain to another workspace within the authenticated account.

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
        $request = new Operations\TransferDomainRequest();
    $request->slug = 'acme.com';
    $request->requestBody = new Operations\TransferDomainRequestBody();
    $request->requestBody->newWorkspaceId = '<value>';;

    $response = $sdk->domains->transfer($request);

    if ($response->domainSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [\Dub\Models\Operations\TransferDomainRequest](../../Models/Operations/TransferDomainRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\Dub\Models\Operations\TransferDomainResponse](../../Models/Operations/TransferDomainResponse.md)**

