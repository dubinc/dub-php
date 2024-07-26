<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


/** The color of the tag. If not provided, a random color will be used from the list: red, yellow, green, blue, purple, pink, brown. */
enum UpdateTagColor: string
{
    case Red = 'red';
    case Yellow = 'yellow';
    case Green = 'green';
    case Blue = 'blue';
    case Purple = 'purple';
    case Pink = 'pink';
    case Brown = 'brown';
}
