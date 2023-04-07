<?php

require 'db_conn.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Student View</title>
  </head>
  <body>

  <div class="container">
   
  
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>student view details
                        <a href="index.php" class="btn btn-danger float-end">BACK</a>
                </div>
                <div class="card-body">
                    <?php
                    if(isset($_GET['id']))
                    {
                        $id = mysqli_real_escape_string($conn,$_GET['id']);
                        $query = "select * from students where id='$id'";
                        $query_run = mysqli_query($conn,$query);

                        if(mysqli_num_rows($query_run) > 0){
                            $student = mysqli_fetch_array($query_run);
                            ?>
                         
                             
                                <div class="mb-3">
                                <label>student Name</label>
                                <p class='form-control'>
                                    <?=$student['name'];?>
                                </p>
                                </div>
                                <div class="mb-3">
                                <label>student Email</label>
                                <p class='form-control'>
                                    <?=$student['email'];?>
                                </p>
                                </div>
                                <div class="mb-3">
                                <label>student Phone_No</label>
                                <p class='form-control'>
                                    <?=$student['phone'];?>
                                </p>
                                </div>
                                <div class="mb-3">
                                <label>student Course</label>
                                <p class='form-control'>
                                    <?=$student['course'];?>
                                </p>
                                </div>
                               
                          
                            <?php
                        }
                        else{
                            echo "NO such id found";
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
  </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>