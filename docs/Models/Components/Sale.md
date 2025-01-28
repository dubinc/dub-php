# Sale


## Fields

| Field                                                                      | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `amount`                                                                   | *int*                                                                      | :heavy_check_mark:                                                         | The amount of the sale. Should be passed in cents.                         |
| `paymentProcessor`                                                         | [Components\PaymentProcessor](../../Models/Components/PaymentProcessor.md) | :heavy_check_mark:                                                         | The payment processor via which the sale was made.                         |
| `invoiceId`                                                                | *?string*                                                                  | :heavy_minus_sign:                                                         | The invoice ID of the sale.                                                |