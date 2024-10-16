<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */


declare(strict_types=1);

namespace Dub;


use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

final class PackageServiceProvider extends ServiceProvider implements DeferrableProvider
{
    public function boot(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/services.php',
            'services',
        );
    }

    public function register(): void
    {
        $security = config('services.dub.token');
        $this->app->singleton(
            abstract: Dub::class,
            concrete: fn (): Dub => Dub::builder()->setSecurity(
                $security
            )->build(),
        );
    }
}
