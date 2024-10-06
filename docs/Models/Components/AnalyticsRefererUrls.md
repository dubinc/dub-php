# AnalyticsRefererUrls


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `refererUrl`                                                      | *string*                                                          | :heavy_check_mark:                                                | The full URL of the referer. If unknown, this will be `(direct)`  |
| `clicks`                                                          | *?float*                                                          | :heavy_minus_sign:                                                | The number of clicks from this referer to this URL                |
| `leads`                                                           | *?float*                                                          | :heavy_minus_sign:                                                | The number of leads from this referer to this URL                 |
| `sales`                                                           | *?float*                                                          | :heavy_minus_sign:                                                | The number of sales from this referer to this URL                 |
| `saleAmount`                                                      | *?float*                                                          | :heavy_minus_sign:                                                | The total amount of sales from this referer to this URL, in cents |