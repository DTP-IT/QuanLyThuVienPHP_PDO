<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Login extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function user($user, $passwd){
			$sqlView = "SELECT *  FROM account WHERE user = :user AND passwd = :passwd";
			$preView = $this->pdo->prepare($sqlView);
			$preView->bindParam(':user', $user);
			$preView->bindParam(':passwd', $passwd);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function infoMember($id){
			$sqlView = "SELECT maCanBo, tenCanBo, anh  FROM can_bo_thu_vien WHERE maCanBo = :id ";
			$preView = $this->pdo->prepare($sqlView);
			$preView->bindParam(':id', $id);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function infoReader($id){
			$sqlView = "SELECT maThe, hoTen, anh  FROM doc_gia WHERE maThe = :id";
			$preView = $this->pdo->prepare($sqlView);
			$preView->bindParam(':id', $id);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>