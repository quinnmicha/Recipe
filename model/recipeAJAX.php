<?php

include ('model_recipe.php');


//AJAX to add to Recipe table

$userId = input_filer(INPUT_POST, 'userId');
$recipeName = input_filter(INPUT_POST, 'recipeName');
$cookTime = input_filter(INPUT_POST, 'cookTime');
$recipeImage = input_filter(INPUT_POST, 'recipeImage');
$category = input_filter(INPUT_POST, 'category');

addRecipe($userId, $recipeName, $cookTime, $recipeImage, $category);


?>