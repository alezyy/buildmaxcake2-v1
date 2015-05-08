<?php
App::uses('OperatingAccount', 'Model');

/**
 * OperatingAccount Test Case
 *
 */
class OperatingAccountTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.operating_account'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->OperatingAccount = ClassRegistry::init('OperatingAccount');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->OperatingAccount);

		parent::tearDown();
	}

}
