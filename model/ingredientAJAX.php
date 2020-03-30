<?php

include ('model_recipe.php');

$recipeId = getRecipeId();

$ingredientName = filter_input(INPUT_POST, 'ingredientName');
$ingredientAmt = filter_input(INPUT_POST, 'ingredientAmt');
$ingredientType = filter_input(INPUT_POST, 'ingredientType');

addIngredient($recipeId[0]['recipeId'], $ingredientName, $ingredientAmt, $ingredientType);

?>
