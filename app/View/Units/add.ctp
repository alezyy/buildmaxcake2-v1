<div class="units form">
<?php echo $this->Form->create('Unit'); ?>
	<fieldset>
		<legend><?php echo __('Add Unit'); ?></legend>
	<?php
		echo $this->Form->input('property_id');
		echo $this->Form->input('rental_owner_id');
		echo $this->Form->input('unit_number');
		echo $this->Form->input('size_id');
		echo $this->Form->input('market_rent');
		echo $this->Form->input('bedrooms');
		echo $this->Form->input('bath');
		echo $this->Form->input('lease_term');
		echo $this->Form->input('leasestype_id');
		echo $this->Form->input('rental_amount');
		echo $this->Form->input('deposit_amount');
		echo $this->Form->input('description');
		echo $this->Form->input('features');
		echo $this->Form->input('photo');
		echo $this->Form->input('status_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?></li>
	</ul>
</div>
