<?php if (!isset($album)) {
	$album = $this->requestAction(array(
		'plugin' => 'cake_gallery',
		'controller' => 'albums',
		'action' => 'view'
	), array('pass' => array('slug' => $slug)));
}
?>
<?php if (!empty($album)): ?>
	<?php if (isset($album['Photo']) && count($album['Photo'])): ?>
		<div id="gallery-<?php echo $album['Album']['id']; ?>" style="width:900px;height:450px;">
			<?php foreach($album['Photo'] as $photo): ?>
			<a href="<?php echo $this->Html->url('/img/photos/'. $photo['large']); ?>"><img src="<?php echo $this->Html->url('/img/photos/'. $photo['small']); ?>"></a>
			<?php endforeach; ?>
		</div>
		<script>
		$(function() {
			$('#gallery-<?php echo $album['Album']['id']; ?>').galleria();
		});
		</script>
	<?php else: ?>
		<?php  __d('cake_gallery','No photos in the album'); ?>
	<?php endif;?>
<?php else: ?>
	[CakeGallery:<?php echo $slug; ?>]
<?php endif; ?>

