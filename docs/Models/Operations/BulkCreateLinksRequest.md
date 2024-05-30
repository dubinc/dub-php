# BulkCreateLinksRequest


## Fields

| Field                                                                               | Type                                                                                | Required                                                                            | Description                                                                         |
| ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------- |
| `workspaceId`                                                                       | *?string*                                                                           | :heavy_minus_sign:                                                                  | The ID of the workspace.                                                            |
| `projectSlug`                                                                       | *?string*                                                                           | :heavy_minus_sign:                                                                  | The slug of the project. This field is deprecated – use `workspaceId` instead.      |
| `requestBody`                                                                       | array<[\Dub\Models\Operations\RequestBody](../../Models/Operations/RequestBody.md)> | :heavy_minus_sign:                                                                  | N/A                                                                                 |