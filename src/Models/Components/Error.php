<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class Error
{
    /**
     * A short code indicating the error code returned.
     *
     * @var \Dub\Models\Components\Code $code
     */
    #[\JMS\Serializer\Annotation\SerializedName('code')]
    #[\JMS\Serializer\Annotation\Type('enum<Dub\Models\Components\Code>')]
    public Code $code;

    /**
     * A human readable explanation of what went wrong.
     *
     * @var string $message
     */
    #[\JMS\Serializer\Annotation\SerializedName('message')]
    #[\JMS\Serializer\Annotation\Type('string')]
    public string $message;

    /**
     * A link to our documentation with more details about this error code
     *
     * @var ?string $docUrl
     */
    #[\JMS\Serializer\Annotation\SerializedName('doc_url')]
    #[\JMS\Serializer\Annotation\Type('string')]
    #[\JMS\Serializer\Annotation\SkipWhenEmpty]
    public ?string $docUrl = null;

    public function __construct()
    {
        $this->code = \Dub\Models\Components\Code::BadRequest;
        $this->message = '';
        $this->docUrl = null;
    }
}