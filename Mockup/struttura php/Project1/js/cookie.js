$(document).ready(function(){
    $("input[name=cookie]").click(function(e){
        e.preventDefault();
        console.log("OK clicked");
        $("footer").css("display","none");
    });
});