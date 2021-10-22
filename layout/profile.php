<div class="card p-sm-4 text-center border-0 " >
<?php                  
    $anh="assets/img/members/".$_SESSION['avatar'];
    $anh="<img src='$anh' width='90px'  class='mx-auto my-sm-3'>";
    echo $anh;
?>
    <div class="card-text font-weight-bolder">
       <?php 
        echo $_SESSION['name'];
      ?>
    </div>
    <i class="text-success small">
    <?php
        if ($_SESSION['quyenHan'] == 'admin') {
            echo "Administrator";
        }
        elseif ($_SESSION['quyenHan'] == 'manager') {
            echo "Manager";
        }
        else{
            echo "Member";
        }
    ?>
    </i>
</div>