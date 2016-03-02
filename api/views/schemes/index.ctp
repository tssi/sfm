<div class="schemes index">
	<h2><?php __('Schemes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('payment_frequency');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($schemes as $scheme):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $scheme['Scheme']['id']; ?>&nbsp;</td>
		<td><?php echo $scheme['Scheme']['code']; ?>&nbsp;</td>
		<td><?php echo $scheme['Scheme']['name']; ?>&nbsp;</td>
		<td><?php echo $scheme['Scheme']['payment_frequency']; ?>&nbsp;</td>
		<td><?php echo $scheme['Scheme']['order']; ?>&nbsp;</td>
		<td><?php echo $scheme['Scheme']['created']; ?>&nbsp;</td>
		<td><?php echo $scheme['Scheme']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $scheme['Scheme']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $scheme['Scheme']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $scheme['Scheme']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $scheme['Scheme']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Scheme', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Payments', true), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment', true), array('controller' => 'payments', 'action' => 'add')); ?> </li>
	</ul>
</div>