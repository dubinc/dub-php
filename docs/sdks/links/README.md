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
    $request->page = 1;
    $request->pageSize = 50;;

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
    $request->tagIds = [
        '<value>',
    ];
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
    $request->utmSource = '<value>';
    $request->utmMedium = '<value>';
    $request->utmCampaign = '<value>';
    $request->utmTerm = '<value>';
    $request->utmContent = '<value>';;

    $response = $sdk->links->create($request);

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
| `$request`                                                                                       | [\Dub\Models\Operations\CreateLinkRequestBody](../../Models/Operations/CreateLinkRequestBody.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


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
        $requestBody = new Operations\UpdateLinkRequestBody();
    $requestBody->url = 'https://google.com';
    $requestBody->domain = 'tidy-amazon.name';
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
    $requestBody->password = 'AdaOKvPKDk8CkuA';
    $requestBody->proxy = false;
    $requestBody->title = '<value>';
    $requestBody->description = 'Front-line 24/7 implementation';
    $requestBody->image = 'https://loremflickr.com/640/480';
    $requestBody->video = '<value>';
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
    $requestBody->utmSource = '<value>';
    $requestBody->utmMedium = '<value>';
    $requestBody->utmCampaign = '<value>';
    $requestBody->utmTerm = '<value>';
    $requestBody->utmContent = '<value>';

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
| `requestBody`                                                                                                                         | [\Dub\Models\Operations\UpdateLinkRequestBody](../../Models/Operations/UpdateLinkRequestBody.md)                                      | :heavy_minus_sign:                                                                                                                    | N/A                                                                                                                                   |


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
        $request = [
        new Operations\RequestBody(),
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
    $request->data->url = 'https://google.com';
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
    $request->data->video = '<value>';
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
    $request->data->doIndex = false;
    $request->data->utmSource = '<value>';
    $request->data->utmMedium = '<value>';
    $request->data->utmCampaign = '<value>';
    $request->data->utmTerm = '<value>';
    $request->data->utmContent = '<value>';;

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
    $request->tagIds = [
        '<value>',
    ];
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
    $request->utmSource = '<value>';
    $request->utmMedium = '<value>';
    $request->utmCampaign = '<value>';
    $request->utmTerm = '<value>';
    $request->utmContent = '<value>';;

    $response = $sdk->links->upsert($request);

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
| `$request`                                                                                       | [\Dub\Models\Operations\UpsertLinkRequestBody](../../Models/Operations/UpsertLinkRequestBody.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?\Dub\Models\Operations\UpsertLinkResponse](../../Models/Operations/UpsertLinkResponse.md)**

