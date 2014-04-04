<form>
<div>
名前：
<?php
echo h($twitter_profile['name']);
?>
</div>


<div>
表示名：
<?php
echo h($twitter_profile['screen_name']);
?>
</div>

<div>
ホームページ：
<?php
echo h($twitter_profile['url']);
?>
</div>


<div>
ロゴ：<img src="<?php echo h($twitter_profile['profile_image_url']);?>"></img>
</div>

<div>
場所：
<?php
echo h($twitter_profile['location']);
?>
</div>

<div>
タイムゾーン：
<?php
echo h($twitter_profile['time_zone']);
?>
</div>


<div>
紹介：
<textarea maxlength="1024"　disabled="disabled" >
<?php
echo h($twitter_profile['description']);
?>
</textarea>
</div>
</form>
