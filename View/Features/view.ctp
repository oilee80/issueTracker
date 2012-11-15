<div class="features view">
<h2><?php  echo __('Feature');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Project'); ?></dt>
		<dd>
			<?php echo $this->Html->link($feature['Project']['name'], array('controller' => 'projects', 'action' => 'view', $feature['Project']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Short Description'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['short_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($feature['Feature']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Feature'), array('action' => 'edit', $feature['Feature']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Feature'), array('action' => 'delete', $feature['Feature']['id']), null, __('Are you sure you want to delete # %s?', $feature['Feature']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Projects'), array('controller' => 'projects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Project'), array('controller' => 'projects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feature Comments'), array('controller' => 'feature_comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature Comment'), array('controller' => 'feature_comments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feature Revisions'), array('controller' => 'feature_revisions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature Revision'), array('controller' => 'feature_revisions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Feature Comments');?></h3>
	<?php if (!empty($feature['FeatureComment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Feature Id'); ?></th>
		<th><?php echo __('Comment'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($feature['FeatureComment'] as $featureComment): ?>
		<tr>
			<td><?php echo $featureComment['id'];?></td>
			<td><?php echo $featureComment['feature_id'];?></td>
			<td><?php echo $featureComment['comment'];?></td>
			<td><?php echo $featureComment['created'];?></td>
			<td><?php echo $featureComment['modified'];?></td>
			<td><?php echo $featureComment['created_by'];?></td>
			<td><?php echo $featureComment['modified_by'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'feature_comments', 'action' => 'view', $featureComment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'feature_comments', 'action' => 'edit', $featureComment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'feature_comments', 'action' => 'delete', $featureComment['id']), null, __('Are you sure you want to delete # %s?', $featureComment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feature Comment'), array('controller' => 'feature_comments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Feature Revisions');?></h3>
	<?php if (!empty($feature['FeatureRevision'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Feature Id'); ?></th>
		<th><?php echo __('Revision Number'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Cost'); ?></th>
		<th><?php echo __('Time'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Created By'); ?></th>
		<th><?php echo __('Modified By'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($feature['FeatureRevision'] as $featureRevision): ?>
		<tr>
			<td><?php echo $featureRevision['id'];?></td>
			<td><?php echo $featureRevision['feature_id'];?></td>
			<td><?php echo $featureRevision['revision_number'];?></td>
			<td><?php echo $featureRevision['name'];?></td>
			<td><?php echo $featureRevision['description'];?></td>
			<td><?php echo $featureRevision['cost'];?></td>
			<td><?php echo $featureRevision['time'];?></td>
			<td><?php echo $featureRevision['created'];?></td>
			<td><?php echo $featureRevision['modified'];?></td>
			<td><?php echo $featureRevision['created_by'];?></td>
			<td><?php echo $featureRevision['modified_by'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'feature_revisions', 'action' => 'view', $featureRevision['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'feature_revisions', 'action' => 'edit', $featureRevision['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'feature_revisions', 'action' => 'delete', $featureRevision['id']), null, __('Are you sure you want to delete # %s?', $featureRevision['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feature Revision'), array('controller' => 'feature_revisions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
