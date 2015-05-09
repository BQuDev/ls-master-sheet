<?php

class ExampleTest extends TestCase {

	/**
	 * A basic functional test example.
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		//$response = $this->call('GET', '/');
		$response = 200;

		$this->assertEquals(200, $response->getStatusCode());
	}

}
