<?php echo $this->Html->css('rails.index'); ?> 
<h2>
</h2>

<div class="item_list">
<h3>
<?php 
	echo $this->Html->link(
		$this->Html->image('rails.mysql',array()),
		'http://www.watorvapor.com:3110',
		array('escape' => false)
	);
?>
</h3>
</div>

<div class="item_list">
<h3>
<?php 
	echo $this->Html->link(
		$this->Html->image('rails.postgresql',array()),
		'http://www.watorvapor.com:3120',
		array('escape' => false)
	);
?>
</h3>
</div>

<div class="item_list">
<h3>
<?php 
	echo $this->Html->link(
		$this->Html->image('rails.sqlite',array()),
		'http://www.watorvapor.com:3100',
		array('escape' => false)
	);
?>
</h3>
</div>
