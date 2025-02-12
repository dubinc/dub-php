# FolderSchema


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `id`                                                              | *string*                                                          | :heavy_check_mark:                                                | The unique ID of the folder.                                      |
| `name`                                                            | *string*                                                          | :heavy_check_mark:                                                | The name of the folder.                                           |
| `createdAt`                                                       | *string*                                                          | :heavy_check_mark:                                                | The date the folder was created.                                  |
| `updatedAt`                                                       | *string*                                                          | :heavy_check_mark:                                                | The date the folder was updated.                                  |
| `linkCount`                                                       | *?float*                                                          | :heavy_minus_sign:                                                | The number of links in the folder.                                |
| `accessLevel`                                                     | [?Components\AccessLevel](../../Models/Components/AccessLevel.md) | :heavy_minus_sign:                                                | The access level of the folder within the workspace.              |