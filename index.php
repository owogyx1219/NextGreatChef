<?php
/**
 * Created by PhpStorm.
 * User: linjy0419
 * Date: 4/10/17
 * Time: 9:37 PM
 */
session_start();
$current_user = $_SESSION["current_username"];
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
    <meta charset="UTF-8">
    <title>NextGreatChef Homepage</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="header">
    <div>
        <a href="index.php"><img src="images/logo.png" alt="Logo" width="300" height="110"></a>
    </div>
    <form action="allrecipes.php" method="post" target="_blank">
        <input name="searchinfo" type="text" value="Entering keyword to search recipes" id="search">

        <input name="searchsth" type="submit" value="" id="searchbtn">
    </form>
</div>
<div class="body">
    <div>
        <div class="header">
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="login.php">Login</a>
                </li>
                <li>
                    <a href="myprofile.php">My Profile</a>
                </li>
                <li>
                    <a href="addrecipe.php">Add Recipe</a>
                </li>
                <li>
                    <a href="allrecipes.php">All Recipes</a>
                </li>
                <li>
                    <a href="recipe_map.php">Recipe Map</a>
                </li>
            </ul>
        </div>
        <div class="body">
            <div>
                <a href="allrecipes.php"><img src="images/desktop.png" alt="Image" width="710" height="430"></a>
            </div>
            <ul>
                <li class="current">
                    <a href="recipe.php?epr=update&id=10027"><img src="images/10027.png" alt="Image" width="60" height="60"></a>
                    <div>
                        <h2><a href="recipe.php?epr=update&id=10027">Tofu Ddukbokki</a></h2>
                        <p>
                            Popular Korean Snack
                            <?php echo $current_user ?>
                        </p>
                    </div>
                </li>
                <li>
                    <a href="recipe.php?epr=update&id=10028"><img src="images/10028.png" alt="Image" width="60" height="60"></a>
                    <div>
                        <h2><a href="recipe.php?epr=update&id=10028">Chicken Casserole</a></h2>
                        <p>
                            Signature Italian Dish
                        </p>
                    </div>
                </li>
                <li>
                    <a href="recipe.php?epr=update&id=10029"><img src="images/10029.png" alt="Image" width="60" height="60"></a>
                    <div>
                        <h2><a href="recipe.php?epr=update&id=10029">Tropical Classic Piazza</a></h2>
                        <p>
                            Yummy Italian Pizza
                        </p>
                    </div>
                </li>
            </ul>
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
