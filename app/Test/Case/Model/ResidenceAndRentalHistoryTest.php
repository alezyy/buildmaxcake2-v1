<?php
App::uses('ResidenceAndRentalHistory', 'Model');

/**
 * ResidenceAndRentalHistory Test Case
 *
 */
class ResidenceAndRentalHistoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.residence_and_rental_history'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ResidenceAndRentalHistory = ClassRegistry::init('ResidenceAndRentalHistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ResidenceAndRentalHistory);

		parent::tearDown();
	}

}
