<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="escstyles.css">
        <title>Login | Escape room</title>
</head>
<body>
    <section>
        <div class="form-box">
        <div class="form-value">
            <form action="landing.php">
                <h2>Login</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="email">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="id-card-outline"></ion-icon>
                    <input type="text" name="userid" required>
                    <label for="userid">User ID</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" required>
                    <label for="password">Password</label>
                </div>
                <input type="submit" name="login" value="Login" class="btn">
                <div class="register">
                    <p>Don't have a account ? <a href="signup.php">Sign Up</a></p>
                </div>
            </form>
        </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
<?php
include("classes/connect.php");
error_reporting(0);
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $userid=$_POST['userid'];
    $password=$_POST['password'];
    $query="SELECT * FROM users WHERE userid='$userid' && password='$password'";
    $data=mysqli_query($con,$query);
    $total=mysqli_num_rows($data);
    //echo $total;
    if($total==1)
    {
        $_SESSION['user_id']=$userid;
        header('location:landing.php');
    }
    else{
        echo "Login Failed";
    }
}
?>
<?php
session_start();
if($userid=='320126510116'){
    header("Location:admin.php");
}
?>