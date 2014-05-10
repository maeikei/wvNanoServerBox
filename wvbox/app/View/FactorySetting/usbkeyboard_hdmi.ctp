<?php echo $this->Html->css('factorySetting.usbkeyboard_hdmi'); ?> 

<h2>
本製品以外、必要環境＆ハードウェア
</h2>

<div id="harware">
<div id="harware_list">
<h3>
USBキーボード。
</h3>
<h3>
HDMIモニター。
</h3>
<h4>
※一部のテレビもできますが、
<p/>
対応出来るテレビのリスト未作成。
</h4>
</div>

<div class="harware_image">
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.usb_hdmi.items',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.usb_hdmi.items',
			array('escape' => false)
		);
	?>
</div>
<div class="harware_image">
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.hdmi.port',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.hdmi.port',
			array('escape' => false)
		);
	?>
</div>
</div>

<div id="manual">
<h3>
本製品の電源を入れる。
	<h4>本製品の専用アダプターから給電</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.power.adaptor',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.power.adaptor',
			array('escape' => false)
		);
	?>
	<!--
	<h4>USBマイクロから給電</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.power.micro.usb',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.power.micro.usb',
			array('escape' => false)
		);
	?>
	-->
</h3>

<h3>
新規ユーザー追加。
	<h4>新アカウント作成【useradd -m yourname】</h4>
	<h4>パスワード変更【passwd yourname】</h4>
	<h4>管理権限付き【adduser -a yourname sudo】</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.hdmi.useradd',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.hdmi.useradd',
			array('escape' => false)
		);
	?>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.hdmi.passwd',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.hdmi.passwd',
			array('escape' => false)
		);
	?>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.hdmi.add.sudo',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.hdmi.add.sudo',
			array('escape' => false)
		);
	?>
</h3>

<h3>
初期共通アカウント削除。
	<h4>削除【userdel -r wator】</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.hdmi.delete.user',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.hdmi.delete.user',
			array('escape' => false)
		);
	?>
	<h4>※初期共通アカウントでログインが出来ないことを確認してください。</h4>
</h3>


<h3>
Eth固定IPアドレスに変更。
	<h5>※MACアドレスが起動ごとに変わってしまいバッグあるため。</h5>
	<h4>interfacesを編集【sudo vim /etc/network/interfaces】</h4>
	<h5>※お客様自身のネットーワーク環境に合わせてください。</h5>
	<pre>
# interfaces(5) file used by ifup(8) and ifdown(8)
# Include files from /etc/network/interfaces.d:
#source-directory /etc/network/interfaces.d
auto eth0
#iface eth0 inet dhcp
iface eth0 inet static
address 192.168.xx.xxx
netmask 255.255.255.0
gateway 192.168.xx.xxx

iface wlan0 inet dhcp
  wpa-conf /etc/wpa_supplicant/wpa_supplicant.conf
	
	</pre>
</h3>
<h4>再起動する【reboot】</h4>
</div>

<h2>
ここまで初期設定完了
</h2>
