<div class="albums form">
	<h2><?php __d('cake_gallery','Add album'); ?></h2>
	<?php echo $form->create('Album');?>
		<fieldset>
		<?php
			echo $form->input('title',array('label' => __('Title', true)));
			echo $form->input('slug');
			echo $form->input('description',array('label' => __('Description', true)));
			echo $form->input('status');
		?>
		</fieldset>
	<?php echo $form->end('Submit');?>
</div>

