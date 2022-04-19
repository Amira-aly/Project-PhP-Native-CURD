<?php 
    $host = "localhost";
    $user = "root";
    $password = '';
    $dbName = "test";
    $conn = mysqli_connect($host,$user,$password,$dbName);



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

    <div class="CreatePost">
        <div class="container mt-3">

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <?php
                        if(isset($_POST['sum'])){
                            $title = $_POST['title'];
                            $contect = $_POST['contect'];
                            // insert Data
                            $sql_insert = "INSERT INTO `posts`  VALUES (null,'$title','$contect')";
                            $i = mysqli_query($conn,$sql_insert);
                    
                            if($i){
                                echo "<div class='alert alert-info mx-auto w-50'>you created New post</div>";
                    
                            }
                            else{
                                echo "<div class='alert alert-danger mx-auto w-50'>you don't create post</div>";
                            }
                    
                           
                        }
                    ?>
                   
                        
                    <h3>Create New Post</h3>
                    <hr />

                    <div class="card">
                        <div class="card-body">
                            <form method="POST">
                                <div class="form-group mt-2">
                                    <label>Title</label>
                                    <input class="form-control" name="title" >
                                </div>

                                <div class="form-group mt-2">
                                    <label>Content</label>
                                    <textarea class="form-control" name="contect" ></textarea>
                                </div>

                                <div class="d-grid gap-2 col-12 mx-auto mt-5">
                                    <button  class="btn btn-block btn-primary" name="sum">Create Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- bootstrap - js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
  </body>
</html>