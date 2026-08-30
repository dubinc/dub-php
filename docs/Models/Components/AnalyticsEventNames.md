# AnalyticsEventNames


## Fields

| Field                                                    | Type                                                     | Required                                                 | Description                                              |
| -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- | -------------------------------------------------------- |
| `eventName`                                              | *string*                                                 | :heavy_check_mark:                                       | The name of the conversion event (lead or sale)          |
| `clicks`                                                 | *?float*                                                 | :heavy_minus_sign:                                       | The number of clicks from this event name                |
| `leads`                                                  | *?float*                                                 | :heavy_minus_sign:                                       | The number of leads from this event name                 |
| `sales`                                                  | *?float*                                                 | :heavy_minus_sign:                                       | The number of sales from this event name                 |
| `saleAmount`                                             | *?float*                                                 | :heavy_minus_sign:                                       | The total amount of sales from this event name, in cents |