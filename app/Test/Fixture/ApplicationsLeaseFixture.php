<?php
/**
 * ApplicationsLeaseFixture
 *
 */
class ApplicationsLeaseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => true, 'key' => 'primary'),
		'tenant_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'property_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'unit_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => true),
		'leasestype_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'start_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'end_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'automatically_end_the_lease' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'recurringcharge_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'next_due_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'rent_mount' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'security_deposit' => array('type' => 'decimal', 'null' => true, 'default' => null, 'length' => 15, 'unsigned' => false),
		'security_deposit_date' => array('type' => 'date', 'null' => true, 'default' => null),
		'status' => array('type' => 'string', 'null' => false, 'default' => 'Application', 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'notes' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'agreement' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'tenant_id' => 1,
			'property_id' => 1,
			'unit_id' => 1,
			'leasestype_id' => 1,
			'start_date' => '2015-05-07',
			'end_date' => '2015-05-07',
			'automatically_end_the_lease' => 1,
			'recurringcharge_id' => 1,
			'next_due_date' => '2015-05-07',
			'rent_mount' => 'Lorem ipsum dolor sit amet',
			'security_deposit' => '',
			'security_deposit_date' => '2015-05-07',
			'status' => 'Lorem ipsum dolor sit amet',
			'notes' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'agreement' => 'Lorem ipsum dolor sit amet'
		),
	);

}
