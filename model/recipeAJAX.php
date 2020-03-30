<?php

include ('model_recipe.php');


//AJAX to add to Recipe table
$userId = filter_input(INPUT_POST, 'userId');//Possibly pull from sessions after login
$recipeName = filter_input(INPUT_POST, 'recipeName');
$cookTime = filter_input(INPUT_POST, 'cookTime');
$recipeImage = filter_input(INPUT_POST, 'recipeImage');
$category = filter_input(INPUT_POST, 'category');

addRecipe($userId, $recipeName, $cookTime, $recipeImage, $category);




?>