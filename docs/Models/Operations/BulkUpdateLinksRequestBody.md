# BulkUpdateLinksRequestBody


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `data`                                                               | [Operations\Data](../../Models/Operations/Data.md)                   | :heavy_check_mark:                                                   | N/A                                                                  |
| `linkIds`                                                            | array<*string*>                                                      | :heavy_minus_sign:                                                   | The IDs of the links to update. Takes precedence over `externalIds`. |
| `externalIds`                                                        | array<*string*>                                                      | :heavy_minus_sign:                                                   | The external IDs of the links to update as stored in your database.  |