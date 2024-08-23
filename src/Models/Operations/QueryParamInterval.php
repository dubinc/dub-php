<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** The interval to retrieve analytics for. Takes precedence over start and end. If undefined, defaults to 24h. */
enum QueryParamInterval: string
{
    case TwentyFourh = '24h';
    case Sevend = '7d';
    case Thirtyd = '30d';
    case Ninetyd = '90d';
    case Ytd = 'ytd';
    case Oney = '1y';
    case All = 'all';
    case AllUnfiltered = 'all_unfiltered';
}