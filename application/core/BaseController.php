<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use \LeanCloud\Client;
use \LeanCloud\Storage\CookieStorage;

class BaseController extends CI_Controller {
	function __construct() {
		parent::__construct();
		// 参数依次为 AppId, AppKey, MasterKey
		Client::initialize("PTgTb28dHg7G3mnpNqcO9eYG-gzGzoHsz", "sYnGj2tow3p9K2QBLv8ds9Bc" ,"UYOx9nlcjUguA8B81CnRLLTI");
		Client::useMasterKey(true);
		Client::setStorage(new CookieStorage());
	}

	// 格式化输出
	function echo_json($message, $success = true) {
		$data = ['message' => $message, 'success' => $success];
		header('Content-type: application/json;charset=UTF-8');
		echo json_encode($data);
	}
}
