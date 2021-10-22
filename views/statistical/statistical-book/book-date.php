
<!-- breadcrumb -->
<div class="header-title-content d-flex py-1 my-0" style="justify-content: space-between;">
    <div class="card-title">
        <span class="text-success" style="font-size: 28px;">THỐNG KÊ SỐ LƯỢNG SÁCH</span>
    </div>
    <div class="justify-content-end">
        <ol class="d-flex col py-1 my-0 bg-transparent">
            <li class="breadcrumb-item"><a href="../logout.php">Đăng Xuất</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thống kê</li>
        </ol>
    </div>
</div>
<!-- breadcrumb -->
<div class="my-sm-4">
    <div class="row">
        <div class="col-md-12 ">
            <div class="p-sm-4 bg-white rounded-sm shadow-sm">                
                <div class="my-md-4 table-responsive">  
                    <form action="index.php?page=book-date&method=book-date" method="POST">
                       <table class="table table-hover">
                        <tr>
                           <td> Từ ngày</td>
                           <td><input type="date" name="startDate" value="<?php if(isset($_POST['btnBookDate'])){echo $_POST['startDate'];}?>" /></td>
                       </tr>
                       <tr>
                           <td> đến ngày</td>
                           <td><input type="date" name="finishDate" value="<?php if(isset($_POST['btnBookDate'])){echo $_POST['finishDate'];}?>" /></td>
                       </tr>
                       <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnBookDate">Thống kê</button>
                        </td>
                    </tr>
                </table>   
            </form>
            <br /><br />
  <div class="container" style="width:900px;">
   <h2 class="text-center">Sách được mượn</h2>
   <br /><br />
   <div id="book-date-borrow"></div>
   <h2 class="text-center">Sách được trả</h2>
   <br /><br />
   <div id="book-date-return"></div>
  </div>
<?php 
if (isset($resultBDate)) {
$chart_data_borrow = '';
foreach ($resultBDate as $key => $value) {
    $chart_data_borrow .= "{ ngayMuon:'".$value["ngayMuon"]."', soLuong:".$value["soLuong"]."}, ";
}
$chart_data_borrow = substr($chart_data_borrow, 0, -2);
}
if (isset($resultRDate)) {
    $chart_data_return = '';
    foreach ($resultRDate as $key => $value) {
        $chart_data_return .= "{ ngayTra:'".$value["ngayTra"]."', soLuong:".$value["soLuong"]."}, ";
    }
    $chart_data_return = substr($chart_data_return, 0, -2);
}
?>
<script>
borrow_date = {
    data:[<?php echo $chart_data_borrow; ?>],
    xkey:'ngayMuon',
    ykeys:['soLuong'],
    labels:['soLuong'],
    hideHover:'auto',
    stacked:true,
    behaveLikeLine: true,
    resize: true,
    pointFillColors:['#ffffff'],
    pointStrokeColors: ['black'],
    lineColors:['red']
  };
return_date = {
    data:[<?php echo $chart_data_return; ?>],
    xkey:'ngayTra',
    ykeys:['soLuong'],
    labels:['soLuong'],
    hideHover:'auto',
    stacked:true,
    behaveLikeLine: true,
    resize: true,
    pointFillColors:['#ffffff'],
    pointStrokeColors: ['black'],
    lineColors:['green']
  };
borrow_date.element = 'book-date-borrow';
Morris.Area(borrow_date);
return_date.element = 'book-date-return';
Morris.Area(return_date);
</script>
</div>
</div>
</div>
</div>
</div>
