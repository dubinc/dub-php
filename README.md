# dub/dub-php

<div align="left">
    <a href="https://speakeasyapi.dev/"><img src="https://custom-icon-badges.demolab.com/badge/-Built%20By%20Speakeasy-212015?style=for-the-badge&logoColor=FBE331&logo=speakeasy&labelColor=545454" /></a>
    <a href="https://opensource.org/licenses/MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" style="width: 100px; height: 28px;" />
    </a>
</div>


## 🏗 **Welcome to your new SDK!** 🏗

It has been generated successfully based on your OpenAPI spec. However, it is not yet ready for production use. Here are some next steps:
- [ ] 🛠 Make your SDK feel handcrafted by [customizing it](https://www.speakeasyapi.dev/docs/customize-sdks)
- [ ] ♻️ Refine your SDK quickly by iterating locally with the [Speakeasy CLI](https://github.com/speakeasy-api/speakeasy)
- [ ] 🎁 Publish your SDK to package managers by [configuring automatic publishing](https://www.speakeasyapi.dev/docs/advanced-setup/publish-sdks)
- [ ] ✨ When ready to productionize, delete this section from the README

<!-- Start SDK Installation [installation] -->
## SDK Installation

### Composer

To install the SDK first add the below to your `composer.json` file:

```json
{
    "repositories": [
        {
            "type": "github",
            "url": "https://github.com/dubinc/dub-php.git"
        }
    ],
    "require": {
        "dub/dub-php": "*"
    }
}
```

Then run the following command:

```bash
composer update
```
<!-- End SDK Installation [installation] -->

<!-- Start SDK Example Usage [usage] -->
## SDK Example Usage

### Example 1

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateLinkRequestBody();
    $request->url = 'https://google.com';
    $request->domain = 'lighthearted-kilogram.name';
    $request->key = '<key>';
    $request->externalId = '123456';
    $request->prefix = '<value>';
    $request->trackConversion = false;
    $request->archived = false;
    $request->publicStats = false;
    $request->tagId = '<value>';
    $request->tagIds = ['<value>'];
    $request->tagNames = '<value>';
    $request->comments = '<value>';
    $request->expiresAt = '<value>';
    $request->expiredUrl = '<value>';
    $request->password = 'rHklDuL1dlrnUXo';
    $request->proxy = false;
    $request->title = '<value>';
    $request->description = 'Reverse-engineered human-resource time-frame';
    $request->image = 'https://loremflickr.com/640/480';
    $request->video = '<value>';
    $request->rewrite = false;
    $request->ios = '<value>';
    $request->android = '<value>';
    $request->geo = new Components\LinkGeoTargeting();
    $request->geo->af = '<value>';
    $request->geo->al = '<value>';
    $request->geo->dz = '<value>';
    $request->geo->as = '<value>';
    $request->geo->ad = '<value>';
    $request->geo->ao = '<value>';
    $request->geo->ai = '<value>';
    $request->geo->aq = '<value>';
    $request->geo->ag = '<value>';
    $request->geo->ar = '<value>';
    $request->geo->am = '<value>';
    $request->geo->aw = '<value>';
    $request->geo->au = '<value>';
    $request->geo->at = '<value>';
    $request->geo->az = '<value>';
    $request->geo->bs = '<value>';
    $request->geo->bh = '<value>';
    $request->geo->bd = '<value>';
    $request->geo->bb = '<value>';
    $request->geo->by = '<value>';
    $request->geo->be = '<value>';
    $request->geo->bz = '<value>';
    $request->geo->bj = '<value>';
    $request->geo->bm = '<value>';
    $request->geo->bt = '<value>';
    $request->geo->bo = '<value>';
    $request->geo->ba = '<value>';
    $request->geo->bw = '<value>';
    $request->geo->bv = '<value>';
    $request->geo->br = '<value>';
    $request->geo->io = '<value>';
    $request->geo->bn = '<value>';
    $request->geo->bg = '<value>';
    $request->geo->bf = '<value>';
    $request->geo->bi = '<value>';
    $request->geo->kh = '<value>';
    $request->geo->cm = '<value>';
    $request->geo->ca = '<value>';
    $request->geo->cv = '<value>';
    $request->geo->ky = '<value>';
    $request->geo->cf = '<value>';
    $request->geo->td = '<value>';
    $request->geo->cl = '<value>';
    $request->geo->cn = '<value>';
    $request->geo->cx = '<value>';
    $request->geo->cc = '<value>';
    $request->geo->co = '<value>';
    $request->geo->km = '<value>';
    $request->geo->cg = '<value>';
    $request->geo->cd = '<value>';
    $request->geo->ck = '<value>';
    $request->geo->cr = '<value>';
    $request->geo->ci = '<value>';
    $request->geo->hr = '<value>';
    $request->geo->cu = '<value>';
    $request->geo->cy = '<value>';
    $request->geo->cz = '<value>';
    $request->geo->dk = '<value>';
    $request->geo->dj = '<value>';
    $request->geo->dm = '<value>';
    $request->geo->do = '<value>';
    $request->geo->ec = '<value>';
    $request->geo->eg = '<value>';
    $request->geo->sv = '<value>';
    $request->geo->gq = '<value>';
    $request->geo->er = '<value>';
    $request->geo->ee = '<value>';
    $request->geo->et = '<value>';
    $request->geo->fk = '<value>';
    $request->geo->fo = '<value>';
    $request->geo->fj = '<value>';
    $request->geo->fi = '<value>';
    $request->geo->fr = '<value>';
    $request->geo->gf = '<value>';
    $request->geo->pf = '<value>';
    $request->geo->tf = '<value>';
    $request->geo->ga = '<value>';
    $request->geo->gm = '<value>';
    $request->geo->ge = '<value>';
    $request->geo->de = '<value>';
    $request->geo->gh = '<value>';
    $request->geo->gi = '<value>';
    $request->geo->gr = '<value>';
    $request->geo->gl = '<value>';
    $request->geo->gd = '<value>';
    $request->geo->gp = '<value>';
    $request->geo->gu = '<value>';
    $request->geo->gt = '<value>';
    $request->geo->gn = '<value>';
    $request->geo->gw = '<value>';
    $request->geo->gy = '<value>';
    $request->geo->ht = '<value>';
    $request->geo->hm = '<value>';
    $request->geo->va = '<value>';
    $request->geo->hn = '<value>';
    $request->geo->hk = '<value>';
    $request->geo->hu = '<value>';
    $request->geo->is = '<value>';
    $request->geo->in = '<value>';
    $request->geo->id = '<id>';
    $request->geo->ir = '<value>';
    $request->geo->iq = '<value>';
    $request->geo->ie = '<value>';
    $request->geo->il = '<value>';
    $request->geo->it = '<value>';
    $request->geo->jm = '<value>';
    $request->geo->jp = '<value>';
    $request->geo->jo = '<value>';
    $request->geo->kz = '<value>';
    $request->geo->ke = '<value>';
    $request->geo->ki = '<value>';
    $request->geo->kp = '<value>';
    $request->geo->kr = '<value>';
    $request->geo->kw = '<value>';
    $request->geo->kg = '<value>';
    $request->geo->la = '<value>';
    $request->geo->lv = '<value>';
    $request->geo->lb = '<value>';
    $request->geo->ls = '<value>';
    $request->geo->lr = '<value>';
    $request->geo->ly = '<value>';
    $request->geo->li = '<value>';
    $request->geo->lt = '<value>';
    $request->geo->lu = '<value>';
    $request->geo->mo = '<value>';
    $request->geo->mg = '<value>';
    $request->geo->mw = '<value>';
    $request->geo->my = '<value>';
    $request->geo->mv = '<value>';
    $request->geo->ml = '<value>';
    $request->geo->mt = '<value>';
    $request->geo->mh = '<value>';
    $request->geo->mq = '<value>';
    $request->geo->mr = '<value>';
    $request->geo->mu = '<value>';
    $request->geo->yt = '<value>';
    $request->geo->mx = '<value>';
    $request->geo->fm = '<value>';
    $request->geo->md = '<value>';
    $request->geo->mc = '<value>';
    $request->geo->mn = '<value>';
    $request->geo->ms = '<value>';
    $request->geo->ma = '<value>';
    $request->geo->mz = '<value>';
    $request->geo->mm = '<value>';
    $request->geo->na = '<value>';
    $request->geo->nr = '<value>';
    $request->geo->np = '<value>';
    $request->geo->nl = '<value>';
    $request->geo->nc = '<value>';
    $request->geo->nz = '<value>';
    $request->geo->ni = '<value>';
    $request->geo->ne = '<value>';
    $request->geo->ng = '<value>';
    $request->geo->nu = '<value>';
    $request->geo->nf = '<value>';
    $request->geo->mk = '<value>';
    $request->geo->mp = '<value>';
    $request->geo->no = '<value>';
    $request->geo->om = '<value>';
    $request->geo->pk = '<value>';
    $request->geo->pw = '<value>';
    $request->geo->ps = '<value>';
    $request->geo->pa = '<value>';
    $request->geo->pg = '<value>';
    $request->geo->py = '<value>';
    $request->geo->pe = '<value>';
    $request->geo->ph = '<value>';
    $request->geo->pn = '<value>';
    $request->geo->pl = '<value>';
    $request->geo->pt = '<value>';
    $request->geo->pr = '<value>';
    $request->geo->qa = '<value>';
    $request->geo->re = '<value>';
    $request->geo->ro = '<value>';
    $request->geo->ru = '<value>';
    $request->geo->rw = '<value>';
    $request->geo->sh = '<value>';
    $request->geo->kn = '<value>';
    $request->geo->lc = '<value>';
    $request->geo->pm = '<value>';
    $request->geo->vc = '<value>';
    $request->geo->ws = '<value>';
    $request->geo->sm = '<value>';
    $request->geo->st = '<value>';
    $request->geo->sa = '<value>';
    $request->geo->sn = '<value>';
    $request->geo->sc = '<value>';
    $request->geo->sl = '<value>';
    $request->geo->sg = '<value>';
    $request->geo->sk = '<value>';
    $request->geo->si = '<value>';
    $request->geo->sb = '<value>';
    $request->geo->so = '<value>';
    $request->geo->za = '<value>';
    $request->geo->gs = '<value>';
    $request->geo->es = '<value>';
    $request->geo->lk = '<value>';
    $request->geo->sd = '<value>';
    $request->geo->sr = '<value>';
    $request->geo->sj = '<value>';
    $request->geo->sz = '<value>';
    $request->geo->se = '<value>';
    $request->geo->ch = '<value>';
    $request->geo->sy = '<value>';
    $request->geo->tw = '<value>';
    $request->geo->tj = '<value>';
    $request->geo->tz = '<value>';
    $request->geo->th = '<value>';
    $request->geo->tl = '<value>';
    $request->geo->tg = '<value>';
    $request->geo->tk = '<value>';
    $request->geo->to = '<value>';
    $request->geo->tt = '<value>';
    $request->geo->tn = '<value>';
    $request->geo->tr = '<value>';
    $request->geo->tm = '<value>';
    $request->geo->tc = '<value>';
    $request->geo->tv = '<value>';
    $request->geo->ug = '<value>';
    $request->geo->ua = '<value>';
    $request->geo->ae = '<value>';
    $request->geo->gb = '<value>';
    $request->geo->us = '<value>';
    $request->geo->um = '<value>';
    $request->geo->uy = '<value>';
    $request->geo->uz = '<value>';
    $request->geo->vu = '<value>';
    $request->geo->ve = '<value>';
    $request->geo->vn = '<value>';
    $request->geo->vg = '<value>';
    $request->geo->vi = '<value>';
    $request->geo->wf = '<value>';
    $request->geo->eh = '<value>';
    $request->geo->ye = '<value>';
    $request->geo->zm = '<value>';
    $request->geo->zw = '<value>';
    $request->geo->ax = '<value>';
    $request->geo->bq = '<value>';
    $request->geo->cw = '<value>';
    $request->geo->gg = '<value>';
    $request->geo->im = '<value>';
    $request->geo->je = '<value>';
    $request->geo->me = '<value>';
    $request->geo->bl = '<value>';
    $request->geo->mf = '<value>';
    $request->geo->rs = '<value>';
    $request->geo->sx = '<value>';
    $request->geo->ss = '<value>';
    $request->geo->xk = '<value>';
    $request->doIndex = false;

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
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use Dub\Models\Components;
use Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpsertLinkRequestBody();
    $request->url = 'https://google.com';
    $request->domain = 'monthly-hometown.info';
    $request->key = '<key>';
    $request->externalId = '123456';
    $request->prefix = '<value>';
    $request->trackConversion = false;
    $request->archived = false;
    $request->publicStats = false;
    $request->tagId = '<value>';
    $request->tagIds = ['<value>'];
    $request->tagNames = '<value>';
    $request->comments = '<value>';
    $request->expiresAt = '<value>';
    $request->expiredUrl = '<value>';
    $request->password = 'SFNg7iwZDcrQrPc';
    $request->proxy = false;
    $request->title = '<value>';
    $request->description = 'Focused full-range forecast';
    $request->image = 'https://loremflickr.com/640/480';
    $request->video = '<value>';
    $request->rewrite = false;
    $request->ios = '<value>';
    $request->android = '<value>';
    $request->geo = new Components\LinkGeoTargeting();
    $request->geo->af = '<value>';
    $request->geo->al = '<value>';
    $request->geo->dz = '<value>';
    $request->geo->as = '<value>';
    $request->geo->ad = '<value>';
    $request->geo->ao = '<value>';
    $request->geo->ai = '<value>';
    $request->geo->aq = '<value>';
    $request->geo->ag = '<value>';
    $request->geo->ar = '<value>';
    $request->geo->am = '<value>';
    $request->geo->aw = '<value>';
    $request->geo->au = '<value>';
    $request->geo->at = '<value>';
    $request->geo->az = '<value>';
    $request->geo->bs = '<value>';
    $request->geo->bh = '<value>';
    $request->geo->bd = '<value>';
    $request->geo->bb = '<value>';
    $request->geo->by = '<value>';
    $request->geo->be = '<value>';
    $request->geo->bz = '<value>';
    $request->geo->bj = '<value>';
    $request->geo->bm = '<value>';
    $request->geo->bt = '<value>';
    $request->geo->bo = '<value>';
    $request->geo->ba = '<value>';
    $request->geo->bw = '<value>';
    $request->geo->bv = '<value>';
    $request->geo->br = '<value>';
    $request->geo->io = '<value>';
    $request->geo->bn = '<value>';
    $request->geo->bg = '<value>';
    $request->geo->bf = '<value>';
    $request->geo->bi = '<value>';
    $request->geo->kh = '<value>';
    $request->geo->cm = '<value>';
    $request->geo->ca = '<value>';
    $request->geo->cv = '<value>';
    $request->geo->ky = '<value>';
    $request->geo->cf = '<value>';
    $request->geo->td = '<value>';
    $request->geo->cl = '<value>';
    $request->geo->cn = '<value>';
    $request->geo->cx = '<value>';
    $request->geo->cc = '<value>';
    $request->geo->co = '<value>';
    $request->geo->km = '<value>';
    $request->geo->cg = '<value>';
    $request->geo->cd = '<value>';
    $request->geo->ck = '<value>';
    $request->geo->cr = '<value>';
    $request->geo->ci = '<value>';
    $request->geo->hr = '<value>';
    $request->geo->cu = '<value>';
    $request->geo->cy = '<value>';
    $request->geo->cz = '<value>';
    $request->geo->dk = '<value>';
    $request->geo->dj = '<value>';
    $request->geo->dm = '<value>';
    $request->geo->do = '<value>';
    $request->geo->ec = '<value>';
    $request->geo->eg = '<value>';
    $request->geo->sv = '<value>';
    $request->geo->gq = '<value>';
    $request->geo->er = '<value>';
    $request->geo->ee = '<value>';
    $request->geo->et = '<value>';
    $request->geo->fk = '<value>';
    $request->geo->fo = '<value>';
    $request->geo->fj = '<value>';
    $request->geo->fi = '<value>';
    $request->geo->fr = '<value>';
    $request->geo->gf = '<value>';
    $request->geo->pf = '<value>';
    $request->geo->tf = '<value>';
    $request->geo->ga = '<value>';
    $request->geo->gm = '<value>';
    $request->geo->ge = '<value>';
    $request->geo->de = '<value>';
    $request->geo->gh = '<value>';
    $request->geo->gi = '<value>';
    $request->geo->gr = '<value>';
    $request->geo->gl = '<value>';
    $request->geo->gd = '<value>';
    $request->geo->gp = '<value>';
    $request->geo->gu = '<value>';
    $request->geo->gt = '<value>';
    $request->geo->gn = '<value>';
    $request->geo->gw = '<value>';
    $request->geo->gy = '<value>';
    $request->geo->ht = '<value>';
    $request->geo->hm = '<value>';
    $request->geo->va = '<value>';
    $request->geo->hn = '<value>';
    $request->geo->hk = '<value>';
    $request->geo->hu = '<value>';
    $request->geo->is = '<value>';
    $request->geo->in = '<value>';
    $request->geo->id = '<id>';
    $request->geo->ir = '<value>';
    $request->geo->iq = '<value>';
    $request->geo->ie = '<value>';
    $request->geo->il = '<value>';
    $request->geo->it = '<value>';
    $request->geo->jm = '<value>';
    $request->geo->jp = '<value>';
    $request->geo->jo = '<value>';
    $request->geo->kz = '<value>';
    $request->geo->ke = '<value>';
    $request->geo->ki = '<value>';
    $request->geo->kp = '<value>';
    $request->geo->kr = '<value>';
    $request->geo->kw = '<value>';
    $request->geo->kg = '<value>';
    $request->geo->la = '<value>';
    $request->geo->lv = '<value>';
    $request->geo->lb = '<value>';
    $request->geo->ls = '<value>';
    $request->geo->lr = '<value>';
    $request->geo->ly = '<value>';
    $request->geo->li = '<value>';
    $request->geo->lt = '<value>';
    $request->geo->lu = '<value>';
    $request->geo->mo = '<value>';
    $request->geo->mg = '<value>';
    $request->geo->mw = '<value>';
    $request->geo->my = '<value>';
    $request->geo->mv = '<value>';
    $request->geo->ml = '<value>';
    $request->geo->mt = '<value>';
    $request->geo->mh = '<value>';
    $request->geo->mq = '<value>';
    $request->geo->mr = '<value>';
    $request->geo->mu = '<value>';
    $request->geo->yt = '<value>';
    $request->geo->mx = '<value>';
    $request->geo->fm = '<value>';
    $request->geo->md = '<value>';
    $request->geo->mc = '<value>';
    $request->geo->mn = '<value>';
    $request->geo->ms = '<value>';
    $request->geo->ma = '<value>';
    $request->geo->mz = '<value>';
    $request->geo->mm = '<value>';
    $request->geo->na = '<value>';
    $request->geo->nr = '<value>';
    $request->geo->np = '<value>';
    $request->geo->nl = '<value>';
    $request->geo->nc = '<value>';
    $request->geo->nz = '<value>';
    $request->geo->ni = '<value>';
    $request->geo->ne = '<value>';
    $request->geo->ng = '<value>';
    $request->geo->nu = '<value>';
    $request->geo->nf = '<value>';
    $request->geo->mk = '<value>';
    $request->geo->mp = '<value>';
    $request->geo->no = '<value>';
    $request->geo->om = '<value>';
    $request->geo->pk = '<value>';
    $request->geo->pw = '<value>';
    $request->geo->ps = '<value>';
    $request->geo->pa = '<value>';
    $request->geo->pg = '<value>';
    $request->geo->py = '<value>';
    $request->geo->pe = '<value>';
    $request->geo->ph = '<value>';
    $request->geo->pn = '<value>';
    $request->geo->pl = '<value>';
    $request->geo->pt = '<value>';
    $request->geo->pr = '<value>';
    $request->geo->qa = '<value>';
    $request->geo->re = '<value>';
    $request->geo->ro = '<value>';
    $request->geo->ru = '<value>';
    $request->geo->rw = '<value>';
    $request->geo->sh = '<value>';
    $request->geo->kn = '<value>';
    $request->geo->lc = '<value>';
    $request->geo->pm = '<value>';
    $request->geo->vc = '<value>';
    $request->geo->ws = '<value>';
    $request->geo->sm = '<value>';
    $request->geo->st = '<value>';
    $request->geo->sa = '<value>';
    $request->geo->sn = '<value>';
    $request->geo->sc = '<value>';
    $request->geo->sl = '<value>';
    $request->geo->sg = '<value>';
    $request->geo->sk = '<value>';
    $request->geo->si = '<value>';
    $request->geo->sb = '<value>';
    $request->geo->so = '<value>';
    $request->geo->za = '<value>';
    $request->geo->gs = '<value>';
    $request->geo->es = '<value>';
    $request->geo->lk = '<value>';
    $request->geo->sd = '<value>';
    $request->geo->sr = '<value>';
    $request->geo->sj = '<value>';
    $request->geo->sz = '<value>';
    $request->geo->se = '<value>';
    $request->geo->ch = '<value>';
    $request->geo->sy = '<value>';
    $request->geo->tw = '<value>';
    $request->geo->tj = '<value>';
    $request->geo->tz = '<value>';
    $request->geo->th = '<value>';
    $request->geo->tl = '<value>';
    $request->geo->tg = '<value>';
    $request->geo->tk = '<value>';
    $request->geo->to = '<value>';
    $request->geo->tt = '<value>';
    $request->geo->tn = '<value>';
    $request->geo->tr = '<value>';
    $request->geo->tm = '<value>';
    $request->geo->tc = '<value>';
    $request->geo->tv = '<value>';
    $request->geo->ug = '<value>';
    $request->geo->ua = '<value>';
    $request->geo->ae = '<value>';
    $request->geo->gb = '<value>';
    $request->geo->us = '<value>';
    $request->geo->um = '<value>';
    $request->geo->uy = '<value>';
    $request->geo->uz = '<value>';
    $request->geo->vu = '<value>';
    $request->geo->ve = '<value>';
    $request->geo->vn = '<value>';
    $request->geo->vg = '<value>';
    $request->geo->vi = '<value>';
    $request->geo->wf = '<value>';
    $request->geo->eh = '<value>';
    $request->geo->ye = '<value>';
    $request->geo->zm = '<value>';
    $request->geo->zw = '<value>';
    $request->geo->ax = '<value>';
    $request->geo->bq = '<value>';
    $request->geo->cw = '<value>';
    $request->geo->gg = '<value>';
    $request->geo->im = '<value>';
    $request->geo->je = '<value>';
    $request->geo->me = '<value>';
    $request->geo->bl = '<value>';
    $request->geo->mf = '<value>';
    $request->geo->rs = '<value>';
    $request->geo->sx = '<value>';
    $request->geo->ss = '<value>';
    $request->geo->xk = '<value>';
    $request->doIndex = false;

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
* [updateMany](docs/sdks/links/README.md#updatemany) - Bulk update links
* [upsert](docs/sdks/links/README.md#upsert) - Upsert a link

### [QRCodes](docs/sdks/qrcodes/README.md)

* [get](docs/sdks/qrcodes/README.md#get) - Retrieve a QR code

### [Analytics](docs/sdks/analytics/README.md)

* [retrieve](docs/sdks/analytics/README.md#retrieve) - Retrieve analytics for a link, a domain, or the authenticated workspace.

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
