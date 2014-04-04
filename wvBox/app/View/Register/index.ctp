<?php echo $this->Html->css('register.index'); ?> 
<div class="OAthuRegisterButton">
	<div>
	<?php echo $this->Html->link(__('Twitter', true), array('controller' => 'twitter', 'action' => 'index'), array());?>
	</div>
</div>

<div class="OAthuRegisterButton">
	<div>
		<?php echo $this->Html->link(__('Google', true), array('controller' => 'google', 'action' => 'index'), array());?>
	</div>
</div>
<div class="OAthuRegisterButton">
	<div>
	<?php echo $this->Html->link(__('Facebook', true), array('controller' => 'facebook', 'action' => 'index'), array());?>
	</div>
</div>
<div class="OAthuRegisterButton">
	<div>
	<?php echo $this->Html->link(__('Github', true), array('controller' => 'github', 'action' => 'index'), array());?>
	</div>
</div>
