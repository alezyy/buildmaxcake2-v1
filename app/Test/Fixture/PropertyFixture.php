<?php
/**
 * PropertyFixture
 *
 */
class PropertyFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'property_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'number_of_units' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 15, 'unsigned' => false),
		'propertiestype_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'propertiestypes_specification_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'rental_owner_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'operating_account_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'property_reserve' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 15, 'unsigned' => false),
		'rental_amount' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '6,2', 'unsigned' => false),
		'deposit_amount' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => '6,2', 'unsigned' => false),
		'lease_term' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'country_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'state_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'street' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'City' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'zip' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'photo' => array('type' => 'binary', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'property_name' => 'Lorem ipsum d',
			'number_of_units' => '',
			'propertiestype_id' => 1,
			'propertiestypes_specification_id' => 1,
			'rental_owner_id' => 1,
			'operating_account_id' => 1,
			'property_reserve' => '',
			'rental_amount' => '',
			'deposit_amount' => '',
			'lease_term' => 'Lorem ipsum d',
			'country_id' => 1,
			'state_id' => 1,
			'street' => 'Lorem ipsum dolor sit amet',
			'City' => 'Lorem ipsum dolor sit amet',
			'zip' => 'Lorem ip',
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'photo' => 'Lorem ipsum dolor sit amet'
		),
	);

}
