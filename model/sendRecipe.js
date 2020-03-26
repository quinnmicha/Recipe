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
    
    console.log('working');
  if(errorCheck>0){
    return false;
    }
    else{ return true; }
}