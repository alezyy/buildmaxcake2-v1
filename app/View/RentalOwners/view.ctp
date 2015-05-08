<div class="rentalOwners view">
<h2><?php echo __('Rental Owner'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender Id'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['gender_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Id Government'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['id_government']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Company Name'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['company_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primary Email'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['primary_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alternate Email'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['alternate_email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Street'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['street']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Country Id'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['country_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State Id'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['state_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Zip'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['zip']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comments'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['comments']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Photo'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['photo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($rentalOwner['RentalOwner']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rental Owner'), array('action' => 'edit', $rentalOwner['RentalOwner']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Rental Owner'), array('action' => 'delete', $rentalOwner['RentalOwner']['id']), array(), __('Are you sure you want to delete # %s?', $rentalOwner['RentalOwner']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rental Owners'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rental Owner'), array('action' => 'add')); ?> </li>
	</ul>
</div>
