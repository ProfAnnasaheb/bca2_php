<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<form action="" method="post">                                                                        
    <input type="text" name="str">
    <input type="submit" name="submit" value="check">
    </form>
</body>
</html>
<?php
    if (isset($_POST['submit']))
    {
        $name=$_POST['str'];
       
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$name))  {  
            $ErrMsg = "Only websites names allowded";  
                     echo $ErrMsg;  
        } else {  
            echo "Valid-".$name;  
        }
        
       
        
    }
    

?>