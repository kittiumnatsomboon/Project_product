$(document).ready(function(){
    function displayNum() { 
        switch($("select#province").val()){
            case "กรุงเทพมหานคร":
            
            break;
        }
    } 
    // When the selected value will change, 
    // the above function is called 
    $("select#province").change(displayNum); 
});