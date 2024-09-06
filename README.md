# dub/dub-php

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>

<!-- Start Summary [summary] -->
## Summary

Dub.co API: Dub is link management infrastructure for companies to create marketing campaigns, link sharing features, and referral programs.
<!-- End Summary [summary] -->

<!-- Start Table of Contents [toc] -->
## Table of Contents

* [SDK Installation](#sdk-installation)
* [SDK Example Usage](#sdk-example-usage)
* [Available Resources and Operations](#available-resources-and-operations)
* [Server Selection](#server-selection)
<!-- End Table of Contents [toc] -->

<!-- Start SDK Installation [installation] -->
## SDK Installation

The SDK relies on [Composer](https://getcomposer.org/) to manage its dependencies.

To install the SDK and add it as a dependency to an existing `composer.json` file:
```bash
composer require "dub/dub-php"
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example 1

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

### Example 2

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
<!-- End SDK Example Usage [usage] -->

<!-- Start Available Resources and Operations [operations] -->
## Available Resources and Operations

### [Links](docs/sdks/links/README.md)

* [list](docs/sdks/links/README.md#list) - Retrieve a list of links
* [create](docs/sdks/links/README.md#create) - Create a new link
* [count](docs/sdks/links/README.md#count) - Retrieve links count
* [get](docs/sdks/links/README.md#get) - Retrieve a link
* [delete](docs/sdks/links/README.md#delete) - Delete a link
* [update](docs/sdks/links/README.md#update) - Update a link
* [createMany](docs/sdks/links/README.md#createmany) - Bulk create links
* [deleteMany](docs/sdks/links/README.md#deletemany) - Bulk delete links
* [updateMany](docs/sdks/links/README.md#updatemany) - Bulk update links
* [upsert](docs/sdks/links/README.md#upsert) - Upsert a link

### [QRCodes](docs/sdks/qrcodes/README.md)

* [get](docs/sdks/qrcodes/README.md#get) - Retrieve a QR code

### [Analytics](docs/sdks/analytics/README.md)

* [retrieve](docs/sdks/analytics/README.md#retrieve) - Retrieve analytics for a link, a domain, or the authenticated workspace.

### [Events](docs/sdks/events/README.md)

* [list](docs/sdks/events/README.md#list) - Retrieve a list of events

### [Workspaces](docs/sdks/workspaces/README.md)

* [get](docs/sdks/workspaces/README.md#get) - Retrieve a workspace
* [update](docs/sdks/workspaces/README.md#update) - Update a workspace

### [Tags](docs/sdks/tags/README.md)

* [list](docs/sdks/tags/README.md#list) - Retrieve a list of tags
* [create](docs/sdks/tags/README.md#create) - Create a new tag
* [update](docs/sdks/tags/README.md#update) - Update a tag

### [Domains](docs/sdks/domains/README.md)

* [list](docs/sdks/domains/README.md#list) - Retrieve a list of domains
* [create](docs/sdks/domains/README.md#create) - Create a domain
* [delete](docs/sdks/domains/README.md#delete) - Delete a domain
* [update](docs/sdks/domains/README.md#update) - Update a domain

### [Track](docs/sdks/track/README.md)

* [lead](docs/sdks/track/README.md#lead) - Track a lead
* [sale](docs/sdks/track/README.md#sale) - Track a sale
* [customer](docs/sdks/track/README.md#customer) - Track a customer

### [Metatags](docs/sdks/metatags/README.md)

* [get](docs/sdks/metatags/README.md#get) - Retrieve the metatags for a URL
<!-- End Available Resources and Operations [operations] -->

<!-- Start Server Selection [server] -->
## Server Selection

## Server Selection

### Select Server by Index

You can override the default server globally by passing a server index to the `server_idx: int` optional parameter when initializing the SDK client instance. The selected server will then be used as the default on the operations that use it. This table lists the indexes associated with the available servers:

| # | Server | Variables |
| - | ------ | --------- |
| 0 | `https://api.dub.co` | None |




### Override Server URL Per-Client

The default server can also be overridden globally by passing a URL to the `server_url: str` optional parameter when initializing the SDK client instance. For example:
<!-- End Server Selection [server] -->

<!-- Placeholder for Future Speakeasy SDK Sections -->

# Development

## Maturity

This SDK is in beta, and there may be breaking changes between versions without a major version update. Therefore, we recommend pinning usage
to a specific package version. This way, you can install the same version each time without breaking changes unless you are intentionally
looking for the latest version.

## Contributions

While we value open-source contributions to this SDK, this library is generated programmatically.
Feel free to open a PR or a Github issue as a proof of concept and we'll do our best to include it in a future release!

### SDK Created by [Speakeasy](https://docs.speakeasyapi.dev/docs/using-speakeasy/client-sdks)
