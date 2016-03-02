<div class="paymentSchemeSchedules view">
<h2><?php  __('Payment Scheme Schedule');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentSchemeSchedule['PaymentSchemeSchedule']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payment Scheme'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($paymentSchemeSchedule['PaymentScheme']['id'], array('controller' => 'payment_schemes', 'action' => 'view', $paymentSchemeSchedule['PaymentScheme']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Billing Period'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($paymentSchemeSchedule['BillingPeriod']['name'], array('controller' => 'billing_periods', 'action' => 'view', $paymentSchemeSchedule['BillingPeriod']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentSchemeSchedule['PaymentSchemeSchedule']['amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Due Dates'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $paymentSchemeSchedule['PaymentSchemeSchedule']['due_dates']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Scheme Schedule', true), array('action' => 'edit', $paymentSchemeSchedule['PaymentSchemeSchedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Payment Scheme Schedule', true), array('action' => 'delete', $paymentSchemeSchedule['PaymentSchemeSchedule']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paymentSchemeSchedule['PaymentSchemeSchedule']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Scheme Schedules', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Scheme Schedule', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Schemes', true), array('controller' => 'payment_schemes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Scheme', true), array('controller' => 'payment_schemes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Billing Periods', true), array('controller' => 'billing_periods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Period', true), array('controller' => 'billing_periods', 'action' => 'add')); ?> </li>
	</ul>
</div>
