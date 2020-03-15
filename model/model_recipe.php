<?php 
    include ('db.php');

    
    //Pulls the info from Recipe Table
    function getRecipeIngredients($recipeId){
        global $db;
        
        $stmt=$db->prepare('SELECT ingredientName AS "Ingredients", ingredientAmt AS "Amount", measurement AS "Type" FROM Recipe_Ingredients JOIN Recipe ON Recipe_Ingredients.recipeId = Recipe.recipeId WHERE Recipe_Ingredients.recipeId = :recipeId');
        
        $binds=array(
            ":recipeId"=>$recipeId
        );
        
        
        if($stmt->execute($binds) && $stmt->rowCount()>0){
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($results);
        }
        else{
            return false;
        }
    }
    
    $test = getRecipeIngredients(1);
    var_dump($test);
    
?>