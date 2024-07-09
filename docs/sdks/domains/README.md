# Domains


### Available Operations

* [list](#list) - Retrieve a list of domains
* [create](#create) - Create a domain
* [delete](#delete) - Delete a domain
* [update](#update) - Update a domain

## list

Retrieve a list of domains associated with the authenticated workspace.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $response = $sdk->domains->list();

    if ($response->domainSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```


### Response

**[?\Dub\Models\Operations\ListDomainsResponse](../../Models/Operations/ListDomainsResponse.md)**


## create

Create a domain for the authenticated workspace.

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
        $request = new Operations\CreateDomainRequestBody();
    $request->slug = 'acme.com';
    $request->expiredUrl = 'https://acme.com/expired';
    $request->archived = false;
    $request->placeholder = 'https://dub.co/help/article/what-is-dub';;

    $response = $sdk->domains->create($request);

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
| `$request`                                                                                           | [\Dub\Models\Operations\CreateDomainRequestBody](../../Models/Operations/CreateDomainRequestBody.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?\Dub\Models\Operations\CreateDomainResponse](../../Models/Operations/CreateDomainResponse.md)**


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

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->domains->delete('acme.com');

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter          | Type               | Required           | Description        | Example            |
| ------------------ | ------------------ | ------------------ | ------------------ | ------------------ |
| `slug`             | *string*           | :heavy_check_mark: | The domain name.   | acme.com           |


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

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $requestBody = new Operations\UpdateDomainRequestBody();
    $requestBody->slug = 'acme.com';
    $requestBody->expiredUrl = 'https://acme.com/expired';
    $requestBody->archived = false;
    $requestBody->placeholder = 'https://dub.co/help/article/what-is-dub';

    $response = $sdk->domains->update('acme.com', $requestBody);

    if ($response->domainSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          | Example                                                                                              |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `slug`                                                                                               | *string*                                                                                             | :heavy_check_mark:                                                                                   | The domain name.                                                                                     | acme.com                                                                                             |
| `requestBody`                                                                                        | [\Dub\Models\Operations\UpdateDomainRequestBody](../../Models/Operations/UpdateDomainRequestBody.md) | :heavy_minus_sign:                                                                                   | N/A                                                                                                  |                                                                                                      |


### Response

**[?\Dub\Models\Operations\UpdateDomainResponse](../../Models/Operations/UpdateDomainResponse.md)**

