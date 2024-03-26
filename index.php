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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                                    <i class="fa-solid fa-<?= strtolower($product->category) ?>"></i>
                                    <span class="badge rounded-pill bg-warning text-dark"><?= $product::class ?></span>
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