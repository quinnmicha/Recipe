<?php

include ('model_recipe.php');

$recipeId = getRecipeId();

$ingredientName = filter_input(INPUT_POST, 'ingredientName');
$ingredientAmt = filter_input(INPUT_POST, 'ingredientAmt');
$ingredientType = filter_input(INPUT_POST, 'ingredientType');

addIngredient($recipeId['recipeId'], $ingredientName, $ingredientAmt, $ingredientType);

?>
