<!DOCTYPE html>
<html>
<body>
<center><form style="background-image: repeating-linear-gradient(45deg, rgba(0,0,0,0.05) 0px, rgba(0,0,0,0.05) 2px,transparent 2px, transparent 4px),linear-gradient(0deg, rgb(70, 143, 234),rgb(187, 235, 205))" method="post" action="logout.php"></center>
<center><input style="background-image: repeating-linear-gradient(45deg, rgba(0,0,0,0.05) 0px, rgba(0,0,0,0.05) 2px,transparent 2px, transparent 4px),linear-gradient(0deg, rgb(70, 143, 234),rgb(187, 235, 205))" type="submit" value="Logout"></center> 
<br>
<center><b>
<?php
$uid = $_POST['userid'];
$pw = $_POST['password'];
 
if($uid == 'antonychristos83' and $pw == 'Root@123')
{    
    session_start();
    $_SESSION['sid']=session_id();
    echo "Logged in successfully";
}
else{
    echo "invalid password or username";
}
?>
</b></center>


</body>
</html>