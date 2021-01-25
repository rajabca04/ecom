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
            <div class="row">

                <div class="col-6">
                    <div class="card bg-danger text-white">
                        <div class="card-body">
                            <h2>Products</h2>
                            <h1 class="display-4">300+</h1>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card bg-info text-white">
                        <div class="card-body">
                            <h2>Categories</h2>
                            <h1 class="display-4">200+</h1>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>
    
    </div>

</div>
    
</body>
</html>