<?php   



include "db_conn.php";
if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $gender=$_POST['gender'];

   $sql="INSERT INTO `crud`(`id`, `first_name`, `last_name`, `email`, `gender`) VALUES (NULL,'$first_name','$last_name','$email','$gender')";
   $result=mysqli_query($conn,$sql);

   if($result){
    header("Location: index.php?msg=new record created successfully");
   }

   else{
    echo "failed:" . mysqli_error($conn);
   }

}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Font awasomw -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav   class="navbar navbar-light  justify-content-center fs-3 mb-5 "  style=" background-color:#00ff5573 "  >
Base de  datos
    </nav>

    <div class="container">
        <div class="text-center mb-4" >
            <h3>add new User</h3>
            <p class="text-muted"> complete the form below to add a new</p>

            </div>
            </div>
            <div name="id" ></div>


            <div class="container  d-flex justify-content-center ">
                <form action=""  method="post" style="width:50vw;   min-width:300px;" >
                <div class="row mb-3 ">

                <div class="col">
                    <label for="" class="form-label" >first Name</label>
                    <input type="text" class="form-control" name="first_name" placeholder="tracy"  >
                </div>
                <div class="col">
                    <label for="" class="form-label" >Last Name</label>
                    <input type="text" class="form-control" name="last_name" placeholder="Silverio"  >
                </div>

                <!-- <div class="col">
                    <label for="" class="form-label" >first Name</label>
                    <input type="text" class="form-control" name="first_name;" placeholder="tracy"  >
                </div> -->

                <div class="mb-3" >
                <label for="" class="form-label" >email</label>
                    <input type="email" class="form-control" name="email" placeholder="home@gmail.com"  >
                </div>



                <div class="form-group mb-3 ">
                    <label> gender</label>
                    &nbsp;

                    <input  class="form-check-input" name="gender"  type="radio"  id="male" value="male">
                    <label for="male"  class="form-input-label" >Male</label>
                    &nbsp;
                    <input  class="form-check-input" name="gender"  type="radio"  id="female" value="female">
                    <label for="female"  class="form-input-label" >female</label>
                </div>
                </div>

                <div>
                    <button type="submit"  class="btn btn-success " name="submit"  >save</button>
                    <a href="index.php" class="btn btn-danger" >Cancel</a>
                </div>

                </form>


    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>