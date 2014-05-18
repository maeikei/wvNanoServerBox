<?php echo $this->Html->css('top.architecture'); ?> 

<div id="summary">
<h2>メリット</h2>
<h3>ビッグデータが活用しやすい</h3>
<h3>データが安全に保存される</h3>
<h3>分散型で拡張性しやすい</h3>
<h3>ナノARMの低コストで、節約ができる</h3>
<h2>デメリット</h2>
<h3>Hadoop知識の不足。。。</h3>
</div>

<div id="image">
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.archi.all.view',array()),
			'/img/wvbox.archi.all.view',
			array('escape' => false)
		);
	?>
</div>
