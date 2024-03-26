<?php
require_once __DIR__ . '/database/db.php'

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
</head>

<body>

    <header class="bg-light">
        <nav class="nav container justify-content-center p-3 gap-5">
            <h2>The Pet Store</h2>
            <a class="nav-link active" href="#" aria-current="page">Products</a>
            <a class="nav-link" href="#">Categories</a>
            <a class="nav-link disabled" href="#">Contact us</a>
        </nav>
    </header>

    <main class="mt-3">
        <div class="container">
            <div class="row">
                <?php foreach ($dbStore as $product) : ?>

                    <div class="col-sm-12 col-md-6 col-lg-3 mt-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h3 class="text-center"><?= $product->name ?></h3>
                                <img width="100%" src="<?= $product->image ?>" alt="">
                            </div>
                            <div class="card-footer">
                                <p><?= $product->description ?></p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-success"><?= $product->price . ' ' . '€' ?></span>
                                    <h6 class="text-center"><?= $product->category ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer></footer>

</body>

</html>