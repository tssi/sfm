<div class="payments form">
<?php echo $this->Form->create('Payment');?>
	<fieldset>
		<legend><?php __('Add Payment'); ?></legend>
	<?php
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payments', true), array('action' => 'index'));?></li>
	</ul>
</div>