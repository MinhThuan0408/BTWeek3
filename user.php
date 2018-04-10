<?php
include './config.php';
?>
<html>
    <head>
        <meta charset="utf-8">
    </head>
<?php
    echo("Danh sach User: ")."<br>";
    foreach ($users as $Item)
                
        echo ("Username: ".$Item['username']."<br>");
        echo ("Password: ".$Item['password']."<br>");
    var_dump($users);die();
        
  ?>
</html>