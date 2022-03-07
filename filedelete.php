<!DOCTYPE html>
<html>
<body>
<center><b>
<?php      
$deletefile=unlink('C:\Users\anton\Desktop\phfile.txt');    
if($deletefile)
{  
echo "File deleted.";    
}
else
{  
echo "Unable to Delete the File.";    
}  
?> 
</b></center> 

 
</body>
</html>