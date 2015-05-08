<div class="units view">
<h2><?php echo __('Unit'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Property Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['property_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rental Owner Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['rental_owner_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Unit Number'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['unit_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Size Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['size_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Market Rent'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['market_rent']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bedrooms'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['bedrooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bath'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['bath']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lease Term'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['lease_term']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Leasestype Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['leasestype_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rental Amount'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['rental_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Deposit Amount'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['deposit_amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Features'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['features']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status Id'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['status_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($unit['Unit']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Unit'), array('action' => 'edit', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Unit'), array('action' => 'delete', $unit['Unit']['id']), array(), __('Are you sure you want to delete # %s?', $unit['Unit']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Units'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Unit'), array('action' => 'add')); ?> </li>
	</ul>
</div>
