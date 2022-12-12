<?php
require __DIR__ . "/Models/Product.php";

// Categories
$cats = new Category("Cat", '<i class="fa-solid fa-cat"></i>');
$dogs = new Category("Dog", '<i class="fa-solid fa-dog"></i>');

// Products
$cat_food = new Product("Cat's Food", 5.99, "100gr", $cats, "https://www.zoobio.es/blog/wp-content/uploads/sites/4/2018/04/1.jpg", "Food");
$dog_food = new Product("Dog's Food", 7.50, "200gr", $dogs, "https://cdn.redcanina.es/wp-content/uploads/2018/12/27222546/perro-comiendo-pienso.jpg", "Food");
$cat_toy = new Product("Cat's Toy", 9.99, "120gr", $cats, "https://naturalpetshop.es/storage/productos/633.jpg", "Toy");
$dog_toy = new Product("Dog's Toy", 12.99, "400gr", $dogs, "https://static1.lucasylola.es/12133-thickbox_default/juguete-para-perro-hueso-de-caucho.jpg", "Toy");
$cat_bed = new Product("Cat's Bed", 19.99, "850gr", $cats, "https://m.media-amazon.com/images/I/614Prp5uzHL._AC_SX466_.jpg", "Wellness");
$dog_bed = new Product("Dog's Bed", 29.99, "1200gr", $dogs, "http://cdn.shopify.com/s/files/1/0109/2596/5374/products/cama-antiansiedad-mascotas-main.jpg?v=1592496741", "Wellness");
$product_array = [$cat_food, $dog_food, $cat_toy, $dog_toy, $cat_bed, $dog_bed];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <header>
        <nav class="navbar bg-light">
            <div class="container-fluid">
                <a class="navbar-brand align-middle" href="">
                    <div alt="Logo" class="d-inline-block align-middle">
                        <i class="fa-solid fa-shield-cat"></i>
                    </div>
                    Pet Store
                </a>
            </div>
        </nav>
    </header>


    <main>

        <div class="container mt-5">

            <div class="row">
                <?php for ($i = 0; $i < count($product_array); $i++) { ?>
                    <div class="col-6 col-sm-4 mb-4">
                        <div class="card" style="width: 100%;">
                            <img src="<?php echo $product_array[$i]->img; ?>" class="card-img-top" style="height: 13rem; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $product_array[$i]->name; ?></h5>
                                <div class="card-text mt-4">
                                    <p>Price: <?php echo $product_array[$i]->price ?> € </p>
                                    <p>Weight: <?php echo $product_array[$i]->weight ?> </p>
                                    <p>Category: <?php echo $product_array[$i]->category->name ?> </p>
                                    <p>Type: <?php echo $product_array[$i]->type ?> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>

        </div>

    </main>


    <footer>

    </footer>

</body>

</html>