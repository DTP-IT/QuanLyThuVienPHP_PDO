
    <!-- breadcrumb -->
    <div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
        <div class="card-title">
            <i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Danh sách tài khoản</span> </a>
        </div>
        <div class="justify-content-end">
            <ol class="d-flex col py-1 my-0 bg-transparent">
                <li class="breadcrumb-item active" aria-current="page">Quản lý tài khoản</li>
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
                            <a href="index.php?page=add-account&method=add"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Thêm tài khoản</button></a>
                        </div>
                    </div>
                    <div class="my-md-4 table-responsive">  
                        <table class="table table-hover" id="example" class="display">
                            <thead>
                               <th>ID</th>
                               <th>Tài khoản</th>
                               <th>Mật khẩu</th>
                               <th>Level</th>
                               <th></th>
                           </thead>
                           <tbody id="myTable">
                              <?php
                                foreach ($result as $key => $value) {
                              ?>
                                <tr>
                                    <td><?php echo $value['id']?></td>
                                    <td><?php echo $value['user']?></td>
                                    <td><?php echo $value['passwd']?></td>
                                    <td><?php echo $value['level']?></td>
                                    <td>
                                        <a href="index.php?page=update-account&method=edit&id=<?php echo $value['id'];?>">Sửa</a>|
                                        <a href="index.php?page=list-accounts&method=destroy&id=<?php echo $value['id'];?>" onclick ="return confirm('Bạn có chắc chắn muốn xóa tài khoản?')">Xóa</a>
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
