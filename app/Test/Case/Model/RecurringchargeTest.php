<?php
App::uses('Recurringcharge', 'Model');

/**
 * Recurringcharge Test Case
 *
 */
class RecurringchargeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.recurringcharge'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Recurringcharge = ClassRegistry::init('Recurringcharge');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Recurringcharge);

		parent::tearDown();
	}

}
