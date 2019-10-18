<?php
use PHPUnit\Framework\TestCase;
require './src/LiteralDateParsing.php';

 
class LiteralDateParsingTest extends TestCase
{
    private $LiteralDateParsing;
 
    protected function setUp()
    {
        $this->LiteralDateParsing = new LiteralDateParsing();
    }
 
    protected function tearDown()
    {
        $this->LiteralDateParsing = NULL;
    }
    /**
     * @dataProvider additionProvider
     */
    public function test_date_parsing($a,$b)
    {
        
        $abc =  $this->LiteralDateParsing->date_parsing($a);
        $this->assertEquals($abc,$b);
    }
    
   public function additionProvider()
    {
        return [
            ["The first Monday of October 2019","2019-10-07"],
            ["The third Tuesday of October 2019","2019-10-15"],
            ["The last Wednesday of October 2019","2019-10-30"]

        ];
    } 
}