<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="https://dxc-demo-2.herokuapp.com/test.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br>
        <br>
        <label for="emailAddress">Email Address:</label>
        <input type="text" id="emailAddress" name="emailAddress">
        <br>
        <br>
        <br>
        <input id="submitted" type="hidden" name="submitted" value="submitted" />
        <input type="submit" value="Submit">
    </form>
</body>
</html>
