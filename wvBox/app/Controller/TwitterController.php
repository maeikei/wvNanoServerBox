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
class TwitterController extends AppController {
	public $uses = array('Twitter');
	public function index() {
        $client = $this->createClient();
        $requestToken = $client->getRequestToken('https://api.twitter.com/oauth/request_token', 'http://' . $_SERVER['HTTP_HOST'] . '/helpbook/twitter/callback');

        if ($requestToken) {
            $this->Session->write('twitter_request_token', $requestToken);
            $this->redirect('https://api.twitter.com/oauth/authorize?oauth_token=' . $requestToken->key);
        } else {
            // an error occured when obtaining a request token
			$this->redirect(array('controller' => 'twitter', 'action' => 'error'));
        }
	}

    public function callback() {
        $requestToken = $this->Session->read('twitter_request_token');
        $client = $this->createClient();
        $accessToken = $client->getAccessToken('https://api.twitter.com/oauth/access_token', $requestToken);
/*
        if ($accessToken) {
            $client->post($accessToken->key, $accessToken->secret, 'https://api.twitter.com/1/statuses/update.json', array('status' => 'hello world!'));
        }
*/
		debug($accessToken);
		if ($accessToken) {
			$token_twitter = $client->get(
				$accessToken->key,
				$accessToken->secret,
				'https://api.twitter.com/1.1/account/verify_credentials.json',
				array()
			);
		}
		else
		{
			$this->Session->write('oauth.login.name', 'ゲストさん');
			$this->redirect(array('controller' => 'register', 'action' => 'index'));
			return;
		}
		$token_twitter = json_decode($token_twitter, true);
		if($token_twitter) {
			$twitter_db = $this->Twitter->find('all',array('conditions' => array('Twitter.oauth_id' => $token_twitter['id'])));
			debug($twitter_db);
			if(0 == sizeof($twitter_db)) {
				$data = array('Twitter' =>array(
										'oauth_id' => $token_twitter['id'],
										'username' => $token_twitter['name'],
										'showname' => $token_twitter['screen_name'],
										'oauth_token' => $accessToken->key,
										'oauth_token_secret' => $accessToken->secret,
									)
							);
				$this->Twitter->save($data);
			}
			$this->Session->write('oauth.login.name', $token_twitter['screen_name']);
            $this->redirect('/');
		}
		else {
			$this->Session->write('oauth.login.name', 'ゲストさん');
			$this->redirect(array('controller' => 'register', 'action' => 'index'));
		}
//		debug($token_twitter);
//		$this->set('twitter_profile',$token_twitter);
	}
    private function createClient() {
        return new OAuthClient('5LoyEtD2zWB5Yqcet1kAA', 'EqJ8erQDkqSKld0e96ytTlb6LzVs5Z7Eyx2TwIrzUI');
    }

	
	public function error() {
		$this->set('error_message',$this->error_message);
	}
	
}
