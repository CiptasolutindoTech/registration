<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        body {
            background-image: url(image/bg.jpg);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .login-container {
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
            display: flex;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 800px;
            max-width: 100%;
        }
        .login-form {
            flex: 1;
            padding: 20px;
        }
        .login-form h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        .login-form p {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .login-form label {
            display: block;
            margin-bottom: 5px;
        }
        .login-form input[type="text"], .login-form input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-form button {
            width: 100%;
            padding: 10px;
            background-color: #FFA500; /* Button orange */
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }
        .login-form a {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #0000EE; /* Link color */
            text-decoration: none;
        }
        .login-form a:hover {
            text-decoration: underline;
        }
        .login-image {
            flex: 1;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .login-image img {
            max-width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-form">
            <h2>LOGIN</h2>
            <p>Sekata Entrepreneur Consulting</p>
            <?php
          if (isset($_GET['status']) && $_GET['status'] == 'gagal') {
              echo '<div class="alert alert-danger" role="alert">Username atau password salah!</div>';
          }
        ?>
            <form action= "proses_login.php" method="post">
        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <div>
            <button type="submit" value="login" name="login" >Login</button>
        </div>
    </form>
        </div>
        <div class="login-image">
            <img src="image/logo.png" alt="Makanan">
        </div>
    </div>
    
</body>
</html>
