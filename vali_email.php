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
        $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^"; 
        if (!preg_match ($pattern, $name) ) {  
            $ErrMsg = "Email is not valid.";  
                     echo $ErrMsg;  
        } else {  
            echo "Valid-".$name;  
        }
        
       
        
    }
    

?>