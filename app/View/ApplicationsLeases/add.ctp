<div class="applicationsLeases form">
<?php echo $this->Form->create('ApplicationsLease'); ?>
	<fieldset>
		<legend><?php echo __('Add Applications Lease'); ?></legend>
	<?php
		echo $this->Form->input('tenant_id');
		echo $this->Form->input('property_id');
		echo $this->Form->input('unit_id');
		echo $this->Form->input('leasestype_id');
		echo $this->Form->input('start_date');
		echo $this->Form->input('end_date');
		echo $this->Form->input('automatically_end_the_lease');
		echo $this->Form->input('recurringcharge_id');
		echo $this->Form->input('next_due_date');
		echo $this->Form->input('rent_mount');
		echo $this->Form->input('security_deposit');
		echo $this->Form->input('security_deposit_date');
		echo $this->Form->input('status');
		echo $this->Form->input('notes');
		echo $this->Form->input('agreement');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Applications Leases'), array('action' => 'index')); ?></li>
	</ul>
</div>
