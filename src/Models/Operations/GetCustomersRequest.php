<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;

use Dub\Utils\SpeakeasyMetadata;
class GetCustomersRequest
{
    /**
     * A case-sensitive filter on the list based on the customer's `email` field. The value must be a string.
     *
     * @var ?string $email
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=email')]
    public ?string $email = null;

    /**
     * A case-sensitive filter on the list based on the customer's `externalId` field. The value must be a string.
     *
     * @var ?string $externalId
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=externalId')]
    public ?string $externalId = null;

    /**
     * Whether to include expanded fields on the customer (`link`, `partner`, `discount`).
     *
     * @var ?bool $includeExpandedFields
     */
    #[SpeakeasyMetadata('queryParam:style=form,explode=true,name=includeExpandedFields')]
    public ?bool $includeExpandedFields = null;

    /**
     * @param  ?string  $email
     * @param  ?string  $externalId
     * @param  ?bool  $includeExpandedFields
     * @phpstan-pure
     */
    public function __construct(?string $email = null, ?string $externalId = null, ?bool $includeExpandedFields = null)
    {
        $this->email = $email;
        $this->externalId = $externalId;
        $this->includeExpandedFields = $includeExpandedFields;
    }
}