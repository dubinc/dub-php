# RequestBody1


## Fields

| Field                                                                    | Type                                                                     | Required                                                                 | Description                                                              |
| ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ | ------------------------------------------------------------------------ |
| `type`                                                                   | [Operations\RequestBodyType](../../Models/Operations/RequestBodyType.md) | :heavy_check_mark:                                                       | N/A                                                                      |
| `partnerId`                                                              | *string*                                                                 | :heavy_check_mark:                                                       | The ID of the partner to create the commission for.                      |
| `amount`                                                                 | *float*                                                                  | :heavy_check_mark:                                                       | The commission amount in cents.                                          |
| `date`                                                                   | *?string*                                                                | :heavy_minus_sign:                                                       | If not provided, the current date will be used.                          |
| `description`                                                            | *?string*                                                                | :heavy_minus_sign:                                                       | The description of the commission.                                       |