
<!DOCTYPE html>
<html>
<head>
      <title>Read Student information</title>
</head>
<body>
    <form method="post" action="display.php">
    <input type="text" name="roll" placeholder="Enter Roll"><br>
    <input type="text" name="name" placeholder="Enter Name"><br>
    <input type="text" name="class" placeholder="Enter Class"><br>
    <input type="text" name="contact" placeholder="Enter Contact"><br>
    <input type="email" name="emailid" placeholder="Enter Email"><br>
    <label for="state">Choose a state:</label>
    <select name="state" id="state">
    <option value="Maharashtra">Maharashtra</option>
    <option value="Karanataka">Karanataka</option>
    <option value="Delhi">Delhi</option>
    </select>
    <input type="submit" name="submit">
    </form>
    </body>
</html>

