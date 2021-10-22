<?php
	include_once 'config/myConfig.php';
	/**
	 * 
	 */
	class Dashbroad extends Connect
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function listBook($id){
			$sqlView = "SELECT * FROM sach WHERE sach.maTheLoai = :id";
			$preView = $this->pdo->prepare($sqlView);
			$preView->bindParam(':id', $id);
      $preView->execute();
      return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
		
		public function search($key){
			$sqlView = "SELECT * FROM sach, the_loai_sach WHERE sach.maTheLoai = the_loai_sach.maTheLoai AND sach.tenSach like CONCAT ('%',:key, '%')";
			$preView = $this->pdo->prepare($sqlView);
			$preView->bindParam(':key', $key);
      $preView->execute();
      return $preView->fetchAll(PDO::FETCH_ASSOC);
		}
    public function bookID($id){
    	//$id = $id;
    	$sqlID = "SELECT* FROM sach WHERE maSach = :id";
    	$preID = $this->pdo->prepare($sqlID);
    	$preID->bindParam(':id',$id);
    	$preID->execute();
		return $preID->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listCategory(){
    	$sqlViewCategory = "SELECT * FROM the_loai_sach";
			$preViewCategory = $this->pdo->prepare($sqlViewCategory);
      $preViewCategory->execute();
      return $preViewCategory->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listNXB(){
    	$sqlViewNXB = "SELECT * FROM nha_xuat_ban";
			$preViewNXB = $this->pdo->prepare($sqlViewNXB);
      $preViewNXB->execute();
      return $preViewNXB->fetchAll(PDO::FETCH_ASSOC);
    }
    public function listStore(){
    	$sqlViewStore = "SELECT * FROM kho_sach";
			$preViewStore = $this->pdo->prepare($sqlViewStore);
      $preViewStore->execute();
      return $preViewStore->fetchAll(PDO::FETCH_ASSOC);
    }
    // Dashbroad Admin
    public function countMember(){
    	$sqlCount = "SELECT COUNT(maCanBo) FROM can_bo_thu_vien";
    	$preCount = $this->pdo->prepare($sqlCount);
    	$preCount->execute();
		return $preCount->fetchAll(PDO::FETCH_ASSOC);
    }
    public function countReader(){
    	$sqlCount = "SELECT COUNT(maThe) FROM doc_gia";
    	$preCount = $this->pdo->prepare($sqlCount);
    	$preCount->execute();
		return $preCount->fetchAll(PDO::FETCH_ASSOC);
    }
    public function countBook(){
    	$sqlCount = "SELECT COUNT(maSach) FROM sach";
    	$preCount = $this->pdo->prepare($sqlCount);
    	$preCount->execute();
		return $preCount->fetchAll(PDO::FETCH_ASSOC);
    }
	}
?>