<?php include "../include/dbconnect.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>


<div class="container mt-5">

    <div class="row">
        <div class="col-lg-3">
            <div class="list-group">
                <a href="index.php" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="categories.php" class="list-group-item list-group-item-action">Categories</a>
                <a href="products.php" class="list-group-item list-group-item-action">Products</a>
                <a href="logout.php" class="list-group-item list-group-item-action">logout</a>
            </div>
        </div>
        <div class="col-lg-9">
           <h2 class="lead">Manage Categories </h2>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="">Title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="">description</label>
                                    <textarea rows="6" name="description" class="form-control"></textarea>
                                </div>
                                <div class="mb-3">
                                    <input type="submit" name="send_cat" class="btn btn-success w-100">
                                </div>
                            </form>
                            <?php 
                            if(isset($_POST['send_cat'])){
                                    $title = $_POST['title'];
                                    $description  = $_POST['description'];

                                    $query = mysqli_query($connect,"insert into categories (title, description) value ('$title', '$description')");

                                    if($query){
                                        echo "<script>open('categories.php','_self')</script>";
                                    }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <table class="table">
                        <tr>
                            <th>id</th>
                            <th>TItle</th>
                            <th class="">Action</th>
                        </tr>
                        <?php
                            $calling_cat = mysqli_query($connect,"select * from categories");
                            while($pro = mysqli_fetch_array($calling_cat)){
                        ?>
                        <tr>
                            <td><?= $pro['id'];?></td>
                            <td><?= $pro['title'];?></td>
                            <td>
                                <a href="" class="btn btn-danger">delete</a>
                                <a href="" class="btn btn-danger">edit</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
           </div>
            </div>
        </div>
    </div>

</div>
    
</body>
</html>