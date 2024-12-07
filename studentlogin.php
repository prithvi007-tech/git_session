<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Login Page</title>
    <style>
        body {
            background-color: rgb(240, 240, 240);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-image: url('1.jpeg');
            background-size: cover;
            background-position: center;
        }
        .login {
            width: 400px;
            height: 600px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            z-index: 2;
            position: relative;
            transition: all 0.3s ease;
            margin-right: 40px;

        }
        .login form {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .login form label {
            margin-bottom: 10px;
            font-size: 20px;
        }
        .login form input {
            width: 80%;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border: none;
            outline: none;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }
        .login form button {
            width: 80%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: rgb(0, 123, 255);
            color: white;
            font-size: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .login form button:hover {
            background-color: rgb(0, 100, 200);
        }
        .login a {
            color: rgb(0, 123, 255);
            text-decoration: none;
            margin-top: 10px;
        }
        .login a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="login">
        <form action="studentlogin.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
            <a href="signup.php">Don't have an account? Sign up</a>
        </form> 
    </div>
</body>
</html>
