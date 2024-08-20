# Unauthorized

Although the HTTP standard specifies "unauthorized", semantically this response means "unauthenticated". That is, the client must authenticate itself to get the requested response.


## Fields

| Field                                                                | Type                                                                 | Required                                                             | Description                                                          |
| -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- | -------------------------------------------------------------------- |
| `error`                                                              | [Errors\UnauthorizedError](../../Models/Errors/UnauthorizedError.md) | :heavy_check_mark:                                                   | N/A                                                                  |