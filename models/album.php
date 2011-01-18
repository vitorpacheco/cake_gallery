<?php
/**
 * Album
 *
 *
 * @category Model
 * @package  CakeGallery
 * @version  1.0
 * @author   Vitor Pacheco Costa <vitor-p.c@hotmail.com>
 * @license  http://www.opensource.org/licenses/mit-license.php The MIT License
 */
class Album extends AppModel {
/**
 * Model name
 *
 * @var string
 * @access public
 */
	var $name = 'Album';
	var $validate = array(
		'slug' => array(
			'rule' => 'isUnique',
			'message' => 'Slug is alredy in use.',
		),
	);
/**
 * Model associations: hasMany
 *
 * @var array
 * @access public
 */
	var $hasMany = array(
		'Photo' => array('className' => 'Gallery.photo',
			'foreignKey' => 'album_id',
			'dependent' => true,
			'conditions' => '',
			'fields' => '',
			'order' => 'Photo.title ASC',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
	);
}

