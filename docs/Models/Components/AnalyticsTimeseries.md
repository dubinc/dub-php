# AnalyticsTimeseries


## Fields

| Field                                               | Type                                                | Required                                            | Description                                         |
| --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- | --------------------------------------------------- |
| `start`                                             | *string*                                            | :heavy_check_mark:                                  | The starting timestamp of the interval              |
| `clicks`                                            | *?float*                                            | :heavy_minus_sign:                                  | The number of clicks in the interval                |
| `leads`                                             | *?float*                                            | :heavy_minus_sign:                                  | The number of leads in the interval                 |
| `sales`                                             | *?float*                                            | :heavy_minus_sign:                                  | The number of sales in the interval                 |
| `saleAmount`                                        | *?float*                                            | :heavy_minus_sign:                                  | The total amount of sales in the interval, in cents |