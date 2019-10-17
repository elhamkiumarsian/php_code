<?php
use PHPUnit\Framework\TestCase;
require './src/nonRepeatedChracter.php';

 
class nonRepeatedChracterTest extends TestCase
{
    private $nonRepeatedChracter;
 
    protected function setUp()
    {
        $this->nonRepeatedChracter = new nonRepeatedChracter();
    }
 
    protected function tearDown()
    {
        $this->nonRepeatedChracter = NULL;
    }
    /**
     * @dataProvider additionProvider
     */
    public function testRepeat($a)
    {
        
        $abc =  $this->nonRepeatedChracter->find_non_repeat($a);
        $this->assertTrue($abc);
    }
    
   public function additionProvider()
    {
        return [
            ["documentarily"],
            ["aftershock"],
            ["countryside"],
            ["six-year-old"],
            ["Double-down"],
            ["epidemic"] 
             
        ];
    } 

   
   
}