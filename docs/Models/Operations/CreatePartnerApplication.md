# CreatePartnerApplication

Linked program application, including review outcome when applicable.


## Fields

| Field                                                                                              | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `rejectionReason`                                                                                  | [Operations\CreatePartnerRejectionReason](../../Models/Operations/CreatePartnerRejectionReason.md) | :heavy_check_mark:                                                                                 | Preset reason when the application was rejected.                                                   |
| `rejectionNote`                                                                                    | *string*                                                                                           | :heavy_check_mark:                                                                                 | Free-form note when the application was rejected.                                                  |
| `reviewedAt`                                                                                       | *string*                                                                                           | :heavy_check_mark:                                                                                 | When the application was approved or rejected.                                                     |