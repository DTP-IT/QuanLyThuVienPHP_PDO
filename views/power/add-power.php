<?php
if (isset($_POST['btnAdd'])) {
$power = new PowerController();
$power->power();
}
?>
<!-- breadcrumb -->
<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
	<div class="card-title">
		<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Phân quyền tài khoản</span> </a>
	</div>
	<div class="justify-content-end">
		<ol class="d-flex col py-1 my-0 bg-transparent">
			<li class="breadcrumb-item active" aria-current="page">Thêm quyền</li>
			<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-powers">Quản lý phân quyền</a></li>
			<li class="breadcrumb-item active" aria-current="page"><a href="index.php">Trang chủ</a></li>
		</ol>
	</div>
</div>
<!-- breadcrumb -->
<div class="my-sm-4">
	<div class="row">
		<div class="col-md-12 ">
			<div class="p-sm-4 bg-white rounded-sm shadow-sm">
				<div class="my-md-4 table-responsive">
                <?php
                	if(isset($errorPower)) {
                	?>
                	<div class="alert alert-danger">
                		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                		<strong>Lỗi</strong> <?php echo $errorPower; ?>
                	</div>
                	<?php
                	}
                    foreach ($resultID as $key => $value) {
                ?>
					<form name="" action="index.php?page=add-power&method=add" method="POST" name="register" onsubmit="return registerPower();">
						<center>
							<h2>NHẬP THÔNG TIN PHÂN QUYỀN</h2>
							<table border="1" class="table table-hover">
								<tr>
                            <td>ID</td>
                            <td><input type="number" name="id" id="id" size="20" value="<?php if(isset($_POST['id'])) { echo $_POST['id'];} else {echo $_GET['id'];}  ?>" readonly/><p style="color: red;" id="error-passwd"></p></td>
                        </tr>
                        <tr>
                            <td>User <span style="color: red;">*</span></td>
                            <td><input list="brow" name="user" size="20" id="user" placeholder="Search...." readonly required value="<?php           
                                echo $value['user'];
                                ?>" />
                                <datalist id="brow">
                                    <?php 
                                    
                                    foreach ($resultIDMember as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value['maCanBo']; ?>"></option>
                                    <?php
                                    }
                                    foreach ($resultIDreader as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value['maThe']; ?>"></option>
                                    <?php
                                    }
                                     ?>
                                </datalist>
                            </td>
                        </tr>
						<tr>
							<td>Quyền hạn <span style="color: red;">*</span></td>
							<td>
								<select name="power">
									<option value="admin">Admin</option>
									<option value="manager">Manager</option>
									<option value="member">Member</option>
									<option value="reader">Reader</option>
								</select>
							</td>
						</tr>
                        <tr>
                            <td rowspan="1" colspan="2">
                            <center>
                                <button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnAdd">
                                    Thêm
                                </button>&nbsp&nbsp&nbsp&nbsp <button type="reset" class="btn btn-warning">Nhập lại</button> 
                            </center>
                        </td>
                        </tr>
						
							</table>
						</center>
					</form>
                <?php 
                    }
                 ?>
					<div>
						<a href="index.php?page=list-powers"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>