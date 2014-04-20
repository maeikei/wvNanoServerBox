<?php echo $this->Html->css('romWriter.index'); ?> 
<div id="index_warning">
<h2>
書き込みツール、Rockchip社ツール。
</h2>
</div>
<div class="index_list">

<h3>
	ROM書き込み用のソフトウェア
</h3>
<h4>
<?php
	echo $this->Html->link(__('Rockchip Batch Tool v1.7ダウンロード', true), 
		'/files/Rockchip_Batch_Tool_v1.7.zip', 
		array('target' => '_blank', 'escape' => false)
		);
?>
</h4>
<h4>
	Rockchip Batch Tool v1.7.zipの解凍
</h4>
<h3>
	<?php
		echo $this->Html->link(__('カスタマイズROMの一覧', true), array('controller' => 'showRom', 'action' => 'index'), array());
	?>
</h3>



<h3>
	機器本体をROM書き込みモードへ切り替え
</h3>
<h4>
MIC/FNの穴につまようじなどで押しながら、マイクロUSBを差し込み。
PCのUSBディバイス音聞こえるまで押し続ける。
</h4>
<h5>
	※MIC/FNの穴につまようじなどで押して、小さい音が聞こえる
</h5>

<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.push.pin.micro',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.push.pin.micro',
		array('escape' => false)
	);
?>

<h3>
	ドライバーのインストール手順を従って、Rockusb Driverをインストールする。
</h3>
<h5>
	※ドライバー一式は、【Rockchip Batch Tool v1.7/Rockusb Driver v3.5】にある
</h5>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.driver.install',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.driver.install',
		array('escape' => false)
	);
?>

<h3>
	書き込みツールを立ち上げる。
</h3>
<h5>
	※書き込みツールは、【Rockchip Batch Tool v1.7/BatchTool/RKBatchTool.exe】である。
</h5>
<h4>
	書き込みモード切<b>成功画面</b>
</h4>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.mode.success',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.mode.success',
		array('escape' => false)
	);
?>

<h4>
	書き込みモード切り替え失敗またはドライバーインストール<b>失敗画面</b>
</h4>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.mode.failure',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.mode.failure',
		array('escape' => false)
	);
?>

<h4>
	ROMのイメージファイルを選択
</h4>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.select.rom',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.select.rom',
		array('escape' => false)
	);
?>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.load.finnish',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.load.finnish',
		array('escape' => false)
	);
?>

<h4>
	【Upgrade】ボタンより開始
</h4>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.upgrade.button',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.upgrade.button',
		array('escape' => false)
	);
?>
<h4>
	書き込み完了まで待ち
</h4>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.downloading',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.downloading',
		array('escape' => false)
	);
?>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.downloading2',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.downloading2',
		array('escape' => false)
	);
?>
<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.downloading.check',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.downloading.check',
		array('escape' => false)
	);
?>
<h4>
	書き込み成功
</h4>

<?php 
	echo $this->Html->link(
		$this->Html->image('wvbox.rom.success',array('width'=>'240','height'=>'180')),
		'/img/wvbox.rom.success',
		array('escape' => false)
	);
?>

</div>

<h2>
	ここまでROMの書き込み完了
	<p/>
	<?php
		echo $this->Html->link(__('初期設定をしくてください', true), array('controller' => 'factorySetting', 'action' => 'index'), array());
	?>
	
</h2>



