function isBusy(element){
    if(element.hasClass("current")){
        element.remove();
    }

}

$(document).ready(function(){

    let asideContent = null;

    $("input[type=submit").click(function(e){
        let accessTo = true;
        e.preventDefault();
        const usr = $("input[name=username]").val();
        const passwd = $("input[name=password]").val();
        
        if (usr != "Admin" || usr == undefined){
            accessTo = false;
        }
        
        if (passwd != "admin" || passwd == undefined){
            accessTo = false;
        }
        
        if(accessTo){
            asideContent = `
                    <p>Connected!</p>   
            `;
            isBusy($("aside > p"));
            $("aside").append(asideContent);
            $("aside > p").addClass("current").css("color", "green");
        }

        else{
            asideContent=`
                    <p>Username or Password are not correct</p>
                `;
            isBusy($("aside > p"));
            $("aside").append(asideContent);
            $("aside > p").addClass("current").css("color", "red");
        }
    });

});