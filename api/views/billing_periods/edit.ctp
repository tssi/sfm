<div class="billingPeriods form">
<?php echo $this->Form->create('BillingPeriod');?>
	<fieldset>
		<legend><?php __('Edit Billing Period'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('payment_frequency');
		echo $this->Form->input('bill_month_start');
		echo $this->Form->input('bill_cutoff_date');
		echo $this->Form->input('bill_cycle_increment');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('BillingPeriod.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('BillingPeriod.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Billing Periods', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Payment Scheme Schedules', true), array('controller' => 'payment_scheme_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Scheme Schedule', true), array('controller' => 'payment_scheme_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>