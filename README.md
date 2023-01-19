# aade
AADE MyData into PHP classes and JMS metadata

```
composer require mylgeorge/aade
```


```
use \Sofar\Aade\Aade;
use \Sofar\Aade\Models\Invoice;
use \Sofar\Aade\Utils\Validator;

Aade::SetCredential(***AADE_USER***, ***AADE_KEY***);

$invoice = [
    'issuer' => [
        'vatNumber' => VAT_ID,
        'country' => 'GR',
        'branch' => 0
    ],
    'invoiceHeader' => [
        'aa' => $order->getInvoceNo(),
        'series' => "W",
        'invoiceType' => '1.0',
        'issueDate' => date_create( $order->getDate() ),
        'currency' => 'EUR'
    ],
    'paymentMethods' => [
        [
            'amount' => $total,
            'type' => 1
        ]
    ],
    'counterpart' => [
        'vatNumber' => $vatNumber,
        'country' => $paymentAddr->getCountry(),
        'branch' => 0,
        'name' => $paymentAddr->getCompany(),
        'address' => [
            'city' => $paymentAddr->getCity(),
            'number' => $paymentAddr->getNumber(),
            'street' => $paymentAddr->getAddress(),
            'postalCode' => $paymentAddr->getPostal()
        ]
    ],
    'invoiceDetails' => [],
    'invoiceSummary' => [    
        'totalNetValue' => $price->getValue(),
        'totalVatAmount' => $price->getTaxValue(),
        'totalGrossValue' => $total,
    ],
];

foreach(getProducts() as $product){
    $invoice['invoiceDetails'][] = [
        'discountOption' => 'true',
        'quantity' => $product->getQuantity(),
        'netValue' => $product->getPrice()->getValue(),
        'vatAmount' => $product->getPrice()->getTaxValue(),
        'vatCategory' => Aade::getVatCategory($product->getPrice()->getTaxRate()),
    ];
}

try {
    $response = (new Invoice)->send($invoice);
    // OR
    // Invoice::create()->sendMany([ $invoice ]);

    if($r->getStatusCode() !== 'Success'){
        echo 'Error while trying to send invoice';
    }
} catch (\Exception $e) {
    var_dump(Validator::getErrors());
}
        
```
