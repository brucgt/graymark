<!DOCTYPE html>
<html lang="en">

<head>
    <title>Quarry | Graymark ISC</title>
    <?php view('layouts/head') ?>
</head>

<body>
    <?php view('layouts/header') ?>

    <div class="w-full">
        <?php view('layouts/product-header') ?>

        <header class="product-header">
            <div class="header-wrapper center-wrapper">
                <h5>Mining</h5>
                <p>The Company offers and supplies natural resources ready for operation and export mineral ores such as Iron, Copper and Nickel.</p>
            </div>
        </header>
        <section id="quarry">
            <div class="product-highlight" style="background-image: url('<?= url('assets/img/products/quarry/boulder/picture-stock-cdo-2-1080x1440.jpeg') ?>');">
                <div class="highlight-wrapper">
                    <h6>Quarry</h6>
                </div>
            </div>
        </section>

        <?php view('layouts/product-footer') ?>
    </div>

    <?php view('layouts/footer') ?>
</body>

</html>