$(document).ready(function(){
    function displayNum() { 
        console.log($("select#province").val()); 
    } 
    // When the selected value will change, 
    // the above function is called 
    $("select#province").change(displayNum); 
});