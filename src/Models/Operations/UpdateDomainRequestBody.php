<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


class UpdateDomainRequestBody
{
    /**
     * Name of the domain.
     *
     * @var ?string $slug
     */
    #[\JMS\Serializer\Annotation\SerializedName('slug')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $slug = null;

    /**
     * Redirect users to a specific URL when any link under this domain has expired.
     *
     * @var ?string $expiredUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('expiredUrl')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $expiredUrl = null;

    /**
     * Whether to archive this domain. `false` will unarchive a previously archived domain.
     *
     * @var ?bool $archived
     */
    #[\JMS\Serializer\Annotation\SerializedName('archived')]
    #[\JMS\Serializer\Annotation\Type('bool')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?bool $archived = null;

    /**
     * Provide context to your teammates in the link creation modal by showing them an example of a link to be shortened.
     *
     * @var ?string $placeholder
     */
    #[\JMS\Serializer\Annotation\SerializedName('placeholder')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $placeholder = null;

    public function __construct()
    {
        $this->slug = null;
        $this->expiredUrl = null;
        $this->archived = null;
        $this->placeholder = null;
    }
}