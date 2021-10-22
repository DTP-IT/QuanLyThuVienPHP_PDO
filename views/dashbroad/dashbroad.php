<?php 
    if ($_SESSION['quyenHan'] == "reader") {
   ?>

<div class="container">
    <div class="slidershow">
        <div class="slides">
            <input type="radio" name="bottom" id="btm1" checked>
            <input type="radio" name="bottom" id="btm2">
            <input type="radio" name="bottom" id="btm3">
            <input type="radio" name="bottom" id="btm4">
            <input type="radio" name="bottom" id="btm5">
            <div class="slide s1">
                <img src="assets/img/banner/10.jpg" alt="banner1" >
            </div>
            <div class="slide">
                <img src="assets/img/banner/11.jpg" alt="banner2">
            </div>
            <div class="slide ">
                <img src="assets/img/banner/12.jpg" alt="banner3">
            </div>
            <div class="slide">
                <img src="assets/img/banner/13.jpg" alt="banner4">
            </div>
            <div class="slide">
                <img src="assets/img/banner/14.jpg" alt="banner5">
            </div>
            <div class="navigation-slider">
                <label for="btm1" class="bar-slide"></label>
                <label for="btm2" class="bar-slide"></label>
                <label for="btm3" class="bar-slide"></label>
                <label for="btm4" class="bar-slide"></label>
                <label for="btm5" class="bar-slide"></label>
            </div>
        </div>
        
    </div>
    <div class="row down">
        <div class="col-lg-12">
            <div class="p-sm-4 bg-white rounded-sm shadow-sm">
                <div class="my-3 d-flex">
                    <form action="index.php?page=dashbroad&method=search" method="POST" name="register" onsubmit="return registerSearch();">
                        <table>
                            <tr>
                                <td>
                                    <input class="form-control" id="myInput" type="text" name="key" placeholder="Tìm kiếm sách..." size="100" value="<?php if (isset($_POST['btnSearch'])) {
                                        echo $_POST['key'];
                                    } ?>"/> 
                                </td>
                                <td style="padding-left: 90px;">
                                    <button type="submit" name="btnSearch" class="btn btn-info" style="padding-left: 10px;"><i class="fas fa-search" style="margin-right: 10px;" ></i>Search</button>
                                </td>
                            </tr>
                            <p id="error-key" style="color: red;"></p>
                        </table>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>
    <?php
        if(isset($_POST['btnSearch'])){
            if ($result) {
               ?>
    <div class="row product__filter">
        <div class="col-lg-12">
            <div class="col-lg-2" style="background-color: green;">
                <span style="color: white;"><!-- <?php echo $result['0']['tenTheLoai']; ?> --></span>
            </div>
            <hr />
        </div>
        <?php  
            foreach ($result as $key => $value) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $value['anh']; ?>">
                        <img src="assets/img/books/<?php echo $value['anh']; ?>" width="200px" height="300px" alt="">

                    </div>
                    <div class="product__item__text">
                        <h6><?php echo $value['tenSach']; ?></h6>
                        <!-- <a href="index.php?page=order&id=<?php echo $value['id']; ?>" class="add-cart">+ Mượn sách</a> -->
                        <h5><?php echo $value['giaTien']; ?>VNĐ</h5>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
    <?php
            }
            else{
                ?>
                <div class="row product__filter">
        <div class="col-lg-12">
            <div class="col-lg-2" style="background-color: green;">
                
            </div>
            <hr />
        </div>
        
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                <div class="product__item">
                    <div class="product__item__pic set-bg" >
                    </div>
                    <div class="product__item__text">
                        <h6>Không tìm thấy sách</h6>
                    </div>
                </div>
            </div>
    </div>
                <?php
            }
        }
        else{
            ?>
            <div class="row product__filter">
        <div class="col-lg-12">
            <div class="col-lg-2" style="background-color: green;">
                <span style="color: white;">Đồ án</span>
            </div>
            <hr />
        </div>
        <?php  

            foreach ($result1 as $key => $value) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $value['anh']; ?>">
                        <img src="assets/img/books/<?php echo $value['anh']; ?>" width="200px" height="300px" alt="">
                    </div>
                    <div class="product__item__text">
                        <h6><?php echo $value['tenSach']; ?></h6>
                        <!-- <a href="index.php?page=order&id=<?php echo $value['id']; ?>" class="add-cart">+ Mượn sách</a> -->
                        <h5><?php echo $value['giaTien']; ?>VNĐ</h5>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        <div class="col-lg-12">
            <div class="col-lg-2" style="background-color: green;">
                <span style="color: white;">Giáo trình</span>
            </div>
            <hr />
        </div>
        <?php  
            foreach ($result2 as $key => $value) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $value['anh']; ?>">
                        <img src="assets/img/books/<?php echo $value['anh']; ?>" width="200px" height="300px" alt="">
                        
                    </div>
                    <div class="product__item__text">
                        <h6><?php echo $value['tenSach']; ?></h6>
                        <!-- <a href="index.php?page=order&id=<?php echo $value['id']; ?>" class="add-cart">+ Mượn sách</a> -->
                        <h5><?php echo $value['giaTien']; ?>VNĐ</h5>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        <div class="col-lg-12">
            <div class="col-lg-2" style="background-color: green;">
                <span style="color: white;">Tạp chí</span>
            </div>
            <hr />
        </div>
        <?php  
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";
            foreach ($result3 as $key => $value) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $value['anh']; ?>">
                        <img src="assets/img/books/<?php echo $value['anh']; ?>" width="200px" height="300px" alt="">
                        
                    </div>
                    <div class="product__item__text">
                        <h6><?php echo $value['tenSach']; ?></h6>
                        <!-- <a href="index.php?page=order&id=<?php echo $value['id']; ?>" class="add-cart">+ Mượn sách</a> -->
                        <h5><?php echo $value['giaTien']; ?>VNĐ</h5>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        <div class="col-lg-12">
            <div class="col-lg-2" style="background-color: green;">
                <span style="color: white;">Ngoại văn</span>
            </div>
            <hr />
        </div>
        <?php  
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";
            foreach ($result5 as $key => $value) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $value['anh']; ?>">
                        <img src="assets/img/books/<?php echo $value['anh']; ?>" width="200px" height="300px" alt="">
                        
                    </div>
                    <div class="product__item__text">
                        <h6><?php echo $value['tenSach']; ?></h6>
                        <!-- <a href="index.php?page=order&id=<?php echo $value['id']; ?>" class="add-cart">+ Mượn sách</a> -->
                        <h5><?php echo $value['giaTien']; ?>VNĐ</h5>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        <div class="col-lg-12">
            <div class="col-lg-2" style="background-color: green;">
                <span style="color: white;">Sách tham khảo</span>
            </div>
            <hr />
        </div>
        <?php  
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";
            foreach ($result6 as $key => $value) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $value['anh']; ?>">
                        <img src="assets/img/books/<?php echo $value['anh']; ?>" width="200px" height="300px" alt="">
                    <div class="product__item__text">
                        <h6><?php echo $value['tenSach']; ?></h6>
                        <!-- <a href="index.php?page=order&id=<?php echo $value['id']; ?>" class="add-cart">+ Mượn sách</a> -->
                        <h5><?php echo $value['giaTien']; ?>VNĐ</h5>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
        <div class="col-lg-12">
            <div class="col-lg-2" style="background-color: green;">
                <span style="color: white;">Sách toán</span>
            </div>
            <hr />
        </div>
        <?php  
        // echo "<pre>";
        // print_r($result);
        // echo "<pre>";
            foreach ($result7 as $key => $value) {
        ?>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/<?php echo $value['anh']; ?>">
                        <img src="assets/img/books/<?php echo $value['anh']; ?>" width="200px" height="300px" alt="">
                        <!-- <span class="label">New</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                        </ul> -->
                    </div>
                    <div class="product__item__text">
                        <h6><?php echo $value['tenSach']; ?></h6>
                        <!-- <a href="index.php?page=order&id=<?php echo $value['id']; ?>" class="add-cart">+ Mượn sách</a> -->
                        <h5><?php echo $value['giaTien']; ?>VNĐ</h5>
                    </div>
                </div>
            </div>
        <?php
            }
        ?>
    </div>
            <?php
        }
    ?>
    
