<?php
session_start();
include "koneksi/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>
        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>

        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <?php
          
              if(isset($_POST['loginbaru'])){
                $email = $_POST['email'];
                $pass = md5($_POST['password']);
                $query = mysqli_query($kon, "SELECT *FROM users WHERE email = '$email' and password = '$pass' and status = 'aktif' ");
                 $tampil = mysqli_fetch_assoc($query);
                $cekdata = mysqli_num_rows($query);
               
                if ($cekdata>0){
                  $_SESSION['email']=$tampil['email'];
                  $_SESSION['nama']=$tampil['nama_lengkap'];
                  $_SESSION['username']=$tampil['username'];
                  $_SESSION['iduser']=$tampil['id'];
                  header ("location:media.php?page=home");

                }else{
                echo "
                    <div class='alert alert-danger alert-dismissible fade in' role='alert'>
              <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
              </button>
              <strong>Gagal Login </strong><br/> Email dan Password Salah., silahkan coba lagi!
            </div>";
              }
              
              }

              
            
            ?>

                    <form method="POST" action="">
                        <h1>Login Form</h1>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" name="email" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required=""
                                name="password" />
                        </div>
                        <div>
                            <!--     <button class="btn btn-primary w-100" name="login" type="submit">Login</button>
                -->
                            <button class="btn btn-default submit" type="submit" name="loginbaru">Masuk ke Halaman
                                Admin</button>
                            <a class="reset_pass" href="#">Lost your password?</a>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">New to site?
                                <a href="#signup" class="to_register"> Create Account </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>

            <div id="register" class="animate form registration_form">
                <section class="login_content">


                    <form method="POST" action="">
                        <h1>Create Account</h1>
                        <div>
                            <input type="text" class="form-control" placeholder="Username" required="" />
                        </div>
                        <div>
                            <input type="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" required="" />
                        </div>
                        <div>
                            <button class="btn btn-default" type="submit">Submit</button>
                        </div>

                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link">Already a member ?
                                <a href="#signin" class="to_register"> Log in </a>
                            </p>

                            <div class="clearfix"></div>
                            <br />

                            <div>
                                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and
                                    Terms</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>