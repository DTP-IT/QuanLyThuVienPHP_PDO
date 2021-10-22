       <nav class="  justify-content-betwwen px-0 " > 
      
       
        <div class="px-sm-4 d-flex justify-content-betwwen " >

            <a class="navbar-brand " href="index.php">
                <img src="assets/img/logo/HUNRE_Logo.png" alt="logo" style="width:40px;">
            </a>
            
            <div class="d-flex col-md-4" > 
                <a href="#" class="navbar-brand font-weight-bolder">
                    TRUNG TÂM THƯ VIỆN TRƯƠNG ĐẠI HỌC TÀI NGUYÊN VÀ MÔI TRƯỜNG HÀ NỘI
                </a>
            </div>

            <div class="d-flex col-md-8 justify-content-end" style="align-items: center;" >
                <!-- users -->
                <div class="btn-group ml-0 ml-sm-4">
                    <a href="#" class="icon-user icon-dropdown text-decoration-none p-2"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php 
                        $anh="assets/img/members/".$_SESSION['avatar'];
                        $anh="<img src='$anh' width='27px' height='27px'  style='border-radius: 50%;''>";
                        echo $anh;
                        ?>
                        <span class="font-weight-bolder text-white" style="padding-right: 20px;" >
                            <?php 

                            echo $_SESSION['name'];
                            ?>  
                        </span>
                    </a>
                    <div class="dropdown-user dropdown-menu dropdown-menu-right mt-0 mt-sm-1 border-0 rounded-sm shadow text-center">
                        <div class="media-body d-flex p-2" style="width: 300px;">

                            <?php 
                            $anh="assets/img/members/".$_SESSION['avatar'];
                            $anh="<img src='$anh' width='60px' height='60px'  class='img-card-item'>";
                            echo $anh;

                            ?>
                            <div>
                                <span class="card-title text-success ml-2" ><?php 
                                echo $_SESSION['name'];
                                ?>  </span> 
                                <a href="#" class="text-decoration-none"><p class="card-text"><i class="fas fa-edit"></i>Chỉnh sửa</p></a>
                            </div>
                        </div>
                        <div>
                            <a href="index.php?page=logout" class="text-decoration-none"><i class="fas fa-sign-out-alt"></i>Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class="row">
        <div style=" padding-left: 20px;">
            <button class="navbar-toggler1 border-0 pl-1 fas fa-bars collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" ></button>
        </div>
        
        <div class="bg-white shadow-sm navbar-collapse1 collapse" id="navbarSupportedContent">
            <!--aaaaaaaaaaaaaaaaa -->
            <div class="profile border-bottom" >
                <?php
                include_once('controller/profile/profileController.php');
                $profile = new ProfileController();
                $profile->profile();
                include_once 'layout/profile.php';
                ?>
            </div>
            <class class="navigation p-4 mt-4 ">
                <?php include_once 'layout/navbar.php'; ?>  
            </class>
        </div>
    </div>
 </nav>

