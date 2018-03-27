<form method="POST">
    <p>Name:       <input type="text" name="ten" ></p> <br> 
    <p>E_mail:     <input type="text" name="mail" ></p> <br>
    <p>Website:    <input type="text" name="web" ></p> <br>
    <p>Comment:    <textarea rows="5" cols="20" name="area"></textarea></p> <br> 
    <p>Gender:    <input type="radio" name="checkbox" value="Female">Female
     <input type="radio" name="checkbox" value="Male">Male</p> <br>
    <button type="submit" value="submit">Submit</button>    
</form>
<?php
if($_POST==NULL)
{}
 else {
  echo "Name: ".$_POST['ten']."<br>";
  echo "Email: ".$_POST['mail']."<br>";
  echo "Website: ".$_POST['web']."<br>";
  echo "Comment: ".$_POST['area']."<br>";
  echo "Gender: ".$_POST['checkbox']."<br>";
}
?>


