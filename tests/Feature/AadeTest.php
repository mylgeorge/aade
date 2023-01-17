<?php

namespace Tests\Feature;

use DateTime;
use Tests\TestCase;

use \Sofar\Aade\Aade;
use \Sofar\Aade\Models\Invoice;
use \Sofar\Aade\Utils\Validator;

class AadeTest extends TestCase
{

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testAadeClient()
    {

        Aade::Fake(true)->SetCredential($_ENV['AADE_USER'], $_ENV['AADE_KEY']);
            
        try {
            $response = Invoice::create()->sendMany([
                [
                    'issuer' => [
                        'vatNumber' => "XXXXX",
                        'country' => 'GR',
                        'branch' => 0
                    ],
                    'counterpart' => [
                        'vatNumber' => "XXXXXXX",
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
                        'invoiceType' => '1',
                        'issueDate' => (new \DateTime)->setTimezone(new \DateTimeZone('Europe/Athens')), // setTimestamp()
                        'currency' => 'EUR'
                    ],
                    'paymentMethods' => [
                        [
                            'amount' => 0,
                            'type' => 1
                        ],
                        [
                            'amount' => 2,
                            'type' => 2
                        ]
                    ],
                    // 'invoiceSummary' => [
                    //     'totalFeesAmount' => 0,       // Σύνολο Τελών
                    //     'totalStampDutyAmount' => 0,  // Σύνολο Χαρτοσήμου
                    //     'totalDeductionsAmount' => 0, // Σύνολο Κρατήσεων
                    //     'totalOtherTaxesAmount' => 0, // Σύνολο Λοιπών Φόρων
                    //     'totalWithheldAmount' => 0,   // Σύνολο Παρ. Φόρων

                    //     'totalVatAmount' => 24,       // Σύνολο ΦΠΑ
                    //     'totalNetValue' => 100,       // Σύνολο Καθαρής Αξίας (Συνολική Αξία - Φόροι)
                    //     'totalGrossValue' => 124,     // Συνολική Αξία

                    //     'incomeClassification' => [
                    //         [
                    //             'amount' => 100,
                    //             'classificationCategory' => 'category1_2',
                    //             'classificationType' => 'E3_561_003'
                    //         ]
                    //     ]
                    // ],
                    'invoiceDetails' => [
                        [
                            'lineNumber' => '1',
                            // 'recType' => 2,
                            'netValue' => 100,
                            'vatAmount' => 24,

                            'vatCategory' => 1,  // 7 (0% VAT)
                            'vatExemptionCategory' => null,

                            'discountOption' => 'true',
                            // 'incomeClassification' => [
                            //     [
                            //         'classificationCategory' => 'category1_1',
                            //         'classificationType' => 'E3_561_005',
                            //         'amount'=> 999,
                            //         'id' => 2
                            //     ],
                            //     [
                            //         'classificationCategory' => 'category1_5',
                            //         'classificationType' => 'E3_561_003',
                            //         'amount'=> 999,
                            //         'id' => 3
                            //     ]
                            // ]
                                ],
                                [
                                    'lineNumber' => '2',
                                    // 'recType' => 2,
                                    'netValue' => 100,
                                    'vatAmount' => 24,
        
                                    'vatCategory' => 1,  // 7 (0% VAT)
                                    'vatExemptionCategory' => null,
        
                                    'discountOption' => 'true',
                                    // 'incomeClassification' => [
                                    //     [
                                    //         'classificationCategory' => 'category1_2',
                                    //         'classificationType' => 'E3_561_005',
                                    //         'amount'=> 100,
                                    //         'id' => 1
                                    //     ]
                                    // ]
                                ]
                    ],
                    // 'taxesTotals' => [
                    //     [
                    //         'taxType' => 1,
                    //         'taxAmount' => 24,
                    //         // taxCategory => 1
                    //         // underlyingValue => 0
                    //     ]
                    // ]
                    ],
            ]);


            dd($response);
        } catch (\Exception $e) {
            var_dump(Validator::getErrors());
        }

        $this->assertTrue(true);
    }
}