</div>

<div class="footer" style="background-color: black; display: flex;">
            <?php
                 include_once 'layout/footer.php';
            ?>
        </div>

<?php       
    }
    else{
        ?>
    <div class="container-fluid">
        <div class="row"> 
            <div class="col-lg-2" >
        </div>
            <div class="col-lg-10" >
                <div class="dashbroad-content p-sm-4 bg-white rounded-sm shadow-sm">
                    <div class="row">
                        <div class="dashbroad-icon col-lg-3 col-md-3">
                            <i class="fas fa-user-tie" style="color: blue"></i> 
                        </div>
                        <div class="dashbroad-title col-lg-7 col-md-7">Member</div>
                        <div class="dashbroad-number">
                            <?php
                              if ($resultCountMember[0]['COUNT(maCanBo)'] < 100){
                                echo  $resultCountMember[0]['COUNT(maCanBo)'];
                              }
                              else{
                                ?>
                                <span title="<?php echo  $resultCountMember[0]['COUNT(maCanBo)']; ?>">99+</span>
                                <?php 
                              }
                              ?> 
                        </div>
                    </div>
                    
                    
                </div>
                <div class="dashbroad-content p-sm-4 bg-white rounded-sm shadow-sm">
                    <div class="row">
                        <div class="dashbroad-icon col-lg-3">
                            <i class="fas fa-book-reader" style="color: yellowgreen;"></i>
                        </div>
                        <div class="dashbroad-title col-lg-7">Reader</div>
                        <div class="dashbroad-number">
                             <?php
                              if ($resultCountReader[0]['COUNT(maThe)'] < 100){
                                echo  $resultCountReader[0]['COUNT(maThe)'];
                              }
                              else{
                                ?>
                                <span title="<?php echo  $resultCountReader[0]['COUNT(maThe)']; ?>">99+</span>
                                <?php 
                              }
                              ?> 
                        </div>
                    </div>
                    
                    
                </div>
                <div class="dashbroad-content p-sm-4 bg-white rounded-sm shadow-sm">
                    <div class="row">
                        <div class="dashbroad-icon col-lg-3">
                            <i class="fas fa-book" style="color:gold;"></i>
                        </div>
                        <div class="dashbroad-title col-lg-7">Book</div>
                        <div class="dashbroad-number">
                            <?php
                              if ($resultCountBook[0]['COUNT(maSach)'] < 100){
                                echo  $resultCountBook[0]['COUNT(maSach)'];
                              }
                              else{
                                ?>
                                <span title="<?php echo  $resultCountBook[0]['COUNT(maSach)']; ?>">99+</span>
                                <?php 
                              }
                              ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <?php
    }
 ?>