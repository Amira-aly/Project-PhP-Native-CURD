<?php 
    $host = "localhost";
    $user = "root";
    $password = '';
    $dbName = "test";
    $conn = mysqli_connect($host,$user,$password,$dbName);

    // show Data
    $sql_select = "SELECT * FROM `posts`";
    $s = mysqli_query($conn,$sql_select);

    // delete Data
    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $sql_delete = "DELETE FROM `posts` where id = $id";
        $d = mysqli_query($conn,$sql_delete);
        if($d){
            header("location:index.php");
        }
    }




?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Native</title>
    <!-- Bootstrap - CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous"/>

    <!-- google - icons -->
    <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet"/>
  </head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark" id="nav">
        <a class="navbar-brand pr-2 text-$gray-500"  >
        <span class="material-icons-sharp px-2">signpost</span>
            Home
        </a> 
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExampleDefault">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" href="index.php">All Posts <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="create.php">Add Posts</a>
                </li>
            </ul>             
        </div>
    </nav>

    <div class="container col-md-8">
        <div class="card my-4">
            <div class="card-header text-left">
                <div class="row">
                    <div class="col-6">
                        All Posts
                    </div>
                    <div class="col-6 text-right">
                        <a href="create.php">
                            <span class="material-icons-sharp">add_circle_outline</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
        foreach($s as $data){
    ?>
    <div class="container col-md-8">
        <div class="card mb-3">
            <div class="card-header">
                <div class="row">
                    <div class="col-9">
                        <?php echo $data['title']?>
                    </div>
                    <div class="col-3 text-right">
                        <a href="edit.php?edit=<?php echo $data['id']?>" class="btn btn-outline-warning btn-sm ">Edit</a>
                        <a onclick="return confirm('Are You Sure ?')" href="index.php?delete=<?php echo $data['id']?>" class="btn btn-outline-danger btn-sm">Delete</a>
                    </div>
                </div>
                
            </div>
            <div class="card-body">
                <p class="card-text"><?php echo $data['contect']?></p>
                
            </div>
        </div>
    </div>
    <?php } ?>
    
    <!-- bootstrap - js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  </body>
</html>