function isBusy(element){
    if(element.hasClass("current")){
        element.remove();
    }
}


$(document).ready(function(){

    let divContent = null;

    $("input[type=submit]").click(function(e){
        let accessTo = true;
        
        const usr = $("input[name=username]").val();
        const passwd = $("input[name=passwd]").val();

        if(usr != "Admin" || usr == undefined){
            accessTo = false;
        }

        if(passwd != "admin" || passwd == undefined){
            accessTo = false;
        }

        if(accessTo){
            divContent = `
                <p>Connected!</p>`;
            isBusy($("div > p"));
            $("div").append(divContent);
            $("div > p").addClass("current").css("color","green");
        }
        else{

            divContent = `
            <p>Username or Password is not correct</p>`;
            isBusy($("div > p"));
            $("div").append(divContent);
            $("div > p").addClass("current").css("color", "red");
        }
    })

});

