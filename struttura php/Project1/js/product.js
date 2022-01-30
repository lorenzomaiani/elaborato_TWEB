function hideElement(element){
    element.removeClass().next().slideUp();
}

$(document).ready(function(){

    const button = $("footer > button");
    $(button).click(function(){
        if($(this).hasClass("selected")){
            hideElement($(this));
        }else{
            hideElement($("button.selected"));
            $(this).addClass("selected");
            $(this).next().slideDown();
        }
        
    });
    
});

