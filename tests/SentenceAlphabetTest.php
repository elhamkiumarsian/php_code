<?php
use PHPUnit\Framework\TestCase;
require './src/SentenceAlphabet.php';

 
class SentenceAlphabetTest extends TestCase
{
    private $SentenceAlphabet;
 
    protected function setUp()
    {
        $this->SentenceAlphabet = new SentenceAlphabet();
    }
 
    protected function tearDown()
    {
        $this->SentenceAlphabet = NULL;
    }
    /**
     * @dataProvider additionProvider
     */
    public function test_all_alphabet($a,$b)
    {
        
        $abc =  $this->SentenceAlphabet->find_all_alphabet($a);
        $this->assertEquals($abc,$b);
    }
    
   public function additionProvider()
    {
        return [
            ["The five boxing wizards jump quickly","i"],
            ["John quickly extemporized five tow bags.","e"],
            ["some things",null]

        ];
    } 

   
   
}