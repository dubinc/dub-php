# StripeInvoicesToImport

Import paid Stripe invoices for the customer and create a commission for each. Pass `all` to import every unimported, paid invoice, or an array of Stripe invoice IDs to import only those invoices. Refunded invoices are not imported. When not provided, create a single manual sale event using `sale.amount`


## Supported Types

### `Operations\StripeInvoicesToImport1`

```php
/**
* @var \Dub\Models\Operations\StripeInvoicesToImport1
*/
Operations\StripeInvoicesToImport1 $value = /* values here */
```

### `array`

```php
/**
* @var array<string>
*/
array $value = /* values here */
```

