<!-- breadcrumb -->
    <div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
        <div class="card-title">
             <i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Danh sách nhân viên</span> </a>
        </div>
        <div class="justify-content-end">
            <ol class="d-flex col py-1 my-0 bg-transparent">
                <li class="breadcrumb-item active" aria-current="page">Quản lý nhân viên</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Trang chủ</a></li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="my-sm-4">
        <div class="row">
            <div class="col-md-12 ">
                <div class="p-sm-4 bg-white rounded-sm shadow-sm">
                    <div>
                        <div>
                            <a href="index.php?page=add-member"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Thêm nhân viên</button></a>
                        </div>
                    </div>
                    <div class="my-md-4 table-responsive">  
                        <table class="table table-hover" id="example" class="display">
                            <thead>
                             <th>Mã nhân viên</th>
                             <th>Họ và tên</th>
                             <th>Giới tính</th>
                             <th>Ngày sinh</th>
                             <th>Địa chỉ</th>
                             <th>Ảnh</th>
                             <th>Số điện thoại</th>
                             <th>Email</th>
                             <th>Chức vụ</th>
                             <th></th>

                         </thead>
                         <tbody id="myTable">
                          <?php
                          
                          foreach ($result as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $value['maCanBo']?></td>
                                <td><?php echo $value['tenCanBo']?></td>
                                <td><?php echo $value['gioiTinh']?></td>
                                <td><?php echo $value['namSinh']?></td>
                                <td><?php echo $value['diaChi']?></td>
                                <td><?php 
                                    $anh="assets/img/members/".$value['anh'];
                                    $anh="<img src='$anh' width='50px'>";
                                    echo $anh;?>
                                </td>

                                <td><?php echo $value['SDT']?></td>
                                <td><?php echo $value['email']?></td>
                                <td><?php echo $value['quyenHan']?></td>
                                <td>
                                    <a href="index.php?page=update-member&method=edit&id=<?php echo $value['maCanBo'];?>">Sửa</a>|
                                    <a href="index.php?page=list-members&method=destroy&id=<?php echo $value['maCanBo'];?>" onclick ="return confirm('Bạn có chắc chắn muốn xóa thông tin nhân viên?')">Xóa</a>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
