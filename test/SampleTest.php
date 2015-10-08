<?php
use FirstRepo\Sample;

class osUuidTest extends PHPUnit_Framework_TestCase
{
	/**
	 * @test
	 */
	public function fooReturnsZero()
	{
		$this->assertSame(0, (new Sample)->foo());
	}
}
