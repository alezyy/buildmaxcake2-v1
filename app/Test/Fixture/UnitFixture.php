<?php
/**
 * UnitFixture
 *
 */
class UnitFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'property_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true),
		'rental_owner_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'unit_number' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'size_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'market_rent' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'bedrooms' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bath' => array('type' => 'decimal', 'null' => false, 'default' => null, 'length' => 15, 'unsigned' => false),
		'lease_term' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'leasestype_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'rental_amount' => array('type' => 'float', 'null' => false, 'default' => null, 'unsigned' => false),
		'deposit_amount' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'features' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'photo' => array('type' => 'binary', 'null' => true, 'default' => null),
		'status_id' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'unit_number' => array('column' => 'unit_number', 'unique' => 0)
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
			'property_id' => 1,
			'rental_owner_id' => 1,
			'unit_number' => 1,
			'size_id' => 1,
			'market_rent' => '',
			'bedrooms' => 'Lorem ipsum dolor sit amet',
			'bath' => '',
			'lease_term' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'leasestype_id' => 1,
			'rental_amount' => 1,
			'deposit_amount' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'features' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'photo' => 'Lorem ipsum dolor sit amet',
			'status_id' => 'Lorem ipsum dolor sit amet',
			'created' => '2015-05-07 22:43:59',
			'modified' => '2015-05-07 22:43:59'
		),
	);

}
