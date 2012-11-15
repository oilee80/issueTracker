<div class="featureComments view">
<h2><?php  echo __('Feature Comment');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($featureComment['FeatureComment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Feature'); ?></dt>
		<dd>
			<?php echo $this->Html->link($featureComment['Feature']['name'], array('controller' => 'features', 'action' => 'view', $featureComment['Feature']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Comment'); ?></dt>
		<dd>
			<?php echo h($featureComment['FeatureComment']['comment']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($featureComment['FeatureComment']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($featureComment['FeatureComment']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created By'); ?></dt>
		<dd>
			<?php echo h($featureComment['FeatureComment']['created_by']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified By'); ?></dt>
		<dd>
			<?php echo h($featureComment['FeatureComment']['modified_by']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Feature Comment'), array('action' => 'edit', $featureComment['FeatureComment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Feature Comment'), array('action' => 'delete', $featureComment['FeatureComment']['id']), null, __('Are you sure you want to delete # %s?', $featureComment['FeatureComment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Feature Comments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature Comment'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>
