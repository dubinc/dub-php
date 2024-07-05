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
    $requestBody = new Operations\CreateLinkRequestBody();
    $requestBody->url = 'https://google/com';
    $requestBody->domain = 'lighthearted-kilogram.name';
    $requestBody->key = '<key>';
    $requestBody->externalId = '123456';
    $requestBody->prefix = '<value>';
    $requestBody->trackConversion = false;
    $requestBody->archived = false;
    $requestBody->publicStats = false;
    $requestBody->tagId = '<value>';
    $requestBody->tagIds = ['<value>'];
    $requestBody->tagNames = '<value>';
    $requestBody->comments = '<value>';
    $requestBody->expiresAt = '<value>';
    $requestBody->expiredUrl = '<value>';
    $requestBody->password = 'rHklDuL1dlrnUXo';
    $requestBody->proxy = false;
    $requestBody->title = '<value>';
    $requestBody->description = 'Reverse-engineered human-resource time-frame';
    $requestBody->image = 'https://loremflickr.com/640/480';
    $requestBody->rewrite = false;
    $requestBody->ios = '<value>';
    $requestBody->android = '<value>';
    $requestBody->geo = new Components\LinkGeoTargeting();
    $requestBody->geo->af = '<value>';
    $requestBody->geo->al = '<value>';
    $requestBody->geo->dz = '<value>';
    $requestBody->geo->as = '<value>';
    $requestBody->geo->ad = '<value>';
    $requestBody->geo->ao = '<value>';
    $requestBody->geo->ai = '<value>';
    $requestBody->geo->aq = '<value>';
    $requestBody->geo->ag = '<value>';
    $requestBody->geo->ar = '<value>';
    $requestBody->geo->am = '<value>';
    $requestBody->geo->aw = '<value>';
    $requestBody->geo->au = '<value>';
    $requestBody->geo->at = '<value>';
    $requestBody->geo->az = '<value>';
    $requestBody->geo->bs = '<value>';
    $requestBody->geo->bh = '<value>';
    $requestBody->geo->bd = '<value>';
    $requestBody->geo->bb = '<value>';
    $requestBody->geo->by = '<value>';
    $requestBody->geo->be = '<value>';
    $requestBody->geo->bz = '<value>';
    $requestBody->geo->bj = '<value>';
    $requestBody->geo->bm = '<value>';
    $requestBody->geo->bt = '<value>';
    $requestBody->geo->bo = '<value>';
    $requestBody->geo->ba = '<value>';
    $requestBody->geo->bw = '<value>';
    $requestBody->geo->bv = '<value>';
    $requestBody->geo->br = '<value>';
    $requestBody->geo->io = '<value>';
    $requestBody->geo->bn = '<value>';
    $requestBody->geo->bg = '<value>';
    $requestBody->geo->bf = '<value>';
    $requestBody->geo->bi = '<value>';
    $requestBody->geo->kh = '<value>';
    $requestBody->geo->cm = '<value>';
    $requestBody->geo->ca = '<value>';
    $requestBody->geo->cv = '<value>';
    $requestBody->geo->ky = '<value>';
    $requestBody->geo->cf = '<value>';
    $requestBody->geo->td = '<value>';
    $requestBody->geo->cl = '<value>';
    $requestBody->geo->cn = '<value>';
    $requestBody->geo->cx = '<value>';
    $requestBody->geo->cc = '<value>';
    $requestBody->geo->co = '<value>';
    $requestBody->geo->km = '<value>';
    $requestBody->geo->cg = '<value>';
    $requestBody->geo->cd = '<value>';
    $requestBody->geo->ck = '<value>';
    $requestBody->geo->cr = '<value>';
    $requestBody->geo->ci = '<value>';
    $requestBody->geo->hr = '<value>';
    $requestBody->geo->cu = '<value>';
    $requestBody->geo->cy = '<value>';
    $requestBody->geo->cz = '<value>';
    $requestBody->geo->dk = '<value>';
    $requestBody->geo->dj = '<value>';
    $requestBody->geo->dm = '<value>';
    $requestBody->geo->do = '<value>';
    $requestBody->geo->ec = '<value>';
    $requestBody->geo->eg = '<value>';
    $requestBody->geo->sv = '<value>';
    $requestBody->geo->gq = '<value>';
    $requestBody->geo->er = '<value>';
    $requestBody->geo->ee = '<value>';
    $requestBody->geo->et = '<value>';
    $requestBody->geo->fk = '<value>';
    $requestBody->geo->fo = '<value>';
    $requestBody->geo->fj = '<value>';
    $requestBody->geo->fi = '<value>';
    $requestBody->geo->fr = '<value>';
    $requestBody->geo->gf = '<value>';
    $requestBody->geo->pf = '<value>';
    $requestBody->geo->tf = '<value>';
    $requestBody->geo->ga = '<value>';
    $requestBody->geo->gm = '<value>';
    $requestBody->geo->ge = '<value>';
    $requestBody->geo->de = '<value>';
    $requestBody->geo->gh = '<value>';
    $requestBody->geo->gi = '<value>';
    $requestBody->geo->gr = '<value>';
    $requestBody->geo->gl = '<value>';
    $requestBody->geo->gd = '<value>';
    $requestBody->geo->gp = '<value>';
    $requestBody->geo->gu = '<value>';
    $requestBody->geo->gt = '<value>';
    $requestBody->geo->gn = '<value>';
    $requestBody->geo->gw = '<value>';
    $requestBody->geo->gy = '<value>';
    $requestBody->geo->ht = '<value>';
    $requestBody->geo->hm = '<value>';
    $requestBody->geo->va = '<value>';
    $requestBody->geo->hn = '<value>';
    $requestBody->geo->hk = '<value>';
    $requestBody->geo->hu = '<value>';
    $requestBody->geo->is = '<value>';
    $requestBody->geo->in = '<value>';
    $requestBody->geo->id = '<id>';
    $requestBody->geo->ir = '<value>';
    $requestBody->geo->iq = '<value>';
    $requestBody->geo->ie = '<value>';
    $requestBody->geo->il = '<value>';
    $requestBody->geo->it = '<value>';
    $requestBody->geo->jm = '<value>';
    $requestBody->geo->jp = '<value>';
    $requestBody->geo->jo = '<value>';
    $requestBody->geo->kz = '<value>';
    $requestBody->geo->ke = '<value>';
    $requestBody->geo->ki = '<value>';
    $requestBody->geo->kp = '<value>';
    $requestBody->geo->kr = '<value>';
    $requestBody->geo->kw = '<value>';
    $requestBody->geo->kg = '<value>';
    $requestBody->geo->la = '<value>';
    $requestBody->geo->lv = '<value>';
    $requestBody->geo->lb = '<value>';
    $requestBody->geo->ls = '<value>';
    $requestBody->geo->lr = '<value>';
    $requestBody->geo->ly = '<value>';
    $requestBody->geo->li = '<value>';
    $requestBody->geo->lt = '<value>';
    $requestBody->geo->lu = '<value>';
    $requestBody->geo->mo = '<value>';
    $requestBody->geo->mg = '<value>';
    $requestBody->geo->mw = '<value>';
    $requestBody->geo->my = '<value>';
    $requestBody->geo->mv = '<value>';
    $requestBody->geo->ml = '<value>';
    $requestBody->geo->mt = '<value>';
    $requestBody->geo->mh = '<value>';
    $requestBody->geo->mq = '<value>';
    $requestBody->geo->mr = '<value>';
    $requestBody->geo->mu = '<value>';
    $requestBody->geo->yt = '<value>';
    $requestBody->geo->mx = '<value>';
    $requestBody->geo->fm = '<value>';
    $requestBody->geo->md = '<value>';
    $requestBody->geo->mc = '<value>';
    $requestBody->geo->mn = '<value>';
    $requestBody->geo->ms = '<value>';
    $requestBody->geo->ma = '<value>';
    $requestBody->geo->mz = '<value>';
    $requestBody->geo->mm = '<value>';
    $requestBody->geo->na = '<value>';
    $requestBody->geo->nr = '<value>';
    $requestBody->geo->np = '<value>';
    $requestBody->geo->nl = '<value>';
    $requestBody->geo->nc = '<value>';
    $requestBody->geo->nz = '<value>';
    $requestBody->geo->ni = '<value>';
    $requestBody->geo->ne = '<value>';
    $requestBody->geo->ng = '<value>';
    $requestBody->geo->nu = '<value>';
    $requestBody->geo->nf = '<value>';
    $requestBody->geo->mk = '<value>';
    $requestBody->geo->mp = '<value>';
    $requestBody->geo->no = '<value>';
    $requestBody->geo->om = '<value>';
    $requestBody->geo->pk = '<value>';
    $requestBody->geo->pw = '<value>';
    $requestBody->geo->ps = '<value>';
    $requestBody->geo->pa = '<value>';
    $requestBody->geo->pg = '<value>';
    $requestBody->geo->py = '<value>';
    $requestBody->geo->pe = '<value>';
    $requestBody->geo->ph = '<value>';
    $requestBody->geo->pn = '<value>';
    $requestBody->geo->pl = '<value>';
    $requestBody->geo->pt = '<value>';
    $requestBody->geo->pr = '<value>';
    $requestBody->geo->qa = '<value>';
    $requestBody->geo->re = '<value>';
    $requestBody->geo->ro = '<value>';
    $requestBody->geo->ru = '<value>';
    $requestBody->geo->rw = '<value>';
    $requestBody->geo->sh = '<value>';
    $requestBody->geo->kn = '<value>';
    $requestBody->geo->lc = '<value>';
    $requestBody->geo->pm = '<value>';
    $requestBody->geo->vc = '<value>';
    $requestBody->geo->ws = '<value>';
    $requestBody->geo->sm = '<value>';
    $requestBody->geo->st = '<value>';
    $requestBody->geo->sa = '<value>';
    $requestBody->geo->sn = '<value>';
    $requestBody->geo->sc = '<value>';
    $requestBody->geo->sl = '<value>';
    $requestBody->geo->sg = '<value>';
    $requestBody->geo->sk = '<value>';
    $requestBody->geo->si = '<value>';
    $requestBody->geo->sb = '<value>';
    $requestBody->geo->so = '<value>';
    $requestBody->geo->za = '<value>';
    $requestBody->geo->gs = '<value>';
    $requestBody->geo->es = '<value>';
    $requestBody->geo->lk = '<value>';
    $requestBody->geo->sd = '<value>';
    $requestBody->geo->sr = '<value>';
    $requestBody->geo->sj = '<value>';
    $requestBody->geo->sz = '<value>';
    $requestBody->geo->se = '<value>';
    $requestBody->geo->ch = '<value>';
    $requestBody->geo->sy = '<value>';
    $requestBody->geo->tw = '<value>';
    $requestBody->geo->tj = '<value>';
    $requestBody->geo->tz = '<value>';
    $requestBody->geo->th = '<value>';
    $requestBody->geo->tl = '<value>';
    $requestBody->geo->tg = '<value>';
    $requestBody->geo->tk = '<value>';
    $requestBody->geo->to = '<value>';
    $requestBody->geo->tt = '<value>';
    $requestBody->geo->tn = '<value>';
    $requestBody->geo->tr = '<value>';
    $requestBody->geo->tm = '<value>';
    $requestBody->geo->tc = '<value>';
    $requestBody->geo->tv = '<value>';
    $requestBody->geo->ug = '<value>';
    $requestBody->geo->ua = '<value>';
    $requestBody->geo->ae = '<value>';
    $requestBody->geo->gb = '<value>';
    $requestBody->geo->us = '<value>';
    $requestBody->geo->um = '<value>';
    $requestBody->geo->uy = '<value>';
    $requestBody->geo->uz = '<value>';
    $requestBody->geo->vu = '<value>';
    $requestBody->geo->ve = '<value>';
    $requestBody->geo->vn = '<value>';
    $requestBody->geo->vg = '<value>';
    $requestBody->geo->vi = '<value>';
    $requestBody->geo->wf = '<value>';
    $requestBody->geo->eh = '<value>';
    $requestBody->geo->ye = '<value>';
    $requestBody->geo->zm = '<value>';
    $requestBody->geo->zw = '<value>';
    $requestBody->geo->ax = '<value>';
    $requestBody->geo->bq = '<value>';
    $requestBody->geo->cw = '<value>';
    $requestBody->geo->gg = '<value>';
    $requestBody->geo->im = '<value>';
    $requestBody->geo->je = '<value>';
    $requestBody->geo->me = '<value>';
    $requestBody->geo->bl = '<value>';
    $requestBody->geo->mf = '<value>';
    $requestBody->geo->rs = '<value>';
    $requestBody->geo->sx = '<value>';
    $requestBody->geo->ss = '<value>';
    $requestBody->geo->xk = '<value>';
    $requestBody->doIndex = false;

    $response = $sdk->links->create('<value>', $requestBody);

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
    $requestBody = new Operations\UpsertLinkRequestBody();
    $requestBody->url = 'https://google/com';
    $requestBody->domain = 'monthly-hometown.info';
    $requestBody->key = '<key>';
    $requestBody->externalId = '123456';
    $requestBody->prefix = '<value>';
    $requestBody->trackConversion = false;
    $requestBody->archived = false;
    $requestBody->publicStats = false;
    $requestBody->tagId = '<value>';
    $requestBody->tagIds = ['<value>'];
    $requestBody->tagNames = '<value>';
    $requestBody->comments = '<value>';
    $requestBody->expiresAt = '<value>';
    $requestBody->expiredUrl = '<value>';
    $requestBody->password = 'SFNg7iwZDcrQrPc';
    $requestBody->proxy = false;
    $requestBody->title = '<value>';
    $requestBody->description = 'Focused full-range forecast';
    $requestBody->image = 'https://loremflickr.com/640/480';
    $requestBody->rewrite = false;
    $requestBody->ios = '<value>';
    $requestBody->android = '<value>';
    $requestBody->geo = new Components\LinkGeoTargeting();
    $requestBody->geo->af = '<value>';
    $requestBody->geo->al = '<value>';
    $requestBody->geo->dz = '<value>';
    $requestBody->geo->as = '<value>';
    $requestBody->geo->ad = '<value>';
    $requestBody->geo->ao = '<value>';
    $requestBody->geo->ai = '<value>';
    $requestBody->geo->aq = '<value>';
    $requestBody->geo->ag = '<value>';
    $requestBody->geo->ar = '<value>';
    $requestBody->geo->am = '<value>';
    $requestBody->geo->aw = '<value>';
    $requestBody->geo->au = '<value>';
    $requestBody->geo->at = '<value>';
    $requestBody->geo->az = '<value>';
    $requestBody->geo->bs = '<value>';
    $requestBody->geo->bh = '<value>';
    $requestBody->geo->bd = '<value>';
    $requestBody->geo->bb = '<value>';
    $requestBody->geo->by = '<value>';
    $requestBody->geo->be = '<value>';
    $requestBody->geo->bz = '<value>';
    $requestBody->geo->bj = '<value>';
    $requestBody->geo->bm = '<value>';
    $requestBody->geo->bt = '<value>';
    $requestBody->geo->bo = '<value>';
    $requestBody->geo->ba = '<value>';
    $requestBody->geo->bw = '<value>';
    $requestBody->geo->bv = '<value>';
    $requestBody->geo->br = '<value>';
    $requestBody->geo->io = '<value>';
    $requestBody->geo->bn = '<value>';
    $requestBody->geo->bg = '<value>';
    $requestBody->geo->bf = '<value>';
    $requestBody->geo->bi = '<value>';
    $requestBody->geo->kh = '<value>';
    $requestBody->geo->cm = '<value>';
    $requestBody->geo->ca = '<value>';
    $requestBody->geo->cv = '<value>';
    $requestBody->geo->ky = '<value>';
    $requestBody->geo->cf = '<value>';
    $requestBody->geo->td = '<value>';
    $requestBody->geo->cl = '<value>';
    $requestBody->geo->cn = '<value>';
    $requestBody->geo->cx = '<value>';
    $requestBody->geo->cc = '<value>';
    $requestBody->geo->co = '<value>';
    $requestBody->geo->km = '<value>';
    $requestBody->geo->cg = '<value>';
    $requestBody->geo->cd = '<value>';
    $requestBody->geo->ck = '<value>';
    $requestBody->geo->cr = '<value>';
    $requestBody->geo->ci = '<value>';
    $requestBody->geo->hr = '<value>';
    $requestBody->geo->cu = '<value>';
    $requestBody->geo->cy = '<value>';
    $requestBody->geo->cz = '<value>';
    $requestBody->geo->dk = '<value>';
    $requestBody->geo->dj = '<value>';
    $requestBody->geo->dm = '<value>';
    $requestBody->geo->do = '<value>';
    $requestBody->geo->ec = '<value>';
    $requestBody->geo->eg = '<value>';
    $requestBody->geo->sv = '<value>';
    $requestBody->geo->gq = '<value>';
    $requestBody->geo->er = '<value>';
    $requestBody->geo->ee = '<value>';
    $requestBody->geo->et = '<value>';
    $requestBody->geo->fk = '<value>';
    $requestBody->geo->fo = '<value>';
    $requestBody->geo->fj = '<value>';
    $requestBody->geo->fi = '<value>';
    $requestBody->geo->fr = '<value>';
    $requestBody->geo->gf = '<value>';
    $requestBody->geo->pf = '<value>';
    $requestBody->geo->tf = '<value>';
    $requestBody->geo->ga = '<value>';
    $requestBody->geo->gm = '<value>';
    $requestBody->geo->ge = '<value>';
    $requestBody->geo->de = '<value>';
    $requestBody->geo->gh = '<value>';
    $requestBody->geo->gi = '<value>';
    $requestBody->geo->gr = '<value>';
    $requestBody->geo->gl = '<value>';
    $requestBody->geo->gd = '<value>';
    $requestBody->geo->gp = '<value>';
    $requestBody->geo->gu = '<value>';
    $requestBody->geo->gt = '<value>';
    $requestBody->geo->gn = '<value>';
    $requestBody->geo->gw = '<value>';
    $requestBody->geo->gy = '<value>';
    $requestBody->geo->ht = '<value>';
    $requestBody->geo->hm = '<value>';
    $requestBody->geo->va = '<value>';
    $requestBody->geo->hn = '<value>';
    $requestBody->geo->hk = '<value>';
    $requestBody->geo->hu = '<value>';
    $requestBody->geo->is = '<value>';
    $requestBody->geo->in = '<value>';
    $requestBody->geo->id = '<id>';
    $requestBody->geo->ir = '<value>';
    $requestBody->geo->iq = '<value>';
    $requestBody->geo->ie = '<value>';
    $requestBody->geo->il = '<value>';
    $requestBody->geo->it = '<value>';
    $requestBody->geo->jm = '<value>';
    $requestBody->geo->jp = '<value>';
    $requestBody->geo->jo = '<value>';
    $requestBody->geo->kz = '<value>';
    $requestBody->geo->ke = '<value>';
    $requestBody->geo->ki = '<value>';
    $requestBody->geo->kp = '<value>';
    $requestBody->geo->kr = '<value>';
    $requestBody->geo->kw = '<value>';
    $requestBody->geo->kg = '<value>';
    $requestBody->geo->la = '<value>';
    $requestBody->geo->lv = '<value>';
    $requestBody->geo->lb = '<value>';
    $requestBody->geo->ls = '<value>';
    $requestBody->geo->lr = '<value>';
    $requestBody->geo->ly = '<value>';
    $requestBody->geo->li = '<value>';
    $requestBody->geo->lt = '<value>';
    $requestBody->geo->lu = '<value>';
    $requestBody->geo->mo = '<value>';
    $requestBody->geo->mg = '<value>';
    $requestBody->geo->mw = '<value>';
    $requestBody->geo->my = '<value>';
    $requestBody->geo->mv = '<value>';
    $requestBody->geo->ml = '<value>';
    $requestBody->geo->mt = '<value>';
    $requestBody->geo->mh = '<value>';
    $requestBody->geo->mq = '<value>';
    $requestBody->geo->mr = '<value>';
    $requestBody->geo->mu = '<value>';
    $requestBody->geo->yt = '<value>';
    $requestBody->geo->mx = '<value>';
    $requestBody->geo->fm = '<value>';
    $requestBody->geo->md = '<value>';
    $requestBody->geo->mc = '<value>';
    $requestBody->geo->mn = '<value>';
    $requestBody->geo->ms = '<value>';
    $requestBody->geo->ma = '<value>';
    $requestBody->geo->mz = '<value>';
    $requestBody->geo->mm = '<value>';
    $requestBody->geo->na = '<value>';
    $requestBody->geo->nr = '<value>';
    $requestBody->geo->np = '<value>';
    $requestBody->geo->nl = '<value>';
    $requestBody->geo->nc = '<value>';
    $requestBody->geo->nz = '<value>';
    $requestBody->geo->ni = '<value>';
    $requestBody->geo->ne = '<value>';
    $requestBody->geo->ng = '<value>';
    $requestBody->geo->nu = '<value>';
    $requestBody->geo->nf = '<value>';
    $requestBody->geo->mk = '<value>';
    $requestBody->geo->mp = '<value>';
    $requestBody->geo->no = '<value>';
    $requestBody->geo->om = '<value>';
    $requestBody->geo->pk = '<value>';
    $requestBody->geo->pw = '<value>';
    $requestBody->geo->ps = '<value>';
    $requestBody->geo->pa = '<value>';
    $requestBody->geo->pg = '<value>';
    $requestBody->geo->py = '<value>';
    $requestBody->geo->pe = '<value>';
    $requestBody->geo->ph = '<value>';
    $requestBody->geo->pn = '<value>';
    $requestBody->geo->pl = '<value>';
    $requestBody->geo->pt = '<value>';
    $requestBody->geo->pr = '<value>';
    $requestBody->geo->qa = '<value>';
    $requestBody->geo->re = '<value>';
    $requestBody->geo->ro = '<value>';
    $requestBody->geo->ru = '<value>';
    $requestBody->geo->rw = '<value>';
    $requestBody->geo->sh = '<value>';
    $requestBody->geo->kn = '<value>';
    $requestBody->geo->lc = '<value>';
    $requestBody->geo->pm = '<value>';
    $requestBody->geo->vc = '<value>';
    $requestBody->geo->ws = '<value>';
    $requestBody->geo->sm = '<value>';
    $requestBody->geo->st = '<value>';
    $requestBody->geo->sa = '<value>';
    $requestBody->geo->sn = '<value>';
    $requestBody->geo->sc = '<value>';
    $requestBody->geo->sl = '<value>';
    $requestBody->geo->sg = '<value>';
    $requestBody->geo->sk = '<value>';
    $requestBody->geo->si = '<value>';
    $requestBody->geo->sb = '<value>';
    $requestBody->geo->so = '<value>';
    $requestBody->geo->za = '<value>';
    $requestBody->geo->gs = '<value>';
    $requestBody->geo->es = '<value>';
    $requestBody->geo->lk = '<value>';
    $requestBody->geo->sd = '<value>';
    $requestBody->geo->sr = '<value>';
    $requestBody->geo->sj = '<value>';
    $requestBody->geo->sz = '<value>';
    $requestBody->geo->se = '<value>';
    $requestBody->geo->ch = '<value>';
    $requestBody->geo->sy = '<value>';
    $requestBody->geo->tw = '<value>';
    $requestBody->geo->tj = '<value>';
    $requestBody->geo->tz = '<value>';
    $requestBody->geo->th = '<value>';
    $requestBody->geo->tl = '<value>';
    $requestBody->geo->tg = '<value>';
    $requestBody->geo->tk = '<value>';
    $requestBody->geo->to = '<value>';
    $requestBody->geo->tt = '<value>';
    $requestBody->geo->tn = '<value>';
    $requestBody->geo->tr = '<value>';
    $requestBody->geo->tm = '<value>';
    $requestBody->geo->tc = '<value>';
    $requestBody->geo->tv = '<value>';
    $requestBody->geo->ug = '<value>';
    $requestBody->geo->ua = '<value>';
    $requestBody->geo->ae = '<value>';
    $requestBody->geo->gb = '<value>';
    $requestBody->geo->us = '<value>';
    $requestBody->geo->um = '<value>';
    $requestBody->geo->uy = '<value>';
    $requestBody->geo->uz = '<value>';
    $requestBody->geo->vu = '<value>';
    $requestBody->geo->ve = '<value>';
    $requestBody->geo->vn = '<value>';
    $requestBody->geo->vg = '<value>';
    $requestBody->geo->vi = '<value>';
    $requestBody->geo->wf = '<value>';
    $requestBody->geo->eh = '<value>';
    $requestBody->geo->ye = '<value>';
    $requestBody->geo->zm = '<value>';
    $requestBody->geo->zw = '<value>';
    $requestBody->geo->ax = '<value>';
    $requestBody->geo->bq = '<value>';
    $requestBody->geo->cw = '<value>';
    $requestBody->geo->gg = '<value>';
    $requestBody->geo->im = '<value>';
    $requestBody->geo->je = '<value>';
    $requestBody->geo->me = '<value>';
    $requestBody->geo->bl = '<value>';
    $requestBody->geo->mf = '<value>';
    $requestBody->geo->rs = '<value>';
    $requestBody->geo->sx = '<value>';
    $requestBody->geo->ss = '<value>';
    $requestBody->geo->xk = '<value>';
    $requestBody->doIndex = false;

    $response = $sdk->links->upsert('<value>', $requestBody);

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

