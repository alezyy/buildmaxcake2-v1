<div class="units index">
	<h2><?php echo __('Units'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('property_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rental_owner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('unit_number'); ?></th>
			<th><?php echo $this->Paginator->sort('size_id'); ?></th>
			<th><?php echo $this->Paginator->sort('market_rent'); ?></th>
			<th><?php echo $this->Paginator->sort('bedrooms'); ?></th>
			<th><?php echo $this->Paginator->sort('bath'); ?></th>
			<th><?php echo $this->Paginator->sort('lease_term'); ?></th>
			<th><?php echo $this->Paginator->sort('leasestype_id'); ?></th>
			<th><?php echo $this->Paginator->sort('rental_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('deposit_amount'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('features'); ?></th>
			<th><?php echo $this->Paginator->sort('photo'); ?></th>
			<th><?php echo $this->Paginator->sort('status_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($units as $unit): ?>
	<tr>
		<td><?php echo h($unit['Unit']['id']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['property_id']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['rental_owner_id']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['unit_number']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['size_id']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['market_rent']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['bedrooms']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['bath']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['lease_term']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['leasestype_id']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['rental_amount']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['deposit_amount']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['description']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['features']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['photo']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['status_id']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['created']); ?>&nbsp;</td>
		<td><?php echo h($unit['Unit']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $unit['Unit']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $unit['Unit']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $unit['Unit']['id']), array(), __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?></li>
	</ul>
</div>
