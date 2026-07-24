# ListPartnerApplicationsRequest


## Fields

| Field                                                        | Type                                                         | Required                                                     | Description                                                  | Example                                                      |
| ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ | ------------------------------------------------------------ |
| `country`                                                    | *?string*                                                    | :heavy_minus_sign:                                           | A filter on the list based on the partner's `country` field. | US                                                           |
| `groupId`                                                    | *?string*                                                    | :heavy_minus_sign:                                           | A filter on the list based on the partner's `groupId` field. | grp_123                                                      |
| `page`                                                       | *?int*                                                       | :heavy_minus_sign:                                           | The page number for pagination.                              | 1                                                            |
| `pageSize`                                                   | *?int*                                                       | :heavy_minus_sign:                                           | The number of items per page.                                | 50                                                           |