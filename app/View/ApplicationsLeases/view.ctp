<div class="applicationsLeases view">
<h2><?php echo __('Applications Lease'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tenant Id'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['tenant_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Id'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['property_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Id'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['unit_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leasestype Id'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['leasestype_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start Date'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['start_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End Date'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['end_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Automatically End The Lease'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['automatically_end_the_lease']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Recurringcharge Id'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['recurringcharge_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Next Due Date'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['next_due_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rent Mount'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['rent_mount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Security Deposit'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['security_deposit']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Security Deposit Date'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['security_deposit_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agreement'); ?></dt>
		<dd>
			<?php echo h($applicationsLease['ApplicationsLease']['agreement']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Applications Lease'), array('action' => 'edit', $applicationsLease['ApplicationsLease']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Applications Lease'), array('action' => 'delete', $applicationsLease['ApplicationsLease']['id']), array(), __('Are you sure you want to delete # %s?', $applicationsLease['ApplicationsLease']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Applications Leases'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Applications Lease'), array('action' => 'add')); ?> </li>
	</ul>
</div>
