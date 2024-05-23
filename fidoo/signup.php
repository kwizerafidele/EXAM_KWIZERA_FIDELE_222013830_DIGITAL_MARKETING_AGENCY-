<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body style="background-color:gray;">
    <center style="font-size: large;">
    <h1>  User Signup </h1>
    <form action="process.signup.php" method="post">
<div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
</div>
<div>
    <label for="email">Email</label>
    <input type="email" id="email" name="email">
</div>
<div>
    <label for="password">Password</label>
    <input type="password" id="password" name="password">
</div>
<div>
    <label for="password_confirmation">Repeat Password</label>
    <input type="password" id="password_confirmation" name="password_confirmation">
</div>
<button>sign up</button>
</center>
</body>
</html>