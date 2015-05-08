<div class="applicationsLeases index">
	<h2><?php echo __('Applications Leases'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('tenant_id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_id'); ?></th>
			<th><?php echo $this->Paginator->sort('leasestype_id'); ?></th>
			<th><?php echo $this->Paginator->sort('start_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('automatically_end_the_lease'); ?></th>
			<th><?php echo $this->Paginator->sort('recurringcharge_id'); ?></th>
			<th><?php echo $this->Paginator->sort('next_due_date'); ?></th>
			<th><?php echo $this->Paginator->sort('rent_mount'); ?></th>
			<th><?php echo $this->Paginator->sort('security_deposit'); ?></th>
			<th><?php echo $this->Paginator->sort('security_deposit_date'); ?></th>
			<th><?php echo $this->Paginator->sort('status'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('agreement'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($applicationsLeases as $applicationsLease): ?>
	<tr>
		<td><?php echo h($applicationsLease['ApplicationsLease']['id']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['tenant_id']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['property_id']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['unit_id']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['leasestype_id']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['start_date']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['automatically_end_the_lease']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['recurringcharge_id']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['next_due_date']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['rent_mount']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['security_deposit']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['security_deposit_date']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['status']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['notes']); ?>&nbsp;</td>
		<td><?php echo h($applicationsLease['ApplicationsLease']['agreement']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $applicationsLease['ApplicationsLease']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $applicationsLease['ApplicationsLease']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $applicationsLease['ApplicationsLease']['id']), array(), __('Are you sure you want to delete # %s?', $applicationsLease['ApplicationsLease']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Applications Lease'), array('action' => 'add')); ?></li>
	</ul>
</div>
