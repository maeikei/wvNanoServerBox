<?php echo $this->Html->css('loadBlance.index'); ?> 
<h2>
</h2>

<div class="item_list">
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.loadblance.mini',array('width'=>'480','height'=>'360')),
		'/img/wvbox.loadblance.mini',
		array('escape' => false)
	);
?>
</div>

<div class="item_list">
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.loadblance.hybrid',array('width'=>'480','height'=>'360')),
		'/img/wvbox.loadblance.hybrid',
		array('escape' => false)
	);
?>
</div>
