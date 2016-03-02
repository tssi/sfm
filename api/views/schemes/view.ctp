<div class="schemes view">
<h2><?php  __('Scheme');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scheme['Scheme']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scheme['Scheme']['code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scheme['Scheme']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Payment Frequency'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scheme['Scheme']['payment_frequency']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scheme['Scheme']['order']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scheme['Scheme']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $scheme['Scheme']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Scheme', true), array('action' => 'edit', $scheme['Scheme']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Scheme', true), array('action' => 'delete', $scheme['Scheme']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $scheme['Scheme']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Schemes', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Scheme', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments', true), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment', true), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Payments');?></h3>
	<?php if (!empty($scheme['Payment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($scheme['Payment'] as $payment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $payment['id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'payments', 'action' => 'delete', $payment['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment', true), array('controller' => 'payments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
