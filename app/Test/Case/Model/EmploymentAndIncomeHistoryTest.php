<?php
App::uses('EmploymentAndIncomeHistory', 'Model');

/**
 * EmploymentAndIncomeHistory Test Case
 *
 */
class EmploymentAndIncomeHistoryTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.employment_and_income_history'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->EmploymentAndIncomeHistory = ClassRegistry::init('EmploymentAndIncomeHistory');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->EmploymentAndIncomeHistory);

		parent::tearDown();
	}

}
