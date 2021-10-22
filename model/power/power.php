<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Power extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function listPower(){
			$sqlView = "SELECT account.id, account.doc_gia_id, account.can_bo_id, user, level, doc_gia.hoTen, can_bo_thu_vien.tenCanBo FROM account, can_bo_thu_vien, doc_gia WHERE account.doc_gia_id = doc_gia.maThe OR account.can_bo_id = can_bo_thu_vien.maCanBo GROUP BY account.id";
			$preView = $this->pdo->prepare($sqlView);
            $preView->execute();
            return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		public function addPower($id, $level){
			$sqlAdd = "UPDATE account SET  level= :level WHERE id = :id";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':id', $id);
			$preAdd->bindParam(':level', $level);
			return $preAdd->execute();
		}
		public function updatePower($id, $level){
			$sqlAdd = "UPDATE account SET  level= :level WHERE id = :id";
			$preAdd = $this->pdo->prepare($sqlAdd);
			$preAdd->bindParam(':id', $id);
			$preAdd->bindParam(':level', $level);
			return $preAdd->execute();
		}
		public function destroy($id){
            $sqlDel = "DELETE FROM account WHERE id = :id";
            $preDel = $this->pdo->prepare($sqlDel);
            $preDel->bindParam(':id',$id);
            return $preDel->execute();

            // $query = mysqli_query($condb,$sqlDel);
             
            //  return $result_ID = "Xóa thành công";;
        }
        public function powerID($id){
        	$sqlID = "SELECT id, user, passwd, level  FROM account WHERE id = :id";
        	$preID = $this->pdo->prepare($sqlID);
        	$preID->bindParam(':id',$id);
        	$preID->execute();
    		return $preID->fetchAll(PDO::FETCH_ASSOC);
        }
	}
?>