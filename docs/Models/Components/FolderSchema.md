# FolderSchema


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `id`                                                              | *string*                                                          | :heavy_check_mark:                                                | The unique ID of the folder.                                      |
| `name`                                                            | *string*                                                          | :heavy_check_mark:                                                | The name of the folder.                                           |
| `type`                                                            | [Components\Type](../../Models/Components/Type.md)                | :heavy_check_mark:                                                | N/A                                                               |
| `accessLevel`                                                     | [?Components\AccessLevel](../../Models/Components/AccessLevel.md) | :heavy_minus_sign:                                                | The access level of the folder within the workspace.              |
| `createdAt`                                                       | *string*                                                          | :heavy_check_mark:                                                | The date the folder was created.                                  |
| `updatedAt`                                                       | *string*                                                          | :heavy_check_mark:                                                | The date the folder was updated.                                  |