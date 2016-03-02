<div class="billingPeriods view">
<h2><?php  __('Billing Period');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $billingPeriod['BillingPeriod']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $billingPeriod['BillingPeriod']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payment Frequency'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $billingPeriod['BillingPeriod']['payment_frequency']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bill Month Start'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $billingPeriod['BillingPeriod']['bill_month_start']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bill Cutoff Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $billingPeriod['BillingPeriod']['bill_cutoff_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Bill Cycle Increment'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $billingPeriod['BillingPeriod']['bill_cycle_increment']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $billingPeriod['BillingPeriod']['order']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $billingPeriod['BillingPeriod']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $billingPeriod['BillingPeriod']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Billing Period', true), array('action' => 'edit', $billingPeriod['BillingPeriod']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Billing Period', true), array('action' => 'delete', $billingPeriod['BillingPeriod']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $billingPeriod['BillingPeriod']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Billing Periods', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Billing Period', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Scheme Schedules', true), array('controller' => 'payment_scheme_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Scheme Schedule', true), array('controller' => 'payment_scheme_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Payment Scheme Schedules');?></h3>
	<?php if (!empty($billingPeriod['PaymentSchemeSchedule'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Payment Scheme Id'); ?></th>
		<th><?php __('Billing Period Id'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Due Dates'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($billingPeriod['PaymentSchemeSchedule'] as $paymentSchemeSchedule):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $paymentSchemeSchedule['id'];?></td>
			<td><?php echo $paymentSchemeSchedule['payment_scheme_id'];?></td>
			<td><?php echo $paymentSchemeSchedule['billing_period_id'];?></td>
			<td><?php echo $paymentSchemeSchedule['amount'];?></td>
			<td><?php echo $paymentSchemeSchedule['due_dates'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'payment_scheme_schedules', 'action' => 'view', $paymentSchemeSchedule['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'payment_scheme_schedules', 'action' => 'edit', $paymentSchemeSchedule['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'payment_scheme_schedules', 'action' => 'delete', $paymentSchemeSchedule['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paymentSchemeSchedule['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment Scheme Schedule', true), array('controller' => 'payment_scheme_schedules', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
