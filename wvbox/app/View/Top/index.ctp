<?php echo $this->Html->css('top.index'); ?> 


<div id="top_index_content">
	<div id="top_index_guild">
		<h3 class="top_index_special">エコ
			<h4 class="top_index_special_details">
				平均消費電力２～３ワット。
			</h4>
			<h4 class="top_index_special_details">
				一日のコスト１～２円。
			</h4>
			<h4 class="top_index_special_details">
				ファンレス騒音0dB。
			</h4>
		</h3>
		<h3 class="top_index_special">ナノ＋高性能
			<h4 class="top_index_special_details">クアッドコア1.6 GHZプロセッサ。</h4>
			<h4 class="top_index_special_details">２GバイトDDR３。</h4>
			<h4 class="top_index_special_details">８Gバイトフラッシュ領域。</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('ハードウェアスペック', true), array('controller' => 'hardware', 'action' => 'index'), array());
				?>
			</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('システム情報', true), array('controller' => 'tryLinux', 'action' => 'index'), array());
				?>
			</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('ベンチマーク比較', true), array('controller' => 'unixBench ', 'action' => 'index'), array());
				?>
			</h4>
		</h3>
		<h3 class="top_index_special">低価格
			<h4 class="top_index_special_details">価格9,800円。</h4>
		</h3>
		<h3 class="top_index_special">Ubuntuサーバー(14.04 LTS)
			<h4 class="top_index_special_details">apt-getコマンドよりOSS自由に利用。</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('パッケージリスト', true), array('controller' => 'showPackage', 'action' => 'index'), array());
				?>
			</h4>
			<h4 class="top_index_special_details">サービスプリインストールROMが提供。</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('カスタマイズROMの一覧', true), array('controller' => 'custRom', 'action' => 'index'), array());
				?>
			</h4>
			<h4 class="top_index_special_details">ソーシャルネットより技術サーポート。</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('helpbook（作成中）', true), 
						'http://www.watorvapor.com/helpbook', 
						array('target' => '_blank', 'escape' => false)
						);
				?>
			</h4>
		</h3>
		<h3 class="top_index_special">クイックガイドライン
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('初期設定', true), array('controller' => 'factorySetting', 'action' => 'index'), array());
				?>
			</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('WIFI設定', true), array('controller' => 'wifi', 'action' => 'index'), array());
				?>
			</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('ROM焼き直し', true), array('controller' => 'romWriter', 'action' => 'index'), array());
				?>
			</h4>
		</h3>
	</div>
	<div id="top_index_image">
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.product.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.product.mini',
				array('escape' => false)
			);
		?>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.power.money.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.power.money.mini',
				array('escape' => false)
			);
		?>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.power.co2.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.power.co2.mini',
				array('escape' => false)
			);
		?>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.size.top.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.size.top.mini',
				array('escape' => false)
			);
		?>
		<p></p>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.size.side.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.size.side.mini',
				array('escape' => false)
			);
		?>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.size.back.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.size.back.mini',
				array('escape' => false)
			);
		?>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.size.bottom.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.size.bottom.mini',
				array('escape' => false)
			);
		?>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.linux.cpu.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.linux.cpu.mini',
				array('escape' => false)
			);
		?>
		<p></p>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.linux.ram.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.linux.ram.mini',
				array('escape' => false)
			);
		?>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.linux.storage.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.linux.storage.mini',
				array('escape' => false)
			);
		?>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.linux.ubuntu.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.linux.ubuntu.mini',
				array('escape' => false)
			);
		?>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.loadblance.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.loadblance.mini',
				array('escape' => false)
			);
		?>
		<p></p>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.loadblance.hybrid.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.loadblance.hybrid',
				array('escape' => false)
			);
		?>
	</div>
</div>

<div id="sample_seprator">
<h3>運用サンプル(繁殖中)</h3>
</div>

<div class="sample_frame">
	<div class="sample_item">
		<h4>本サイト運用</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.product.pico',array('width'=>'120','height'=>'90')),
				array('controller' => 'top', 'action' => 'index'),
				array('escape' => false)
			);
		?>
	</div>
	<div class="sample_item">
		<h4>Hadoop 準備中</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('sub.proj.hadoop',array('width'=>'120','height'=>'90')),
				'http://www.watorvapor.com/wvHadoop/',
				array('escape' => false)
			);
		?>
	</div>
	<div class="sample_item">
		<h4>ソーシャルロボット</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('sobot.icon',array('width'=>'120','height'=>'90')),
				'http://www.watorvapor.com/sobot/',
				array('escape' => false)
			);
		?>
	</div>
	<div class="sample_item">
		<h4>CIーJenkins</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('sub.proj.jenkins',array('width'=>'120','height'=>'90')),
				'http://www.watorvapor.com/jenkins/',
				array('escape' => false)
			);
		?>
	</div>
	<!--div class="sample_item">
		<h4>APK App解析</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('apk2java.icon',array('width'=>'120','height'=>'90')),
				'http://www.watorvapor.com/apk2java/',
				array('escape' => false)
			);
		?>
	</div-->
	<div class="sample_item">
		<h4>Ruby On Rails</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('rails.rails',array('width'=>'120','height'=>'90')),
				array('controller' => 'rails', 'action' => 'index'),
				array('escape' => false)
			);
		?>
	</div>
	<div class="sample_item">
		<h4>CakePHP</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('cakephp.icon',array('width'=>'120','height'=>'90')),
				'http://www.watorvapor.com/cakephp/',
				array('escape' => false)
			);
		?>
	</div>
	<div class="sample_item">
		<h4>ロードバランスのノード</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.loadblance.icon',array('width'=>'120','height'=>'90')),
				array('controller' => 'loadBlance', 'action' => 'index'),
				array('escape' => false)
			);
		?>
	</div>
	<div class="sample_item">
		<h4>DDNSで自宅サーバー公開</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('ddns.icon',array('width'=>'120','height'=>'90')),
				array('controller' => 'DDNSWeb', 'action' => 'index'),
				array('escape' => false)
			);
		?>
	</div>
	<div class="sample_item">
		<h4>外付けHDDで簡易NAS</h4>
		<?php 
			echo $this->Html->link(
				$this->Html->image('nas.icon',array('width'=>'120','height'=>'90')),
				array('controller' => 'NAS', 'action' => 'index'),
				array('escape' => false)
			);
		?>
	</div>
</div>


<div id="top_index_statement">
	<!--h2>※本サイトは作成中。※</h2-->
	<!--h2>※市販アンドロイドテレビボックスより、改造した製品である。※</h2-->
</div>

