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
    if (isset($_POST['submit'])&& !empty($_POST['str']))
    {
        $name=$_POST['str'];
        echo $name;
        
    }
    else
    {
        echo "enter something";

    }

?>