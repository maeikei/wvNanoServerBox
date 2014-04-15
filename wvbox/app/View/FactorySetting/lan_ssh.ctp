<?php echo $this->Html->css('factorySetting.lan_ssh'); ?> 

<h2>
本製品以外、必要環境＆ハードウェア
</h2>

<div id="harware">
<div id="harware_list">
<h3>
sshクライアントソフトウェアを持つパソコン。
</h3>
<h3>
　　・Window系なら例えばTera Term
</h3>
<h3>
　　・Unix系なら例えばOpenSSH Client
</h3>
<h3>
ルーター、DNS機能あり。
</h3>
<h3>
Lanケーブル
</h3>
</div>

<div id="harware_image">
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.initsetting.lan_ssh.items',array('width'=>'240','height'=>'180')),
			'/img/wvbox.initsetting.lan_ssh.items',
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
</h3>
</div>


