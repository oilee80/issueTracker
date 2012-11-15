<div class="featureRevisions view">
<h2><?php  echo __('Feature Revision');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature'); ?></dt>
		<dd>
			<?php echo $this->Html->link($featureRevision['Feature']['name'], array('controller' => 'features', 'action' => 'view', $featureRevision['Feature']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Revision Number'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['revision_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cost'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['cost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($featureRevision['FeatureRevision']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Feature Revision'), array('action' => 'edit', $featureRevision['FeatureRevision']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Feature Revision'), array('action' => 'delete', $featureRevision['FeatureRevision']['id']), null, __('Are you sure you want to delete # %s?', $featureRevision['FeatureRevision']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Feature Revisions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature Revision'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>
