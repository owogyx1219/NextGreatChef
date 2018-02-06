<?php
/**
 * Created by PhpStorm.
 * User: linjy0419
 * Date: 3/11/17
 * Time: 3:08 PM
 */
require 'config.php';
$current_user = -1;
if(isset($_POST['submit_button']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username != '' && $password != '')
    {
        $query = "select * from User where username = '$username'";
        $query_run = mysqli_query($conn, $query);
        if (mysqli_num_rows($query_run) == 0)
        {
            echo '<script type="text/javascript"> alert("Username does not exist!") </script>';
        }else{
            $query = "select password from User where username = '$username'";
            $query_run = mysqli_query($conn, $query);
            $row = mysqli_fetch_row($query_run);
            if($password == $row[0])
            {
                global $current_user;
                $current_user = $username;
                echo '<script type="text/javascript"> alert("Login successfully!") </script>';
            }else{
                echo '<script type="text/javascript"> alert("Password does not match!") </script>';
            }

        }

    }else{
        echo '<script type="text/javascript"> alert("Please fill out required columns!") </script>';
    }
    //echo '<script type="text/javascript"> alert("Sign up button clicked!") </script>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login Page</title>
  <!-- CORE CSS-->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">


<style type="text/css">
    html,
body {
        background: url(images/bg-body.jpg) repeat;
    height: 100%;
}
html {
    display: table;
    margin: auto;
}
body {
    display: table-cell;
    vertical-align: middle;
}
.margin {
    margin: 0 !important;
}
</style>

</head>


<body class="blue">


  <div id="login-page" class="row">
    <div class="col s12 z-depth-6 card-panel">
      <form method="post" action="login.php" class="login-form">
          <div class="row margin">
              <div class="input-field col s12">
                  <i class="mdi-social-person-outline prefix"></i>
                  <input class="validate" name="username" id="email" type="text">
                  <label class="center-align">Username</label>
              </div>
          </div>
          <div class="row margin">
              <div class="input-field col s12">
                  <i class="mdi-action-lock-outline prefix"></i>
                  <input id="password" name="password" type="password">
                  <label for="password">Password</label>
              </div>
          </div>
          <div class="row">
              <a class="input-field col s12">
                  <input name="submit_button" type="submit" value="Login" class="btn"></a>
              </div>
          </div>
          <div class="row">
              <p style="color:dodgerblue;text-align:center;"><a href="register.php">Don't have an account? Register Now!</a></p>
          </div>
          <div class="row">
              <p style="color:dodgerblue;text-align:center;"><a href="index.html">Back to Homepage</a></p>
          </div>

      </form>
    </div>
  </div>




  <!-- ================================================
    Scripts
    ================================================ -->

  <!-- jQuery Library -->
 <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <!--materialize js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>

  <script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-27820211-3', 'auto');
  ga('send', 'pageview');

</script><script src="//load.sumome.com/" data-sumo-site-id="1cf2c3d548b156a57050bff06ee37284c67d0884b086bebd8e957ca1c34e99a1" async="async"></script>


  <footer >
      <p align="center">© 2015 W3lessons.info Karthikeyan K</p>
  </footer>
</body>

</html>