<div class="billingPeriods index">
	<h2><?php __('Billing Periods');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('payment_frequency');?></th>
			<th><?php echo $this->Paginator->sort('bill_month_start');?></th>
			<th><?php echo $this->Paginator->sort('bill_cutoff_date');?></th>
			<th><?php echo $this->Paginator->sort('bill_cycle_increment');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($billingPeriods as $billingPeriod):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $billingPeriod['BillingPeriod']['id']; ?>&nbsp;</td>
		<td><?php echo $billingPeriod['BillingPeriod']['name']; ?>&nbsp;</td>
		<td><?php echo $billingPeriod['BillingPeriod']['payment_frequency']; ?>&nbsp;</td>
		<td><?php echo $billingPeriod['BillingPeriod']['bill_month_start']; ?>&nbsp;</td>
		<td><?php echo $billingPeriod['BillingPeriod']['bill_cutoff_date']; ?>&nbsp;</td>
		<td><?php echo $billingPeriod['BillingPeriod']['bill_cycle_increment']; ?>&nbsp;</td>
		<td><?php echo $billingPeriod['BillingPeriod']['order']; ?>&nbsp;</td>
		<td><?php echo $billingPeriod['BillingPeriod']['created']; ?>&nbsp;</td>
		<td><?php echo $billingPeriod['BillingPeriod']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $billingPeriod['BillingPeriod']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $billingPeriod['BillingPeriod']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $billingPeriod['BillingPeriod']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $billingPeriod['BillingPeriod']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Billing Period', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Payment Scheme Schedules', true), array('controller' => 'payment_scheme_schedules', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Scheme Schedule', true), array('controller' => 'payment_scheme_schedules', 'action' => 'add')); ?> </li>
	</ul>
</div>