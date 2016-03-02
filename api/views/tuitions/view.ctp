<div class="tuitions view">
<h2><?php  __('Tuition');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tuition['Tuition']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tuition['Tuition']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tuition['Tuition']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sy'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tuition['Tuition']['sy']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Year Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($tuition['YearLevel']['id'], array('controller' => 'year_levels', 'action' => 'view', $tuition['YearLevel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Program'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($tuition['Program']['id'], array('controller' => 'programs', 'action' => 'view', $tuition['Program']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tuition['Tuition']['amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tuition['Tuition']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tuition['Tuition']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tuition', true), array('action' => 'edit', $tuition['Tuition']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tuition', true), array('action' => 'delete', $tuition['Tuition']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tuition['Tuition']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tuitions', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuition', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('controller' => 'year_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Programs', true), array('controller' => 'programs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Program', true), array('controller' => 'programs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fee Breakdowns', true), array('controller' => 'fee_breakdowns', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Fee Breakdown', true), array('controller' => 'fee_breakdowns', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Schemes', true), array('controller' => 'payment_schemes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Scheme', true), array('controller' => 'payment_schemes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tuition Discounts', true), array('controller' => 'tuition_discounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuition Discount', true), array('controller' => 'tuition_discounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Fee Breakdowns');?></h3>
	<?php if (!empty($tuition['FeeBreakdown'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tuition Id'); ?></th>
		<th><?php __('Fee Id'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Order'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tuition['FeeBreakdown'] as $feeBreakdown):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $feeBreakdown['id'];?></td>
			<td><?php echo $feeBreakdown['tuition_id'];?></td>
			<td><?php echo $feeBreakdown['fee_id'];?></td>
			<td><?php echo $feeBreakdown['amount'];?></td>
			<td><?php echo $feeBreakdown['order'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'fee_breakdowns', 'action' => 'view', $feeBreakdown['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'fee_breakdowns', 'action' => 'edit', $feeBreakdown['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'fee_breakdowns', 'action' => 'delete', $feeBreakdown['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $feeBreakdown['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Fee Breakdown', true), array('controller' => 'fee_breakdowns', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Payment Schemes');?></h3>
	<?php if (!empty($tuition['PaymentScheme'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tuition Id'); ?></th>
		<th><?php __('Scheme Id'); ?></th>
		<th><?php __('Order'); ?></th>
		<th><?php __('Total Amount'); ?></th>
		<th><?php __('Variance Amount'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tuition['PaymentScheme'] as $paymentScheme):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $paymentScheme['id'];?></td>
			<td><?php echo $paymentScheme['tuition_id'];?></td>
			<td><?php echo $paymentScheme['scheme_id'];?></td>
			<td><?php echo $paymentScheme['order'];?></td>
			<td><?php echo $paymentScheme['total_amount'];?></td>
			<td><?php echo $paymentScheme['variance_amount'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'payment_schemes', 'action' => 'view', $paymentScheme['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'payment_schemes', 'action' => 'edit', $paymentScheme['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'payment_schemes', 'action' => 'delete', $paymentScheme['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $paymentScheme['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment Scheme', true), array('controller' => 'payment_schemes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tuition Discounts');?></h3>
	<?php if (!empty($tuition['TuitionDiscount'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tuition Id'); ?></th>
		<th><?php __('Discount Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tuition['TuitionDiscount'] as $tuitionDiscount):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tuitionDiscount['id'];?></td>
			<td><?php echo $tuitionDiscount['tuition_id'];?></td>
			<td><?php echo $tuitionDiscount['discount_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tuition_discounts', 'action' => 'view', $tuitionDiscount['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tuition_discounts', 'action' => 'edit', $tuitionDiscount['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tuition_discounts', 'action' => 'delete', $tuitionDiscount['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tuitionDiscount['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tuition Discount', true), array('controller' => 'tuition_discounts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
