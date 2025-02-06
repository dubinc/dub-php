<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Components;


class WorkspaceSchema
{
    /**
     * The unique ID of the workspace.
     *
     * @var string $id
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('id')]
    public string $id;

    /**
     * The name of the workspace.
     *
     * @var string $name
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('name')]
    public string $name;

    /**
     * The slug of the workspace.
     *
     * @var string $slug
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('slug')]
    public string $slug;

    /**
     * The plan of the workspace.
     *
     * @var Plan $plan
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('plan')]
    #[\Speakeasy\Serializer\Annotation\Type('\Dub\Models\Components\Plan')]
    public Plan $plan;

    /**
     * The date and time when the billing cycle starts for the workspace.
     *
     * @var float $billingCycleStart
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('billingCycleStart')]
    public float $billingCycleStart;

    /**
     * The usage of the workspace.
     *
     * @var float $usage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('usage')]
    public float $usage;

    /**
     * The usage limit of the workspace.
     *
     * @var float $usageLimit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('usageLimit')]
    public float $usageLimit;

    /**
     * The links usage of the workspace.
     *
     * @var float $linksUsage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('linksUsage')]
    public float $linksUsage;

    /**
     * The links limit of the workspace.
     *
     * @var float $linksLimit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('linksLimit')]
    public float $linksLimit;

    /**
     * The dollar amount of tracked revenue in the current billing cycle (in cents).
     *
     * @var float $salesUsage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('salesUsage')]
    public float $salesUsage;

    /**
     * The limit of tracked revenue in the current billing cycle (in cents).
     *
     * @var float $salesLimit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('salesLimit')]
    public float $salesLimit;

    /**
     * The domains limit of the workspace.
     *
     * @var float $domainsLimit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domainsLimit')]
    public float $domainsLimit;

    /**
     * The tags limit of the workspace.
     *
     * @var float $tagsLimit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('tagsLimit')]
    public float $tagsLimit;

    /**
     * The users limit of the workspace.
     *
     * @var float $usersLimit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('usersLimit')]
    public float $usersLimit;

    /**
     * The AI usage of the workspace.
     *
     * @var float $aiUsage
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('aiUsage')]
    public float $aiUsage;

    /**
     * The AI limit of the workspace.
     *
     * @var float $aiLimit
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('aiLimit')]
    public float $aiLimit;

    /**
     * Whether the workspace has conversion tracking enabled automatically for new links (d.to/conversions).
     *
     * @var bool $conversionEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('conversionEnabled')]
    public bool $conversionEnabled;

    /**
     * Whether the workspace has claimed a free .link domain. (dub.link/free)
     *
     * @var bool $dotLinkClaimed
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('dotLinkClaimed')]
    public bool $dotLinkClaimed;

    /**
     * Whether the workspace has Dub Partners enabled.
     *
     * @var bool $partnersEnabled
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('partnersEnabled')]
    public bool $partnersEnabled;

    /**
     * The date and time when the workspace was created.
     *
     * @var string $createdAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('createdAt')]
    public string $createdAt;

    /**
     * The role of the authenticated user in the workspace.
     *
     * @var array<Users> $users
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('users')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Dub\Models\Components\Users>')]
    public array $users;

    /**
     * The domains of the workspace.
     *
     * @var array<Domains> $domains
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('domains')]
    #[\Speakeasy\Serializer\Annotation\Type('array<\Dub\Models\Components\Domains>')]
    public array $domains;

    /**
     * The invite code of the workspace.
     *
     * @var ?string $inviteCode
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('inviteCode')]
    public ?string $inviteCode;

    /**
     * The Stripe ID of the workspace.
     *
     * @var ?string $stripeId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('stripeId')]
    public ?string $stripeId;

    /**
     * The date and time when the payment failed for the workspace.
     *
     * @var ?string $paymentFailedAt
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('paymentFailedAt')]
    public ?string $paymentFailedAt;

    /**
     * The Stripe Connect ID of the workspace.
     *
     * @var ?string $stripeConnectId
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('stripeConnectId')]
    public ?string $stripeConnectId;

    /**
     * The feature flags of the workspace, indicating which features are enabled.
     *
     * @var ?array<string, bool> $flags
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('flags')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, bool>|null')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?array $flags = null;

    /**
     * The miscellaneous key-value store of the workspace.
     *
     * @var ?array<string, mixed> $store
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('store')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string, mixed>|null')]
    public ?array $store;

    /**
     * Specifies hostnames permitted for client-side click tracking.
     *
     * @var ?array<string> $allowedHostnames
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('allowedHostnames')]
    #[\Speakeasy\Serializer\Annotation\Type('array<string>|null')]
    public ?array $allowedHostnames;

    /**
     * The logo of the workspace.
     *
     * @var ?string $logo
     */
    #[\Speakeasy\Serializer\Annotation\SerializedName('logo')]
    #[\Speakeasy\Serializer\Annotation\SkipWhenNull]
    public ?string $logo = null;

