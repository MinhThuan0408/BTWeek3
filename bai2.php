<form method="POST">
    <input type="text" name="tu_khoa" placeholder="Tu Khoa..." > 
    <button type="submit" value="submit">Tim</button>
</form>
<?php
if($_POST ==NULL)
{}
else
echo "Ket qua tim kiem voi tu khoa: ".$_POST['tu_khoa'];
?>