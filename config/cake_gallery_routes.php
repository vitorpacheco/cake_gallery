<?php
$config['CakeGalleryRoutes']['index'] = array(
	'/cake_gallery',
	array(
		'plugin' => 'cake_gallery',
		'controller' => 'albums',
		'action' => 'index'
	)
);
$config['CakeGalleryRoutes']['albums_index'] = array(
	'/cake_gallery/albums',
	array(
		'plugin' => 'cake_gallery',
		'controller' => 'albums',
		'action' => 'index'
	)
);
$config['CakeGalleryRoutes']['album_slug'] = array(
	'/cake_gallery/album/:slug',
	array(
		'plugin' => 'cake_gallery',
		'controller' => 'albums',
		'action' => 'view'
	),
	array(
		'pass' => array('slug')
	)
);
$config['CakeGalleryRoutes']['admin_index'] = array(
	'/admin/cake_gallery',
	array(
		'plugin' => 'cake_gallery',
		'admin' => true,
		'controller' => 'albums',
		'action' => 'index'
	)
);