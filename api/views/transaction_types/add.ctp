<div class="transactionTypes form">
<?php echo $this->Form->create('TransactionType');?>
	<fieldset>
		<legend><?php __('Add Transaction Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('default_amount');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Transaction Types', true), array('action' => 'index'));?></li>
	</ul>
</div>