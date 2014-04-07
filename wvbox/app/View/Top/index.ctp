<?php echo $this->Html->css('top.index'); ?> 

<div id="top_index_content">
	<div id="top_index_guild">
		<h3 class="top_index_special">ECO
			<h4 class="top_index_special_details">
				平均消費電力は２～３ワット。一日間１～２円ぐらい。
			</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('測定結果', true), array('controller' => 'ecoresult', 'action' => 'index'), array());
				?>
			</h4>
		</h3>
		<h3 class="top_index_special">PICOでも高性能
			<h4 class="top_index_special_details">クアッドコア1.6 GHZプロセス。</h4>
			<h4 class="top_index_special_details">２GBバイトDDR３。</h4>
			<h4 class="top_index_special_details">８GBバイトフラッシュ領域。</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('実行キャプチャ', true), array('controller' => 'linuxcapture', 'action' => 'index'), array());
				?>
			</h4>
		</h3>
		<h3 class="top_index_special">便利
			<h4 class="top_index_special_details">Ubuntuサーバー版が搭載。</h4>
			<h4 class="top_index_special_details">ソーシャルネットより技術サーポート。</h4>
			<h4 class="top_index_special_details">
				<?php
					echo $this->Html->link(__('初期設定', true), 'http://www.cakephp.org/',array('target' => '_blank', 'escape' => false));
				?>
			</h4>
		</h3>
	</div>
	<div id="top_index_image">
	</div>
</div>

<div id="top_index_statement">
	<h2>※市販アンドロイドテレビボックスより、改造した製品である。※</h2>
</div>