    /**
     * @param  string  $id
     * @param  string  $name
     * @param  string  $slug
     * @param  Plan  $plan
     * @param  float  $billingCycleStart
     * @param  float  $usage
     * @param  float  $usageLimit
     * @param  float  $linksUsage
     * @param  float  $linksLimit
     * @param  float  $salesUsage
     * @param  float  $salesLimit
     * @param  float  $domainsLimit
     * @param  float  $tagsLimit
     * @param  float  $usersLimit
     * @param  float  $aiUsage
     * @param  float  $aiLimit
     * @param  bool  $conversionEnabled
     * @param  bool  $dotLinkClaimed
     * @param  bool  $partnersEnabled
     * @param  string  $createdAt
     * @param  array<Users>  $users
     * @param  array<Domains>  $domains
     * @param  ?string  $inviteCode
     * @param  ?string  $stripeId
     * @param  ?string  $paymentFailedAt
     * @param  ?string  $stripeConnectId
     * @param  ?array<string, bool>  $flags
     * @param  ?array<string, mixed>  $store
     * @param  ?array<string>  $allowedHostnames
     * @param  ?string  $logo
     * @phpstan-pure
     */
    public function __construct(string $id, string $name, string $slug, Plan $plan, float $billingCycleStart, float $usage, float $usageLimit, float $linksUsage, float $linksLimit, float $salesUsage, float $salesLimit, float $domainsLimit, float $tagsLimit, float $usersLimit, float $aiUsage, float $aiLimit, bool $conversionEnabled, bool $dotLinkClaimed, bool $partnersEnabled, string $createdAt, array $users, array $domains, ?string $inviteCode = null, ?string $stripeId = null, ?string $paymentFailedAt = null, ?string $stripeConnectId = null, ?array $flags = null, ?array $store = null, ?array $allowedHostnames = null, ?string $logo = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->slug = $slug;
        $this->plan = $plan;
        $this->billingCycleStart = $billingCycleStart;
        $this->usage = $usage;
        $this->usageLimit = $usageLimit;
        $this->linksUsage = $linksUsage;
        $this->linksLimit = $linksLimit;
        $this->salesUsage = $salesUsage;
        $this->salesLimit = $salesLimit;
        $this->domainsLimit = $domainsLimit;
        $this->tagsLimit = $tagsLimit;
        $this->usersLimit = $usersLimit;
        $this->aiUsage = $aiUsage;
        $this->aiLimit = $aiLimit;
        $this->conversionEnabled = $conversionEnabled;
        $this->dotLinkClaimed = $dotLinkClaimed;
        $this->partnersEnabled = $partnersEnabled;
        $this->createdAt = $createdAt;
        $this->users = $users;
        $this->domains = $domains;
        $this->inviteCode = $inviteCode;
        $this->stripeId = $stripeId;
        $this->paymentFailedAt = $paymentFailedAt;
        $this->stripeConnectId = $stripeConnectId;
        $this->flags = $flags;
        $this->store = $store;
        $this->allowedHostnames = $allowedHostnames;
        $this->logo = $logo;
    }
}