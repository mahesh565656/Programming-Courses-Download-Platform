<?php include "header.php";
 ?>
<?php

if (isset($_SESSION['username'])) {
}
if (isset($_POST['submit'])) {
    if (empty($_POST['fullname']) or empty($_POST['email']) or empty($_POST['username']) or empty($_POST['password'])) {
        echo "<script>alert('one or more inputs are empty');</script>";
    } else {
        if ($_POST['password'] == $_POST['confirm_password']) {
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $username = $_POST['username'];
            $insert = $conn->prepare("INSERT INTO users(fullname,email,username,password)
                                        VALUES(:fullname,:email,:username,:password)");
            $insert->execute([
                ":fullname" => $fullname,
                ":email" => $email,
                ":password" => password_hash($password, PASSWORD_DEFAULT),
                ":username" => $username
            ]);
            echo "<script> window.location.href='index.php'; </script>";
        } else {
            echo " <script>alert('Password not matched,write same password.')</script>";
        }
    }
}
?>
 <link rel="stylesheet" href="css/register.css">
<div id="page-content" class="page-content">
    <div class="page">
        <div class="image">
            <div class="container">
                <h1>
                    Register Page
                </h1>


                <div class="reg-form">
                    <div class="card-body">
                        <form class="form-horizontal" method="POST" action="register.php">
                            <div class="item">
                                <div class="col-md-12">
                                    <input class="form-control" name="fullname" type="text" required="" placeholder="Full Name">
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12">
                                    <input class="form-control" name="email" type="email" required="" placeholder="Email">
                                </div>
                            </div>

                            <div class="item">
                                <div class="col-md-12">
                                    <input class="form-control" name="username" type="text" required="" placeholder="Username">
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12">
                                    <input class="form-control" name="password" type="password" required="" placeholder="Password">
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12">
                                    <input class="form-control" name="confirm_password" type="password" required="" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div>
                                <div>
                                    <div class="checkbox">
                                        <input id="checkbox0" type="checkbox" name="terms">
                                        <label for="checkbox0" class="mb-0">I Agree with <a href="terms.html" class="text-light">Terms & Conditions</a> </label>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="button">
                                    <button type="submit" name="submit" class="button">Register</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
       
       
       
        <div class="image1">
            <img width="108%" height="513px" src="images/img1.jpg">
        </div>




    </div>

</div>