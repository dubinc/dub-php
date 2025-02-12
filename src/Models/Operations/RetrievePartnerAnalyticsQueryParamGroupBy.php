<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** The parameter to group the analytics data points by. Defaults to `count` if undefined. */
enum RetrievePartnerAnalyticsQueryParamGroupBy: string
{
    case TopLinks = 'top_links';
    case Timeseries = 'timeseries';
    case Count = 'count';
}
