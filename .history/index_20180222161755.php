<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="css/welcome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <title>Anakle: For Anakle</title>
</head>
<body>

        <div class="overlay"></div>

        <div class="masthead">
        <div class="masthead-bg"></div>
        <div class="container h-100">
            <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="masthead-content text-white py-5 py-md-0">
                <h1 class="mb-3">Anakle: for Anakle</h1>
                <p class="mb-5">Welcome to a place for adding and listing. You can do two things, 1. Create 2. List</p>
                <div class="input-group input-group-newsletter">
                    
                    <div class="input-group-append">
                    <a class="btn btn-secondary pull-left">List</a>
                    <a onclick="checklogin()"  class="btn btn-secondary pull-right">Create</a>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

<!-- login register modal starts-->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="register_modal" data-toggle="modal" data-target="#exampleModalCenter">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Login</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

            <div class="col-6">Email</div><div class="col-6"><input type="text" name="email" /></div>
            <div class="col-6">Password</div><div class="col-6"><input type="text" name="password" /></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">login</button>
        <a type="button" class="btn btn-secondary">No account? Register</button>
      </div>
    </div>
  </div>
</div>

<!-- Login Register Modal Ends -->

<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<script src="js/welcome.min.js"></script>

<script>

    function checklogin(){
        console.log('hj');
        //ajax function to check if user is logged in,
        //if yes, display add form,
        //if no, display login/signup form

        $.ajax('checkuserlogin.php', {
            data: {
                id: null
            }
        })
        .then(
            function success(response) {
                if(response == 'yes'){
                    console.log('display add form');
                    $('#register_modal').click();
                }else{
                    console.log('display login form');
                    $('#register_modal').click();
                }

                console.log(response);
            },

            function fail(data, status) {
                alert(status);
            }
        );

    }

</script>

</body>
</html>