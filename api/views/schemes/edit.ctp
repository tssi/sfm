<div class="schemes form">
<?php echo $this->Form->create('Scheme');?>
	<fieldset>
		<legend><?php __('Edit Scheme'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('payment_frequency');
		echo $this->Form->input('order');
		echo $this->Form->input('Payment');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Scheme.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Scheme.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Schemes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Payments', true), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment', true), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>