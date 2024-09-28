<!-- Start SDK Example Usage [usage] -->
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