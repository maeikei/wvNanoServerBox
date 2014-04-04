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
class GoogleController extends AppController {
	private $error_message;
	public function index() {
        $client = $this->createClient();
        $requestToken = $client->getRequestToken('https://accounts.google.com/o/oauth2/auth', 'http://' . $_SERVER['HTTP_HOST'] . '/helpbook/twitter/callback');
//		debug($requestToken);
        if ($requestToken) {
            $this->Session->write('token', $requestToken);
            $this->redirect('https://www.google.com/accounts/OAuthAuthorizeToken?oauth_token=' . $requestToken->key);
        } else {
            // an error occured when obtaining a request token
			$this->error_message = 'Perhaps google change it oathu apis,please contract us.';
			$this->redirect(array('controller' => 'google', 'action' => 'error'));
        }
	}

    public function callback() {
        $requestToken = $this->Session->read('google_request_token');
        $client = $this->createClient();
        $accessToken = $client->getAccessToken('https://www.google.com/accounts/OAuthGetAccessToken', $requestToken);

        if ($accessToken) {
            //$client->post($accessToken->key, $accessToken->secret, 'https://api.twitter.com/1/statuses/update.json', array('status' => 'hello world!'));
        }
    }
    private function createClient() {
        return new OAuthClient('365690362775.apps.googleusercontent.com', 'nfhWW4pqr3F8wV0BxrPn8WRj');
    }
	
	public function error() {
		$this->set('error_message',$this->error_message);
	}
}
