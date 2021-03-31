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
            <div class="container">
                <div class="row" style="padding-top: 10%">
        
                <?php 
                
                    require_once("__autoload.php");
                
                    $store =  new Store;

                    $data = $store->listsAll();
       
                    foreach($data as $store){

                        echo " <div class='col-lg-4 mb-4'>
                                <div class='card h-100'>
                                <h4 class='card-header'>" . $store['name'] . "</h4>
                                <div class='card-body'>
                                    <p class='card-text'>" . $store['address'] . "</p>
                                </div>              
                                </div>
                            </div>";

                            }                
                ?>
                    <div>
                </div>

<a href="index.php">Back Home</a>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.3.1.min.js"></script> 
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<script src="js/welcome.min.js"></script>




</body>
</html>