<!DOCTYPE html>
<html lang="en">
<head>
       <title>Document</title>
       
</head>
<body>
        <h2>Reactangle area</h2>
       <form method="post">
        <input type="text" name="length"><br>
        <input type="text" name="width"><br>
        <input type="submit" name="rect_submit" value="Calculate Rect">
       </form>
       <h2>Triangle area</h2>
       <form method="post">
        <input type="text" name="base"><br>
        <input type="text" name="height"><br>
        <input type="submit" name="tri_submit" value="Calculate Tri">
       </form>
</body>
</html>
<?php
       function rect_area($length,$width)
       {
              return $length*$width;
       }
       function tri_area($base,$height)
       {
              return 0.5*$base*$height;
       }
       if(isset($_POST['rect_submit']))
       {
              $length=$_POST['length'];
              $width=$_POST['width'];
              $rect_area=rect_area($length,$width);
              echo "$rect_area";

       }
       if(isset($_POST['tri_submit']))
       {
              $base=$_POST['base'];
              $height=$_POST['height'];
              $tri_area=tri_area($base,$height);
              echo "$tri_area";

       }

?>