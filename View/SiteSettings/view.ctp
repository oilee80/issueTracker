<div class="siteSettings view">
<h2><?php  echo __('Site Setting');?></h2>
	<dl>
		<dt><?php echo __('Setting'); ?></dt>
		<dd>
			<?php echo h($siteSetting['SiteSetting']['setting']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($siteSetting['SiteSetting']['value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Desctiption'); ?></dt>
		<dd>
			<?php echo h($siteSetting['SiteSetting']['desctiption']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Site Setting'), array('action' => 'edit', $siteSetting['SiteSetting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Site Setting'), array('action' => 'delete', $siteSetting['SiteSetting']['id']), null, __('Are you sure you want to delete # %s?', $siteSetting['SiteSetting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Site Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Site Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
