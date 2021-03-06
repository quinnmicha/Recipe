<?php

include __DIR__ . '/Model/model_recipe.php';

session_start();


?>
<html lang="en">
<head>
  <title>My Recipes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script type="text/javascript" src='../Recipe/model/validation.js'></script>
  
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">My Recipe</a>
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
    
<div class="container">

    <div class='pt-2' style='height:250px;background-color:blue;'>
        <div class='mt-4 d-flex flex-row justify-content-around'>
            <button class='d-flex justify-content-center align-items-center rounded-pill' style='background-color:white;width:150px;height:50px;'>
                    Breakfast
            </button>
        
            <button class='d-flex justify-content-center align-items-center rounded-pill' style='background-color:white;width:150px;height:50px;'>
                    Lunch
            </button>
        </div>
        <div class='mt-2 d-flex flex-row justify-content-around'>
            <button class='d-flex justify-content-center align-items-center rounded-pill' style='background-color:white;width:150px;height:50px;'>
                    Dinner
            </button>
            <button class='d-flex justify-content-center align-items-center rounded-pill' style='background-color:white;width:150px;height:50px;'>
                    Appetizer
            </button>
        </div>
        <div class='mt-2 d-flex flex-row justify-content-around'>
            <button class='d-flex justify-content-center align-items-center rounded-pill' style='background-color:white;width:150px;height:50px;'>
                    Side Dish
            </button>
            <button class='d-flex justify-content-center align-items-center rounded-pill' style='background-color:white;width:150px;height:50px;'>
                    Desert
            </button>
        </div>
       
    </div>
    
        
   
</div><!--/.container-->


</body>
</html>
