<div class="genders form">
<?php echo $this->Form->create('Gender'); ?>
	<fieldset>
		<legend><?php echo __('Edit Gender'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('gender');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Gender.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Gender.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Genders'), array('action' => 'index')); ?></li>
	</ul>
</div>
