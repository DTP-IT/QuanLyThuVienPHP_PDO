<?php
if (isset($_POST['btnAdd'])) {
	$reader = new ReaderController();
	$reader->reader();
}
?>
<!-- breadcrumb -->
	<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
		<div class="card-title">
			<i class="fas fa-user text-success mr-sm-4"></i> <a href="#downs" class=" text-decoration-none text-dark"><span class="font-weight-bold text-uppercase">Thêm độc giả</span> </a>
		</div>
		<div class="justify-content-end">
			<ol class="d-flex col py-1 my-0 bg-transparent">
				<li class="breadcrumb-item active" aria-current="page">Thêm độc giả</li>
				<li class="breadcrumb-item active" aria-current="page"><a href="index.php?page=list-readers">Quản lý độc giả</a></li>
				<li class="breadcrumb-item active" aria-current="page"><a href="index.php">Trang chủ</a></li>
			</ol>
		</div>
	</div>
	<!-- breadcrumb -->
	<div class="my-sm-4">
		<div class="row">
			<div class="col-md-12 ">
				<div class="p-sm-4 bg-white rounded-sm shadow-sm">
					<div class="my-md-4 table-responsive" >  
						<form action="index.php?page=add-reader&method=add" method="POST" enctype="multipart/form-data" name="register" onsubmit="return registerReader();" >
							<center>
								<h2>NHẬP THÔNG TIN ĐỘC GIẢ</h2>
								<table border="1" class="table table-hover">
									<tr>
										<td>Mã độc giả<span style="color: red;">*</span></td>
										<td>
											<input type="text" name="id" id="id" size="20" value="<?php if(isset($_POST['btnAdd'])){echo $_POST['id'];} ?>" />
											<br /> <span id="error-id" style="color: red;"></span>
										</td>
									</tr>
									<tr>
										<td>Họ và tên <span style="color: red;">*</span></td>
										<td>
											<input type="text" name="name" id="name" size="20" value="<?php if(isset($_POST['btnAdd'])){echo $_POST['name'];} ?>" />
											<br /> <span id="error-name" style="color: red;"></span>
										</td>
									</tr>
									<tr>
										<td>Ngày sinh</td>
										<td><input type="date" name="dOB" size="20" value="<?php if(isset($_POST['btnAdd'])){echo $_POST['dOB'];} ?>" ></td>
									</tr>
									<tr>
										<td>Giới tính</td>
										<td><input type="radio" name="gender" id="nam" size="20"  value="nam" <?php if(isset($_POST['btnAdd']) && isset($_POST['gender'])){if($_POST['gender'] == 'nam'){ echo 'checked="checked"';}} ?>/><label for="nam">Nam</label>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="gender" id="nu" size="20"  value="nữ" <?php if(isset($_POST['btnAdd']) && isset($_POST['gender'])){if($_POST['gender'] == 'nữ'){ echo 'checked="checked"';}}?>/><label for="nu">Nữ</label></td>
									</tr>
									<tr>
										<td>Địa chỉ</td>
										<td>
											<textarea name="address" cols="20" rows="4"><?php if(isset($_POST['btnAdd'])){echo $_POST['address'];} ?></textarea>
										</td>
									</tr>
									<tr>
										<td>Ảnh</td>
										<td><input type="file" name="avatar" size="20" ></td>
									</tr>
									<tr>
										<td>Số điện thoại <span style="color: red;">*</span></td>
										<td>
											<input type="text" id="phone" name="phone" size="20" value="<?php if(isset($_POST['btnAdd'])){echo $_POST['phone'];} ?>" />
											<br /> <span id="error-phone" style="color: red;"></span>
										</td>
									</tr>
									<tr>
										<td>Email <span style="color: red;">*</span></td>
										<td>
											<input type="email" name="email" id="email" size="20" value="<?php if(isset($_POST['btnAdd'])){echo $_POST['email'];} ?>" />
											<br /> <span id="error-email" style="color: red;">
                                        <?php
                                        if (isset($_POST['btnAdd'])) {
                                        	if (isset($_SESSION['error-email'])) {
                                            echo $_SESSION['error-email'];
                                        }
                                        }
                                        
                                        ?>

                                    </div></td>
									</tr>
									<tr>
										<td>Trình độ</td>
										<td><select name="level">
											<option value=""  <?php if (isset($_POST['btnAdd']) && $_POST['level'] =='') {
													echo 'selected = "selected"';
												}?>>---Vui lòng chọn---</option>
											<option value="Cao đẳng" <?php if (isset($_POST['btnAdd']) && $_POST['level'] =='Cao đẳng') {
													echo 'selected = "selected"';
												}?>>Cao đẳng</option>
											<option value="Đại học" <?php if (isset($_POST['btnAdd']) && $_POST['level'] =='Đại học') {
													echo 'selected = "selected"';
												}?>>Đại học</option>
											<option value="Thạc sĩ" <?php if (isset($_POST['btnAdd']) && $_POST['level'] =='Thạc sĩ') {
													echo 'selected = "selected"';
												}?>>Thạc sĩ</option>
											<option value="Tiến sĩ" <?php if (isset($_POST['btnAdd']) && $_POST['level'] =='Tiến sĩ') {
													echo 'selected = "selected"';
												}?>>Tiến sĩ</option>
										</select></td>
									</tr>
									
									<tr>
										<td>Khoa</td>
										<td>
											<select name="facultyID" id="facultyID" class="facultyID">
												<?php
													foreach ($resultFaculty as $key => $value) {
												?>
												<option value="<?php echo $value['maKhoa'];?>" <?php if (isset($_POST['btnAdd']) && $_POST['facultyID'] == $value['maKhoa']){echo 'selected = "selected"';} ?>>
													<?php echo $value['tenKhoa']; ?>	
												</option>
												<?php
													}
												?>
											</select>
											
										</td>
									</tr>
									<tr >
										<td>Lớp</td>
										<td id="resultClass"></td>
									</tr>
									<tr>
										<td>Khóa học</td>
										<td><input type="text" name="timeStudy" size="20" value="<?php if(isset($_POST['btnAdd'])){echo $_POST['timeStudy'];} ?>" /></td>
									</tr>
									<tr>
										<td>Ngày cấp thẻ</td>
										<td><input type="date" name="timeStart" size="20" value="<?php if(isset($_POST['btnAdd'])){echo $_POST['timeStart'];} ?>" / ></td>
									</tr>
									<tr>
										<td>Hạn dùng thẻ</td>
										<td><input type="date" name="timeFinish" size="20" value="<?php if(isset($_POST['btnAdd'])){echo $_POST['timeFinish'];} ?>" / ></td>
									</tr>
									<td rowspan="1" colspan="2">
										<center>
											<button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnAdd">
												Thêm
											</button>&nbsp&nbsp&nbsp&nbsp <button type="reset" class="btn btn-warning">Nhập lại</button> 
										</center>
									</td>
								</table>
							</center>
						</form>
						<div>
							<a href="index.php?page=list-readers"><button class="btn btn-transparent text-dark" style="border:2px solid rgb(19, 236, 11)">Trở về</button></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>