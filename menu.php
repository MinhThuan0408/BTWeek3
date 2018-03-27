<html>
<head>
<title>Bai 4 </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
    <p id="thucdon"> Thuc don da chon <br> </p>
    <div class="container">
        <div class="col-md-4">
    <p >Mon khai vi: </p>
    <?php
$mkv= $_POST['mon_khai_vi'];
foreach ($mkv as $x)
{
    echo $x."<br>";
}
?>
        </div>            
        <div class="col-md-4">
    <p >Mon chinh: </p>
<?php
$mc= $_POST['mon_chinh'];
foreach ($mc as $y)
{
    echo $y."<br>";
}
?>
           </div>            
        <div class="col-md-4">
    <p >Mon trang mieng: </p>
<?php
$mtr= $_POST['mon_trang_mieng'];
foreach ($mtr as $z)
{
    echo $z."<br>";
}
?>
    </div>            
    </div>
<style>
    .container{
        border: 1px solid black;
    }
    .col-md-4{
        border-right: 1px solid black;
    }
</style>
</html>


