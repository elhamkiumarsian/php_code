<?php
use PHPUnit\Framework\TestCase;
require './src/StringMerge.php';

 
class StringMergeTest extends TestCase
{
    private $StringMerge;
 
    protected function setUp()
    {
        $this->StringMerge = new StringMerge();
    }
 
    protected function tearDown()
    {
        $this->StringMerge = NULL;
    }
    /**
     * @dataProvider additionProvider
     */
    public function test_str_merge($a,$b,$expected)
    {
        
        $abc =  $this->StringMerge->str_merge($a,$b);
        $this->assertEquals($abc,$expected);
    }
    
   public function additionProvider()
    {
        return [
            ["MICHAEL","JORDAN","MJIOCRHDAAENL"]

        ];
    } 
}