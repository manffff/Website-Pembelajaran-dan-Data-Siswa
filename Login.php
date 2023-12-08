<?php
require "koneksi.php";

    if (isset($_POST['loginbtn'])) {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        $cekuser = mysqli_query($con, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");
        $hitung = mysqli_num_rows($cekuser);
    
        if ($hitung > 0) {
            $ambilData = mysqli_fetch_array($cekuser);
            $nama = $ambilData['username'];
    
            
            $_SESSION['login'] = true;
            $_SESSION['username'] = $nama;
            $_SESSION['massage'] = "anda berhasil login";
            header('location: Home.php');
        } else {
            $_SESSION['error'] = "Email dan Password anda salah";
            header('location: Login.php');
            
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body {
            background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(Back.jpg);
            height: 100vh;
            background-size: cover;
            background-position: center;
        }
        
        form {
            max-width: 300px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        label {
            display: block;
            text-align: left;
            margin: 10px 0;
        }
        
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }
        
        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <h2>Login</h2>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        
        <button type="submit" name="loginbtn">Login</button>
    </form>
</body>
</html>
