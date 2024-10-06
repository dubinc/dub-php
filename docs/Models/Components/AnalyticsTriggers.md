# AnalyticsTriggers


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `trigger`                                                    | [Components\Trigger](../../Models/Components/Trigger.md)     | :heavy_check_mark:                                           | The type of trigger method: link click or QR scan            |
| `clicks`                                                     | *?float*                                                     | :heavy_minus_sign:                                           | The number of clicks from this trigger method                |
| `leads`                                                      | *?float*                                                     | :heavy_minus_sign:                                           | The number of leads from this trigger method                 |
| `sales`                                                      | *?float*                                                     | :heavy_minus_sign:                                           | The number of sales from this trigger method                 |
| `saleAmount`                                                 | *?float*                                                     | :heavy_minus_sign:                                           | The total amount of sales from this trigger method, in cents |