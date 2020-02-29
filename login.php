<?php
session_start();
include 'tourtzdb.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>login to Tourist tour guiding system Tanzania</title>
    <link rel="icon"  href="images/songea3.jpg">
    <!-- meta tags -->
    <meta charset="UTF-8" />
    <!-- /meta tags -->
    <!-- custom style sheet -->
    <link href="css/login.css" rel="stylesheet" type="text/css" />
    <!-- /custom style sheet -->
    <!-- fontawesome css -->
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <!-- /fontawesome css -->
</head>


<body>
    <h1>Intelligent Tour Guiding system</h1>
    <div class=" w3l-login-form">
        <h2>Login Here</h2>
        <p style="color: red; font-weight: bold;" align="center">
            <?php
         if(isset($_POST['submit'])){
        $uname = mysqli_real_escape_string($connection,$_POST['uname']);
        $pass1 = md5(mysqli_real_escape_string($connection,$_POST['psw']));
        $remember = mysqli_real_escape_string($connection,$_POST['remember']);
        $sql = "SELECT * from user_account where username='$uname' AND password='$pass1'";
        $result = mysqli_query($connection,$sql);

        if(mysqli_num_rows($result)==TRUE){
            $_SESSION['uname'] = $uname;
        while($row=mysqli_fetch_array($result)){
                

            // /////////////////////////////code for generating session time out of the system if 10 minutes the system is idle it return to loinin form for security//////////////////////////////////////////////////////////
                $_SESSION['start'] = time();
                $_SESSION['expire'] = $_SESSION['start'] + (10 * 60);
                $_SESSION['remember'] = $remember;
                if($row['role'] == "Admin" or $row['role'] == "Super Admin"){
                echo'<script>
            window.location.assign("admin/index1.php");
            </script>
            ';
        } else if($row['role'] == "Tourist"){
            echo'<script>
            window.location.assign("attractions/attractions.php");
            </script>
            ';
            }
        }
        }
        else{
           echo "wrong username or password try again...!!!";


            }
 }
    ?>

        </p>
        <form method="post">

            <div class=" w3l-form-group">
                <div class="group">
                    <input type="text" class="form-control" placeholder="👤Username" required="required" name="uname" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <div class="group">
                    <input type="password" class="form-control" placeholder="Password" required="required" name="psw" />
                </div>
            </div>
            <div class="forgot">
                <a href="" onclick="foget()">Forgot Password?</a>
                <p><input type="checkbox" name="remember" checked>Remember Me</p>
            </div>
            <button type="submit" name="submit">Login</button>
        </form>
    </div>

    <script type="text/javascript">

        function foget() {
            var email= prompt("Enter your email", "");
            <?php
            $select = "SELECT * FROM user_account where email = ''";
             ?>
            if(email){
                alert("Thanks change password link as been sent to your email");
            }
        }
    </script>

</body>

</html>
