<?php
	include_once 'model/dashbroad/dashbroad.php';
	/**
	 * 
	 */
	class DashbroadController extends Dashbroad
	{
		private $dashbroad;
		function __construct()
		{
			$this->dashbroad = new Dashbroad();
		}
		public function dashbroad(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
						$result1 = $this->dashbroad->listBook(1);
						$result2 = $this->dashbroad->listBook(2);
						$result3 = $this->dashbroad->listBook(3);
						$result5 = $this->dashbroad->listBook(5);
						$result6 = $this->dashbroad->listBook(6);
						$result7 = $this->dashbroad->listBook(7);
						$resultCountMember = $this->dashbroad->countMember();
						$resultCountReader = $this->dashbroad->countReader();
						$resultCountBook   = $this->dashbroad->countBook();
					include_once 'views/dashbroad/dashbroad.php';
					break;
				
				case 'search':
					$result = $this->dashbroad->search($_POST['key']);
					include_once 'views/dashbroad/dashbroad.php';
				// 	break;
				// case 'update':
				// 	if (isset($_POST['btnUpdate'])) {
				// 			$this->dashbroad->updateBook($_POST['id'],$_POST['name'],$_POST['author'],$_POST['category'],$_POST['NXB'],$_POST['number'],$_POST['price'],$_POST['store']);
				// 		header('location:index.php?page=list-dashbroads');
				// 	}
				// 	break;
				// case 'edit':				
				// 		$result = $this->dashbroad->dashbroadID($_GET['id']);
				// 		$resultCategory = $this->dashbroad->listCategory();
				// 		$resultNXB = $this->dashbroad->listNXB();
				// 		$resultStore = $this->dashbroad->listStore();
				// 		include_once 'views/dashbroad/update-dashbroad.php';
				// 	break;	
				// case 'destroy':
				// 	if (isset($_GET['id'])) {
				// 		$dashbroadID = (int)$_GET['id'];
				// 		$this->dashbroad->destroy($dashbroadID);
				// 		//$_SESSION['destroy'] = 1;
				// 		header('location:index.php?page=list-dashbroads');
				// 	}
				// 	break;
				default:
					# code...
					break;
			}
		}
	}
?>