<div class="discounts view">
<h2><?php  __('Discount');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fees Applicable'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['fees_applicable']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $discount['Discount']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Discount', true), array('action' => 'edit', $discount['Discount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Discount', true), array('action' => 'delete', $discount['Discount']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $discount['Discount']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Discounts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Discount', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tuitions', true), array('controller' => 'tuitions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tuition', true), array('controller' => 'tuitions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Tuitions');?></h3>
	<?php if (!empty($discount['Tuition'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Sy'); ?></th>
		<th><?php __('Year Level Id'); ?></th>
		<th><?php __('Program Id'); ?></th>
		<th><?php __('Amount'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($discount['Tuition'] as $tuition):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $tuition['id'];?></td>
			<td><?php echo $tuition['name'];?></td>
			<td><?php echo $tuition['description'];?></td>
			<td><?php echo $tuition['sy'];?></td>
			<td><?php echo $tuition['year_level_id'];?></td>
			<td><?php echo $tuition['program_id'];?></td>
			<td><?php echo $tuition['amount'];?></td>
			<td><?php echo $tuition['created'];?></td>
			<td><?php echo $tuition['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tuitions', 'action' => 'view', $tuition['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tuitions', 'action' => 'edit', $tuition['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tuitions', 'action' => 'delete', $tuition['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tuition['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tuition', true), array('controller' => 'tuitions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
