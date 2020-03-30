//window.addEventListener("load", init);
$(document).ready(function() {
    //grabs the inputs on load
    var txtBoxes = $("input[type=text]");
    var txtAreas = $("textarea");
    
    //start visual validation check
    visualCheck(txtBoxes, txtAreas);
    
    //updates inputs on button click
    $(".addIngredient").click(function(txtBoxes, txtAreas){
        txtBoxes = $("input[type=text]");
        txtAreas = $("textarea");
        visualCheck(txtBoxes, txtAreas);
    });
    $(".addStep").click(function(txtBoxes, txtAreas){
        txtBoxes = $("input[type=text]");
        txtAreas = $("textarea");
        visualCheck(txtBoxes, txtAreas);
    });

});

//Checks if input is correct when user clicks out of the text box
function visualCheck(txtBoxes, txtAreas){
    txtBoxes.blur( function() {
        if($(this).val()===""){
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
        }
        else{
            $(this).addClass('is-valid');
            $(this).removeClass('is-invalid');
        }
    });
    
    txtAreas.blur(function(){
        if($(this).val()===""){
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
        }
        else{
            $(this).addClass('is-valid');
            $(this).removeClass('is-invalid');
        }
    });
    
    
}

//Validates on php POST
//Returns true and sends to php if everything is valid
function sendData(){
    var errorCheck = 0;
    if($("#recipeName").val()===""){
        $("#recipeName").addClass('is-invalid');
        $("#recipeName").removeClass('is-valid');
        errorCheck++;
    }
    if($("#cookHour").val()===""){
        $("#cookHour").addClass('is-invalid');
        $("#cookHour").removeClass('is-valid');
        errorCheck++;
    }
    if($("#cookMinute").val()===""){
        $("#cookMinute").addClass('is-invalid');
        $("#cookMinute").removeClass('is-valid');
        errorCheck++;
    }
    $(".ingredientName").each(function(index){
        if($(this).val()===""){
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
            errorCheck++;
        }
    });
    $(".ingredientAmt").each(function(index){
        if($(this).val()===""){
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
            errorCheck++;
        }
    });
    $(".ingredientType").each(function(index){
        if($(this).val()===""){
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
            errorCheck++;
        }
    });
    $(".stepText").each(function(index){
        if($(this).val()===""){
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
            errorCheck++;
        }
    });
    
    console.log('working');
  if(errorCheck>0){
    return false;
    }
    else{ 
        cookTime = (parseFloat($("#cookHour").val()) * 60) + parseInt($("#cookMinute").val());
        $.post( "../Recipe/model/recipeAJAX.php", { userId: 1, recipeName: $("#recipeName").val(), category: $("#category").val(), cookTime: cookTime, recipeImage: "placeholder.jpg"} );
        $(".ingredientName").each(function(index){
            //AJAX POST
            //Only need to loop one
        });
        return true; }
}