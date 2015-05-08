<div class="rentalOwners index">
	<h2><?php echo __('Rental Owners'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('gender_id'); ?></th>
			<th><?php echo $this->Paginator->sort('id_government'); ?></th>
			<th><?php echo $this->Paginator->sort('company_name'); ?></th>
			<th><?php echo $this->Paginator->sort('date_of_birth'); ?></th>
			<th><?php echo $this->Paginator->sort('primary_email'); ?></th>
			<th><?php echo $this->Paginator->sort('alternate_email'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('fax'); ?></th>
			<th><?php echo $this->Paginator->sort('street'); ?></th>
			<th><?php echo $this->Paginator->sort('country_id'); ?></th>
			<th><?php echo $this->Paginator->sort('state_id'); ?></th>
			<th><?php echo $this->Paginator->sort('city'); ?></th>
			<th><?php echo $this->Paginator->sort('zip'); ?></th>
			<th><?php echo $this->Paginator->sort('comments'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($rentalOwners as $rentalOwner): ?>
	<tr>
		<td><?php echo h($rentalOwner['RentalOwner']['id']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['gender_id']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['id_government']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['company_name']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['date_of_birth']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['primary_email']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['alternate_email']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['phone']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['fax']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['street']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['country_id']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['state_id']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['city']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['zip']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['comments']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['photo']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['created']); ?>&nbsp;</td>
		<td><?php echo h($rentalOwner['RentalOwner']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $rentalOwner['RentalOwner']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $rentalOwner['RentalOwner']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $rentalOwner['RentalOwner']['id']), array(), __('Are you sure you want to delete # %s?', $rentalOwner['RentalOwner']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rental Owner'), array('action' => 'add')); ?></li>
	</ul>
</div>
