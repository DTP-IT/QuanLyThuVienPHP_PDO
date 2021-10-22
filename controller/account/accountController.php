<?php
	include_once 'model/account/account.php';
	/**
	 * 
	 */
	class AccountController extends Account
	{
		private $account;
		function __construct()
		{
			$this->account = new Account();
		}

		public function account(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
					if (isset($_POST['btnSearch']) ) {
						$result = $this->account->searchAccount($_POST['key']);
					}
					else{
						$result = $this->account->listAccount();

					}
					include_once 'views/account/list-accounts.php';
					break;
				case 'add':	
					if (isset($_POST['btnAdd'])) {
						if(isset($_POST['classify'])) {
							if($this->account->addAccount($_POST['user'],$_POST['passwd'],$_POST['classify'])){
								header('location:index.php?page=list-accounts');
							}
							else {
								$error = 'Không thể thêm tài khoản, vui lòng kiểm tra lại!';
								include_once 'views/account/add-account.php';
							}
						}
						else {
								$errorClassify = "Vui lòng chọn loại tài khoản";
								include_once 'views/account/add-account.php';
							}
						
					}
					else {
						$resultIDMember = $this->account->listIDMember();
						$resultIDReader = $this->account->listIDReader();
						include_once 'views/account/add-account.php';
					}
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
						if(isset($_POST['classify'])) {
							if($this->account->updateAccount($_POST['id'],$_POST['user'],$_POST['passwd'],$_POST['classify'])){
								header('location:index.php?page=list-accounts');
							}
							else {
								$error = 'Không thể thêm tài khoản, vui lòng kiểm tra lại!';
								$result = $this->account->accountID($_POST['id']);
								include_once 'views/account/update-account.php';
							}
						}
						else {
								$errorClassify = "Vui lòng chọn loại tài khoản";
								$result = $this->account->accountID($_POST['id']);
								include_once 'views/account/update-account.php';
							}
					}

					break;
				case 'edit':				
						$result = $this->account->accountID($_GET['id']);
						include_once 'views/account/update-account.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$accountID = (int)$_GET['id'];
						$this->account->destroy($accountID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-accounts');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>