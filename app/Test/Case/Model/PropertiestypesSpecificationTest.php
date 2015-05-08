<?php
App::uses('PropertiestypesSpecification', 'Model');

/**
 * PropertiestypesSpecification Test Case
 *
 */
class PropertiestypesSpecificationTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.propertiestypes_specification'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->PropertiestypesSpecification = ClassRegistry::init('PropertiestypesSpecification');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->PropertiestypesSpecification);

		parent::tearDown();
	}

}
