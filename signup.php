<?php

    session_start();

    include("db.php");

      if($_SERVER['REUEST_METHOD'=="POST"])
      {
          $name=$_POST['name'];
          $email=$_POST['email'];
          $phone=$_POST['phone'];
          $password=$_POST['password'];
          $address=$_POST['address'];
          if(!empty($email) && !empty($password) && !is_numeric($email))
          {
            $query="insert into reg (name,email,phone,password,address) values(' $name','$email',' $phone','$password',' $address')";
          mysqli_querry($con, $query);

          echo "<script type='text/javascript' > alert('successfuly registered')</script>";
        
        }
        else
        {
            echo "<script type='text/javascript' > alert('please enter some valid information')</script>";
        }
     }

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(181, 219, 181);
            background-size: cover;
            background-position: center;
            background-image: url('backii.jpg');
            
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: rgba(235, 145, 145, 0.8);
            /* Add some transparency to the background color */
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #4CAF50;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .navir {
            position: fixed;
            /* Set navbar position to fixed */
            top: 0;
            /* Stick it to the top of the viewport */
            left: 0;
            right: 0;
            z-index: 999;
            /* Ensure it's on top of other content */
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #4CAF50;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 98%;
        }

        .navir img {
            height: 50px;
        }

        .navir ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        .navir ul li {
            margin-left: 20px;
        }

        .navir ul li a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s;
        }

        .navir ul li a:hover {
            color: #ffdd57;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="tel"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        input[type="password"]:focus,
        input[type="tel"]:focus {
            border-color: #4CAF50;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /*input[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        } */

        #submit:hover {
            background-color: #45a049;
        }

        /* Add some space between form groups */
        .form-group+.form-group {
            margin-top: 20px;
        }

        /* Add a subtle animation to the form */
        .container {
            animation: fadeIn 0.5s;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }
        #submit{
            background-color: #45a049;
            
            
            margin-top: 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
    </style>
</head>

<body>
    <header>
        <nav class="navir">
            <img src="C:/Users/PMLS/Desktop/re.png" id="navlogo">
            <ul>
                <li><a href="index4final.html"
                        target="_blank">HOME</a>
                <li><a href="feedbackform.html" target="_blank">Feedback</a>
                </li>
                <li><a href="index11.html" target="_blank">About
                        us</a></li>
                <li><a href="fixedcart.html" target="_blank">Shop</a></li>
                
            </ul>
        </nav>
    </header>

    <div class="container">
        <h2>Sign Up</h2>
        <form  method="POST">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" placeholder="Enter your password">
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address" placeholder="Enter your address">
            </div>
            <div class="form-group">
                <button name="submit" value="submit"id="submit" onclick="login()">Sign up</button>
            </div>
            <div>
                <p>Already have an account?  <a href="file:///C:/Users/PMLS/Desktop/4semester/web%20pro/login.html">LogIn</a></p>
            </div>
        </form>
    </div>
<script>
    function login(){
        window.open('file:///C:/Users/PMLS/Desktop/4semester/web%20pro/login.html')
    }
</script>
</body>

</html>