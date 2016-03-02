<div class="paymentSchemeSchedules form">
<?php echo $this->Form->create('PaymentSchemeSchedule');?>
	<fieldset>
		<legend><?php __('Edit Payment Scheme Schedule'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('payment_scheme_id');
		echo $this->Form->input('billing_period_id');
		echo $this->Form->input('amount');
		echo $this->Form->input('due_dates');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('PaymentSchemeSchedule.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('PaymentSchemeSchedule.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Payment Scheme Schedules', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Payment Schemes', true), array('controller' => 'payment_schemes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Scheme', true), array('controller' => 'payment_schemes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billing Periods', true), array('controller' => 'billing_periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Period', true), array('controller' => 'billing_periods', 'action' => 'add')); ?> </li>
	</ul>
</div>