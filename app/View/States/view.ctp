<div class="states view">
<h2><?php echo __('State'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($state['State']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country'); ?></dt>
		<dd>
			<?php echo $this->Html->link($state['Country']['name'], array('controller' => 'countries', 'action' => 'view', $state['Country']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($state['State']['state']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit State'), array('action' => 'edit', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete State'), array('action' => 'delete', $state['State']['id']), array(), __('Are you sure you want to delete # %s?', $state['State']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List States'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New State'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries'), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country'), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cities'), array('controller' => 'cities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tenants'), array('controller' => 'tenants', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tenant'), array('controller' => 'tenants', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cities'); ?></h3>
	<?php if (!empty($state['City'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('City'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($state['City'] as $city): ?>
		<tr>
			<td><?php echo $city['id']; ?></td>
			<td><?php echo $city['country_id']; ?></td>
			<td><?php echo $city['state_id']; ?></td>
			<td><?php echo $city['city']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cities', 'action' => 'view', $city['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cities', 'action' => 'edit', $city['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cities', 'action' => 'delete', $city['id']), array(), __('Are you sure you want to delete # %s?', $city['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New City'), array('controller' => 'cities', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tenants'); ?></h3>
	<?php if (!empty($state['Tenant'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('First Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Alternateemails Id'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Home Phone'); ?></th>
		<th><?php echo __('Work Phone'); ?></th>
		<th><?php echo __('Fax'); ?></th>
		<th><?php echo __('Country Id'); ?></th>
		<th><?php echo __('State Id'); ?></th>
		<th><?php echo __('Street'); ?></th>
		<th><?php echo __('City Id'); ?></th>
		<th><?php echo __('Zip'); ?></th>
		<th><?php echo __('Birth Date'); ?></th>
		<th><?php echo __('Driver License Number'); ?></th>
		<th><?php echo __('Driver License State'); ?></th>
		<th><?php echo __('Total Number Of Occupants'); ?></th>
		<th><?php echo __('Unit Or Address Applying For'); ?></th>
		<th><?php echo __('Requested Lease Term'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Emergency Contact'); ?></th>
		<th><?php echo __('Emergency Contact Email'); ?></th>
		<th><?php echo __('Emergency Contact Phone'); ?></th>
		<th><?php echo __('Relationship To Tenant'); ?></th>
		<th><?php echo __('Co Signer Details'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Photo'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($state['Tenant'] as $tenant): ?>
		<tr>
			<td><?php echo $tenant['id']; ?></td>
			<td><?php echo $tenant['first_name']; ?></td>
			<td><?php echo $tenant['last_name']; ?></td>
			<td><?php echo $tenant['email']; ?></td>
			<td><?php echo $tenant['alternateemails_id']; ?></td>
			<td><?php echo $tenant['cell_phone']; ?></td>
			<td><?php echo $tenant['home_phone']; ?></td>
			<td><?php echo $tenant['work_phone']; ?></td>
			<td><?php echo $tenant['fax']; ?></td>
			<td><?php echo $tenant['country_id']; ?></td>
			<td><?php echo $tenant['state_id']; ?></td>
			<td><?php echo $tenant['street']; ?></td>
			<td><?php echo $tenant['city_id']; ?></td>
			<td><?php echo $tenant['zip']; ?></td>
			<td><?php echo $tenant['birth_date']; ?></td>
			<td><?php echo $tenant['driver_license_number']; ?></td>
			<td><?php echo $tenant['driver_license_state']; ?></td>
			<td><?php echo $tenant['total_number_of_occupants']; ?></td>
			<td><?php echo $tenant['unit_or_address_applying_for']; ?></td>
			<td><?php echo $tenant['requested_lease_term']; ?></td>
			<td><?php echo $tenant['status']; ?></td>
			<td><?php echo $tenant['emergency_contact']; ?></td>
			<td><?php echo $tenant['emergency_contact_email']; ?></td>
			<td><?php echo $tenant['emergency_contact_phone']; ?></td>
			<td><?php echo $tenant['relationship_to_tenant']; ?></td>
			<td><?php echo $tenant['co_signer_details']; ?></td>
			<td><?php echo $tenant['notes']; ?></td>
			<td><?php echo $tenant['photo']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tenants', 'action' => 'view', $tenant['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tenants', 'action' => 'edit', $tenant['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tenants', 'action' => 'delete', $tenant['id']), array(), __('Are you sure you want to delete # %s?', $tenant['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tenant'), array('controller' => 'tenants', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
