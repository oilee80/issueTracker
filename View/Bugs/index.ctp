<div class="bugs index">
	<h2><?php echo __('Bugs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('project_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($bugs as $bug): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($bug['Project']['name'], array('controller' => 'projects', 'action' => 'view', $bug['Project']['id'])); ?>
		</td>
		<td><?php echo h($bug['Bug']['name']); ?>&nbsp;</td>
		<td><?php echo h($bug['Bug']['description']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bug['Bug']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bug['Bug']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bug['Bug']['id']), null, __('Are you sure you want to delete `%s`?', $bug['Bug']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Bug'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feature Comments'), array('controller' => 'feature_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature Comment'), array('controller' => 'feature_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feature Revisions'), array('controller' => 'feature_revisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature Revision'), array('controller' => 'feature_revisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
