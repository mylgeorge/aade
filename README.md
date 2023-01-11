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

try {
    Invoice::create()->sendMany([
        [
            'issuer' => [
                'vatNumber' => "123",
                'country' => 'GR',
                'branch' => 0
            ],
            'counterpart' => [
                'vatNumber' => "123",
                'country' => 'GR',
                'branch' => 0,
                'name' => '-',
                'address' => [
                    'city' => '-',
                    'number' => '-',
                    'street' => '-',
                    'postalCode' => '-'
                ]
            ],
            'invoiceHeader' => [
                'aa' => 123,
                'series' => "W",
                'invoiceType' => '1.1',
                'issueDate' => (new \DateTime)->setTimezone(new \DateTimeZone('Europe/Athens')),
                'currency' => 'EUR'
            ],
            'paymentMethods' => [
                [
                    'amount' => '0',
                    'type' => '1'
                ]
            ],
            'invoiceSummary' => [
                'totalFeesAmount' => 0,       //
                'totalOtherTaxesAmount' => 0, //
                'totalStampDutyAmount' => 0,  //
                'totalDeductionsAmount' => 0, //

                'totalWithheldAmount' => 0,   //

                'totalNetValue' => 0,         //
                'totalVatAmount' => 0,        //
                'totalGrossValue' => 0,       //
                'incomeClassification' => [
                    [
                        'amount' => 1,
                        'classificationCategory' => 'category1_1',
                        'classificationType' => 'E3_106'
                    ]
                ]
            ],
            'invoiceDetails' => [
                [
                    'lineNumber' => '1',
                    'netValue' => '1',
                    'vatCategory' => '1',
                    'vatAmount' => '1',
                    'discountOption' => 'true',
                    'incomeClassification' => [
                        [
                            'amount' => 1,
                            'classificationCategory' => 'category1_1',
                            'classificationType' => 'E3_106'
                        ]
                    ]
                ]
            ],
            'taxesTotals' => [
                [
                    'taxType' => 1,
                    'taxAmount' => 1,
                    // taxCategory => 1
                    // underlyingValue => 0
                ]
            ]
        ]
    ]);
} catch (\Exception $e) {
    var_dump(Validator::getErrors());
}
        
```
