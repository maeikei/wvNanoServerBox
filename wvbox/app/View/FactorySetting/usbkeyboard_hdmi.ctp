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
HDMI入力持つモニターまたテレビ。
</h3>
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
	<h4>USBマイクロから給電</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.power.micro.usb',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.power.micro.usb',
			array('escape' => false)
		);
	?>
</h3>
<h3>
本製品が配布されるIPアドレスを調べる。
　	<h5>
		※本製品電源のOn/OffしてIP更新より本製品のIPアドレス調べられる。
	</h5>
	<h4>例アプリFing</h4>
	　	<h6>
			<?php 
				echo $this->Html->link(__('iOS', true), 
					'https://itunes.apple.com/jp/app/fing-network-scanner/id430921107?mt=8', 
					array('target' => '_blank', 'escape' => false)
					);
			?>
		</h6>
	　	<h6>
			<?php 
				echo $this->Html->link(__('Android', true), 
					'https://play.google.com/store/apps/details?id=com.overlook.android.fing&hl=ja', 
					array('target' => '_blank', 'escape' => false)
					);
			?>
		</h6>
	<h4>iOS設備で実行した例</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.find.ip.ios',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.find.ip.ios',
			array('escape' => false)
		);
	?>
</h3>

<h3>
SSHで本製品にログインする。
	<h4>例WindownのTera Term</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.ssh.login',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.ssh.login',
			array('escape' => false)
		);
	?>
	<h4>アカウント【wator】</h4>
	<h4>パスワード【wator】</h4>
	<h4>ログインしたあと画面</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.ssh.logon',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.ssh.logon',
			array('escape' => false)
		);
	?>
</h3>

<h3>
新規ユーザー追加。
	<h4>新アカウント作成【sudo useradd -m yourname】</h4>
	<h4>パスワード変更【sudo passwd yourname】</h4>
	<h4>管理権限付き【sudo adduser -a yourname sudo】</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.ssh.account.add',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.ssh.account.add',
			array('escape' => false)
		);
	?>
</h3>

<h3>
初期アカウント削除。
	<h4>新アカウント作成【sudo userdel -r wator】</h4>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.ssh.account.delete',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.ssh.account.delete',
			array('escape' => false)
		);
	?>
	<h4>※初期アカウントでログインが出来ないことを確認してください。</h4>
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
<h4>再起動する【sudo reboot】</h4>
<h4>再度SSHでログインして、</h4>
</div>

<h2>
ここまで初期設定完了
</h2>
