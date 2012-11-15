<div class="featureRevisions form">
<?php echo $this->Form->create('FeatureRevision');?>
	<fieldset>
		<legend><?php echo __('Edit Feature Revision'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('feature_id');
		echo $this->Form->input('revision_number');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('cost');
		echo $this->Form->input('time');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FeatureRevision.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('FeatureRevision.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Feature Revisions'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>
