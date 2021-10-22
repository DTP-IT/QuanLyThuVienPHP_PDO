<?php
	include_once 'model/login/login.php';
	/**
	 * 
	 */
	class LoginController extends Login
	{
		private $login;
		function __construct()
		{
			$this->login = new Login();
		}
		public function login(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'login';
			}
			switch ($method) {
				case 'login':
					if (isset($_POST['login']) ) {
						if ($_POST['account'] == '') {
							$_SESSION['error'] = "Vui lòng nhập tài khoản";
						}
						else{
							if ($_POST['pass'] == '') {
								$_SESSION['error'] = "Vui lòng nhập mật khẩu";
							}
							else{
								$result = $this->login->user($_POST['account'], $_POST['pass']);
								if ($result) {
									$level = $result['0']['level'];
									$_SESSION['quyenHan'] = $result['0']['level'];
									if ($level == 'reader') {
										$_SESSION['account'] = $result['0']['doc_gia_id'];
										$info = $this->login->infoReader($result['0']['doc_gia_id']);
										$_SESSION['name'] = $info['0']['hoTen'];
									}
									else{
										$_SESSION['account'] = $result['0']['can_bo_id'];
										$info = $this->login->infoMember($result['0']['can_bo_id']);
										$_SESSION['name'] = $info['0']['tenCanBo'];
									}
									include_once 'views/login/login.php';
									session_destroy($_SESSION['error']);
								}
								else{
									$_SESSION['error'] = "Tài khoản khoặc mật khẩu không chính xác";
								}
							}
							
						}

					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>