<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub;

/**
 * DubBuilder is used to configure and build an instance of the SDK.
 */
class DubBuilder
{
    public function __construct(
        private SDKConfiguration $sdkConfig = new SDKConfiguration(),
    ) {
    }

    /**
     * setClient allows setting a custom Guzzle client for the SDK to make requests with.
     *
     * @param  \GuzzleHttp\ClientInterface  $client
     * @return DubBuilder
     */
    public function setClient(\GuzzleHttp\ClientInterface $client): DubBuilder
    {
        $this->sdkConfig->defaultClient = $client;

        return $this;
    }

    /**
     * setSecurity is used to configure the security required for the SDK.
     *
     * @param  string  $token
     * @return DubBuilder
     */
    public function setSecurity(string $token): DubBuilder
    {
        $security = new Models\Components\Security();
        $security->token = $token;
        $this->sdkConfig->security = $security;

        return $this;
    }

    /**
     * setSecuritySource is usd to configure the security required for the SDK.
     * unlike setSecurity, setSecuritySource accepts a closure that will be called to retrieve the security information.
     *
     * @param  pure-Closure(): string  $securitySource
     * @return DubBuilder
     */
    public function setSecuritySource(\Closure $securitySource): DubBuilder
    {
        $this->sdkConfig->securitySource = $securitySource;

        return $this;
    }

    /**
     * setServerUrl is used to configure the server URL for the SDK, and optionally template any parameters in the URL.
     *
     * @param  string  $serverUrl
     * @param  array<string, string>  $params
     * @return DubBuilder
     */
    public function setServerUrl(string $serverUrl, ?array $params = null): DubBuilder
    {
        $this->sdkConfig->serverUrl = Utils\Utils::templateUrl($serverUrl, $params);

        return $this;
    }

    /**
     * setServer is used to configure the server for the SDK
     *
     * @param  int  $serverIdx
     * @return DubBuilder
     */
    public function setServerIndex(int $serverIdx): DubBuilder
    {
        $this->sdkConfig->serverIndex = $serverIdx;

        return $this;
    }
    /**
     * setWorkspaceId is used to configure the workspaceId parameter for the SDK.
     *
     * @param  string  $workspaceId
     * @return DubBuilder
     */
    public function setWorkspaceId(string $workspaceId): DubBuilder
    {
        if (! array_key_exists('queryParam', $this->sdkConfig->globals['parameters'])) {
            $this->sdkConfig->globals['parameters']['queryParam'] = [];
        }

        $this->sdkConfig->globals['parameters']['queryParam']['workspaceId'] = $workspaceId;

        return $this;
    }
    /**
     * setProjectSlug is used to configure the projectSlug parameter for the SDK.
     *
     * @param  string  $projectSlug
     * @return DubBuilder
     */
    public function setProjectSlug(string $projectSlug): DubBuilder
    {
        if (! array_key_exists('queryParam', $this->sdkConfig->globals['parameters'])) {
            $this->sdkConfig->globals['parameters']['queryParam'] = [];
        }

        $this->sdkConfig->globals['parameters']['queryParam']['projectSlug'] = $projectSlug;

        return $this;
    }

    /**
     * build is used to build the SDK with any of the configured options.
     *
     * @return Dub
     */
    public function build(): Dub
    {
        if ($this->sdkConfig->defaultClient === null) {
            $this->sdkConfig->defaultClient = new \GuzzleHttp\Client([
                'timeout' => 60,
            ]);
        }
        if ($this->sdkConfig->hasSecurity()) {
            $this->sdkConfig->securityClient = Utils\Utils::configureSecurityClient($this->sdkConfig->defaultClient, $this->sdkConfig->getSecurity());
        }
        if ($this->sdkConfig->securityClient === null) {
            $this->sdkConfig->securityClient = $this->sdkConfig->defaultClient;
        }

        return new Dub($this->sdkConfig);
    }
}