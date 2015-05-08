<?php
App::uses('RentalOwner', 'Model');

/**
 * RentalOwner Test Case
 *
 */
class RentalOwnerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.rental_owner'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->RentalOwner = ClassRegistry::init('RentalOwner');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->RentalOwner);

		parent::tearDown();
	}

}
