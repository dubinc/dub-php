# Links


### Available Operations

* [list](#list) - Retrieve a list of links
* [create](#create) - Create a new link
* [count](#count) - Retrieve the number of links
* [get](#get) - Retrieve a link
* [delete](#delete) - Delete a link
* [update](#update) - Update a link
* [createMany](#createmany) - Bulk create links
* [upsert](#upsert) - Upsert a link

## list

Retrieve a list of links for the authenticated workspace. The list will be paginated and the provided query parameters allow filtering the returned links.

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

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

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
    $request->page = 6783.17;;

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

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

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

    $response = $sdk->links->create('<value>', '<value>', $requestBody);

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
| `projectSlug`                                                                                    | *string*                                                                                         | :heavy_minus_sign:                                                                               | The slug of the project. This field is deprecated – use `workspaceId` instead.                   |
| `requestBody`                                                                                    | [\Dub\Models\Operations\CreateLinkRequestBody](../../Models/Operations/CreateLinkRequestBody.md) | :heavy_minus_sign:                                                                               | N/A                                                                                              |


### Response

**[?\Dub\Models\Operations\CreateLinkResponse](../../Models/Operations/CreateLinkResponse.md)**


## count

Retrieve the number of links for the authenticated workspace. The provided query parameters allow filtering the returned links.

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

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

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

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

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

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

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

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

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
    $request->requestBody->geo->xk = '<value>';;

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

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

try {
    

    $response = $sdk->links->createMany('<value>', '<value>', [
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
| `projectSlug`                                                                       | *string*                                                                            | :heavy_minus_sign:                                                                  | The slug of the project. This field is deprecated – use `workspaceId` instead.      |
| `requestBody`                                                                       | array<[\Dub\Models\Operations\RequestBody](../../Models/Operations/RequestBody.md)> | :heavy_minus_sign:                                                                  | N/A                                                                                 |


### Response

**[?\Dub\Models\Operations\BulkCreateLinksResponse](../../Models/Operations/BulkCreateLinksResponse.md)**


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

$sdk = Dub\Dub::builder()
    ->setWorkspaceId('<value>')
    ->setSecurity($security)->build();

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

    $response = $sdk->links->upsert('<value>', '<value>', $requestBody);

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
| `projectSlug`                                                                                    | *string*                                                                                         | :heavy_minus_sign:                                                                               | The slug of the project. This field is deprecated – use `workspaceId` instead.                   |
| `requestBody`                                                                                    | [\Dub\Models\Operations\UpsertLinkRequestBody](../../Models/Operations/UpsertLinkRequestBody.md) | :heavy_minus_sign:                                                                               | N/A                                                                                              |


### Response

**[?\Dub\Models\Operations\UpsertLinkResponse](../../Models/Operations/UpsertLinkResponse.md)**

