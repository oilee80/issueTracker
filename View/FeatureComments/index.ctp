<div class="featureComments index">
	<h2><?php echo __('Feature Comments');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('feature_id');?></th>
			<th><?php echo $this->Paginator->sort('comment');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('created_by');?></th>
			<th><?php echo $this->Paginator->sort('modified_by');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($featureComments as $featureComment): ?>
	<tr>
		<td><?php echo h($featureComment['FeatureComment']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($featureComment['Feature']['name'], array('controller' => 'features', 'action' => 'view', $featureComment['Feature']['id'])); ?>
		</td>
		<td><?php echo h($featureComment['FeatureComment']['comment']); ?>&nbsp;</td>
		<td><?php echo h($featureComment['FeatureComment']['created']); ?>&nbsp;</td>
		<td><?php echo h($featureComment['FeatureComment']['modified']); ?>&nbsp;</td>
		<td><?php echo h($featureComment['FeatureComment']['created_by']); ?>&nbsp;</td>
		<td><?php echo h($featureComment['FeatureComment']['modified_by']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $featureComment['FeatureComment']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $featureComment['FeatureComment']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $featureComment['FeatureComment']['id']), null, __('Are you sure you want to delete # %s?', $featureComment['FeatureComment']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Feature Comment'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>
