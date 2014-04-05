<?php echo $this->Html->css('topic.add'); ?> 
<div class="topic_add_items">
	<?php echo $topic ;?>
</div>

<?php
echo $this->Form->create('new_topic', array('type' => 'post'));
echo $this->Form->input('description',array('label' => '内容：'));


$options = array(
    'debian' => 'Debian系',
    'redhat' => 'Red Hat系',
    'slackware' => 'Slackware系'
);

echo $this->Form->input('category', array(
                    'legend' =>false,
                    'type' => 'radio',
                    'options' => $options,
					'value' => 'debian',
					'div' => 'topic_category_radio',
					'style' => 'float:none;', 
				)
			);

echo $this->Form->input('command',array('label' => 'コマンドライン：'));

echo $this->Form->input('configure',array('label' => 'あと設定：'));

?>

<?php echo $this->Form->end('Finish'); ?>
