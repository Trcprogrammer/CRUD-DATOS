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
Base de datos
    </nav>
    <div class="container">

    <?php
if(isset($_GET['msg'])){

    $msg=$_GET['msg'];
    echo  '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  '.$msg.'
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
    ?>
        <a href="add_new.php" class="btn btn-dark  mb-1"    >Add new</a>


        <table class="table  table-hover text-center ">
  <thead class="table-dark" >
    <tr>
      <th scope="col">id</th>
      <th scope="col">Firs name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">gender</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    <?php 
    include  "db_conn.php";
    $sql="SELECT * FROM  `crud` ";
    $result=mysqli_query($conn,$sql);

    while ($row = mysqli_fetch_assoc($result)){
        ?>
        <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['first_name']?></td>
        <td><?php echo $row['last_name']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['gender']?></td>
     
  
        <td>
          <a href="edit.php?id=<?php  echo $row['id'] ?>" class="link-dark" ><i class="fa-solid fa-pen-to-square fa-5 me-3" ></i> </a>
          <a href="delete.php?id=<?php  echo $row['id'] ?>" class="link-dark" ><i class="fa-solid fa-trash fs-5" ></i> </a>
  
        </td>
  
      </tr>
<?php
    }




    
    ?>
    
   
  </tbody>
</table>
    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>