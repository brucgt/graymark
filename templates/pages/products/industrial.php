<!DOCTYPE html>
<html lang="en">

<head>
    <title>Industrial Commodities | Graymark ISC</title>
    <?php view('layouts/head') ?>
</head>

<body>
    <?php view('layouts/header') ?>

    <div class="w-full">
        <?php view('layouts/product-header') ?>

        <header class="product-header">
            <div class="header-wrapper">
                <h5>Industrial Commodities</h5>
                <p>Graymark International Sourcing Corporation offers various types of Oil/Petrol and Cement.</p>
            </div>
        </header>
        <section class="product-list list-item-2">
            <div class="list-wrapper">
                <div class="list-item">
                    <div class="item-wrapper">
                        <div class="item-picture">
                            <img src="<?= url('assets/img/products/industrial/file78flefwgwtl18azjg47x-1577992859.jpeg') ?>" alt="oil-petrol">
                        </div>
                        <div class="item-info">
                            <h6>Oil/Petrol</h6>
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <div class="item-wrapper">
                        <div class="item-picture">
                            <img src="<?= url('assets/img/products/industrial/cement-3-700x450.jpg') ?>" alt="cement">
                        </div>
                        <div class="item-info">
                            <h6>Cement</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php view('layouts/product-footer') ?>
    </div>

    <div class="backToTop cursor-pointer">
        <i class="fa-solid fa-angle-up text-3xl text-white"></i>
    </div>

    <?php view('layouts/footer') ?>
</body>

</html>