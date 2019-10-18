<?php
use PHPUnit\Framework\TestCase;
require './src/LargestProduct.php';

 
class LargestProductTest extends TestCase
{
    private $LargestProduct;
 
    protected function setUp()
    {
        $this->LargestProduct = new LargestProduct();
    }
 
    protected function tearDown()
    {
        $this->LargestProduct = NULL;
    }
    /**
     * @dataProvider additionProvider
     */
    public function test_LargestProduct($a,$b,$expected)
    {
        
        $abc =  $this->LargestProduct->findMaxProduct($a,$b);
        $this->assertEquals($abc,$expected);
    }
    
   public function additionProvider()
    {
        return [
            [1027839594,3,405 ],
            [1027839594,5,9720 ]

        ];
    } 
}