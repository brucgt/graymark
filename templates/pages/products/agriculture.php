<!DOCTYPE html>
<html lang="en">

<head>
    <title>Agriculture Products | Graymark ISC</title>
    <?php view('layouts/head') ?>
</head>

<body>
    <?php view('layouts/header') ?>

    <div class="w-full">
        <?php view('layouts/product-header') ?>

        <header class="product-header">
            <div class="header-wrapper">
                <h5>Agriculture Products</h5>
                <p>Graymark International Sourcing Corporation offers various types of agri-products from sugar, rice to corn and other high value commodities for your production or for your other business needs.</p>
            </div>
        </header>
        <section class="product-list list-item-3">
            <div class="list-wrapper">
                <div class="list-item">
                    <div class="item-wrapper">
                        <div class="item-picture">
                            <img src="<?= url('assets/img/products/agriculture/004-506x285.jpg') ?>" alt="vietnam-rice">
                        </div>
                        <div class="item-info">
                            <h6>Vietnam Rice</h6>
                            <p><span>Variety:</span> 5451 & 504</p>
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <div class="item-wrapper">
                        <div class="item-picture">
                            <img src="<?= url('assets/img/products/agriculture/1406002.large-1024x1024-2-650x400.jpeg') ?>" alt="coco-sugar">
                        </div>
                        <div class="item-info">
                            <h6>Coco Sugar</h6>
                            <p>Distribution Supply & Export</p>
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <div class="item-wrapper">
                        <div class="item-picture">
                            <img src="<?= url('assets/img/products/agriculture/sugar-shutterstock-615908133.jpeg') ?>" alt="sugar">
                        </div>
                        <div class="item-info">
                            <h6>Sugar</h6>
                            <p>Imported</p>
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <div class="item-wrapper">
                        <div class="item-picture">
                            <img src="<?= url('assets/img/products/agriculture/rice-flour-4-700x450.jpeg') ?>" alt="rice-flour">
                        </div>
                        <div class="item-info">
                            <h6>Rice Flour</h6>
                            <p>Imported</p>
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <div class="item-wrapper">
                        <div class="item-picture">
                            <img src="<?= url('assets/img/products/agriculture/mbr-7.jpg') ?>" alt="pineapple">
                        </div>
                        <div class="item-info">
                            <h6>Pineapple</h6>
                            <p>Distribution Supply & Export</p>
                        </div>
                    </div>
                </div>
                <div class="list-item">
                    <div class="item-wrapper">
                        <div class="item-picture">
                            <img src="<?= url('assets/img/products/agriculture/mbr-9.jpg') ?>" alt="banana">
                        </div>
                        <div class="item-info">
                            <h6>Banana</h6>
                            <p>Distribution Supply & Export</p>
                        </div>
                    </div>
                </div>
                <div class="list-item last-item">
                    <div class="item-wrapper">
                        <div class="item-picture">
                            <img src="<?= url('assets/img/products/agriculture/mbr-8.jpg') ?>" alt="corn">
                        </div>
                        <div class="item-info">
                            <h6>Corn</h6>
                            <p>Distribution Supply & Export</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php view('layouts/product-footer') ?>
    </div>

    <?php view('layouts/footer') ?>
</body>

</html>