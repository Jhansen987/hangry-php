<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Hangry</title>
    <link rel="stylesheet" href="css/style-forms.css">
</head>
<body>
<div class="box-form-1">
        <div class="form-header">
            Login
            <button class="btn-cancel" onclick="location.href='/home';">Cancel</button>
        </div>
    <form action="#" method = "post">
        <label for="email">Email:</label><br>
        <input type="email" class="field-1" name = "email" required><br>
        
        <label for="password">Password:</label><br>
        <input type="password" class="field-1" name = "password" required><br>

        <input type="submit" class="btn-submit" value="LOGIN" name="login">
    </form>
    </div>
</body>
</html>