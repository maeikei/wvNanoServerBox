<?php echo $this->Html->css('ddnsWeb.index'); ?> 
<h2>
</h2>

<div class="item_list">
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.ddns.flow',array('width'=>'360','height'=>'270')),
		'/img/wvbox.ddns.flow',
		array('escape' => false)
	);
?>
</div>

<div class="item_list">
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.ddns.cloud',array('width'=>'360','height'=>'270')),
		'/img/wvbox.ddns.cloud',
		array('escape' => false)
	);
?>
</div>
