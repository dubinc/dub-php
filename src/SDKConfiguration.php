<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub;
use Dub\Utils\Retry\RetryConfig;

class SDKConfiguration
{
    public ?\GuzzleHttp\ClientInterface $client = null;

    public Hooks\SDKHooks $hooks;
    public ?Models\Components\Security $security = null;

    /** @var pure-Closure(): string */
    public ?\Closure $securitySource = null;
    public string $serverUrl = '';

    public int $serverIndex = 0;

    public string $language = 'php';

    public string $openapiDocVersion = '0.0.1';

    public string $sdkVersion = '0.11.19';

    public string $genVersion = '2.495.1';

    public string $userAgent = 'speakeasy-sdk/php 0.11.19 2.495.1 0.0.1 dub/dub-php';

    public ?RetryConfig $retryConfig = null;

    public function __construct()
    {
        $this->hooks = new Hooks\SDKHooks();
    }

    public function getServerUrl(): string
    {

        if ($this->serverUrl !== '') {
            return $this->serverUrl;
        }

        if (isset(Dub::SERVERS[$this->serverIndex])) {
            return Dub::SERVERS[$this->serverIndex];
        } else {
            throw new \OutOfBoundsException('Server index '.$this->serverIndex.' is out of bounds');
        }
    }
    public function hasSecurity(): bool
    {
        return $this->security !== null || $this->securitySource !== null;
    }

    public function getSecurity(): ?Models\Components\Security
    {
        if ($this->securitySource !== null) {
            $security = new Models\Components\Security(
                token: $this->securitySource->call($this)
            );

            return $security;
        } else {
            return $this->security;
        }
    }

    /**
     * @return Utils\ServerDetails
     */
    public function getServerDetails(): Utils\ServerDetails
    {
        if ($this->serverUrl !== '') {
            return new Utils\ServerDetails(rtrim($this->serverUrl, '/'), []);
        }
        if ($this->serverIndex === null) {
            $this->serverIndex = 0;
        }

        return new Utils\ServerDetails(Dub::SERVERS[$this->serverIndex], []);

    }

    public function getTemplatedServerUrl(): string
    {
        if ($this->serverUrl) {
            return Utils\Utils::templateUrl($this->serverUrl.trim('/'), []);
        }

        return Utils\Utils::templateUrl($this->getServerUrl(), []);
    }

    public function initHooks(\GuzzleHttp\ClientInterface $client): \GuzzleHttp\ClientInterface
    {
        $preHooksUrl = $this->getTemplatedServerUrl();
        $ret = $this->hooks->sdkInit($preHooksUrl, $client);
        if ($preHooksUrl != $ret->url) {
            $this->serverUrl = $ret->url;
        }

        return $ret->client;
    }
}
