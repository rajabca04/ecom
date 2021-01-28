<?php include "include/dbconnect.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
    <?php include "include/header.php";?>

        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-3">
                    <div class="list-group-item list-group-item-action active">Categories</div>
                    <?php 
                        $calling_cat = mysqli_query($connect,"select * from categories");
                        while($row = mysqli_fetch_array($calling_cat)): 
                    ?>
                    <a href="index.php?cat=<?= $row['title'];?> " class="list-group-item list-group-item-action"><?= $row['title'];?><span>(<?=count_data("select * from products where p_category_id='".$row['id']."'");?>)</span></a>
                    <?php endwhile;?>
                </div>
                <div class="col-lg-9">
                    <div class="row">   
                        <?php
                            $calling_product= mysqli_query($connect,"select * from products JOIN categories ON products.p_category_id = categories.id where p_id ='".$_GET['pro']."'");
                            while($row = mysqli_fetch_array($calling_product)){
                        ?>
                <div class="col-3">
                    <div class="card mb-4">
                        <img src="<?= "admin/product_image/".$row['image'];?>" alt="" class="w-100 " height="200px">
                            <div class="card-body">
                                <h4>Rs. <?= $row['price'];?>/-</h4>
                                <span><?= $row['brand'];?></span>
                                <div class="lead text-muted"><?= $row['title'];?></div>
                                <h6 class="small font-weight-bolder text-truncate "><?= $row['p_title'];?></h6>
                            </div>
                            <div class="card">
                                <div class="card-header text-center text-info">Product Description.</div>
                                <div class="card-body">
                                    <?= $row['p_description']; ?>
                                </div>
                            </div>
                        </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php include "include/footer.php";?>

</body>
</html>