<div class="featureRevisions index">
	<h2><?php echo __('Feature Revisions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('feature_id');?></th>
			<th><?php echo $this->Paginator->sort('revision_number');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th><?php echo $this->Paginator->sort('time');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($featureRevisions as $featureRevision): ?>
	<tr>
		<td><?php echo h($featureRevision['FeatureRevision']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($featureRevision['Feature']['name'], array('controller' => 'features', 'action' => 'view', $featureRevision['Feature']['id'])); ?>
		</td>
		<td><?php echo h($featureRevision['FeatureRevision']['revision_number']); ?>&nbsp;</td>
		<td><?php echo h($featureRevision['FeatureRevision']['name']); ?>&nbsp;</td>
		<td><?php echo h($featureRevision['FeatureRevision']['description']); ?>&nbsp;</td>
		<td><?php echo h($featureRevision['FeatureRevision']['cost']); ?>&nbsp;</td>
		<td><?php echo h($featureRevision['FeatureRevision']['time']); ?>&nbsp;</td>
		<td><?php echo h($featureRevision['FeatureRevision']['created']); ?>&nbsp;</td>
		<td><?php echo h($featureRevision['FeatureRevision']['modified']); ?>&nbsp;</td>
		<td><?php echo h($featureRevision['FeatureRevision']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($featureRevision['FeatureRevision']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $featureRevision['FeatureRevision']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $featureRevision['FeatureRevision']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $featureRevision['FeatureRevision']['id']), null, __('Are you sure you want to delete # %s?', $featureRevision['FeatureRevision']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Feature Revision'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>
