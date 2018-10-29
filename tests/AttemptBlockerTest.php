<?php
/**
 * @coversDefaultClass \MS35\WitsSoftwareDesign\AttemptBlocker
 */
class AttemptBlockerTest extends \PHPUnit_Framework_TestCase{
    protected $result;
    
    public function setup(){
        $this->result = new \MS35\WitsSoftwareDesign\AttemptBlocker();
    }
    /*
     * @covers ::confirmIPAddress
     */
    public function testConfirmIPAddress()
    {
        $this->assertEquals(0,$this->result->confirmIPAddress('0'));
    }
}