<!DOCTYPE html>
<html>
<body>
 <center><b><?php
 
 echo "Logged out successfully";

 session_start();
 session_destroy();

?></b></center>

 
</body>
</html>