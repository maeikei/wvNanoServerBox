<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		ナノARMサーバー　塵（ちり）
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css('wvbox.generic');
		echo $this->Html->script('google.analytics',array('inline' => false));

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="header_left_navi">
				<div class="header_navi_left_items">
					<h3>ナノARMサーバー</h3>
				</div>
				<div class="header_navi_left_items">
					<h3>塵（ちり）</h3>
				</div>
				<div class="header_navi_left_items">
					<?php
						echo $this->Html->image("home.icon.jpg",
							array('url' => array('controller' => 'top', 'action' => 'index'))
							);
					?>
				</div>
				<div class="header_navi_left_items">
					<?php
						echo $this->Html->image("notification.icon.jpg",
							array('url' => array('controller' => 'top', 'action' => 'index'))
							);
					?>
				</div>
				<div class="header_navi_left_items">
					<?php
						echo $this->Html->image("search.icon.jpg",
							array('url' => array('controller' => 'top', 'action' => 'index'))
							);
					?>
				</div>
			</div>
			<div id="header_center_navi">
			</div>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>
</body>
</html>
