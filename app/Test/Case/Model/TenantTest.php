<?php
App::uses('Tenant', 'Model');

/**
 * Tenant Test Case
 *
 */
class TenantTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.tenant'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Tenant = ClassRegistry::init('Tenant');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Tenant);

		parent::tearDown();
	}

}
