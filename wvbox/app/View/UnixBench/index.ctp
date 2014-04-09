<?php echo $this->Html->css('showPackage.index'); ?> 

<h2>
ARM版unixBenchでは、マルチプロセッサ対応していないよう。
</h2>
<h2>
下記のベンチマークは、一つコアの結果である。
</h2>
<pre>
<?php 
	echo `cat /opt/Unix.Bench.Result.log`;
?>
</pre>
