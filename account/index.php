<?php
 include_once "config/db.php";
 include 'modules/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-6 mx-auto" style="padding-top:100px">
            <div class="card">
            <br>
                <div class="card-body">
                    <h2 style="color:grey" class='text-center'>Admin Login</h2>
                       <?php if(isset($err)){
                            echo $err;
                        }
                        ?>
                    <form method="post" action="">
                        <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                        </div>
                        <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd" required>
                        </div>
                        <button type="submit" name="sb" class="btn btn-primary btn-block">Submit</button>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
