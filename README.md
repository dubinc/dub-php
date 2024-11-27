# dub/dub-php

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>

<!-- Start Summary [summary] -->
## Summary

Dub.co API: Dub is link management infrastructure for companies to create marketing campaigns, link sharing features, and referral programs.
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents

* [SDK Installation](#sdk-installation)
* [SDK Example Usage](#sdk-example-usage)
* [Available Resources and Operations](#available-resources-and-operations)
* [Error Handling](#error-handling)
* [Server Selection](#server-selection)
<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "dub/dub-php"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example 1

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$security = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

$request = new Operations\CreateLinkRequestBody(
    url: 'https://google.com',
    tagIds: [
        'clux0rgak00011...',
    ],
    externalId: '123456',
);

$response = $sdk->links->create(
    request: $request
);

if ($response->linkSchema !== null) {
    // handle response
}
```

### Example 2

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$security = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

$request = new Operations\UpsertLinkRequestBody(
    url: 'https://google.com',
    tagIds: [
        'clux0rgak00011...',
    ],
    externalId: '123456',
);

$response = $sdk->links->upsert(
    request: $request
);

if ($response->linkSchema !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

<details open>
<summary>Available methods</summary>

### [analytics](docs/sdks/analytics/README.md)

* [retrieve](docs/sdks/analytics/README.md#retrieve) - Retrieve analytics for a link, a domain, or the authenticated workspace.

### [customers](docs/sdks/customers/README.md)

* [list](docs/sdks/customers/README.md#list) - Retrieve a list of customers
* [create](docs/sdks/customers/README.md#create) - Create a customer
* [get](docs/sdks/customers/README.md#get) - Retrieve a customer
* [update](docs/sdks/customers/README.md#update) - Update a customer
* [delete](docs/sdks/customers/README.md#delete) - Delete a customer

### [domains](docs/sdks/domains/README.md)

* [create](docs/sdks/domains/README.md#create) - Create a domain
* [list](docs/sdks/domains/README.md#list) - Retrieve a list of domains
* [update](docs/sdks/domains/README.md#update) - Update a domain
* [delete](docs/sdks/domains/README.md#delete) - Delete a domain


### [events](docs/sdks/events/README.md)

* [list](docs/sdks/events/README.md#list) - Retrieve a list of events

### [links](docs/sdks/links/README.md)

* [create](docs/sdks/links/README.md#create) - Create a new link
* [list](docs/sdks/links/README.md#list) - Retrieve a list of links
* [count](docs/sdks/links/README.md#count) - Retrieve links count
* [get](docs/sdks/links/README.md#get) - Retrieve a link
* [update](docs/sdks/links/README.md#update) - Update a link
* [delete](docs/sdks/links/README.md#delete) - Delete a link
* [createMany](docs/sdks/links/README.md#createmany) - Bulk create links
* [updateMany](docs/sdks/links/README.md#updatemany) - Bulk update links
* [deleteMany](docs/sdks/links/README.md#deletemany) - Bulk delete links
* [upsert](docs/sdks/links/README.md#upsert) - Upsert a link

### [metatags](docs/sdks/metatags/README.md)

* [get](docs/sdks/metatags/README.md#get) - Retrieve the metatags for a URL

### [qrCodes](docs/sdks/qrcodes/README.md)

* [get](docs/sdks/qrcodes/README.md#get) - Retrieve a QR code

### [tags](docs/sdks/tags/README.md)

* [create](docs/sdks/tags/README.md#create) - Create a new tag
* [list](docs/sdks/tags/README.md#list) - Retrieve a list of tags
* [update](docs/sdks/tags/README.md#update) - Update a tag
* [delete](docs/sdks/tags/README.md#delete) - Delete a tag

### [track](docs/sdks/track/README.md)

* [lead](docs/sdks/track/README.md#lead) - Track a lead
* [sale](docs/sdks/track/README.md#sale) - Track a sale
* [~~customer~~](docs/sdks/track/README.md#customer) - Track a customer :warning: **Deprecated**

### [workspaces](docs/sdks/workspaces/README.md)

* [get](docs/sdks/workspaces/README.md#get) - Retrieve a workspace
* [update](docs/sdks/workspaces/README.md#update) - Update a workspace

</details>
<!-- End Available Resources and Operations [operations] -->

<!-- Start Error Handling [errors] -->
## Error Handling

Handling errors in this SDK should largely match your expectations. All operations return a response object or throw an exception.

By default an API error will raise a `Errors\SDKException` exception, which has the following properties:

| Property       | Type                                    | Description           |
|----------------|-----------------------------------------|-----------------------|
| `$message`     | *string*                                | The error message     |
| `$statusCode`  | *int*                                   | The HTTP status code  |
| `$rawResponse` | *?\Psr\Http\Message\ResponseInterface*  | The raw HTTP response |
| `$body`        | *string*                                | The response content  |

When custom error responses are specified for an operation, the SDK may also throw their associated exception. You can refer to respective *Errors* tables in SDK docs for more details on possible exception types for each operation. For example, the `create` method throws the following exceptions:

| Error Type                 | Status Code | Content Type     |
| -------------------------- | ----------- | ---------------- |
| Errors\BadRequest          | 400         | application/json |
| Errors\Unauthorized        | 401         | application/json |
| Errors\Forbidden           | 403         | application/json |
| Errors\NotFound            | 404         | application/json |
| Errors\Conflict            | 409         | application/json |
| Errors\InviteExpired       | 410         | application/json |
| Errors\UnprocessableEntity | 422         | application/json |
| Errors\RateLimitExceeded   | 429         | application/json |
| Errors\InternalServerError | 500         | application/json |
| Errors\SDKException        | 4XX, 5XX    | \*/\*            |

### Example

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$security = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateLinkRequestBody(
        url: 'https://google.com',
        tagIds: [
            'clux0rgak00011...',
        ],
        externalId: '123456',
    );

    $response = $sdk->links->create(
        request: $request
    );

    if ($response->linkSchema !== null) {
        // handle response
    }
} catch (Errors\BadRequestThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\UnauthorizedThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\ForbiddenThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\NotFoundThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\ConflictThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\InviteExpiredThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\UnprocessableEntityThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\RateLimitExceededThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\InternalServerErrorThrowable $e) {
    // handle $e->$container data
    throw $e;
} catch (Errors\SDKException $e) {
    // handle default exception
    throw $e;
}
```
<!-- End Error Handling [errors] -->

<!-- Start Server Selection [server] -->
## Server Selection

### Override Server URL Per-Client

The default server can also be overridden globally using the `setServerUrl(string $serverUrl)` builder method when initializing the SDK client instance. For example:
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$security = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()
    ->setServerURL('https://api.dub.co')
    ->setSecurity($security)->build();

$request = new Operations\CreateLinkRequestBody(
    url: 'https://google.com',
    tagIds: [
        'clux0rgak00011...',
    ],
    externalId: '123456',
);

$response = $sdk->links->create(
    request: $request
);

if ($response->linkSchema !== null) {
    // handle response
}
```
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