<!-- Start Global Parameters [global-parameters] -->
## Global Parameters

Certain parameters are configured globally. These parameters may be set on the SDK client instance itself during initialization. When configured as an option during SDK initialization, These global values will be used as defaults on the operations that use them. When such operations are called, there is a place in each to override the global value, if needed.

For example, you can set `workspaceId` to `'<value>'` at SDK initialization and then you do not have to pass the same value on calls to operations like `list`. But if you want to do so you may, which will locally override the global setting. See the example code below for a demonstration.


### Available Globals

The following global parameters are available.

| Name | Type | Required | Description |
| ---- | ---- |:--------:| ----------- |
| workspaceId | string |  | The workspaceId parameter. |
| projectSlug | string |  | The projectSlug parameter. |


### Example

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
    $request = new Operations\GetLinksRequest();
    $request->domain = 'smug-bow.name';
    $request->tagId = '<value>';
    $request->tagIds = '<value>';
    $request->tagNames = '<value>';
    $request->search = '<value>';
    $request->userId = '<value>';
    $request->showArchived = false;
    $request->withTags = false;
    $request->sort = Operations\Sort::CreatedAt;
    $request->page = 678317;

    $response = $sdk->links->list($request);

    if ($response->linkSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}

```
<!-- End Global Parameters [global-parameters] -->

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
