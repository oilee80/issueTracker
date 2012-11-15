<div class="featureComments form">
<?php echo $this->Form->create('FeatureComment');?>
	<fieldset>
		<legend><?php echo __('Add Feature Comment'); ?></legend>
	<?php
		echo $this->Form->input('feature_id');
		echo $this->Form->input('comment');
		echo $this->Form->input('created_by');
		echo $this->Form->input('modified_by');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Feature Comments'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Features'), array('controller' => 'features', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feature'), array('controller' => 'features', 'action' => 'add')); ?> </li>
	</ul>
</div>
