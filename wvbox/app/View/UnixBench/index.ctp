<?php echo $this->Html->css('showPackage.index'); ?> 

<!--h2>
ARM版unixBenchでは、マルチプロセッサ対応していないよう。
</h2-->
<!--h2>
下記のベンチマークは、一つコアの結果である。
</h2-->
<h2>
AWSのEC2 m1.smallとm1.largeインスタンスの間
</h2>

<h3>
	<?php
		echo $this->Html->link(__('AWSのベンチマーク詳細日本語', true), 
			'http://qiita.com/kou_bacchus/items/4616dd0031b4809898f0', 
			array('target' => '_blank', 'escape' => false)
			);
	?>
</h3>
<h3>
	<?php
		echo $this->Html->link(__('AWSのベンチマーク詳細英語', true), 
			'http://www.servethehome.com/amazon-ec2-cloud-compute-instances-benchmarked-rackspace-comparison/', 
			array('target' => '_blank', 'escape' => false)
			);
	?>
</h3>





<h3>
	４コア実行ログ
</h3>
<pre>
~/workspace/temp_unixbench/UnixBench$
./Run -c 4 | tee ~/workspace/wvNanoServerBox/wvbox/app/webroot/files/pallarell.Unix.Bench.Result.log
</pre>

<pre>
<?php 
	echo `cat ./files/pallarell.Unix.Bench.Result.log`;
?>
</pre>


<h3>
	１コア実行ログ
</h3>
<pre>
~/workspace/temp_unixbench/UnixBench$
./Run | tee ~/workspace/wvNanoServerBox/wvbox/app/webroot/files/Unix.Bench.Result.log
</pre>

<pre>
<?php 
	echo `cat ./files/single.core.Unix.Bench.Result.log`;
?>
</pre>

