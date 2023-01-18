<?php

namespace Tests\Unit;

use Sofar\Aade\Aade;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testVatCategory()
    {
        $this->assertEquals(Aade::getVatCategory(24.0), 1);
        $this->assertEquals(Aade::getVatCategory('0.0'), 7);
    }
}