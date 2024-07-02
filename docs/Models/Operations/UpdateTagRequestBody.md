# UpdateTagRequestBody


## Fields

| Field                                                                                                                                                   | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `name`                                                                                                                                                  | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | The name of the tag to create.                                                                                                                          |
| `color`                                                                                                                                                 | [?\Dub\Models\Operations\UpdateTagColor](../../Models/Operations/UpdateTagColor.md)                                                                     | :heavy_minus_sign:                                                                                                                                      | The color of the tag. If not provided, a random color will be used from the list: red, yellow, green, blue, purple, pink, brown.                        |
| ~~`tag`~~                                                                                                                                               | *?string*                                                                                                                                               | :heavy_minus_sign:                                                                                                                                      | : warning: ** DEPRECATED **: This will be removed in a future release, please migrate away from it as soon as possible.<br/><br/>The name of the tag to create. |