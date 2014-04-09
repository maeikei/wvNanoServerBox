<?php echo $this->Html->css('tryLinux.index'); ?> 

<h2>
<pre>
<?php 
	echo `lsb_release -a`;
?>
</pre>
</h2>


<h2>
<pre>
<?php 
	echo `uname -a`;
?>
</pre>
</h2>

<h2>
<pre>
<?php 
	echo `date`;
?>
</pre>
</h2>


<h3>
<pre>
<?php 
	echo `cat /proc/cpuinfo`;
?>
</pre>
</h3>

<h3>
<pre>
<?php 
	echo `cat /proc/meminfo`;
?>
</pre>
</h3>

<h3>
<pre>
<?php 
	echo `df -h`;
?>
</pre>
</h3>

<h3>
<pre>
<?php 
	echo `ps -ax`;
?>
</pre>
</h3>

<h3>
<pre>
<?php 
	echo `lshw`;
?>
</pre>
</h3>
