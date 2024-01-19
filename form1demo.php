<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Demo</title>
</head>
<body>
    <form action="dbdemo.php" method="post">

        Enter Name:
        <input type="text" name="nm">

        <br><br>

        Enter Mobile No:
        <input type="text" name="mo" maxlength="10">

        <br><br>
        Enter Gender:
        <select name="gender">
            <option>Male</option>
            <option>Female</option>
        </select>

        <br><br>

        <input type="submit" value="send">
    </form>
</body>
</html>