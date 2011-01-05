<div class="meetings index">
	<h2><?php __('Meetings');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('group_id');?></th>
			<th><?php echo $this->Paginator->sort('recurrence_id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('meeting_time');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($meetings as $meeting):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $meeting['Meeting']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($meeting['Group']['name'], array('controller' => 'groups', 'action' => 'view', $meeting['Group']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($meeting['Recurrence']['name'], array('controller' => 'recurrences', 'action' => 'view', $meeting['Recurrence']['id'])); ?>
		</td>
		<td><?php echo $meeting['Meeting']['title']; ?>&nbsp;</td>
		<td><?php echo $meeting['Meeting']['meeting_time']; ?>&nbsp;</td>
		<td><?php echo $meeting['Meeting']['created']; ?>&nbsp;</td>
		<td><?php echo $meeting['Meeting']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $meeting['Meeting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $meeting['Meeting']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $meeting['Meeting']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $meeting['Meeting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Meeting', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups', true), array('plugin' => 'urg', 'controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group', true), array('plugin' => 'urg', 'controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurrences', true), array('controller' => 'recurrences', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurrence', true), array('controller' => 'recurrences', 'action' => 'add')); ?> </li>
	</ul>
</div>
