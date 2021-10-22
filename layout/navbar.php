<div class="border-bottom">
	<ul class="list-inline nav navbar-nav">
		<?php
		if ($_SESSION['quyenHan'] == "admin") {
			?>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-home text-success mr-sm-4"></i><a href="index.php?page=dashbroad" class=" text-decoration-none text-dark">Trang chủ</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-layer-group text-success mr-sm-4"></i> <a href="index.php?page=list-powers" class=" text-decoration-none text-dark">Quản lý phân quyền</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-user-circle text-success mr-sm-4"></i> <a href="index.php?page=list-accounts" class=" text-decoration-none text-dark">Quản lý tài khoản</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-user-tie text-success mr-sm-4"></i> <a href="index.php?page=list-members" class=" text-decoration-none text-dark">Quản lý nhân viên</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item " >
				<i class="fas fa-book-reader text-success mr-sm-4"></i> <a href="index.php?page=list-readers" class=" text-decoration-none text-dark">Quản lý độc giả</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-book text-success mr-sm-4"></i><a class=" dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý sách</a>
				<div class="dropdown-menu text-decoration-none text-dark " aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-books">Sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-nxb">Nhà xuất bản</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-categorys">Thể loại</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-storages">Kho sách</a>
				</div>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-exchange-alt text-success mr-sm-4"></i><a class=" dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý mượn trả</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-cards">Thẻ mượn</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-books">Mượn sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-return-books">Trả sách</a>
				</div>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fab fa-deezer text-success mr-sm-4"></i><a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Thống kê
				</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=op-book">Thống kê số lượng sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=op-reader">Thống kê số lượng độc giả</a>
				</div>
			</li>
			<?php
		}
		elseif ($_SESSION['quyenHan'] == "manager") {
			?>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-home text-success mr-sm-4"></i><a href="index.php?page=dashbroad" class=" text-decoration-none text-dark">Trang chủ</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-user-tie text-success mr-sm-4"></i> <a href="index.php?page=list-members" class=" text-decoration-none text-dark">Quản lý nhân viên</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item " >
				<i class="fas fa-book-reader text-success mr-sm-4"></i> <a href="index.php?page=list-readers" class=" text-decoration-none text-dark">Quản lý độc giả</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-book text-success mr-sm-4"></i><a class=" dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý sách</a>
				<div class="dropdown-menu text-decoration-none text-dark " aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-books">Sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-nxb">Nhà xuất bản</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-categorys">Thể loại</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-storages">Kho sách</a>
				</div>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-exchange-alt text-success mr-sm-4"></i><a class=" dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý mượn trả</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-cards">Thẻ mượn</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-books">Mượn sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-return-books">Trả sách</a>
				</div>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fab fa-deezer text-success mr-sm-4"></i><a class="dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					Thống kê
				</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=op-book">Thống kê số lượng sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=op-reader">Thống kê số lượng độc giả</a>
				</div>
			</li>
			<?php
		}
		elseif ($_SESSION['quyenHan'] == "member") {
			?>
			<li class="list-inline-item col-form-label list-group-item " >
				<i class="fas fa-book-reader text-success mr-sm-4"></i> <a href="index.php?page=list-readers" class=" text-decoration-none text-dark">Độc giả</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-home text-success mr-sm-4"></i> <a href="index.php?page=list-books" class=" text-decoration-none text-dark">Sách</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-exchange-alt text-success mr-sm-4"></i><a class=" dropdown-toggle text-decoration-none text-dark" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Quản lý mượn trả</a>
				<div class="dropdown-menu text-decoration-none text-dark" aria-labelledby="navbarDropdown">
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-cards">Thẻ mượn</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-borrow-books">Mượn sách</a>
					<a class="dropdown-item text-decoration-none text-dark" href="index.php?page=list-return-books">Trả sách</a>
				</div>
			</li>
			<?php
		}
		else{
			?>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-home text-success mr-sm-4"></i><a href="index.php?page=dashbroad" class=" text-decoration-none text-dark">Trang chủ</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item " >
				<i class="fas fa-id-card text-success mr-sm-4"></i> <a href="index.php?page=list-borrow-cards&method=reader&id=<?php echo $_SESSION['account']; ?>" class=" text-decoration-none text-dark">Thẻ mượn</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-exchange-alt text-success mr-sm-4"></i> <a href="index.php?page=list-borrow-books&method=reader&id=<?php echo $_SESSION['account']; ?>" class=" text-decoration-none text-dark">Mượn sách</a>
			</li>
			<li class="list-inline-item col-form-label list-group-item ">
				<i class="fas fa-exchange-alt text-success mr-sm-4"></i> <a href="index.php?page=list-return-books&method=reader&id=<?php echo $_SESSION['account']; ?>" class=" text-decoration-none text-dark">Trả sách</a>
			</li>
			<?php
		}
		?>
	</ul>
</div>