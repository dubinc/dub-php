<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace Dub\Models\Operations;


enum Status: string
{
    case Invited = 'invited';
    case Approved = 'approved';
    case Rejected = 'rejected';
    case Declined = 'declined';
    case Pending = 'pending';
}
