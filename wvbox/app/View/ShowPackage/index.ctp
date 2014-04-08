<?php echo $this->Html->css('showPackage.index'); ?> 

<h2>
<pre>
<?php 
	echo `uname -a`;
?>
</pre>
</h2>


<h3>
<pre>
<?php 
	echo `dpkg --get-selections`;
?>
</pre>
</h3>

