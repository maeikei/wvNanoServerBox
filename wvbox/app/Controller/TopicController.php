<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
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
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
 App::import('Vendor', 'OAuth/OAuthClient');
 App::uses('Controller', 'Controller');
/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class TopicController extends AppController {
	public $uses = array('Topic');
	
	
	
	public function index() {
		if($this->request->query) {
			$uuid = $this->request->query['uuid'];
			$tops_db = $this->Topic->find('all',array('conditions' => array('Topic.uuid' => $uuid)));
		}
		else {
			$tops_db = $this->Topic->find('all',array('limit' => 1));
		}
		debug($tops_db);
		$this->set('topic',$tops_db);
	}
	
	
	public function add() {
		$topic_uuid_hash = hash('sha1',uniqid());
		$this->set('topic_hash_uuid',$topic_uuid_hash);
		if($this->request->isPost() || $this->request->isPut()) {
			$data = array('Topic' =>array(
									'uuid' => $topic_uuid_hash,
									'description' => $this->data['new_topic']['description'],
									'category' => $this->data['new_topic']['category'],
									'command' => $this->data['new_topic']['command'],
									'configure' => $this->data['new_topic']['configure'],
								)
						);
			$this->Topic->save($data);
			$this->redirect(array('controller' => 'topic', 'action' => 'index',
							'?' =>array('uuid'=>$topic_uuid_hash)));
		}
	}
	public function edit() {
	}
	public function comment() {
	}
	public function fork() {
	}
	public function vote() {
	}
}
