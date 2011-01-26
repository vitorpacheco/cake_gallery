<?php
/* Album Test cases generated on: 2011-01-23 02:15:05 : 1295756105*/
App::import('Model', 'CakeGallery.Album');

class AlbumTestCase extends CakeTestCase {
	var $fixtures = array('plugin.cake_gallery.album', 'plugin.cake_gallery.photo');
	var $Album = null;

	function startTest() {
		$this->Album =& ClassRegistry::init('CakeGallery.Album');
		$this->Album->Photo =& ClassRegistry::init('CakeGallery.Photo');
		$this->Album->Photo->useDbConfig = 'test_suite';
	}
	
	function testAddAlbumWhitNotUniqueSlug() {
		App::import('Core', 'Inflector');
		$data = array(
			'Album' => array(
				'id' => 2,
				'title' => 'Lorem ipsum dolor sit amet',
				'slug' => Inflector::slug('album 1'),
				'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
				'status' => 1
			)
		);
		$this->Album->create();
		$this->assertFalse($this->Album->save($data));
	}
	
	function testRetrievPhotosFromAlbum() {
		$expected = array(
			'Album' => array(
				'id' => 1,
				'title' => Inflector::slug('album 1'),
				'slug' => 'Lorem ipsum dolor sit amet',
				'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
				'status' => 1
			),
			'Photo' => array(
				'id' => 1,
				'album_id' => 1,
				'title' => 'Lorem ipsum dolor sit amet',
				'descrition' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
				'small' => 'Lorem ipsum dolor sit amet',
				'large' => 'Lorem ipsum dolor sit amet'
			)
		);
		debug($this->Album->find('first', array('conditions' => array('Album.id' => 1))));
		$this->assertEqual($expected, $this->Album->find('first', array('conditions' => array('Album.id' => 1))));
	}

	function endTest() {
		unset($this->Album);
		ClassRegistry::flush();
	}

}