<?php
/**
 * CategoryFixture
 *
 */
class CategoryFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'category';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'MyISAM')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'name' => 'fast food',
			'created' => '2014-09-25 09:29:04',
			'modified' => '2014-09-25 09:29:04'
		),
            
            array(
			'id' => 2,
			'name' => 'thai food',
			'created' => '2014-09-25 09:29:04',
			'modified' => '2014-09-25 09:29:04'
		),
            array(
			'id' => 3,
			'name' => 'veterian food',
			'created' => '2014-09-25 09:29:04',
			'modified' => '2014-09-25 09:29:04'
		),
            array(
			'id' => 4,
			'name' => 'japan food',
			'created' => '2014-09-25 09:29:04',
			'modified' => '2014-09-25 09:29:04'
		),
            array(
			'id' => 5,
			'name' => 'itatain food',
			'created' => '2014-09-25 09:29:04',
			'modified' => '2014-09-25 09:29:04'
		),
            array(
			'id' => 6,
			'name' => 'indian food',
			'created' => '2014-09-25 09:29:04',
			'modified' => '2014-09-25 09:29:04'
		)
            
	);

}
