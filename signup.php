<?php
    include("classes/connect.php");
    include("classes/signup.php");
    $username="";
    $userid="";
    $email="";
    $contact="";
    $password="";
    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $signup=new Signup();
        $result=$signup->evaluate($_POST);
        if($result!=""){
            echo "The following errors occurred :<br>";
            echo $result;
        }
        else{
            header("Location:index.php");
            die;
        }
    $username=$_POST['username'];
    $userid=$_POST['userid'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $password=$_POST['password'];
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="escstyles.css">
        <title>Register | Escape room</title>
        <style>
            .form-box{
            position: relative;
            width: 400px;
            height: 550px;
            background: transparent;
            border: 2px solid rgba(255,255,255,0.5);
            border-radius: 20px;
            backdrop-filter: blur(16px);
            display: flex;
            justify-content: center;
            align-items: center;
}
        </style>
</head>
<body>
    <section>
        <div class="form-box">
        <div class="form-value">
            <form action="" method="post" autocomplete="off">
                <h2>New User Signup</h2>
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
                <div class="inputbox">
                    <ion-icon name="person-outline"></ion-icon>
                    <input type="text" name="username" required>
                    <label for="username">Username</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="call-outline"></ion-icon>
                    <input type="text" name="contact" pattern="[0-9]{10}" required>
                    <label for="contact">Contact</label>
                </div>
                <button>Signup</button>
            </form>
        </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
