<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class RetrieveLinksRequest
{
    /**
     *
     * @var ?string $partnerId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=partnerId')]
    public ?string $partnerId = null;

    /**
     *
     * @var ?string $tenantId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=tenantId')]
    public ?string $tenantId = null;

    /**
     * @param  ?string  $partnerId
     * @param  ?string  $tenantId
     * @phpstan-pure
     */
    public function __construct(?string $partnerId = null, ?string $tenantId = null)
    {
        $this->partnerId = $partnerId;
        $this->tenantId = $tenantId;
    }
}