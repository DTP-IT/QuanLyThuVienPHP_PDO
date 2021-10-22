
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
                    <form action="index.php?page=book-year&method=book-year" method="POST">
                     <table>
                        <tr>
                         <td> Từ năm</td>
                         <td><input type="year" name="startYear" value="<?php if(isset($_POST['btnBookYear'])){echo $_POST['startYear'];}?>" /></td>
                     </tr>
                     <tr>
                         <td> đến năm</td>
                         <td><input type="year" name="finishYear" value="<?php if(isset($_POST['btnBookYear'])){echo $_POST['finishYear'];}?>" /></td>
                     </tr>
                     <tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-success" data-toggle="button" aria-pressed="false" autocomplete="off" name="btnBookYear">Thống kê</button>
                        </td>
                    </tr>
                </table>   
            </form>
            <h2 class="text-center">Sách được mượn</h2>
   <br /><br />
   <div id="book-month-borrow"></div>
   <h2 class="text-center">Sách được trả</h2>
   <br /><br />
   <div id="book-month-return"></div>
  </div>
<?php 
if (isset($resultBYear)) {
$chart_data_borrow = '';
foreach ($resultBYear as $key => $value) {
    $chart_data_borrow .= "{ namMuon:'".$value["namMuon"]."', soLuong:".$value["soLuong"]."}, ";
}
$chart_data_borrow = substr($chart_data_borrow, 0, -2);
}
if (isset($resultRYear)) {
    $chart_data_return = '';
    foreach ($resultRYear as $key => $value) {
        $chart_data_return .= "{ namTra:'".$value["namTra"]."', soLuong:".$value["soLuong"]."}, ";
    }
    $chart_data_return = substr($chart_data_return, 0, -2);

}
?>
<script>
borrow_date = {
    data:[<?php echo $chart_data_borrow; ?>],
    xkey:'namMuon',
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
    xkey:'namTra',
    ykeys:['soLuong'],
    labels:['thangTra','namTra','soLuong'],
    hideHover:'auto',
    stacked:true,
    behaveLikeLine: true,
    resize: true,
    pointFillColors:['#ffffff'],
    pointStrokeColors: ['black'],
    lineColors:['green']
  };
borrow_date.element = 'book-month-borrow';
Morris.Area(borrow_date);
return_date.element = 'book-month-return';
Morris.Area(return_date);
</script>   
</div>
</div>
</div>
</div>
</div>
