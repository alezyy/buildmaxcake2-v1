<div class="tenants form">
<?php echo $this->Form->create('Tenant'); ?>
	<fieldset>
		<legend><?php echo __('Add Tenant'); ?></legend>
	<?php
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('gender_id');
		echo $this->Form->input('marital_status_id');
		echo $this->Form->input('email');
		echo $this->Form->input('alternate emails');
		echo $this->Form->input('cell_phone');
		echo $this->Form->input('home_phone');
		echo $this->Form->input('work_phone');
		echo $this->Form->input('fax');
		echo $this->Form->input('country_id');
		echo $this->Form->input('state_id');
		echo $this->Form->input('street');
		echo $this->Form->input('City');
		echo $this->Form->input('zip');
		echo $this->Form->input('birth_date');
		echo $this->Form->input('driver_license_number');
		echo $this->Form->input('driver_license_state');
		echo $this->Form->input('total_number_of_occupants');
		echo $this->Form->input('unit_or_address_applying_for');
		echo $this->Form->input('requested_lease_term');
		echo $this->Form->input('status_id');
		echo $this->Form->input('emergency_contact');
		echo $this->Form->input('emergency_contact_email');
		echo $this->Form->input('emergency_contact_phone');
		echo $this->Form->input('relationship_to_tenant');
		echo $this->Form->input('co_signer_details');
		echo $this->Form->input('notes');
		echo $this->Form->input('photo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tenants'), array('action' => 'index')); ?></li>
	</ul>
</div>
