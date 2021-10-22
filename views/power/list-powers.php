<!-- breadcrumb -->
    <div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
        <div class="card-title">
            <i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Danh sách phân quyền</span> </a>
        </div>
        <div class="justify-content-end">
            <ol class="d-flex col py-1 my-0 bg-transparent">
                <li class="breadcrumb-item active" aria-current="page">Quản lý phân quyền</li>
                <li class="breadcrumb-item active" aria-current="page"><a href="index.php">Trang chủ</a></li>
            </ol>
        </div>
    </div>
    <!-- breadcrumb -->
    <div class="my-sm-4">
        <div class="row">
            <div class="col-md-12 ">
                <div class="p-sm-4 bg-white rounded-sm shadow-sm">
                    <div class="my-sm-4">   
                        
                    </div>
                    <div class="my-md-4 table-responsive">  
                        <table class="table table-hover" id="example" class="display">
                            <thead>
                               <th>ID</th>
                               <th>Tài khoản</th>
                               <th>Họ và tên</th>
                               <th>Quyền hạn</th>
                               <th></th>

                           </thead>
                           <tbody id="myTable">
                              <?php

                              foreach ($result as $key => $value) {
                                ?>
                                <tr>
                                    <td><?php echo $value['id']?></td>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php if($value['doc_gia_id'] != NULL) {echo $value['hoTen'];}else {echo $value['tenCanBo'];} ?></td>
                                    <td><?php echo $value['level']?></td>
                                    <td>
                                        <?php 
                                        if($value['level'] == NULL) {
                                        ?>
                                        <a href="index.php?page=add-power&method=add&id=<?php echo $value['id'];?>">Thêm quyền</a>|
                                            <?php
                                        }
                                         ?>
                                        
                                        <a href="index.php?page=update-power&method=edit&id=<?php echo $value['id'];?>">Sửa</a>|
                                        <a href="index.php?page=list-powers&method=destroy&id=<?php echo $value['id'];?>" onclick ="return confirm('Bạn có chắc chắn muốn xóa tài khoản?')">Xóa</a>
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