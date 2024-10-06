# AnalyticsReferers


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `referer`                                                    | *string*                                                     | :heavy_check_mark:                                           | The name of the referer. If unknown, this will be `(direct)` |
| `clicks`                                                     | *?float*                                                     | :heavy_minus_sign:                                           | The number of clicks from this referer                       |
| `leads`                                                      | *?float*                                                     | :heavy_minus_sign:                                           | The number of leads from this referer                        |
| `sales`                                                      | *?float*                                                     | :heavy_minus_sign:                                           | The number of sales from this referer                        |
| `saleAmount`                                                 | *?float*                                                     | :heavy_minus_sign:                                           | The total amount of sales from this referer, in cents        |