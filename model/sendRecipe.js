//window.addEventListener("load", init);
$(document).ready(function() {
    //Checks if input is correct when user clicks out of the text box
    $("input[type=text]").blur( function() {
        if($(this).val()===""){
            $(this).addClass('is-invalid');
            $(this).removeClass('is-valid');
        }
        else{
            $(this).addClass('is-valid');
            $(this).removeClass('is-invalid');
        }
      });

});

//Returns true and sends to php if everything is valid
function sendRecipe(){
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
    if($("#confPassword").val()!=$("#password").val() || $("#confPassword").val()===""){
        $("#confPassword").addClass('is-invalid');
        $("#confPassword").removeClass('is-valid');
        console.log('tripped up here');
        errorCheck++;
      }
    console.log('working');
  if(errorCheck>0){
    return false;
    }
    else{ return true; }
}