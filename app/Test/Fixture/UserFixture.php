<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'user';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'us_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false, 'key' => 'primary'),
		'us_reg_no' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'us_first_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_last_name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_email' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 50, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_password' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_confirmed' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 10, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_tp_no_land' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'us_tp_no_mobile' => array('type' => 'integer', 'null' => true, 'default' => null, 'length' => 10, 'unsigned' => false),
		'us_created' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'us_modified' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'us_session' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 40, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_city' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_first_access' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'us_last_access' => array('type' => 'biginteger', 'null' => false, 'default' => null, 'length' => 10, 'unsigned' => false),
		'us_url' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 30, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_picture' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_discription1' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_discription2' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_ip' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'us_deleted' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'us_policy_agreed' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'us_visible' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'us_id', 'unique' => 1)
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
			'us_id' => 1,
			'us_reg_no' => 1,
			'us_first_name' => 'Lorem ipsum dolor sit amet',
			'us_last_name' => 'Lorem ipsum dolor sit amet',
			'us_email' => 'Lorem ipsum dolor sit amet',
			'us_password' => 'Lorem ip',
			'us_confirmed' => 'Lorem ip',
			'us_tp_no_land' => 1,
			'us_tp_no_mobile' => 1,
			'us_created' => '',
			'us_modified' => '',
			'us_session' => 'Lorem ipsum dolor sit amet',
			'us_city' => 'Lorem ipsum dolor ',
			'us_first_access' => '',
			'us_last_access' => '',
			'us_url' => 'Lorem ipsum dolor sit amet',
			'us_picture' => 'Lorem ipsum dolor sit amet',
			'us_discription1' => 'Lorem ipsum dolor sit amet',
			'us_discription2' => 'Lorem ipsum dolor sit amet',
			'us_ip' => 'Lorem ipsum dolor ',
			'us_deleted' => 1,
			'us_policy_agreed' => 1,
			'us_visible' => 1
		),
	);

}
