<?php echo $this->Html->css('wifi.index'); ?> 

<div class="manual">
	<h3>SSIDと暗証番号を設定する<h3>
	<h4>wpa_passphrase ＜ssid名前＞ ＜暗証番号＞ | sudo  tee /etc/wpa_supplicant/wpa_supplicant.conf</h4>
	<h3>キャプチャ<h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.wifi.command',array()),
			'/img/wvbox.wifi.command',
			array('escape' => false)
		);
	?>
</div>

<div class="manual">
	<h3>手動でwlan0を有効にする<h3>
	<h4>sudo ifup wlan0</h4>
	<h3>キャプチャ<h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.wifi.ifup',array()),
			'/img/wvbox.wifi.ifup',
			array('escape' => false)
		);
	?>
</div>


<div class="manual">
	<h3>システム起動時、Wifi自動オンに設定する<h3>
	<h4>sudo vim /etc/network/interfaces</h4>
	<h3>キャプチャ<h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.wifi.autoup',array()),
			'/img/wvbox.wifi.autoup',
			array('escape' => false)
		);
	?>
</div>
