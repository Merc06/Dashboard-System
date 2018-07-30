$(document).ready(function(){
    $("#sample_lang").click(function(){
        var emp = $("#emp").val();
        
        $.ajax({
            url     :   "sample_functions.php",
            method  :   "POST",
            data    :   {emp:emp},
            success :   function(data){
                $("#message").html(data);
                $("#emp").val("");
            }
        });
        
    });
});