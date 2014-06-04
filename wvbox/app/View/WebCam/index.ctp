<?php echo $this->Html->css('webCam.index'); ?> 
<h2>例の：Logitech, Inc. HD Pro Webcam C920</h2>
<h2>JPEG静止画ができました。</h2>
<h2>※H264の動画はできませんでした。</h2>

<div class="manual">
	<h3>gstreamer系のファイルをインストール<h3>
	<h4>sudo apt-get install gstreamer1.0-tools gstreamer1.0-plugins-base gstreamer1.0-plugins-base-apps gstreamer1.0-plugins-good</h4>
	<h3>キャプチャ<h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.webcam.gst.install',array()),
			'/img/wvbox.webcam.gst.install',
			array('escape' => false)
		);
	?>
</div>

<div class="manual">
	<h3>JPEG静止画を撮る<h3>
	<h4>sudo gst-launch-1.0 v4l2src num-buffers=1 ! jpegenc ! filesink location=capture1.jpeg</h4>
	<h3>キャプチャ<h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.webcam.gst.jpeg',array()),
			'/img/wvbox.webcam.gst.jpeg',
			array('escape' => false)
		);
	?>
</div>


<div class="manual">
	<h3>サンプル画像<h3>
	<?php 
		echo $this->Html->link(
			$this->Html->image('wvbox.webcam.gst.sample',array()),
			'/img/wvbox.webcam.gst.sample',
			array('escape' => false)
		);
	?>
</div>
