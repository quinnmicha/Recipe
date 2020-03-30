<?php

include __DIR__ . '/Model/model_recipe.php';

$categories = ["Breakfast", "Lunch", "Dinner", "Appetizer", "Side Dish", "Desert"];
session_start();


?>
<html lang="en">
<head>
    <title>Add Recipe</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
  
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="../Recipe/index.php">My Recipe</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            
        </ul>
    </div>
</nav>
    
<div class="container pt-2">
    <div class='w-75 m-auto'>
        <h1>Add A Recipe</h1>
        <form method="post">
            <div class="form-row mt-5">
                <label for="recipeName">Recipe Name:</label>
                <input type="text" class='form-control' name="recipeName" id="recipeName" placeholder="">
            </div>
            <div class="form-row mt-3">
                <label for="category">Category:</label>
                <select class="form-control" id="category" name="category">
                    <?php foreach($categories as $categ): ?>
                    <option><?php echo $categ;?></option>
                    <?php endforeach;?>
                </select>
              </div>
            <div class="form-row mt-3">
                <label for="cookHour" class="col-4">Cook Time:</label>
                <input type="text" class="form-control offset-1 col-4" id="cookHour" name="cookHour" placeholder="Hour">
                <input type="text" class="form-control offset-5 col-4 mt-1" id="cookMinute" name="cookMinute" placeholder="Minute">

            </div>
            <div class="form-row mt-3">
                <div id="ingredientForm" name="ingredientForm">

                </div>
                <div>
                    <input type="button" class="btn btn-outline-primary addIngredient mt-1" value="Add Ingredient">
                </div>

                <script>
                num = 0;
                $("#ingredientForm").append('<div class="form-row ingredients mt-2"><label>Ingredient:</label>  <input type="text" class="form-control mb-1 ingredientName" name="ingredientName" placeholder="Ingredient Name"> <input type="text" class="offset-1 col-3 form-control ingredientAmt" name="ingredientAmt" placeholder="amount"> <input type="text" class=" offset-1 col-6 form-control ingredientType" name="ingredientType" placeholder="cups/tablespoons"> </div>');
                $(".addIngredient").click(function(){
                    $("#ingredientForm").append('<div class="form-row ingredients mt-2"><label>Ingredient:</label> <input type="text" class="form-control mb-1 ingredientName" name="ingredientName" placeholder="Ingredient Name"> <input type="text" class="offset-1 col-3 form-control ingredientAmt" name="ingredientAmt" placeholder="amount"> <input type="text" class=" offset-1 col-6 form-control ingredientType" name="ingredientType" placeholder="cups/tablespoons"> </div>');
                    
                });
                </script>
            </div>
            <div class='form-row mt-3'>
                <div id="stepForm">

                </div>
                <div>
                    <input type="button" class="btn btn-outline-primary addStep mt-1" value="Add Step">
                    <script>
                    stepNumber=1;
                    $("#stepForm").append('<div class="form-row ingredients mt-2"> <h6>Step '+stepNumber+'</h6> <textarea class="step form-control stepText" rows="6" cols="50"></textarea> </div>');
                    $(".addStep").click(function(){
                        stepNumber++;
                        $("#stepForm").append('<div class="form-row ingredients mt-2"> <h6>Step '+stepNumber+'</h6> <textarea class="step form-control stepText" rows="6" cols="50"></textarea> </div>');
                    });
                    </script>
                </div>
            </div>
            <div class="form-row mt-4">
                <input type="submit" class="offset-6 btn btn-outline-success" onclick="return sendData()" value="Submit Recipe">
            </div>
        </form>
    </div>
    
    
        
   
</div>

<script type="text/javascript" src="../Recipe/model/sendRecipe.js"></script>
</body>
</html>
