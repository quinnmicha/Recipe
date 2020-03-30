<?php

include ('model_recipe.php');

session_start();

//AJAX to add to Recipe table
$userId = $_SESSION['userId'];
$recipeName = filter_input(INPUT_POST, 'recipeName');
$cookTime = filter_input(INPUT_POST, 'cookTime');
$recipeImage = filter_input(INPUT_POST, 'recipeImage');
$category = filter_input(INPUT_POST, 'category');

addRecipe($userId, $recipeName, $cookTime, $recipeImage, $category);




?>