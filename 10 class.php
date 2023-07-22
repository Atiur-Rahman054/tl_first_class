<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'user_management');

    try{
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }catch(Exception $e){
        echo "Connection failed: " . $e->getMessage();
    }



    if(isset($_POST['submit'])){

        $errors = [];

        $name = htmlentities(trim($_POST['name']));//validation
        $password = htmlentities(trim($_POST['password']));
        $encpass = md5($password);
        $email = htmlentities(trim($_POST['email']));//validation
        $photo = $_FILES['photo'];

        if($photo['name']){
            $type = ["jpg", "png", "gif", "jpeg"];
            $fileExt = explode(".", $photo['name']);
            
            if (!in_array(end($fileExt), $type)){
                $errors['imageErr'] = "Enter valid image";
            }elseif($photo['size'] > 1000000){
                $errors['imageErr'] = "Please enter less then 1mb image only";
            }else{
                $photo_name = uniqid() . "." . end($fileExt);
                move_uploaded_file($photo['tmp_name'], 'profile/'. $photo_name);
            }
        }else{
            $photo_name = null;
        }

        if(empty($name)){
            $errors['nameErr'] = "Enter your name";
        }elseif(strlen($name) > 50){
            $errors['nameErr'] = "please enter less than 50 character";
        }

        if(empty($password)){
            $errors['passErr'] = "Enter your password";
        }elseif(strlen($password) < 4){
            $errors['passErr'] = "password must be 4 digit long";
        }

        if(empty($email)){
            $errors['emailErr'] = "Enter your email";
        }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errors['emailErr'] = "Enter valid email";
        }

        if(empty($errors)){
           $query = "INSERT INTO `users`(`name`, `password`, `email`, `image`) VALUES ('$name', '$encpass', '$email', '$photo_name')";
           $result = mysqli_query($conn, $query);
            if($result){
                $successmsg = "User inserted successfully!";
            }else{
                $errormsg = "Insert Error!";
            }
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
                <?php 
                    if(isset($successmsg)){
                ?>
                <div class="alert alert-success">
                    <p><?= $successmsg ?></p>
                </div>
                <?php
                    }
                    if(isset($errormsg)){
                ?>
                <div class="alert alert-danger">
                    <p><?= $errormsg ?></p>
                </div>
                <?php
                    }
                ?>
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
                                    <?php 
                                        if(isset($errors['imageErr'])){
                                            echo"<p class='text-danger'>" . $errors['imageErr'] . "</P>";
                                        }
                                     ?>
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