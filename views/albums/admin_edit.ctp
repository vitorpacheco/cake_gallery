<div class="albums form">
	<h2><?php __d('cake_gallery','Edit album'); ?></h2>
	<?php echo $form->create('Album');?>
		<fieldset>
		<?php
			echo $this->Form->input('id');
			echo $this->Form->input('title',array('label' => __('Title', true)));
			echo $this->Form->input('slug');
			echo $this->Form->input('description',array('label' => __('Description', true)));
			echo $this->Form->input('status');
		?>
		</fieldset>
	<?php echo $this->Form->end('Submit');?>
</div>

