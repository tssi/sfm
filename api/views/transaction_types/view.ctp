<div class="transactionTypes view">
<h2><?php  __('Transaction Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $transactionType['TransactionType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $transactionType['TransactionType']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Default Amount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $transactionType['TransactionType']['default_amount']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $transactionType['TransactionType']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $transactionType['TransactionType']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction Type', true), array('action' => 'edit', $transactionType['TransactionType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Transaction Type', true), array('action' => 'delete', $transactionType['TransactionType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $transactionType['TransactionType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transaction Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction Type', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
