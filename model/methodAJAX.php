<?php

include ('model_recipe.php');

$recipeId = getRecipeId();

$methodOrder = filter_input(INPUT_POST, 'methodOrder');
$methodText = filter_input(INPUT_POST, 'methodText');

addMethod($recipeId[0]['recipeId'], $methodOrder, $methodText);

?>
