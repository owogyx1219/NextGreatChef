<?php
/**
 * Created by PhpStorm.
 * User: linjy0419
 * Date: 3/11/17
 * Time: 4:45 PM
 */
require 'config.php';


?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <title>All Recipes</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
    <div>
        <a href="index.html"><img src="images/logo.png" alt="Logo" width="300" height="110"></a>
    </div>
    <form action="recipe.php" method="post" target="_blank">
        <input name="searchinfo" type="text" value="Search from our 10,000+ Recipes around the world" id="search">

        <input name="searchsth" type="submit" value="" id="searchbtn">
    </form>
</div>
<div class="body">
    <div>
        <div class="header">
            <ul>
                <li>
                    <a href="index.html">Home</a>
                </li>
                <li>
                    <a href="allrecipes.php">All Recipes</a>
                </li>
                <li>
                    <a href="recipe.php">Featured Recipes</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a href="addrecipe.php">Add Your own Recipe</a>
                </li>
            </ul>
        </div>
        <div class="body">
            <div id="content">
                <div>
                    <ul>
                        <?php
                            //define(current_user_name, get_current_user(), true);
                            // $query_user = "select * from User where username = current_user_name";
                            // $query_run_user = mysqli_query($conn, $query);
                            // $row1 = mysqli_fetch_row($query_run_user)
                            // if(mysqli_num_rows() > 0)
                            // {
                            //     $query_recipe = "select * ";
                            // }
                            $query = "select * from User, Recipe where User.worldcuisinetype = Recipe.Recipe_cuisinetype";
                            $query_run = mysqli_query($conn, $query);
                            if(mysqli_num_rows($query_run) > 0)
                            {
                                while($row = mysqli_fetch_row($query_run))
                                {
                        ?>
                                    <li>
                                      <?php
                                        echo "<a href='recipe.php?epr=update&id=".$row[1]."'><img src='images/10004".$row[1].".png' alt='Image' width='130' height='135'></a>";
                                      ?>

                                        <div>
                                      <?php
                                        echo "<h3><a href='recipe.php?epr=update&id=".$row[1]."'>".$row[0]."</a></h3>";
                                      ?>
                                            <p>
                                                <?php echo $row[6];?>
                                            </p>
                                        </div>
                                    </li>


                        <?php
                                }
                            }
                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="footer">
    <div>
        <p>
            &copy; Copyright 2012. All rights reserved
        </p>
    </div>
</div>
</body>
</html>