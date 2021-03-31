!function(p){"use strict";p("body").vide({mp4:"mp4/bg.mp4",poster:"img/bg-mobile-fallback.jpg"},{posterType:"jpg"})}(jQuery);

$( document ).ready(function() {
    $("#name-box-1").hide();
    $("#name-box-2").hide();
});
function checklogin(){       

    $.ajax('checkuserlogin.php', {
        data: {
            id: null
        }
    })
    .then(
        function success(response) {
            if(response == 'yes'){
                console.log('display add form');
                $('#add_modal').click();
            }else{
         
                $('#login_modal').click();
            }

        },

        function fail(data, status) {
            alert(status);
        }
    );

}

function logout(){       

    $.ajax('logout.php', {
        data: {
            id: null
        }
    })
    .then(
        function success(response) {
            $('#logoutbutton').hide();

            console.log(response);
        },

        function fail(data, status) {
            alert(status);
        }
    );

    }

function loginOrRegister(){

    var name = $('#name').val();
    var email = $('#email').val();
    var password = $('#password').val();

    $.ajax('loginorregister.php',{
        method: 'POST',
        data: {
            name: name,
            email: email,
            password: password
        }
    })
    .then(
        function success(response) {
            if(response =='done'){
                $('#message').addClass("alert-success");
                $('#message').removeClass("alert-error");
                $('#message').html("Success!");
                $('#logoutbutton').show();
                $('#lf_close').click();

            }else{
                $('#message').addClass("alert-danger");
                $('#message').removeClass("alert-success");
                $('#message').html("Invalid Username or Password")
            }                

        },

        function fail(data, status) {
            alert(status);
        }
    );

}


function addStore(){
    console.log('inside');
    var store_name = $('#store_name').val();
    var store_address = $('#store_address').val();
 
    $.ajax('store.php',{
        method: 'POST',
        data: {
            store_name: store_name,
            store_address: store_address     
        }
    })
    .then(
        function success(response) {
            console.log(response);
            if(response =='done'){
                $('#store-message').addClass("alert-success");
                $('#store-message').removeClass("alert-error");
                $('#store-message').html("Store Created");   
                $('#store_name').val('');
                $('#store_address').val('');             
                // $('#add_close').click();
            }else{
                $('#store-message').addClass("alert-danger");
                $('#store-message').removeClass("alert-success");
                $('#store-message').html("Invalid Username or Password")
            }                

        },

        function fail(data, status) {
            alert(status);
        }
    );

    }

function switchForm(n){

    if(n == '2'){

        // open login form
        //close register form        
        $("#name-box-1").hide();
        $("#name-box-2").hide();
        $('#name').val('');
        $("#account-notice").html("<a class='btn btn-default'  onclick='switchForm(1)'>No Account? Register</a>");

    }else{

        //open register form
        //close login form        
        $("#name-box-1").show();
        $("#name-box-2").show();
        $("#account-notice").html("<a class='btn btn-default'  onclick='switchForm(2)'>Have Account? Login</a>");

    }

}