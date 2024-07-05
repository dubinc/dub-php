# Links


### Available Operations

* [list](#list) - Retrieve a list of links
* [create](#create) - Create a new link
* [count](#count) - Retrieve links count
* [get](#get) - Retrieve a link
* [delete](#delete) - Delete a link
* [update](#update) - Update a link
* [createMany](#createmany) - Bulk create links
* [updateMany](#updatemany) - Bulk update links
* [upsert](#upsert) - Upsert a link

## list

Retrieve a paginated list of links for the authenticated workspace.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

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
    $request->page = 678317;;

    $response = $sdk->links->list($request);

    if ($response->linkSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [\Dub\Models\Operations\GetLinksRequest](../../Models/Operations/GetLinksRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?\Dub\Models\Operations\GetLinksResponse](../../Models/Operations/GetLinksResponse.md)**


## create

Create a new link for the authenticated workspace.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

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
    $requestBody->tagIds = [
        '<value>',
    ];
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

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `workspaceId`                                                                                    | *string*                                                                                         | :heavy_minus_sign:                                                                               | The ID of the workspace.                                                                         |
| `requestBody`                                                                                    | [\Dub\Models\Operations\CreateLinkRequestBody](../../Models/Operations/CreateLinkRequestBody.md) | :heavy_minus_sign:                                                                               | N/A                                                                                              |


### Response

**[?\Dub\Models\Operations\CreateLinkResponse](../../Models/Operations/CreateLinkResponse.md)**


## count

Retrieve the number of links for the authenticated workspace.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetLinksCountRequest();
    $request->domain = 'false-epauliere.info';
    $request->tagId = '<value>';
    $request->tagIds = '<value>';
    $request->tagNames = '<value>';
    $request->search = '<value>';
    $request->userId = '<value>';
    $request->showArchived = false;
    $request->withTags = false;
    $request->groupBy = '<value>';;

    $response = $sdk->links->count($request);

    if ($response->number !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [\Dub\Models\Operations\GetLinksCountRequest](../../Models/Operations/GetLinksCountRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?\Dub\Models\Operations\GetLinksCountResponse](../../Models/Operations/GetLinksCountResponse.md)**


## get

Retrieve the info for a link.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetLinkInfoRequest();
    $request->domain = 'ringed-blow.name';
    $request->key = '<key>';
    $request->linkId = 'clux0rgak00011...';
    $request->externalId = 'ext_123456';;

    $response = $sdk->links->get($request);

    if ($response->linkSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [\Dub\Models\Operations\GetLinkInfoRequest](../../Models/Operations/GetLinkInfoRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?\Dub\Models\Operations\GetLinkInfoResponse](../../Models/Operations/GetLinkInfoResponse.md)**


## delete

Delete a link for the authenticated workspace.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $request = new Operations\DeleteLinkRequest();
    $request->linkId = '<value>';;

    $response = $sdk->links->delete($request);

    if ($response->object !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [\Dub\Models\Operations\DeleteLinkRequest](../../Models/Operations/DeleteLinkRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?\Dub\Models\Operations\DeleteLinkResponse](../../Models/Operations/DeleteLinkResponse.md)**


## update

Update a link for the authenticated workspace. If there's no change, returns it as it is.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateLinkRequest();
    $request->linkId = '<value>';
    $request->requestBody = new Operations\UpdateLinkRequestBody();
    $request->requestBody->url = 'https://google/com';
    $request->requestBody->domain = 'tidy-amazon.name';
    $request->requestBody->key = '<key>';
    $request->requestBody->externalId = '123456';
    $request->requestBody->prefix = '<value>';
    $request->requestBody->trackConversion = false;
    $request->requestBody->archived = false;
    $request->requestBody->publicStats = false;
    $request->requestBody->tagId = '<value>';
    $request->requestBody->tagIds = [
        '<value>',
    ];
    $request->requestBody->tagNames = '<value>';
    $request->requestBody->comments = '<value>';
    $request->requestBody->expiresAt = '<value>';
    $request->requestBody->expiredUrl = '<value>';
    $request->requestBody->password = 'AdaOKvPKDk8CkuA';
    $request->requestBody->proxy = false;
    $request->requestBody->title = '<value>';
    $request->requestBody->description = 'Front-line 24/7 implementation';
    $request->requestBody->image = 'https://loremflickr.com/640/480';
    $request->requestBody->rewrite = false;
    $request->requestBody->ios = '<value>';
    $request->requestBody->android = '<value>';
    $request->requestBody->geo = new Components\LinkGeoTargeting();
    $request->requestBody->geo->af = '<value>';
    $request->requestBody->geo->al = '<value>';
    $request->requestBody->geo->dz = '<value>';
    $request->requestBody->geo->as = '<value>';
    $request->requestBody->geo->ad = '<value>';
    $request->requestBody->geo->ao = '<value>';
    $request->requestBody->geo->ai = '<value>';
    $request->requestBody->geo->aq = '<value>';
    $request->requestBody->geo->ag = '<value>';
    $request->requestBody->geo->ar = '<value>';
    $request->requestBody->geo->am = '<value>';
    $request->requestBody->geo->aw = '<value>';
    $request->requestBody->geo->au = '<value>';
    $request->requestBody->geo->at = '<value>';
    $request->requestBody->geo->az = '<value>';
    $request->requestBody->geo->bs = '<value>';
    $request->requestBody->geo->bh = '<value>';
    $request->requestBody->geo->bd = '<value>';
    $request->requestBody->geo->bb = '<value>';
    $request->requestBody->geo->by = '<value>';
    $request->requestBody->geo->be = '<value>';
    $request->requestBody->geo->bz = '<value>';
    $request->requestBody->geo->bj = '<value>';
    $request->requestBody->geo->bm = '<value>';
    $request->requestBody->geo->bt = '<value>';
    $request->requestBody->geo->bo = '<value>';
    $request->requestBody->geo->ba = '<value>';
    $request->requestBody->geo->bw = '<value>';
    $request->requestBody->geo->bv = '<value>';
    $request->requestBody->geo->br = '<value>';
    $request->requestBody->geo->io = '<value>';
    $request->requestBody->geo->bn = '<value>';
    $request->requestBody->geo->bg = '<value>';
    $request->requestBody->geo->bf = '<value>';
    $request->requestBody->geo->bi = '<value>';
    $request->requestBody->geo->kh = '<value>';
    $request->requestBody->geo->cm = '<value>';
    $request->requestBody->geo->ca = '<value>';
    $request->requestBody->geo->cv = '<value>';
    $request->requestBody->geo->ky = '<value>';
    $request->requestBody->geo->cf = '<value>';
    $request->requestBody->geo->td = '<value>';
    $request->requestBody->geo->cl = '<value>';
    $request->requestBody->geo->cn = '<value>';
    $request->requestBody->geo->cx = '<value>';
    $request->requestBody->geo->cc = '<value>';
    $request->requestBody->geo->co = '<value>';
    $request->requestBody->geo->km = '<value>';
    $request->requestBody->geo->cg = '<value>';
    $request->requestBody->geo->cd = '<value>';
    $request->requestBody->geo->ck = '<value>';
    $request->requestBody->geo->cr = '<value>';
    $request->requestBody->geo->ci = '<value>';
    $request->requestBody->geo->hr = '<value>';
    $request->requestBody->geo->cu = '<value>';
    $request->requestBody->geo->cy = '<value>';
    $request->requestBody->geo->cz = '<value>';
    $request->requestBody->geo->dk = '<value>';
    $request->requestBody->geo->dj = '<value>';
    $request->requestBody->geo->dm = '<value>';
    $request->requestBody->geo->do = '<value>';
    $request->requestBody->geo->ec = '<value>';
    $request->requestBody->geo->eg = '<value>';
    $request->requestBody->geo->sv = '<value>';
    $request->requestBody->geo->gq = '<value>';
    $request->requestBody->geo->er = '<value>';
    $request->requestBody->geo->ee = '<value>';
    $request->requestBody->geo->et = '<value>';
    $request->requestBody->geo->fk = '<value>';
    $request->requestBody->geo->fo = '<value>';
    $request->requestBody->geo->fj = '<value>';
    $request->requestBody->geo->fi = '<value>';
    $request->requestBody->geo->fr = '<value>';
    $request->requestBody->geo->gf = '<value>';
    $request->requestBody->geo->pf = '<value>';
    $request->requestBody->geo->tf = '<value>';
    $request->requestBody->geo->ga = '<value>';
    $request->requestBody->geo->gm = '<value>';
    $request->requestBody->geo->ge = '<value>';
    $request->requestBody->geo->de = '<value>';
    $request->requestBody->geo->gh = '<value>';
    $request->requestBody->geo->gi = '<value>';
    $request->requestBody->geo->gr = '<value>';
    $request->requestBody->geo->gl = '<value>';
    $request->requestBody->geo->gd = '<value>';
    $request->requestBody->geo->gp = '<value>';
    $request->requestBody->geo->gu = '<value>';
    $request->requestBody->geo->gt = '<value>';
    $request->requestBody->geo->gn = '<value>';
    $request->requestBody->geo->gw = '<value>';
    $request->requestBody->geo->gy = '<value>';
    $request->requestBody->geo->ht = '<value>';
    $request->requestBody->geo->hm = '<value>';
    $request->requestBody->geo->va = '<value>';
    $request->requestBody->geo->hn = '<value>';
    $request->requestBody->geo->hk = '<value>';
    $request->requestBody->geo->hu = '<value>';
    $request->requestBody->geo->is = '<value>';
    $request->requestBody->geo->in = '<value>';
    $request->requestBody->geo->id = '<id>';
    $request->requestBody->geo->ir = '<value>';
    $request->requestBody->geo->iq = '<value>';
    $request->requestBody->geo->ie = '<value>';
    $request->requestBody->geo->il = '<value>';
    $request->requestBody->geo->it = '<value>';
    $request->requestBody->geo->jm = '<value>';
    $request->requestBody->geo->jp = '<value>';
    $request->requestBody->geo->jo = '<value>';
    $request->requestBody->geo->kz = '<value>';
    $request->requestBody->geo->ke = '<value>';
    $request->requestBody->geo->ki = '<value>';
    $request->requestBody->geo->kp = '<value>';
    $request->requestBody->geo->kr = '<value>';
    $request->requestBody->geo->kw = '<value>';
    $request->requestBody->geo->kg = '<value>';
    $request->requestBody->geo->la = '<value>';
    $request->requestBody->geo->lv = '<value>';
    $request->requestBody->geo->lb = '<value>';
    $request->requestBody->geo->ls = '<value>';
    $request->requestBody->geo->lr = '<value>';
    $request->requestBody->geo->ly = '<value>';
    $request->requestBody->geo->li = '<value>';
    $request->requestBody->geo->lt = '<value>';
    $request->requestBody->geo->lu = '<value>';
    $request->requestBody->geo->mo = '<value>';
    $request->requestBody->geo->mg = '<value>';
    $request->requestBody->geo->mw = '<value>';
    $request->requestBody->geo->my = '<value>';
    $request->requestBody->geo->mv = '<value>';
    $request->requestBody->geo->ml = '<value>';
    $request->requestBody->geo->mt = '<value>';
    $request->requestBody->geo->mh = '<value>';
    $request->requestBody->geo->mq = '<value>';
    $request->requestBody->geo->mr = '<value>';
    $request->requestBody->geo->mu = '<value>';
    $request->requestBody->geo->yt = '<value>';
    $request->requestBody->geo->mx = '<value>';
    $request->requestBody->geo->fm = '<value>';
    $request->requestBody->geo->md = '<value>';
    $request->requestBody->geo->mc = '<value>';
    $request->requestBody->geo->mn = '<value>';
    $request->requestBody->geo->ms = '<value>';
    $request->requestBody->geo->ma = '<value>';
    $request->requestBody->geo->mz = '<value>';
    $request->requestBody->geo->mm = '<value>';
    $request->requestBody->geo->na = '<value>';
    $request->requestBody->geo->nr = '<value>';
    $request->requestBody->geo->np = '<value>';
    $request->requestBody->geo->nl = '<value>';
    $request->requestBody->geo->nc = '<value>';
    $request->requestBody->geo->nz = '<value>';
    $request->requestBody->geo->ni = '<value>';
    $request->requestBody->geo->ne = '<value>';
    $request->requestBody->geo->ng = '<value>';
    $request->requestBody->geo->nu = '<value>';
    $request->requestBody->geo->nf = '<value>';
    $request->requestBody->geo->mk = '<value>';
    $request->requestBody->geo->mp = '<value>';
    $request->requestBody->geo->no = '<value>';
    $request->requestBody->geo->om = '<value>';
    $request->requestBody->geo->pk = '<value>';
    $request->requestBody->geo->pw = '<value>';
    $request->requestBody->geo->ps = '<value>';
    $request->requestBody->geo->pa = '<value>';
    $request->requestBody->geo->pg = '<value>';
    $request->requestBody->geo->py = '<value>';
    $request->requestBody->geo->pe = '<value>';
    $request->requestBody->geo->ph = '<value>';
    $request->requestBody->geo->pn = '<value>';
    $request->requestBody->geo->pl = '<value>';
    $request->requestBody->geo->pt = '<value>';
    $request->requestBody->geo->pr = '<value>';
    $request->requestBody->geo->qa = '<value>';
    $request->requestBody->geo->re = '<value>';
    $request->requestBody->geo->ro = '<value>';
    $request->requestBody->geo->ru = '<value>';
    $request->requestBody->geo->rw = '<value>';
    $request->requestBody->geo->sh = '<value>';
    $request->requestBody->geo->kn = '<value>';
    $request->requestBody->geo->lc = '<value>';
    $request->requestBody->geo->pm = '<value>';
    $request->requestBody->geo->vc = '<value>';
    $request->requestBody->geo->ws = '<value>';
    $request->requestBody->geo->sm = '<value>';
    $request->requestBody->geo->st = '<value>';
    $request->requestBody->geo->sa = '<value>';
    $request->requestBody->geo->sn = '<value>';
    $request->requestBody->geo->sc = '<value>';
    $request->requestBody->geo->sl = '<value>';
    $request->requestBody->geo->sg = '<value>';
    $request->requestBody->geo->sk = '<value>';
    $request->requestBody->geo->si = '<value>';
    $request->requestBody->geo->sb = '<value>';
    $request->requestBody->geo->so = '<value>';
    $request->requestBody->geo->za = '<value>';
    $request->requestBody->geo->gs = '<value>';
    $request->requestBody->geo->es = '<value>';
    $request->requestBody->geo->lk = '<value>';
    $request->requestBody->geo->sd = '<value>';
    $request->requestBody->geo->sr = '<value>';
    $request->requestBody->geo->sj = '<value>';
    $request->requestBody->geo->sz = '<value>';
    $request->requestBody->geo->se = '<value>';
    $request->requestBody->geo->ch = '<value>';
    $request->requestBody->geo->sy = '<value>';
    $request->requestBody->geo->tw = '<value>';
    $request->requestBody->geo->tj = '<value>';
    $request->requestBody->geo->tz = '<value>';
    $request->requestBody->geo->th = '<value>';
    $request->requestBody->geo->tl = '<value>';
    $request->requestBody->geo->tg = '<value>';
    $request->requestBody->geo->tk = '<value>';
    $request->requestBody->geo->to = '<value>';
    $request->requestBody->geo->tt = '<value>';
    $request->requestBody->geo->tn = '<value>';
    $request->requestBody->geo->tr = '<value>';
    $request->requestBody->geo->tm = '<value>';
    $request->requestBody->geo->tc = '<value>';
    $request->requestBody->geo->tv = '<value>';
    $request->requestBody->geo->ug = '<value>';
    $request->requestBody->geo->ua = '<value>';
    $request->requestBody->geo->ae = '<value>';
    $request->requestBody->geo->gb = '<value>';
    $request->requestBody->geo->us = '<value>';
    $request->requestBody->geo->um = '<value>';
    $request->requestBody->geo->uy = '<value>';
    $request->requestBody->geo->uz = '<value>';
    $request->requestBody->geo->vu = '<value>';
    $request->requestBody->geo->ve = '<value>';
    $request->requestBody->geo->vn = '<value>';
    $request->requestBody->geo->vg = '<value>';
    $request->requestBody->geo->vi = '<value>';
    $request->requestBody->geo->wf = '<value>';
    $request->requestBody->geo->eh = '<value>';
    $request->requestBody->geo->ye = '<value>';
    $request->requestBody->geo->zm = '<value>';
    $request->requestBody->geo->zw = '<value>';
    $request->requestBody->geo->ax = '<value>';
    $request->requestBody->geo->bq = '<value>';
    $request->requestBody->geo->cw = '<value>';
    $request->requestBody->geo->gg = '<value>';
    $request->requestBody->geo->im = '<value>';
    $request->requestBody->geo->je = '<value>';
    $request->requestBody->geo->me = '<value>';
    $request->requestBody->geo->bl = '<value>';
    $request->requestBody->geo->mf = '<value>';
    $request->requestBody->geo->rs = '<value>';
    $request->requestBody->geo->sx = '<value>';
    $request->requestBody->geo->ss = '<value>';
    $request->requestBody->geo->xk = '<value>';
    $request->requestBody->doIndex = false;;

    $response = $sdk->links->update($request);

    if ($response->linkSchema !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [\Dub\Models\Operations\UpdateLinkRequest](../../Models/Operations/UpdateLinkRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?\Dub\Models\Operations\UpdateLinkResponse](../../Models/Operations/UpdateLinkResponse.md)**


## createMany

Bulk create up to 100 links for the authenticated workspace.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
    

    $response = $sdk->links->createMany('<value>', [
    new Operations\RequestBody(),
]);

    if ($response->linkSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                           | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `workspaceId`                                                                       | *string*                                                                            | :heavy_minus_sign:                                                                  | The ID of the workspace.                                                            |
| `requestBody`                                                                       | array<[\Dub\Models\Operations\RequestBody](../../Models/Operations/RequestBody.md)> | :heavy_minus_sign:                                                                  | N/A                                                                                 |


### Response

**[?\Dub\Models\Operations\BulkCreateLinksResponse](../../Models/Operations/BulkCreateLinksResponse.md)**


## updateMany

Bulk update up to 100 links with the same data for the authenticated workspace.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

try {
        $request = new Operations\BulkUpdateLinksRequestBody();
    $request->linkIds = [
        '<value>',
    ];
    $request->data = new Operations\Data();
    $request->data->url = 'https://google/com';
    $request->data->trackConversion = false;
    $request->data->archived = false;
    $request->data->publicStats = false;
    $request->data->tagId = '<value>';
    $request->data->tagIds = [
        '<value>',
    ];
    $request->data->tagNames = '<value>';
    $request->data->comments = '<value>';
    $request->data->expiresAt = '<value>';
    $request->data->expiredUrl = '<value>';
    $request->data->password = 'GWDSvXDvs2q1hzW';
    $request->data->proxy = false;
    $request->data->title = '<value>';
    $request->data->description = 'Upgradable cohesive implementation';
    $request->data->image = 'https://loremflickr.com/640/480';
    $request->data->rewrite = false;
    $request->data->ios = '<value>';
    $request->data->android = '<value>';
    $request->data->geo = new Components\LinkGeoTargeting();
    $request->data->geo->af = '<value>';
    $request->data->geo->al = '<value>';
    $request->data->geo->dz = '<value>';
    $request->data->geo->as = '<value>';
    $request->data->geo->ad = '<value>';
    $request->data->geo->ao = '<value>';
    $request->data->geo->ai = '<value>';
    $request->data->geo->aq = '<value>';
    $request->data->geo->ag = '<value>';
    $request->data->geo->ar = '<value>';
    $request->data->geo->am = '<value>';
    $request->data->geo->aw = '<value>';
    $request->data->geo->au = '<value>';
    $request->data->geo->at = '<value>';
    $request->data->geo->az = '<value>';
    $request->data->geo->bs = '<value>';
    $request->data->geo->bh = '<value>';
    $request->data->geo->bd = '<value>';
    $request->data->geo->bb = '<value>';
    $request->data->geo->by = '<value>';
    $request->data->geo->be = '<value>';
    $request->data->geo->bz = '<value>';
    $request->data->geo->bj = '<value>';
    $request->data->geo->bm = '<value>';
    $request->data->geo->bt = '<value>';
    $request->data->geo->bo = '<value>';
    $request->data->geo->ba = '<value>';
    $request->data->geo->bw = '<value>';
    $request->data->geo->bv = '<value>';
    $request->data->geo->br = '<value>';
    $request->data->geo->io = '<value>';
    $request->data->geo->bn = '<value>';
    $request->data->geo->bg = '<value>';
    $request->data->geo->bf = '<value>';
    $request->data->geo->bi = '<value>';
    $request->data->geo->kh = '<value>';
    $request->data->geo->cm = '<value>';
    $request->data->geo->ca = '<value>';
    $request->data->geo->cv = '<value>';
    $request->data->geo->ky = '<value>';
    $request->data->geo->cf = '<value>';
    $request->data->geo->td = '<value>';
    $request->data->geo->cl = '<value>';
    $request->data->geo->cn = '<value>';
    $request->data->geo->cx = '<value>';
    $request->data->geo->cc = '<value>';
    $request->data->geo->co = '<value>';
    $request->data->geo->km = '<value>';
    $request->data->geo->cg = '<value>';
    $request->data->geo->cd = '<value>';
    $request->data->geo->ck = '<value>';
    $request->data->geo->cr = '<value>';
    $request->data->geo->ci = '<value>';
    $request->data->geo->hr = '<value>';
    $request->data->geo->cu = '<value>';
    $request->data->geo->cy = '<value>';
    $request->data->geo->cz = '<value>';
    $request->data->geo->dk = '<value>';
    $request->data->geo->dj = '<value>';
    $request->data->geo->dm = '<value>';
    $request->data->geo->do = '<value>';
    $request->data->geo->ec = '<value>';
    $request->data->geo->eg = '<value>';
    $request->data->geo->sv = '<value>';
    $request->data->geo->gq = '<value>';
    $request->data->geo->er = '<value>';
    $request->data->geo->ee = '<value>';
    $request->data->geo->et = '<value>';
    $request->data->geo->fk = '<value>';
    $request->data->geo->fo = '<value>';
    $request->data->geo->fj = '<value>';
    $request->data->geo->fi = '<value>';
    $request->data->geo->fr = '<value>';
    $request->data->geo->gf = '<value>';
    $request->data->geo->pf = '<value>';
    $request->data->geo->tf = '<value>';
    $request->data->geo->ga = '<value>';
    $request->data->geo->gm = '<value>';
    $request->data->geo->ge = '<value>';
    $request->data->geo->de = '<value>';
    $request->data->geo->gh = '<value>';
    $request->data->geo->gi = '<value>';
    $request->data->geo->gr = '<value>';
    $request->data->geo->gl = '<value>';
    $request->data->geo->gd = '<value>';
    $request->data->geo->gp = '<value>';
    $request->data->geo->gu = '<value>';
    $request->data->geo->gt = '<value>';
    $request->data->geo->gn = '<value>';
    $request->data->geo->gw = '<value>';
    $request->data->geo->gy = '<value>';
    $request->data->geo->ht = '<value>';
    $request->data->geo->hm = '<value>';
    $request->data->geo->va = '<value>';
    $request->data->geo->hn = '<value>';
    $request->data->geo->hk = '<value>';
    $request->data->geo->hu = '<value>';
    $request->data->geo->is = '<value>';
    $request->data->geo->in = '<value>';
    $request->data->geo->id = '<id>';
    $request->data->geo->ir = '<value>';
    $request->data->geo->iq = '<value>';
    $request->data->geo->ie = '<value>';
    $request->data->geo->il = '<value>';
    $request->data->geo->it = '<value>';
    $request->data->geo->jm = '<value>';
    $request->data->geo->jp = '<value>';
    $request->data->geo->jo = '<value>';
    $request->data->geo->kz = '<value>';
    $request->data->geo->ke = '<value>';
    $request->data->geo->ki = '<value>';
    $request->data->geo->kp = '<value>';
    $request->data->geo->kr = '<value>';
    $request->data->geo->kw = '<value>';
    $request->data->geo->kg = '<value>';
    $request->data->geo->la = '<value>';
    $request->data->geo->lv = '<value>';
    $request->data->geo->lb = '<value>';
    $request->data->geo->ls = '<value>';
    $request->data->geo->lr = '<value>';
    $request->data->geo->ly = '<value>';
    $request->data->geo->li = '<value>';
    $request->data->geo->lt = '<value>';
    $request->data->geo->lu = '<value>';
    $request->data->geo->mo = '<value>';
    $request->data->geo->mg = '<value>';
    $request->data->geo->mw = '<value>';
    $request->data->geo->my = '<value>';
    $request->data->geo->mv = '<value>';
    $request->data->geo->ml = '<value>';
    $request->data->geo->mt = '<value>';
    $request->data->geo->mh = '<value>';
    $request->data->geo->mq = '<value>';
    $request->data->geo->mr = '<value>';
    $request->data->geo->mu = '<value>';
    $request->data->geo->yt = '<value>';
    $request->data->geo->mx = '<value>';
    $request->data->geo->fm = '<value>';
    $request->data->geo->md = '<value>';
    $request->data->geo->mc = '<value>';
    $request->data->geo->mn = '<value>';
    $request->data->geo->ms = '<value>';
    $request->data->geo->ma = '<value>';
    $request->data->geo->mz = '<value>';
    $request->data->geo->mm = '<value>';
    $request->data->geo->na = '<value>';
    $request->data->geo->nr = '<value>';
    $request->data->geo->np = '<value>';
    $request->data->geo->nl = '<value>';
    $request->data->geo->nc = '<value>';
    $request->data->geo->nz = '<value>';
    $request->data->geo->ni = '<value>';
    $request->data->geo->ne = '<value>';
    $request->data->geo->ng = '<value>';
    $request->data->geo->nu = '<value>';
    $request->data->geo->nf = '<value>';
    $request->data->geo->mk = '<value>';
    $request->data->geo->mp = '<value>';
    $request->data->geo->no = '<value>';
    $request->data->geo->om = '<value>';
    $request->data->geo->pk = '<value>';
    $request->data->geo->pw = '<value>';
    $request->data->geo->ps = '<value>';
    $request->data->geo->pa = '<value>';
    $request->data->geo->pg = '<value>';
    $request->data->geo->py = '<value>';
    $request->data->geo->pe = '<value>';
    $request->data->geo->ph = '<value>';
    $request->data->geo->pn = '<value>';
    $request->data->geo->pl = '<value>';
    $request->data->geo->pt = '<value>';
    $request->data->geo->pr = '<value>';
    $request->data->geo->qa = '<value>';
    $request->data->geo->re = '<value>';
    $request->data->geo->ro = '<value>';
    $request->data->geo->ru = '<value>';
    $request->data->geo->rw = '<value>';
    $request->data->geo->sh = '<value>';
    $request->data->geo->kn = '<value>';
    $request->data->geo->lc = '<value>';
    $request->data->geo->pm = '<value>';
    $request->data->geo->vc = '<value>';
    $request->data->geo->ws = '<value>';
    $request->data->geo->sm = '<value>';
    $request->data->geo->st = '<value>';
    $request->data->geo->sa = '<value>';
    $request->data->geo->sn = '<value>';
    $request->data->geo->sc = '<value>';
    $request->data->geo->sl = '<value>';
    $request->data->geo->sg = '<value>';
    $request->data->geo->sk = '<value>';
    $request->data->geo->si = '<value>';
    $request->data->geo->sb = '<value>';
    $request->data->geo->so = '<value>';
    $request->data->geo->za = '<value>';
    $request->data->geo->gs = '<value>';
    $request->data->geo->es = '<value>';
    $request->data->geo->lk = '<value>';
    $request->data->geo->sd = '<value>';
    $request->data->geo->sr = '<value>';
    $request->data->geo->sj = '<value>';
    $request->data->geo->sz = '<value>';
    $request->data->geo->se = '<value>';
    $request->data->geo->ch = '<value>';
    $request->data->geo->sy = '<value>';
    $request->data->geo->tw = '<value>';
    $request->data->geo->tj = '<value>';
    $request->data->geo->tz = '<value>';
    $request->data->geo->th = '<value>';
    $request->data->geo->tl = '<value>';
    $request->data->geo->tg = '<value>';
    $request->data->geo->tk = '<value>';
    $request->data->geo->to = '<value>';
    $request->data->geo->tt = '<value>';
    $request->data->geo->tn = '<value>';
    $request->data->geo->tr = '<value>';
    $request->data->geo->tm = '<value>';
    $request->data->geo->tc = '<value>';
    $request->data->geo->tv = '<value>';
    $request->data->geo->ug = '<value>';
    $request->data->geo->ua = '<value>';
    $request->data->geo->ae = '<value>';
    $request->data->geo->gb = '<value>';
    $request->data->geo->us = '<value>';
    $request->data->geo->um = '<value>';
    $request->data->geo->uy = '<value>';
    $request->data->geo->uz = '<value>';
    $request->data->geo->vu = '<value>';
    $request->data->geo->ve = '<value>';
    $request->data->geo->vn = '<value>';
    $request->data->geo->vg = '<value>';
    $request->data->geo->vi = '<value>';
    $request->data->geo->wf = '<value>';
    $request->data->geo->eh = '<value>';
    $request->data->geo->ye = '<value>';
    $request->data->geo->zm = '<value>';
    $request->data->geo->zw = '<value>';
    $request->data->geo->ax = '<value>';
    $request->data->geo->bq = '<value>';
    $request->data->geo->cw = '<value>';
    $request->data->geo->gg = '<value>';
    $request->data->geo->im = '<value>';
    $request->data->geo->je = '<value>';
    $request->data->geo->me = '<value>';
    $request->data->geo->bl = '<value>';
    $request->data->geo->mf = '<value>';
    $request->data->geo->rs = '<value>';
    $request->data->geo->sx = '<value>';
    $request->data->geo->ss = '<value>';
    $request->data->geo->xk = '<value>';
    $request->data->doIndex = false;;

    $response = $sdk->links->updateMany($request);

    if ($response->linkSchemas !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [\Dub\Models\Operations\BulkUpdateLinksRequestBody](../../Models/Operations/BulkUpdateLinksRequestBody.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |


### Response

**[?\Dub\Models\Operations\BulkUpdateLinksResponse](../../Models/Operations/BulkUpdateLinksResponse.md)**


## upsert

Upsert a link for the authenticated workspace by its URL. If a link with the same URL already exists, return it (or update it if there are any changes). Otherwise, a new link will be created.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Dub;
use \Dub\Models\Components;
use \Dub\Models\Operations;

$security = new Components\Security();
$security->token = 'DUB_API_KEY';

$sdk = Dub\Dub::builder()->setSecurity($security)->build();

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
    $requestBody->tagIds = [
        '<value>',
    ];
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

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `workspaceId`                                                                                    | *string*                                                                                         | :heavy_minus_sign:                                                                               | The ID of the workspace.                                                                         |
| `requestBody`                                                                                    | [\Dub\Models\Operations\UpsertLinkRequestBody](../../Models/Operations/UpsertLinkRequestBody.md) | :heavy_minus_sign:                                                                               | N/A                                                                                              |


### Response

**[?\Dub\Models\Operations\UpsertLinkResponse](../../Models/Operations/UpsertLinkResponse.md)**

