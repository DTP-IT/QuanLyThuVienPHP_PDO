<?php
	include_once 'model/reader/reader.php';
	/**
	 * 
	 */
	class ReaderController extends Reader
	{
		private $reader;
		function __construct()
		{
			$this->reader = new Reader();
		}

		public function reader(){
			if (isset($_GET['method'])) {
				$method = $_GET['method'];
			}
			else{
				$method = 'dashboard';
			}
			switch ($method) {
				case 'dashboard':
						$result = $this->reader->listReader();
					include_once 'views/reader/list-readers.php';
					break;
				case 'add-borrow-card':
					$result = $this->reader->listReader();
					include_once 'views/borrow-card/add-borrow-card.php';
					break;
				case 'add':

					if (isset($_POST['btnAdd'])) {
						$resultEmail = $this->reader->readerEmail($_POST['email']);
						if($resultEmail){
							$result = $this->reader->listClass();
						$resultFaculty = $this->reader->listFaculty();
						include_once 'views/reader/add-reader.php';
							$_SESSION['error-email'] = "Email đã được sử dụng, vui lòng chọn email khác";
						}
						else{
							if (isset($_SESSION['error-email'])) {
								session_destroy($_SESSION['error-email']);

							}
							session_destroy($_SESSION['classID']);
							session_destroy($_SESSION['fID']);
							$this->reader->addReader($_POST['id'],$_POST['name'],$_POST['dOB'],$_POST['gender'],$_POST['address'],$_POST['avatar'],$_POST['phone'],$_POST['email'],$_POST['level'],$_POST['classID'],$_POST['facultyID'],$_POST['timeStudy'],$_POST['timeStart'],$_POST['timeFinish']);
						header('location:index.php?page=list-readers');
						}
						
					}
					else {
						$_SESSION['classID'] = $this->reader->listClass();
						
						$resultFaculty = $this->reader->listFaculty();						
						include_once 'views/reader/add-reader.php';
					}
					break;
				case 'update':
					if (isset($_POST['btnUpdate'])) {
							$this->reader->updateReader($_POST['id'],$_POST['name'],$_POST['dOB'],$_POST['gender'],$_POST['address'],$_POST['phone'],$_POST['email'],$_POST['level'],$_POST['facultyID'],$_POST['classID'],$_POST['timeStudy'],$_POST['timeStart'],$_POST['timeFinish']);
						
						header('location:index.php?page=list-readers');
					}
					break;
				case 'edit':				
						$result = $this->reader->readerID($_GET['id']);
						$resultClass = $this->reader->listClass();
						$resultFaculty = $this->reader->listFaculty();
						include_once 'views/reader/update-reader.php';
					break;	
				case 'destroy':
					if (isset($_GET['id'])) {
						$readerID = (int)$_GET['id'];
						$this->reader->destroy($readerID);
						//$_SESSION['destroy'] = 1;
						header('location:index.php?page=list-readers');
					}
					break;
				default:
					# code...
					break;
			}
		}
	}
?>