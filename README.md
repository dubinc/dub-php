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
* [Server Selection](#server-selection)
<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/dubinc/dub-php.git"
        }
    ],
    "require": {
        "dub/dub-php": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example 1

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
    $request = new Operations\CreateLinkRequestBody(
        url: 'https://google.com',
        domain: 'lighthearted-kilogram.name',
        key: '<key>',
        externalId: '123456',
        prefix: '<value>',
        trackConversion: false,
        archived: false,
        publicStats: false,
        tagId: '<value>',
        tagIds: [
            '<value>',
        ],
        tagNames: '<value>',
        comments: '<value>',
        expiresAt: '<value>',
        expiredUrl: '<value>',
        password: 'klDuL1dlrnUXohO',
        proxy: false,
        title: '<value>',
        description: 'User-friendly multi-state frame',
        image: 'https://loremflickr.com/640/480',
        video: '<value>',
        rewrite: false,
        ios: '<value>',
        android: '<value>',
        geo: new Components\LinkGeoTargeting(
            us: '<value>',
            uk: '<value>',
            ...
        ),
        doIndex: false,
        utmSource: '<value>',
        utmMedium: '<value>',
        utmCampaign: '<value>',
        utmTerm: '<value>',
        utmContent: '<value>',
    );
    $response = $sdk->links->create($request);

    if ($response->linkSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Example 2

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
    $request = new Operations\UpsertLinkRequestBody(
        url: 'https://google.com',
        domain: 'monthly-hometown.info',
        key: '<key>',
        externalId: '123456',
        prefix: '<value>',
        trackConversion: false,
        archived: false,
        publicStats: false,
        tagId: '<value>',
        tagIds: [
            '<value>',
        ],
        tagNames: '<value>',
        comments: '<value>',
        expiresAt: '<value>',
        expiredUrl: '<value>',
        password: 'Ng7iwZDcrQrPcHB',
        proxy: false,
        title: '<value>',
        description: 'Organic asynchronous firmware',
        image: 'https://loremflickr.com/640/480',
        video: '<value>',
        rewrite: false,
        ios: '<value>',
        android: '<value>',
        geo: new Components\LinkGeoTargeting(
            us: '<value>',
            uk: '<value>',
            ...
        ),
        doIndex: false,
        utmSource: '<value>',
        utmMedium: '<value>',
        utmCampaign: '<value>',
        utmTerm: '<value>',
        utmContent: '<value>',
    );
    $response = $sdk->links->upsert($request);

    if ($response->linkSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [Links](docs/sdks/links/README.md)

* [list](docs/sdks/links/README.md#list) - Retrieve a list of links
* [create](docs/sdks/links/README.md#create) - Create a new link
* [count](docs/sdks/links/README.md#count) - Retrieve links count
* [get](docs/sdks/links/README.md#get) - Retrieve a link
* [delete](docs/sdks/links/README.md#delete) - Delete a link
* [update](docs/sdks/links/README.md#update) - Update a link
* [createMany](docs/sdks/links/README.md#createmany) - Bulk create links
* [deleteMany](docs/sdks/links/README.md#deletemany) - Bulk delete links
* [updateMany](docs/sdks/links/README.md#updatemany) - Bulk update links
* [upsert](docs/sdks/links/README.md#upsert) - Upsert a link

### [QRCodes](docs/sdks/qrcodes/README.md)

* [get](docs/sdks/qrcodes/README.md#get) - Retrieve a QR code

### [Analytics](docs/sdks/analytics/README.md)

* [retrieve](docs/sdks/analytics/README.md#retrieve) - Retrieve analytics for a link, a domain, or the authenticated workspace.

### [Events](docs/sdks/events/README.md)

* [list](docs/sdks/events/README.md#list) - Retrieve a list of events

### [Workspaces](docs/sdks/workspaces/README.md)

* [get](docs/sdks/workspaces/README.md#get) - Retrieve a workspace
* [update](docs/sdks/workspaces/README.md#update) - Update a workspace

### [Tags](docs/sdks/tags/README.md)

* [list](docs/sdks/tags/README.md#list) - Retrieve a list of tags
* [create](docs/sdks/tags/README.md#create) - Create a new tag
* [update](docs/sdks/tags/README.md#update) - Update a tag

### [Domains](docs/sdks/domains/README.md)

* [list](docs/sdks/domains/README.md#list) - Retrieve a list of domains
* [create](docs/sdks/domains/README.md#create) - Create a domain
* [delete](docs/sdks/domains/README.md#delete) - Delete a domain
* [update](docs/sdks/domains/README.md#update) - Update a domain

### [Track](docs/sdks/track/README.md)

* [lead](docs/sdks/track/README.md#lead) - Track a lead
* [sale](docs/sdks/track/README.md#sale) - Track a sale
* [customer](docs/sdks/track/README.md#customer) - Track a customer

### [Metatags](docs/sdks/metatags/README.md)

* [get](docs/sdks/metatags/README.md#get) - Retrieve the metatags for a URL
<!-- End Available Resources and Operations [operations] -->

<!-- Start Server Selection [server] -->
## Server Selection

## Server Selection

### Select Server by Index

You can override the default server globally by passing a server index to the `server_idx: int` optional parameter when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the indexes associated with the available servers:

| # | Server | Variables |
| - | ------ | --------- |
| 0 | `https://api.dub.co` | None |




### Override Server URL Per-Client

The default server can also be overridden globally by passing a URL to the `server_url: str` optional parameter when initializing the SDK client instance. For example:
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
