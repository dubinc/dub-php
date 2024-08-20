# SalesCities


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `city`                                                                         | *string*                                                                       | :heavy_check_mark:                                                             | The name of the city                                                           |
| `country`                                                                      | [Components\SalesCitiesCountry](../../Models/Components/SalesCitiesCountry.md) | :heavy_check_mark:                                                             | The 2-letter country code of the city: https://d.to/geo                        |
| `sales`                                                                        | *float*                                                                        | :heavy_check_mark:                                                             | The number of sales from this city                                             |
| `amount`                                                                       | *float*                                                                        | :heavy_check_mark:                                                             | The total amount of sales from this city                                       |