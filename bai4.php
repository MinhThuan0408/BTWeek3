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
<form action="menu.php" method="POST">
    <p id="thucdon"> Thuc don <br> </p>
    <div class="container">
        <div class="col-md-4">
    <p >Mon khai vi: </p>
    <select name="mon_khai_vi[]" size="4" multiple="multiple">
                         <option value="Goi ngo sen">Goi ngo sen</option>
                         <option value="Salad ca ngu">Salad ca ngu</option>
                         <option value="Bo tron rau thom">Bo tron rau thom</option>
                         <option value="Thit nguoi">Thit nguoi</option>
                     </select>
        </div>            
        <div class="col-md-4">
    <p >Mon chinh: </p>
    <select class="col-md-4" name="mon_chinh[]" multiple="multiple">
                         <option value="Bo ham">Bo ham</option>
                         <option value="Ca chem sot ca">Ca chem sot ca</option>
                         <option value="Tom rang me">Tom rang me</option>
                         <option value="Cua sot me">Cua sot me</option>
                     </select>
           </div>            
        <div class="col-md-4">
    <p >Mon trang mieng: </p>
    <select class="col-md-4" name="mon_trang_mieng[]" size="3" multiple="multiple">
                         <option value="Che hat sen">Che hat sen</option>
                         <option value="Banh flan">Banh flan</option>
                         <option value="Rau cau">Rau cau</option>
                     </select>
    </div>            
    </div>
 <button type="submit" value="submit">Submit</button> 
</form>
<style>
    #thucdon{
        text-align: center;
    }
    button{
       margin-top: 20px;
       margin-left: 600px;
    }
</style>
</html>

