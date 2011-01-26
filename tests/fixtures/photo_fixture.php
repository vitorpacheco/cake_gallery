<?php
/* Photo Fixture generated on: 2011-01-26 00:31:20 : 1296009080 */
class PhotoFixture extends CakeTestFixture {
	var $name = 'Photo';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'album_id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'index'),
		'title' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'descrition' => array('type' => 'text', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'small' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'large' => array('type' => 'string', 'null' => true, 'default' => NULL, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1), 'fk_photos_albums' => array('column' => 'album_id', 'unique' => 0)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'album_id' => 1,
			'title' => 'Lorem ipsum dolor sit amet',
			'descrition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'small' => 'Lorem ipsum dolor sit amet',
			'large' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 2,
			'album_id' => 2,
			'title' => 'Lorem ipsum dolor sit amet',
			'descrition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'small' => 'Lorem ipsum dolor sit amet',
			'large' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 3,
			'album_id' => 2,
			'title' => 'Lorem ipsum dolor sit amet',
			'descrition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'small' => 'Lorem ipsum dolor sit amet',
			'large' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 4,
			'album_id' => 3,
			'title' => 'Lorem ipsum dolor sit amet',
			'descrition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'small' => 'Lorem ipsum dolor sit amet',
			'large' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 5,
			'album_id' => 3,
			'title' => 'Lorem ipsum dolor sit amet',
			'descrition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'small' => 'Lorem ipsum dolor sit amet',
			'large' => 'Lorem ipsum dolor sit amet'
		),
		array(
			'id' => 6,
			'album_id' => 3,
			'title' => 'Lorem ipsum dolor sit amet',
			'descrition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'small' => 'Lorem ipsum dolor sit amet',
			'large' => 'Lorem ipsum dolor sit amet'
		),
	);
}