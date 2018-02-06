<?php
/**
 * Created by PhpStorm.
 * User: linjy0419
 * Date: 3/11/17
 * Time: 10:50 AM
 */
    require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Page</title>
    <!-- CORE CSS-->
 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
 
    <style type="text/css">
        html,
        body {
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
        <form method="post" action="register.php" class="login-form">
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="RecipeName" name="RecipeName" type="text" class="validate">
                    <label for="RecipeName" class="center-align">*RecipeName</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="RecipeID" name="RecipeID" type="text" class="validate">
                    <label for="RecipeID" class="center-align">*RecipeID</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="CuisineType" name="CuisineType" type="text" class="validate">
                    <label for="CuisineType">*CuisineType</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-action-lock-outline prefix"></i>
                    <input id="PreparationTime" name="PreparationTime" type="text" class="validate">
                    <label for="PreparationTime">*PreparationTime</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="ReadyTime" name="ReadyTime" type="text" class="validate">
                    <label for="ReadyTime">*ReadyTime</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="Calories" name="Calories" type="text" class="validate">
                    <label for="Calories">*Calories</label>
                </div>
            </div>
            <div class="row margin">
                <div class="input-field col s12">
                    <i class="mdi-social-person-outline prefix"></i>
                    <input id="CookingSteps" name="CookingSteps" type="text" class="validate">
                    <label for="CookingSteps">*CookingSteps</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="add_button" type="submit" value="Add Recipe" class="btn" align="center"></a>
                </div>
                <div class="input-field col s12">
                    <p class="margin center medium-small sign-up">Already have an account? <a href="login.html">Login</a></p>
                </div>
            </div>
        </form>
        <?php
            if(isset($_POST['add_button']))
            {
                $RecipeName = $_POST['RecipeName'];
                $RecipeID = $_POST['RecipeID'];
                $CuisineType = $_POST['CuisineType'];
                $PreparationTime= $_POST['PreparationTime'];
                $ReadyTime = $_POST['ReadyTime'];
                $Calories = $_POST['Calories'];
                $CookingSteps = $_POST['CookingSteps'];
            }
        ?>
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
 
 
<footer class="page-footer">
    <div class="footer-copyright">
        <div class="container">
            © 2015 W3lessons.info
            <a class="grey-text text-lighten-4 right" href="http://w3lessons.info">Karthikeyan K</a>
        </div>
    </div>
</footer>
</body>
 
</html>