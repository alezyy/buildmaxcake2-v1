<div class="genders form">
<?php echo $this->Form->create('Gender'); ?>
	<fieldset>
		<legend><?php echo __('Add Gender'); ?></legend>
	<?php
		echo $this->Form->input('gender');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Genders'), array('action' => 'index')); ?></li>
	</ul>
</div>
