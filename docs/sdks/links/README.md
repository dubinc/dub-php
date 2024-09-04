# Links

## Overview

### Available Operations

* [list](#list) - Retrieve a list of links
* [create](#create) - Create a new link
* [count](#count) - Retrieve links count
* [get](#get) - Retrieve a link
* [delete](#delete) - Delete a link
* [update](#update) - Update a link
* [createMany](#createmany) - Bulk create links
* [deleteMany](#deletemany) - Bulk delete links
* [updateMany](#updatemany) - Bulk update links
* [upsert](#upsert) - Upsert a link

## list

Retrieve a paginated list of links for the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetLinksRequest(
        domain: 'smug-bow.name',
        tagId: '<value>',
        tagIds: '<value>',
        tagNames: [
            '<value>',
        ],
        search: '<value>',
        userId: '<value>',
        showArchived: false,
        withTags: false,
        sort: Operations\Sort::CreatedAt,
        page: 1,
        pageSize: 50,
    );
    $response = $sdk->links->list($request);

    if ($response->linkSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `$request`                                                               | [Operations\GetLinksRequest](../../Models/Operations/GetLinksRequest.md) | :heavy_check_mark:                                                       | The request object to use for the request.                               |

### Response

**[?Operations\GetLinksResponse](../../Models/Operations/GetLinksResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |


## create

Create a new link for the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateLinkRequestBody(
        url: 'https://google.com',
        domain: 'lighthearted-kilogram.name',
        key: '<key>',
        externalId: '123456',
        prefix: '<value>',
        trackConversion: false,
        archived: false,
        publicStats: false,
        tagId: '<value>',
        tagIds: [
            '<value>',
        ],
        tagNames: '<value>',
        comments: '<value>',
        expiresAt: '<value>',
        expiredUrl: '<value>',
        password: 'klDuL1dlrnUXohO',
        proxy: false,
        title: '<value>',
        description: 'User-friendly multi-state frame',
        image: 'https://loremflickr.com/640/480',
        video: '<value>',
        rewrite: false,
        ios: '<value>',
        android: '<value>',
        geo: new Components\LinkGeoTargeting(
            af: '<value>',
            al: '<value>',
            dz: '<value>',
            as: '<value>',
            ad: '<value>',
            ao: '<value>',
            ai: '<value>',
            aq: '<value>',
            ag: '<value>',
            ar: '<value>',
            am: '<value>',
            aw: '<value>',
            au: '<value>',
            at: '<value>',
            az: '<value>',
            bs: '<value>',
            bh: '<value>',
            bd: '<value>',
            bb: '<value>',
            by: '<value>',
            be: '<value>',
            bz: '<value>',
            bj: '<value>',
            bm: '<value>',
            bt: '<value>',
            bo: '<value>',
            ba: '<value>',
            bw: '<value>',
            bv: '<value>',
            br: '<value>',
            io: '<value>',
            bn: '<value>',
            bg: '<value>',
            bf: '<value>',
            bi: '<value>',
            kh: '<value>',
            cm: '<value>',
            ca: '<value>',
            cv: '<value>',
            ky: '<value>',
            cf: '<value>',
            td: '<value>',
            cl: '<value>',
            cn: '<value>',
            cx: '<value>',
            cc: '<value>',
            co: '<value>',
            km: '<value>',
            cg: '<value>',
            cd: '<value>',
            ck: '<value>',
            cr: '<value>',
            ci: '<value>',
            hr: '<value>',
            cu: '<value>',
            cy: '<value>',
            cz: '<value>',
            dk: '<value>',
            dj: '<value>',
            dm: '<value>',
            do: '<value>',
            ec: '<value>',
            eg: '<value>',
            sv: '<value>',
            gq: '<value>',
            er: '<value>',
            ee: '<value>',
            et: '<value>',
            fk: '<value>',
            fo: '<value>',
            fj: '<value>',
            fi: '<value>',
            fr: '<value>',
            gf: '<value>',
            pf: '<value>',
            tf: '<value>',
            ga: '<value>',
            gm: '<value>',
            ge: '<value>',
            de: '<value>',
            gh: '<value>',
            gi: '<value>',
            gr: '<value>',
            gl: '<value>',
            gd: '<value>',
            gp: '<value>',
            gu: '<value>',
            gt: '<value>',
            gn: '<value>',
            gw: '<value>',
            gy: '<value>',
            ht: '<value>',
            hm: '<value>',
            va: '<value>',
            hn: '<value>',
            hk: '<value>',
            hu: '<value>',
            is: '<value>',
            in: '<value>',
            id: '<id>',
            ir: '<value>',
            iq: '<value>',
            ie: '<value>',
            il: '<value>',
            it: '<value>',
            jm: '<value>',
            jp: '<value>',
            jo: '<value>',
            kz: '<value>',
            ke: '<value>',
            ki: '<value>',
            kp: '<value>',
            kr: '<value>',
            kw: '<value>',
            kg: '<value>',
            la: '<value>',
            lv: '<value>',
            lb: '<value>',
            ls: '<value>',
            lr: '<value>',
            ly: '<value>',
            li: '<value>',
            lt: '<value>',
            lu: '<value>',
            mo: '<value>',
            mg: '<value>',
            mw: '<value>',
            my: '<value>',
            mv: '<value>',
            ml: '<value>',
            mt: '<value>',
            mh: '<value>',
            mq: '<value>',
            mr: '<value>',
            mu: '<value>',
            yt: '<value>',
            mx: '<value>',
            fm: '<value>',
            md: '<value>',
            mc: '<value>',
            mn: '<value>',
            ms: '<value>',
            ma: '<value>',
            mz: '<value>',
            mm: '<value>',
            na: '<value>',
            nr: '<value>',
            np: '<value>',
            nl: '<value>',
            nc: '<value>',
            nz: '<value>',
            ni: '<value>',
            ne: '<value>',
            ng: '<value>',
            nu: '<value>',
            nf: '<value>',
            mk: '<value>',
            mp: '<value>',
            no: '<value>',
            om: '<value>',
            pk: '<value>',
            pw: '<value>',
            ps: '<value>',
            pa: '<value>',
            pg: '<value>',
            py: '<value>',
            pe: '<value>',
            ph: '<value>',
            pn: '<value>',
            pl: '<value>',
            pt: '<value>',
            pr: '<value>',
            qa: '<value>',
            re: '<value>',
            ro: '<value>',
            ru: '<value>',
            rw: '<value>',
            sh: '<value>',
            kn: '<value>',
            lc: '<value>',
            pm: '<value>',
            vc: '<value>',
            ws: '<value>',
            sm: '<value>',
            st: '<value>',
            sa: '<value>',
            sn: '<value>',
            sc: '<value>',
            sl: '<value>',
            sg: '<value>',
            sk: '<value>',
            si: '<value>',
            sb: '<value>',
            so: '<value>',
            za: '<value>',
            gs: '<value>',
            es: '<value>',
            lk: '<value>',
            sd: '<value>',
            sr: '<value>',
            sj: '<value>',
            sz: '<value>',
            se: '<value>',
            ch: '<value>',
            sy: '<value>',
            tw: '<value>',
            tj: '<value>',
            tz: '<value>',
            th: '<value>',
            tl: '<value>',
            tg: '<value>',
            tk: '<value>',
            to: '<value>',
            tt: '<value>',
            tn: '<value>',
            tr: '<value>',
            tm: '<value>',
            tc: '<value>',
            tv: '<value>',
            ug: '<value>',
            ua: '<value>',
            ae: '<value>',
            gb: '<value>',
            us: '<value>',
            um: '<value>',
            uy: '<value>',
            uz: '<value>',
            vu: '<value>',
            ve: '<value>',
            vn: '<value>',
            vg: '<value>',
            vi: '<value>',
            wf: '<value>',
            eh: '<value>',
            ye: '<value>',
            zm: '<value>',
            zw: '<value>',
            ax: '<value>',
            bq: '<value>',
            cw: '<value>',
            gg: '<value>',
            im: '<value>',
            je: '<value>',
            me: '<value>',
            bl: '<value>',
            mf: '<value>',
            rs: '<value>',
            sx: '<value>',
            ss: '<value>',
            xk: '<value>',
        ),
        doIndex: false,
        utmSource: '<value>',
        utmMedium: '<value>',
        utmCampaign: '<value>',
        utmTerm: '<value>',
        utmContent: '<value>',
    );
    $response = $sdk->links->create($request);

    if ($response->linkSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateLinkRequestBody](../../Models/Operations/CreateLinkRequestBody.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateLinkResponse](../../Models/Operations/CreateLinkResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |


## count

Retrieve the number of links for the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetLinksCountRequest(
        domain: 'false-epauliere.info',
        tagId: '<value>',
        tagIds: [
            '<value>',
        ],
        tagNames: [
            '<value>',
        ],
        search: '<value>',
        userId: '<value>',
        showArchived: false,
        withTags: false,
        groupBy: Operations\Two::TagId,
    );
    $response = $sdk->links->count($request);

    if ($response->number !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetLinksCountRequest](../../Models/Operations/GetLinksCountRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetLinksCountResponse](../../Models/Operations/GetLinksCountResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |


## get

Retrieve the info for a link.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {

    $response = $sdk->links->get('<value>', '<value>', 'clux0rgak00011...', 'ext_123456');

    if ($response->linkSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     | Example                                                                                                         |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `domain`                                                                                                        | *string*                                                                                                        | :heavy_minus_sign:                                                                                              | N/A                                                                                                             |                                                                                                                 |
| `key`                                                                                                           | *string*                                                                                                        | :heavy_minus_sign:                                                                                              | The key of the link to retrieve. E.g. for `d.to/github`, the key is `github`.                                   |                                                                                                                 |
| `linkId`                                                                                                        | *string*                                                                                                        | :heavy_minus_sign:                                                                                              | The unique ID of the short link.                                                                                | clux0rgak00011...                                                                                               |
| `externalId`                                                                                                    | *string*                                                                                                        | :heavy_minus_sign:                                                                                              | This is the ID of the link in the your database. Must be prefixed with `ext_` when passed as a query parameter. | ext_123456                                                                                                      |

### Response

**[?Operations\GetLinkInfoResponse](../../Models/Operations/GetLinkInfoResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |


## delete

Delete a link for the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {

    $response = $sdk->links->delete('<value>');

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `linkId`                                                                                                                              | *string*                                                                                                                              | :heavy_check_mark:                                                                                                                    | The id of the link to delete. You may use either `linkId` (obtained via `/links/info` endpoint) or `externalId` prefixed with `ext_`. |

### Response

**[?Operations\DeleteLinkResponse](../../Models/Operations/DeleteLinkResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |


## update

Update a link for the authenticated workspace. If there's no change, returns it as it is.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $requestBody = new Operations\UpdateLinkRequestBody(
        url: 'https://google.com',
        domain: 'tidy-amazon.name',
        key: '<key>',
        externalId: '123456',
        prefix: '<value>',
        trackConversion: false,
        archived: false,
        publicStats: false,
        tagId: '<value>',
        tagIds: '["clux0rgak00011..."]',
        tagNames: '<value>',
        comments: '<value>',
        expiresAt: '<value>',
        expiredUrl: '<value>',
        password: 'daOKvPKDk8CkuAM',
        proxy: false,
        title: '<value>',
        description: 'Mandatory real-time migration',
        image: 'https://loremflickr.com/640/480',
        video: '<value>',
        rewrite: false,
        ios: '<value>',
        android: '<value>',
        geo: new Components\LinkGeoTargeting(
            af: '<value>',
            al: '<value>',
            dz: '<value>',
            as: '<value>',
            ad: '<value>',
            ao: '<value>',
            ai: '<value>',
            aq: '<value>',
            ag: '<value>',
            ar: '<value>',
            am: '<value>',
            aw: '<value>',
            au: '<value>',
            at: '<value>',
            az: '<value>',
            bs: '<value>',
            bh: '<value>',
            bd: '<value>',
            bb: '<value>',
            by: '<value>',
            be: '<value>',
            bz: '<value>',
            bj: '<value>',
            bm: '<value>',
            bt: '<value>',
            bo: '<value>',
            ba: '<value>',
            bw: '<value>',
            bv: '<value>',
            br: '<value>',
            io: '<value>',
            bn: '<value>',
            bg: '<value>',
            bf: '<value>',
            bi: '<value>',
            kh: '<value>',
            cm: '<value>',
            ca: '<value>',
            cv: '<value>',
            ky: '<value>',
            cf: '<value>',
            td: '<value>',
            cl: '<value>',
            cn: '<value>',
            cx: '<value>',
            cc: '<value>',
            co: '<value>',
            km: '<value>',
            cg: '<value>',
            cd: '<value>',
            ck: '<value>',
            cr: '<value>',
            ci: '<value>',
            hr: '<value>',
            cu: '<value>',
            cy: '<value>',
            cz: '<value>',
            dk: '<value>',
            dj: '<value>',
            dm: '<value>',
            do: '<value>',
            ec: '<value>',
            eg: '<value>',
            sv: '<value>',
            gq: '<value>',
            er: '<value>',
            ee: '<value>',
            et: '<value>',
            fk: '<value>',
            fo: '<value>',
            fj: '<value>',
            fi: '<value>',
            fr: '<value>',
            gf: '<value>',
            pf: '<value>',
            tf: '<value>',
            ga: '<value>',
            gm: '<value>',
            ge: '<value>',
            de: '<value>',
            gh: '<value>',
            gi: '<value>',
            gr: '<value>',
            gl: '<value>',
            gd: '<value>',
            gp: '<value>',
            gu: '<value>',
            gt: '<value>',
            gn: '<value>',
            gw: '<value>',
            gy: '<value>',
            ht: '<value>',
            hm: '<value>',
            va: '<value>',
            hn: '<value>',
            hk: '<value>',
            hu: '<value>',
            is: '<value>',
            in: '<value>',
            id: '<id>',
            ir: '<value>',
            iq: '<value>',
            ie: '<value>',
            il: '<value>',
            it: '<value>',
            jm: '<value>',
            jp: '<value>',
            jo: '<value>',
            kz: '<value>',
            ke: '<value>',
            ki: '<value>',
            kp: '<value>',
            kr: '<value>',
            kw: '<value>',
            kg: '<value>',
            la: '<value>',
            lv: '<value>',
            lb: '<value>',
            ls: '<value>',
            lr: '<value>',
            ly: '<value>',
            li: '<value>',
            lt: '<value>',
            lu: '<value>',
            mo: '<value>',
            mg: '<value>',
            mw: '<value>',
            my: '<value>',
            mv: '<value>',
            ml: '<value>',
            mt: '<value>',
            mh: '<value>',
            mq: '<value>',
            mr: '<value>',
            mu: '<value>',
            yt: '<value>',
            mx: '<value>',
            fm: '<value>',
            md: '<value>',
            mc: '<value>',
            mn: '<value>',
            ms: '<value>',
            ma: '<value>',
            mz: '<value>',
            mm: '<value>',
            na: '<value>',
            nr: '<value>',
            np: '<value>',
            nl: '<value>',
            nc: '<value>',
            nz: '<value>',
            ni: '<value>',
            ne: '<value>',
            ng: '<value>',
            nu: '<value>',
            nf: '<value>',
            mk: '<value>',
            mp: '<value>',
            no: '<value>',
            om: '<value>',
            pk: '<value>',
            pw: '<value>',
            ps: '<value>',
            pa: '<value>',
            pg: '<value>',
            py: '<value>',
            pe: '<value>',
            ph: '<value>',
            pn: '<value>',
            pl: '<value>',
            pt: '<value>',
            pr: '<value>',
            qa: '<value>',
            re: '<value>',
            ro: '<value>',
            ru: '<value>',
            rw: '<value>',
            sh: '<value>',
            kn: '<value>',
            lc: '<value>',
            pm: '<value>',
            vc: '<value>',
            ws: '<value>',
            sm: '<value>',
            st: '<value>',
            sa: '<value>',
            sn: '<value>',
            sc: '<value>',
            sl: '<value>',
            sg: '<value>',
            sk: '<value>',
            si: '<value>',
            sb: '<value>',
            so: '<value>',
            za: '<value>',
            gs: '<value>',
            es: '<value>',
            lk: '<value>',
            sd: '<value>',
            sr: '<value>',
            sj: '<value>',
            sz: '<value>',
            se: '<value>',
            ch: '<value>',
            sy: '<value>',
            tw: '<value>',
            tj: '<value>',
            tz: '<value>',
            th: '<value>',
            tl: '<value>',
            tg: '<value>',
            tk: '<value>',
            to: '<value>',
            tt: '<value>',
            tn: '<value>',
            tr: '<value>',
            tm: '<value>',
            tc: '<value>',
            tv: '<value>',
            ug: '<value>',
            ua: '<value>',
            ae: '<value>',
            gb: '<value>',
            us: '<value>',
            um: '<value>',
            uy: '<value>',
            uz: '<value>',
            vu: '<value>',
            ve: '<value>',
            vn: '<value>',
            vg: '<value>',
            vi: '<value>',
            wf: '<value>',
            eh: '<value>',
            ye: '<value>',
            zm: '<value>',
            zw: '<value>',
            ax: '<value>',
            bq: '<value>',
            cw: '<value>',
            gg: '<value>',
            im: '<value>',
            je: '<value>',
            me: '<value>',
            bl: '<value>',
            mf: '<value>',
            rs: '<value>',
            sx: '<value>',
            ss: '<value>',
            xk: '<value>',
        ),
        doIndex: false,
        utmSource: '<value>',
        utmMedium: '<value>',
        utmCampaign: '<value>',
        utmTerm: '<value>',
        utmContent: '<value>',
    );
    $response = $sdk->links->update('<value>', $requestBody);

    if ($response->linkSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `linkId`                                                                                                                              | *string*                                                                                                                              | :heavy_check_mark:                                                                                                                    | The id of the link to update. You may use either `linkId` (obtained via `/links/info` endpoint) or `externalId` prefixed with `ext_`. |
| `requestBody`                                                                                                                         | [Operations\UpdateLinkRequestBody](../../Models/Operations/UpdateLinkRequestBody.md)                                                  | :heavy_minus_sign:                                                                                                                    | N/A                                                                                                                                   |

### Response

**[?Operations\UpdateLinkResponse](../../Models/Operations/UpdateLinkResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |


## createMany

Bulk create up to 100 links for the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = [
        new Operations\RequestBody,
    ];
    $response = $sdk->links->createMany($request);

    if ($response->linkSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array](../../.md)                         | :heavy_check_mark:                         | The request object to use for the request. |

### Response

**[?Operations\BulkCreateLinksResponse](../../Models/Operations/BulkCreateLinksResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |


## deleteMany

Bulk delete up to 100 links for the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {

    $response = $sdk->links->deleteMany('clux0rgak00011...,clux0rgak00022...');

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                         | Type                                                                                              | Required                                                                                          | Description                                                                                       | Example                                                                                           |
| ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------- |
| `linkIds`                                                                                         | *string*                                                                                          | :heavy_check_mark:                                                                                | Comma-separated list of link IDs to delete. Maximum of 100 IDs. Non-existing IDs will be ignored. | clux0rgak00011...,clux0rgak00022...                                                               |

### Response

**[?Operations\BulkDeleteLinksResponse](../../Models/Operations/BulkDeleteLinksResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |


## updateMany

Bulk update up to 100 links with the same data for the authenticated workspace.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\BulkUpdateLinksRequestBody(
        linkIds: [
            '<value>',
        ],
        data: new Operations\Data(
            url: 'https://google.com',
            trackConversion: false,
            archived: false,
            publicStats: false,
            tagId: '<value>',
            tagIds: '["clux0rgak00011..."]',
            tagNames: '<value>',
            comments: '<value>',
            expiresAt: '<value>',
            expiredUrl: '<value>',
            password: 'WDSvXDvs2q1hzWy',
            proxy: false,
            title: '<value>',
            description: 'Diverse holistic internet solution',
            image: 'https://loremflickr.com/640/480',
            video: '<value>',
            rewrite: false,
            ios: '<value>',
            android: '<value>',
            geo: new Components\LinkGeoTargeting(
                af: '<value>',
                al: '<value>',
                dz: '<value>',
                as: '<value>',
                ad: '<value>',
                ao: '<value>',
                ai: '<value>',
                aq: '<value>',
                ag: '<value>',
                ar: '<value>',
                am: '<value>',
                aw: '<value>',
                au: '<value>',
                at: '<value>',
                az: '<value>',
                bs: '<value>',
                bh: '<value>',
                bd: '<value>',
                bb: '<value>',
                by: '<value>',
                be: '<value>',
                bz: '<value>',
                bj: '<value>',
                bm: '<value>',
                bt: '<value>',
                bo: '<value>',
                ba: '<value>',
                bw: '<value>',
                bv: '<value>',
                br: '<value>',
                io: '<value>',
                bn: '<value>',
                bg: '<value>',
                bf: '<value>',
                bi: '<value>',
                kh: '<value>',
                cm: '<value>',
                ca: '<value>',
                cv: '<value>',
                ky: '<value>',
                cf: '<value>',
                td: '<value>',
                cl: '<value>',
                cn: '<value>',
                cx: '<value>',
                cc: '<value>',
                co: '<value>',
                km: '<value>',
                cg: '<value>',
                cd: '<value>',
                ck: '<value>',
                cr: '<value>',
                ci: '<value>',
                hr: '<value>',
                cu: '<value>',
                cy: '<value>',
                cz: '<value>',
                dk: '<value>',
                dj: '<value>',
                dm: '<value>',
                do: '<value>',
                ec: '<value>',
                eg: '<value>',
                sv: '<value>',
                gq: '<value>',
                er: '<value>',
                ee: '<value>',
                et: '<value>',
                fk: '<value>',
                fo: '<value>',
                fj: '<value>',
                fi: '<value>',
                fr: '<value>',
                gf: '<value>',
                pf: '<value>',
                tf: '<value>',
                ga: '<value>',
                gm: '<value>',
                ge: '<value>',
                de: '<value>',
                gh: '<value>',
                gi: '<value>',
                gr: '<value>',
                gl: '<value>',
                gd: '<value>',
                gp: '<value>',
                gu: '<value>',
                gt: '<value>',
                gn: '<value>',
                gw: '<value>',
                gy: '<value>',
                ht: '<value>',
                hm: '<value>',
                va: '<value>',
                hn: '<value>',
                hk: '<value>',
                hu: '<value>',
                is: '<value>',
                in: '<value>',
                id: '<id>',
                ir: '<value>',
                iq: '<value>',
                ie: '<value>',
                il: '<value>',
                it: '<value>',
                jm: '<value>',
                jp: '<value>',
                jo: '<value>',
                kz: '<value>',
                ke: '<value>',
                ki: '<value>',
                kp: '<value>',
                kr: '<value>',
                kw: '<value>',
                kg: '<value>',
                la: '<value>',
                lv: '<value>',
                lb: '<value>',
                ls: '<value>',
                lr: '<value>',
                ly: '<value>',
                li: '<value>',
                lt: '<value>',
                lu: '<value>',
                mo: '<value>',
                mg: '<value>',
                mw: '<value>',
                my: '<value>',
                mv: '<value>',
                ml: '<value>',
                mt: '<value>',
                mh: '<value>',
                mq: '<value>',
                mr: '<value>',
                mu: '<value>',
                yt: '<value>',
                mx: '<value>',
                fm: '<value>',
                md: '<value>',
                mc: '<value>',
                mn: '<value>',
                ms: '<value>',
                ma: '<value>',
                mz: '<value>',
                mm: '<value>',
                na: '<value>',
                nr: '<value>',
                np: '<value>',
                nl: '<value>',
                nc: '<value>',
                nz: '<value>',
                ni: '<value>',
                ne: '<value>',
                ng: '<value>',
                nu: '<value>',
                nf: '<value>',
                mk: '<value>',
                mp: '<value>',
                no: '<value>',
                om: '<value>',
                pk: '<value>',
                pw: '<value>',
                ps: '<value>',
                pa: '<value>',
                pg: '<value>',
                py: '<value>',
                pe: '<value>',
                ph: '<value>',
                pn: '<value>',
                pl: '<value>',
                pt: '<value>',
                pr: '<value>',
                qa: '<value>',
                re: '<value>',
                ro: '<value>',
                ru: '<value>',
                rw: '<value>',
                sh: '<value>',
                kn: '<value>',
                lc: '<value>',
                pm: '<value>',
                vc: '<value>',
                ws: '<value>',
                sm: '<value>',
                st: '<value>',
                sa: '<value>',
                sn: '<value>',
                sc: '<value>',
                sl: '<value>',
                sg: '<value>',
                sk: '<value>',
                si: '<value>',
                sb: '<value>',
                so: '<value>',
                za: '<value>',
                gs: '<value>',
                es: '<value>',
                lk: '<value>',
                sd: '<value>',
                sr: '<value>',
                sj: '<value>',
                sz: '<value>',
                se: '<value>',
                ch: '<value>',
                sy: '<value>',
                tw: '<value>',
                tj: '<value>',
                tz: '<value>',
                th: '<value>',
                tl: '<value>',
                tg: '<value>',
                tk: '<value>',
                to: '<value>',
                tt: '<value>',
                tn: '<value>',
                tr: '<value>',
                tm: '<value>',
                tc: '<value>',
                tv: '<value>',
                ug: '<value>',
                ua: '<value>',
                ae: '<value>',
                gb: '<value>',
                us: '<value>',
                um: '<value>',
                uy: '<value>',
                uz: '<value>',
                vu: '<value>',
                ve: '<value>',
                vn: '<value>',
                vg: '<value>',
                vi: '<value>',
                wf: '<value>',
                eh: '<value>',
                ye: '<value>',
                zm: '<value>',
                zw: '<value>',
                ax: '<value>',
                bq: '<value>',
                cw: '<value>',
                gg: '<value>',
                im: '<value>',
                je: '<value>',
                me: '<value>',
                bl: '<value>',
                mf: '<value>',
                rs: '<value>',
                sx: '<value>',
                ss: '<value>',
                xk: '<value>',
            ),
            doIndex: false,
            utmSource: '<value>',
            utmMedium: '<value>',
            utmCampaign: '<value>',
            utmTerm: '<value>',
            utmContent: '<value>',
        ),
    );
    $response = $sdk->links->updateMany($request);

    if ($response->linkSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\BulkUpdateLinksRequestBody](../../Models/Operations/BulkUpdateLinksRequestBody.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\BulkUpdateLinksResponse](../../Models/Operations/BulkUpdateLinksResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |


## upsert

Upsert a link for the authenticated workspace by its URL. If a link with the same URL already exists, return it (or update it if there are any changes). Otherwise, a new link will be created.

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpsertLinkRequestBody(
        url: 'https://google.com',
        domain: 'monthly-hometown.info',
        key: '<key>',
        externalId: '123456',
        prefix: '<value>',
        trackConversion: false,
        archived: false,
        publicStats: false,
        tagId: '<value>',
        tagIds: [
            '<value>',
        ],
        tagNames: '<value>',
        comments: '<value>',
        expiresAt: '<value>',
        expiredUrl: '<value>',
        password: 'Ng7iwZDcrQrPcHB',
        proxy: false,
        title: '<value>',
        description: 'Organic asynchronous firmware',
        image: 'https://loremflickr.com/640/480',
        video: '<value>',
        rewrite: false,
        ios: '<value>',
        android: '<value>',
        geo: new Components\LinkGeoTargeting(
            af: '<value>',
            al: '<value>',
            dz: '<value>',
            as: '<value>',
            ad: '<value>',
            ao: '<value>',
            ai: '<value>',
            aq: '<value>',
            ag: '<value>',
            ar: '<value>',
            am: '<value>',
            aw: '<value>',
            au: '<value>',
            at: '<value>',
            az: '<value>',
            bs: '<value>',
            bh: '<value>',
            bd: '<value>',
            bb: '<value>',
            by: '<value>',
            be: '<value>',
            bz: '<value>',
            bj: '<value>',
            bm: '<value>',
            bt: '<value>',
            bo: '<value>',
            ba: '<value>',
            bw: '<value>',
            bv: '<value>',
            br: '<value>',
            io: '<value>',
            bn: '<value>',
            bg: '<value>',
            bf: '<value>',
            bi: '<value>',
            kh: '<value>',
            cm: '<value>',
            ca: '<value>',
            cv: '<value>',
            ky: '<value>',
            cf: '<value>',
            td: '<value>',
            cl: '<value>',
            cn: '<value>',
            cx: '<value>',
            cc: '<value>',
            co: '<value>',
            km: '<value>',
            cg: '<value>',
            cd: '<value>',
            ck: '<value>',
            cr: '<value>',
            ci: '<value>',
            hr: '<value>',
            cu: '<value>',
            cy: '<value>',
            cz: '<value>',
            dk: '<value>',
            dj: '<value>',
            dm: '<value>',
            do: '<value>',
            ec: '<value>',
            eg: '<value>',
            sv: '<value>',
            gq: '<value>',
            er: '<value>',
            ee: '<value>',
            et: '<value>',
            fk: '<value>',
            fo: '<value>',
            fj: '<value>',
            fi: '<value>',
            fr: '<value>',
            gf: '<value>',
            pf: '<value>',
            tf: '<value>',
            ga: '<value>',
            gm: '<value>',
            ge: '<value>',
            de: '<value>',
            gh: '<value>',
            gi: '<value>',
            gr: '<value>',
            gl: '<value>',
            gd: '<value>',
            gp: '<value>',
            gu: '<value>',
            gt: '<value>',
            gn: '<value>',
            gw: '<value>',
            gy: '<value>',
            ht: '<value>',
            hm: '<value>',
            va: '<value>',
            hn: '<value>',
            hk: '<value>',
            hu: '<value>',
            is: '<value>',
            in: '<value>',
            id: '<id>',
            ir: '<value>',
            iq: '<value>',
            ie: '<value>',
            il: '<value>',
            it: '<value>',
            jm: '<value>',
            jp: '<value>',
            jo: '<value>',
            kz: '<value>',
            ke: '<value>',
            ki: '<value>',
            kp: '<value>',
            kr: '<value>',
            kw: '<value>',
            kg: '<value>',
            la: '<value>',
            lv: '<value>',
            lb: '<value>',
            ls: '<value>',
            lr: '<value>',
            ly: '<value>',
            li: '<value>',
            lt: '<value>',
            lu: '<value>',
            mo: '<value>',
            mg: '<value>',
            mw: '<value>',
            my: '<value>',
            mv: '<value>',
            ml: '<value>',
            mt: '<value>',
            mh: '<value>',
            mq: '<value>',
            mr: '<value>',
            mu: '<value>',
            yt: '<value>',
            mx: '<value>',
            fm: '<value>',
            md: '<value>',
            mc: '<value>',
            mn: '<value>',
            ms: '<value>',
            ma: '<value>',
            mz: '<value>',
            mm: '<value>',
            na: '<value>',
            nr: '<value>',
            np: '<value>',
            nl: '<value>',
            nc: '<value>',
            nz: '<value>',
            ni: '<value>',
            ne: '<value>',
            ng: '<value>',
            nu: '<value>',
            nf: '<value>',
            mk: '<value>',
            mp: '<value>',
            no: '<value>',
            om: '<value>',
            pk: '<value>',
            pw: '<value>',
            ps: '<value>',
            pa: '<value>',
            pg: '<value>',
            py: '<value>',
            pe: '<value>',
            ph: '<value>',
            pn: '<value>',
            pl: '<value>',
            pt: '<value>',
            pr: '<value>',
            qa: '<value>',
            re: '<value>',
            ro: '<value>',
            ru: '<value>',
            rw: '<value>',
            sh: '<value>',
            kn: '<value>',
            lc: '<value>',
            pm: '<value>',
            vc: '<value>',
            ws: '<value>',
            sm: '<value>',
            st: '<value>',
            sa: '<value>',
            sn: '<value>',
            sc: '<value>',
            sl: '<value>',
            sg: '<value>',
            sk: '<value>',
            si: '<value>',
            sb: '<value>',
            so: '<value>',
            za: '<value>',
            gs: '<value>',
            es: '<value>',
            lk: '<value>',
            sd: '<value>',
            sr: '<value>',
            sj: '<value>',
            sz: '<value>',
            se: '<value>',
            ch: '<value>',
            sy: '<value>',
            tw: '<value>',
            tj: '<value>',
            tz: '<value>',
            th: '<value>',
            tl: '<value>',
            tg: '<value>',
            tk: '<value>',
            to: '<value>',
            tt: '<value>',
            tn: '<value>',
            tr: '<value>',
            tm: '<value>',
            tc: '<value>',
            tv: '<value>',
            ug: '<value>',
            ua: '<value>',
            ae: '<value>',
            gb: '<value>',
            us: '<value>',
            um: '<value>',
            uy: '<value>',
            uz: '<value>',
            vu: '<value>',
            ve: '<value>',
            vn: '<value>',
            vg: '<value>',
            vi: '<value>',
            wf: '<value>',
            eh: '<value>',
            ye: '<value>',
            zm: '<value>',
            zw: '<value>',
            ax: '<value>',
            bq: '<value>',
            cw: '<value>',
            gg: '<value>',
            im: '<value>',
            je: '<value>',
            me: '<value>',
            bl: '<value>',
            mf: '<value>',
            rs: '<value>',
            sx: '<value>',
            ss: '<value>',
            xk: '<value>',
        ),
        doIndex: false,
        utmSource: '<value>',
        utmMedium: '<value>',
        utmCampaign: '<value>',
        utmTerm: '<value>',
        utmContent: '<value>',
    );
    $response = $sdk->links->upsert($request);

    if ($response->linkSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpsertLinkRequestBody](../../Models/Operations/UpsertLinkRequestBody.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpsertLinkResponse](../../Models/Operations/UpsertLinkResponse.md)**

### Errors

| Error Object                   | Status Code                    | Content Type                   |
| ------------------------------ | ------------------------------ | ------------------------------ |
| Errors\BadRequest              | 400                            | application/json               |
| Errors\Unauthorized            | 401                            | application/json               |
| Errors\Forbidden               | 403                            | application/json               |
| Errors\NotFound                | 404                            | application/json               |
| Errors\Conflict                | 409                            | application/json               |
| Errors\InviteExpired           | 410                            | application/json               |
| Errors\UnprocessableEntity     | 422                            | application/json               |
| Errors\RateLimitExceeded       | 429                            | application/json               |
| Errors\InternalServerError     | 500                            | application/json               |
| Dub\Models\Errors.SDKException | 4xx-5xx                        | */*                            |
