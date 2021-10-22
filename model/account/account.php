<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Account extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		
		public function listAccount(){
			$sqlView = "SELECT *  FROM account";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function listIDMember(){
			$sqlIDMember = "SELECT maCanBo FROM can_bo_thu_vien";
			$preIDMember = $this->pdo->prepare($sqlIDMember);
            $preIDMember->execute();
            return $preIDMember->fetchAll(PDO::FETCH_ASSOC);
		}
		public function listIDReader(){
			$sqlIDReader = "SELECT maThe FROM doc_gia";
			$preIDReader = $this->pdo->prepare($sqlIDReader);
            $preIDReader->execute();
            return $preIDReader->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addAccount($user, $passwd, $classify){
			if($classify == "reader"){
				$sqlAdd = "INSERT INTO account(doc_gia_id, user, passwd, level) VALUES (:id, :user, :matKhau, :level)";
				$preAdd = $this->pdo->prepare($sqlAdd);
				$preAdd->bindParam(':level', $classify);
			}
			else{
				$sqlAdd = "INSERT INTO account(can_bo_id, user, passwd) VALUES (:id, :user, :matKhau)";
				$preAdd = $this->pdo->prepare($sqlAdd);
			}
			$preAdd->bindParam(':id', $user);
			$preAdd->bindParam(':user', $user);
			$preAdd->bindParam(':matKhau', $passwd);
			return $preAdd->execute();
		}
		public function updateAccount($id, $user, $passwd, $classify){
			if($classify == "reader"){
				$sqlUpdate = "UPDATE account SET  user = :user, passwd = :matKhau WHERE id = :id";
				$preAdd->bindParam(':level', $classify);
			}
			else{
				$sqlUpdate = "UPDATE account SET user = :user, passwd = :matKhau WHERE id = :id ";
			}
			$preUpdate = $this->pdo->prepare($sqlUpdate);
			$preUpdate->bindParam(':id', $id);
			$preUpdate->bindParam(':user', $user);
			$preUpdate->bindParam(':matKhau', $passwd);
			return $preUpdate->execute();
		}
		public function destroy($id){
            $account = $id;
            $sqlDel = "DELETE FROM account WHERE id = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$account);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";;
        }
        public function accountID($id){
        	$sqlID = "SELECT user, passwd, level  FROM account WHERE id = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
      //   public function accountEmail($email){
      //   	$sqlID = "SELECT email FROM can_bo_thu_vien WHERE email = :email";
      //   	$preID = $this->pdo->prepare($sqlID);
      //   	$preID->bindParam(':email',$email);
      //   	$preID->execute();
    		// return $preID->fetchAll(PDO::FETCH_ASSOC);
      //   }
	}
?>