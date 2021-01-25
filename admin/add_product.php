<?php include "../include/dbconnect.php";?>
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
          <form action="add_product.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label>brand</label>
                    <input type="text" name="brand" class="form-control">
                </div>
                <div class="mb-3">
                    <label>price</label>
                    <input type="text" name="price" class="form-control">
                </div>
                <div class="mb-3">
                    <label>discount_price</label>
                    <input type="text" name="discount_price" class="form-control">
                </div>
                <div class="mb-3">
                    <label>category</label>
                    <select name="category" class="form-control">
                            <?php 
                            $calling_cat = mysqli_query($connect,"select * from categories");
                            while($row = mysqli_fetch_array($calling_cat)){
                            ?>
                            <option value="<?= $row['id'];?>"><?= $row['title'];?></option>
                            <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>image</label>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="desc">description</label>
                    <input type="text" id="desc" name="description" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" name="addPro" class="btn btn-danger w-100">
                </div>
          </form>
        </div>
    
    </div>

</div>
    
</body>
</html>

<?php 
if(isset($_POST['addPro'])){
    $title  = $_POST['title'];
    $brand  = $_POST['brand'];
    $category  = $_POST['category'];
    $price  = $_POST['price'];
    $discount_price  = $_POST['discount_price'];
    $description  = $_POST['description'];

    //image work
    $image  = $_FILES['image']['name'];
    $tmp_image = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_image,"product_image/$image");

    $query = mysqli_query($connect,"insert into products (p_title, p_category_id, brand, price, p_description, discount_price, image) value ('$title','$category','$brand','$price','$description','$discount_price','$image')");

    if($query){
        echo "<script>open('products.php','_self')</script>";
    }
}

?>