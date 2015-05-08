<div class="tenants view">
<h2><?php echo __('Tenant'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender Id'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['gender_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Marital Status Id'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['marital_status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alternate Emails'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['alternate emails']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Phone'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['cell_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Home Phone'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['home_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Work Phone'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['work_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Id'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['state_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['City']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Birth Date'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['birth_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver License Number'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['driver_license_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Driver License State'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['driver_license_state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Total Number Of Occupants'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['total_number_of_occupants']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Or Address Applying For'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['unit_or_address_applying_for']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Requested Lease Term'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['requested_lease_term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Id'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['emergency_contact']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact Email'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['emergency_contact_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Emergency Contact Phone'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['emergency_contact_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Relationship To Tenant'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['relationship_to_tenant']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Co Signer Details'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['co_signer_details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($tenant['Tenant']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tenant'), array('action' => 'edit', $tenant['Tenant']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tenant'), array('action' => 'delete', $tenant['Tenant']['id']), array(), __('Are you sure you want to delete # %s?', $tenant['Tenant']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tenants'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tenant'), array('action' => 'add')); ?> </li>
	</ul>
</div>
