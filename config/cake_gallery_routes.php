<?php
Router::connect('/cake_gallery', array(
	'plugin' => 'cake_gallery',
	'controller' => 'albums',
	'action' => 'index'
));
Router::connect('/gallery/albums', array(
	'plugin' => 'cake_gallery',
	'controller' => 'albums',
	'action' => 'index'
));
Router::connect('/cake_gallery/album/:slug', array(
	'plugin' => 'cake_gallery',
	'controller' => 'albums',
	'action' => 'view'
), array(
	'pass' => array('slug')
));

