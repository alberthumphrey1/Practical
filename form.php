<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
</head>
<body>
<form action="db_posting.php" method=”POST”>
    <label for="fname">First Name</label><br>
    <input type="text" id="fname" placeholder="Enter First Name"><br>

    <label for="lname">Last Name</label><br>
    <input type="text" id="lname" placeholder="Last Name"><br>

    <label for="email">Email Address</label><br>
    <input type="email" id="email" placeholder="Email"><br>

    <label for="phone">Phone Number</label><br>
    <input type="text" id="phone" placeholder="Phone"><br>

    <label for="location">Location</label><br>
    <input type="text" id="location" placeholder="Location"><br>

    <input type="submit" value="Save"><br><br>
</form>
</body>
</html>