<?php echo $this->Html->css('top.index'); ?> 


<div id="top_index_content">
	<div id="top_index_guild">
		<h3 class="top_index_special">エコ
			<h4 class="top_index_special_details">
				平均消費電力は２～３ワット。
			</h4>
			<h4 class="top_index_special_details">
				一日のコストは１～２円ぐらい。
			</h4>
		</h3>
		<h3 class="top_index_special">ナノ＋高性能
			<h4 class="top_index_special_details">クアッドコア1.6 GHZプロセス。</h4>
			<h4 class="top_index_special_details">２GBバイトDDR３。</h4>
			<h4 class="top_index_special_details">８GBバイトフラッシュ領域。</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('ハードウェア情報', true), array('controller' => 'tryLinux', 'action' => 'index'), array());
				?>
			</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('ベンチマークテスト', true), array('controller' => 'unixBench ', 'action' => 'index'), array());
				?>
			</h4>
		</h3>
		<h3 class="top_index_special">低価格
			<h4 class="top_index_special_details">暫定的価格１万２千円。</h4>
		</h3>
		<h3 class="top_index_special">Ubuntuサーバー
			<h4 class="top_index_special_details">便利apt-getコマンドより、豊かなOSSを入れられる。</h4>
			<h4 class="top_index_special_details">必要なパッケージに応じてカスタマイズROMが提供できる。</h4>
			<h4 class="top_index_special_details">ソーシャルネットより技術サーポート。</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('パッケージリスト', true), array('controller' => 'showPackage', 'action' => 'index'), array());
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
					echo $this->Html->link(__('ROM焼き直し', true), array('controller' => 'ROMWriter', 'action' => 'index'), array());
				?>
			</h4>
		</h3>
		<h3 class="top_index_special">運用サンプル
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('RailsOnRubyサーバー', true), array('controller' => 'rails', 'action' => 'index'), array());
				?>
			</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('Cakephpサーバー', true), array('controller' => 'cakephp', 'action' => 'index'), array());
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
		<p></p>
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.size.top.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.size.top.mini',
				array('escape' => false)
			);
		?>
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
		<p></p>
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
		<?php 
			echo $this->Html->link(
				$this->Html->image('wvbox.linux.ram.pico',array('width'=>'120','height'=>'90')),
				'/img/wvbox.linux.ram.mini',
				array('escape' => false)
			);
		?>
		<p></p>
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
	</div>
</div>

<div id="top_index_statement">
	<h2>※本サイトは作成中。※</h2>
	<!--h2>※市販アンドロイドテレビボックスより、改造した製品である。※</h2-->
</div>

