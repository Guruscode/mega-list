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
    <title>Mega List</title>
</head>
<body>

        <div class="overlay"></div>

        <div class="masthead">
        <div class="masthead-bg"></div>
        <div class="container h-100">
            <div class="row h-100">
            <div class="col-12 my-auto">
                <div class="masthead-content text-white py-5 py-md-0">
                <h1 class="mb-3">Mega: List</h1>
                <p class="mb-5">Welcome to a place for adding and listing. You can do two things, 1. Create 2. List</p>
                <div class="input-group input-group-newsletter">
                    
                    <div class="input-group-append">
                        <a href="list.php" class="btn btn-secondary pull-left">List</a>
                        <a onclick="checklogin()"  class="btn btn-secondary pull-right">Create</a>
                        <?php require_once('__autoload.php'); 
                            $session = new Session;                           
                        ?>
                        <a onclick="logout()" id="logoutbutton"  class="btn btn-danger pull-right" <?php if(!$session->checkUser()){ echo "style='display:none'"; } ?> >Logout</a>
                  
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

<!-- login Register modal starts-->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="login_modal" data-toggle="modal" data-target="#exampleModalCenter" style="display:none;">
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
      <span class="alert" id="message"></span>
      <div class="modal-body">

            <div class="col-md-6" id="name-box-1">Name</div><div class="col-md-6" id="name-box-2"><input type="text" id="name" class="form-control" /></div>
            <div class="col-md-6">Email</div><div class="col-md-6"><input type="email" id="email" class="form-control" /></div>
            <div class="col-md-6">Password</div><div class="col-md-6"><input type="password" id="password"  class="form-control"/></div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="lf_close">Close</button>
        <button onclick="loginOrRegister()" type="button" class="btn btn-success">Continue</button>
        <div id="account-notice"><a class="btn btn-default"  onclick="switchForm('lf')">No Account? Register</a></div>
      </div>
    </div>
  </div>
</div>

<!-- Login Register Modal Ends -->


<!-- Create modal starts-->


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" id="add_modal" data-toggle="modal" data-target="#addModalCenter" style="display:none;">
  Launch
</button>

<!-- Modal -->
<div class="modal fade" id="addModalCenter" tabindex="-1" role="dialog" aria-labelledby="addModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addModalLongTitle">Create List</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <span class="alert" id="store-message"></span>
      <div class="modal-body">

            <div class="col-md-12">List Name</div><div class="col-md-6"><input type="text" id="store_name" class="form-control" /></div>
            <div class="col-md-6">Address</div><div class="col-md-6"><textarea id="store_address" class="form-control"></textarea></div>
            
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal" id="add_close">Close</button>
        <button onclick="addStore()" type="button" class="btn btn-success">Create</button> 
      </div>
    </div>
  </div>
</div>

<!-- Create Modal Ends -->






<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<script src="js/welcome.min.js"></script>
<script src="js/custom.js"></script>

<script>
    

</script>

</body>
</html>
