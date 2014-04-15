<?php echo $this->Html->css('factorySetting.index'); ?> 
<div id="factory_index_warning">
<h2>
初期アカウントと暗証番号が共通のため。
インタネットのサービスを公開する前に、
必ず設定してください。
</h2>
</div>


<div class="factory_index_list">
<h2>
本ページ適用範囲：
<h3>
本製品を購入頂いたあとはじめ使用とき。
</h3>
<h3>
出荷時のROMを書きこんだとき。
</h3>
</h2>
</div>

<div class="factory_index_list">
<h2>
設定方法
<h3>
	<?php
		echo $this->Html->link(__('USBキーボード＋HDMI対応モニターまたはテレビを使って、設定。', true), 
		array('controller' => 'factorySetting', 'action' => 'usbkeyboard_hdmi'), array());
	?>
</h3>
<h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.usb_hdmi.items',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.usb_hdmi.items',
			array('escape' => false)
		);
	?>
</h3>
<h3>
	<?php
		echo $this->Html->link(__('有線LAN＋SSHクライアントパソコンを使って、設定。', true), 
		array('controller' => 'factorySetting', 'action' => 'lan_ssh'), array());
	?>
</h3>
<h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.lan_ssh.items',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.lan_ssh.items',
			array('escape' => false)
		);
	?>
</h3>
</h2>
</div>




