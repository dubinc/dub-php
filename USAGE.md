<!-- Start SDK Example Usage [usage] -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Operations;

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();

$request = new Operations\CreateLinkRequestBody(
    url: 'https://google.com',
    externalId: '123456',
    tagIds: [
        'clux0rgak00011...',
    ],
    testVariants: [
        new Operations\TestVariants(
            url: 'https://example.com/variant-1',
            percentage: 50,
        ),
        new Operations\TestVariants(
            url: 'https://example.com/variant-2',
            percentage: 50,
        ),
    ],
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

$sdk = Dub\Dub::builder()
    ->setSecurity(
        'DUB_API_KEY'
    )
    ->build();

$request = new Operations\UpsertLinkRequestBody(
    url: 'https://google.com',
    externalId: '123456',
    tagIds: [
        'clux0rgak00011...',
    ],
    testVariants: [
        new Operations\UpsertLinkTestVariants(
            url: 'https://example.com/variant-1',
            percentage: 50,
        ),
        new Operations\UpsertLinkTestVariants(
            url: 'https://example.com/variant-2',
            percentage: 50,
        ),
    ],
);

$response = $sdk->links->upsert(
    request: $request
);

if ($response->linkSchema !== null) {
    // handle response
}
```
<!-- End SDK Example Usage [usage] -->