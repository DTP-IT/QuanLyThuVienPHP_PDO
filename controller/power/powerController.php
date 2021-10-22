<?php
include_once 'model/power/power.php';
/**
 * 
 */
class PowerController extends Power
{
	private $power;
	function __construct()
	{
		$this->power = new Power();
	}

	public function power(){
		if (isset($_GET['method'])) {
			$method = $_GET['method'];
		}
		else{
			$method = 'dashboard';
		}
		switch ($method) {
			case 'dashboard':
				if (isset($_POST['btnSearch']) ) {
					$result = $this->power->searchPower($_POST['key']);
				}
				else{
					$result = $this->power->listPower();
				}
				include_once 'views/power/list-powers.php';
				break;
			case 'add':
				if (isset($_POST['btnAdd'])) {
					if($_POST['power'] != 'admin' && $_POST['power'] != 'manager' && $_POST['power'] != 'member' && $_POST['power'] != 'reader') {
						$errorPower = "Phân quyền thất bại!";
						$resultID = $this->power->powerID($_POST['id']);
						include_once 'views/power/add-power.php';
					}
					else {
						if($this->power->addPower($_POST['id'],$_POST['power'])){
						header('location:index.php?page=list-powers');
						}
						else {
							$errorPower = "Phân quyền thất bại!";
							$resultID = $this->power->powerID($_POST['id']);
							include_once 'views/power/add-power.php';
						}	
					}
					
				}
				else {
					$resultID = $this->power->powerID($_GET['id']);
					include_once 'views/power/add-power.php';
				}
				break;
			case 'update':
				if (isset($_POST['btnUpdate'])) {
					if($_POST['power'] != 'admin' && $_POST['power'] != 'manager' && $_POST['power'] != 'member' && $_POST['power'] != 'reader') {
						$errorPower = "Cập nhật thất bại!";
						$result = $this->power->powerID($_POST['id']);
						include_once 'views/power/update-power.php';
					}
					else {
						if($this->power->updatePower($_POST['id'],$_POST['power'])){
						header('location:index.php?page=list-powers');
						}
						else {
							$errorPower = "Cập nhật thất bại!";
							$result = $this->power->powerID($_POST['id']);
							include_once 'views/power/update-power.php';
						}	
					}
				}
				break;
			case 'edit':				
					$result = $this->power->powerID($_GET['id']);
					include_once 'views/power/update-power.php';
				break;	
			case 'destroy':
				if (isset($_GET['id'])) {
					$powerID = (int)$_GET['id'];
					$this->power->destroy($powerID);
					//$_SESSION['destroy'] = 1;
					header('location:index.php?page=list-powers');
				}
				break;
			default:
				# code...
				break;
		}
	}
}
?>