<?php
    if(isset($_POST['submit'])){

        $name = htmlentities(trim($_POST['name']));//validation
        $password = htmlentities(trim($_POST['password']));
        $email = htmlentities(trim($_POST['email']));//validation
        $photo = $_FILES['photo'];

        $errors = [];

        if(empty($name)){
            $errors['nameErr'] = "Enter your name";
        }

        if(empty($password)){
            $errors['passErr'] = "Enter your password";
        }

        if(empty($email)){
            $errors['emailErr'] = "Enter your email";
        }

        if(empty($errors)){
            echo $name . "</br>" . $password . "</br>" . $email;

        }


    }
    ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HTML FORM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>
        <section class="mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h2>User input form</h2>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="my-2">
                                    <input type="text" name="name" class="form-control" placeholder="User name">
                                    <?php 
                                        if(isset($errors['nameErr'])){
                                            echo"<p class='text-danger'>" . $errors['nameErr'] . "</P>";
                                        }
                                     ?>
                                </div>
                                <div class="my-2">
                                    <input type="pasword" name="password" class="form-control" placeholder="User password">
                                    <?php 
                                        if(isset($errors['passErr'])){
                                            echo"<p class='text-danger'>" . $errors['passErr'] . "</P>";
                                        }
                                     ?>
                                </div>
                                <div class="my-2">
                                    <input type="email" name="email" class="form-control" placeholder="User email">
                                    <?php 
                                        if(isset($errors['emailErr'])){
                                            echo"<p class='text-danger'>" . $errors['emailErr'] . "</P>";
                                        }
                                     ?>
                                </div>
                                <div class="my-2">
                                    <input type="file" name="photo">
                                </div>
                                <div class="my-2">
                                    <button type="submit" name="submit" class="btn btn-sm btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>


<!-- 
                    <h2>User Name: <?php echo $_POST['name']?></h2>
                    <h2>User email: <?= $_POST['email'] ?></h2> -->

                </div>
            </div>
        </section>
    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>