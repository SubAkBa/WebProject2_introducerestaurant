$(function(){
    $("#m1").click(function(e){
        $("#sekt").fadeIn("slow");
        $("#brut").fadeOut("slow");
        $("#sec").fadeOut("slow");
        e.preventDefault();
    });
    $("#m2").click(function(e){
        $("#brut").fadeIn("slow");
        $("#sekt").fadeOut("slow");
        $("#sec").fadeOut("slow");
        e.preventDefault();
    });
    $("#m3").click(function(e){
        $("#sec").fadeIn("slow");
        $("#brut").fadeOut("slow");
        $("#sekt").fadeOut("slow");
        e.preventDefault();
    });
});