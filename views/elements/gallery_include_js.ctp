<?php
echo $this->Html->script('/cake_gallery/js/galleria', false);
echo $this->Html->scriptBlock('Galleria.loadTheme("'.$this->Html->url('/cake_gallery/js/themes/classic/galleria.classic.js').'");', array('inline' => false));
?>