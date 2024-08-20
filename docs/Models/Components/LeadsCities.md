# LeadsCities


## Fields

| Field                                                                          | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `city`                                                                         | *string*                                                                       | :heavy_check_mark:                                                             | The name of the city                                                           |
| `country`                                                                      | [Components\LeadsCitiesCountry](../../Models/Components/LeadsCitiesCountry.md) | :heavy_check_mark:                                                             | The 2-letter country code of the city: https://d.to/geo                        |
| `leads`                                                                        | *float*                                                                        | :heavy_check_mark:                                                             | The number of leads from this city                                             |