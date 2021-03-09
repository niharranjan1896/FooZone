<?php
require('conn.inc.php');
require('functions.inc.php');
$msg='';
if(isset($_POST['submit'])){
    $username=get_safe_value($con,$_POST['username']);
     $password=get_safe_value($con,$_POST['password']);
    $sql="select * from admin_users where username='$username' and password='$password'";
    $res=mysqli_query($con,$sql);
    $count=mysqli_num_rows($res);
    if($count>0){
        
    }else{
        $msg="Please Enter correct login details";
    }
    
}
?>
<!DOCTYPE html>
<html>

<head>
    <title> Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="image/wave3.jpg">
    <!--------------nav ------------->
    <div class="navbar">
        <div class="logo">
            <img src="image/logo1.jpg " width="70px">
        </div>
        <nav>
            <ul>
                <li><a href="index.html"><i class="fa fa-fw fa-home"></i>Home</a></li>
                <li><a href="product.html"><i class="fa fa-cutlery"></i>Items</a></li>
                <li><a href="login.html"><i class="fa fa-fw fa-user"></i>Login</a></li>
                <li><a href="#"><i class="fa fa-fw fa-user-circle"></i> Account</a></li>
                <li><a href="#Contact us:-"><i class="fa fa-fw fa-envelope"></i>Contact us</a></li>
            </ul>
        </nav>
        <img src="image/cart.jpg" width="30px" height="30px">
    </div>

    <!-------------------------------->
    <div class="container">
        <div class="img">
            <img src="image/s1.svg">
        </div>
        <div class="login-content">
            <form action="index.html">
                <img src="image/s2.svg">
                <h2 class="title">Login</h2>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Username</h5>
                        <input type="text" name="username" class="input"  required>
                    </div>
                </div>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" name="password" class="input"  required>
                    </div>
                </div>
                Not a member? <a href="register.html">Create Account</a>
                <a href="#">Forgot Password?</a>
                <input type="submit" name="submit" class="btn" value="Login">
            </form>
            <?php echo $msg ?>
        </div>
    </div>
    <script type="text/javascript" src="js/main1.js"></script>
</body>

</html>
