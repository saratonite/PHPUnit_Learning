<?php

class AcTest extends PHPUnit_Framework_TestCase{

	public function testIsActive(){
		$a=new Account\Ac();
		$this->assertTrue($a->isActive());
	}
}