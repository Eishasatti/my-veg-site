<?php

    session_start();

    include("db.php");

    if($_SERVER['REUEST_METHOD'=="POST"])
    { $email=$_POST['email'];
        $password=$_POST['password'];
    
   if(!empty($email) && !empty($password) && !is_numeric($email))
    {
        $query="select * from reg where email='$email' limit 1";
        $result=mysqli_querry($con,$query);

        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
            {
                $user_data=mysqli_fetch_assoc($result);
                if($user_data['password']==$password)
                {
                    header("location:index.php");
                    die;
                }
            }
        }
        echo "<script type='text/javascript' > alert('wrong isernaame or password')</script>";
        
    }
    else
    {
        echo "<script type='text/javascript' > alert('wrong isernaame or password')</script>";
        
    }
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333333;
        }
        #uname{
            margin: 4px;
            padding: 4px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #9fa0f3;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            border: none;
            border-radius: 4px;
            color: rgb(237, 205, 205);
            font-size: 16px;
            cursor: pointer;
        }
        .login-container button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <div class="login-container">
        <h2> Login</h2>
        <form  method="POST">
            <label id="uname">use your email as username</label>
            <input type="email" name="email" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

</body>
</html>