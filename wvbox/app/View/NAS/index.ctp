<?php echo $this->Html->css('ddnsWeb.index'); ?> 
<h2>
</h2>


<div>
<h3>設定ファイル例</h3>
<pre>
<?php 
	echo `tail /etc/samba/smb.conf`;
?>
</pre>
</div>



<div class="item_list">
<h3>3T USB外付けHDD動作確認済み</h3>
<h3>実際接続図</h3>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.usb.hdd.connect',array('width'=>'720','height'=>'540')),
		'/img/wvbox.usb.hdd.connect',
		array('escape' => false)
	);
?>
</div>


<div class="item_list">
<h3>df -h コマンドの結果</h3>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.usb.hdd.df',array('width'=>'720','height'=>'540')),
		'/img/wvbox.usb.hdd.df',
		array('escape' => false)
	);
?>
</div>


<div class="item_list">
<h3>mount コマンドの結果</h3>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.usb.hdd.mount',array('width'=>'720','height'=>'540')),
		'/img/wvbox.usb.hdd.mount',
		array('escape' => false)
	);
?>
</div>
