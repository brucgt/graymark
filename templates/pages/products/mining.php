<!DOCTYPE html>
<html lang="en">

<head>
    <title>Mining | Graymark ISC</title>
    <?php view('layouts/head') ?>
</head>

<body>
    <?php view('layouts/header') ?>

    <div class="w-full">
        <?php view('layouts/product-header') ?>

        <header class="product-header">
            <div class="header-wrapper">
                <h5>Mining</h5>
                <p>The Company offers and supplies natural resources ready for operation and export mineral ores such as Iron, Copper and Nickel.</p>
            </div>
        </header>
        <section id="minerals">
            <div class="product-highlight" style="background-image: url('<?= url('assets/img/products/mineral/dsc-509-1108x739.jpg') ?>');">
                <div class="highlight-wrapper">
                    <h6>Minerals</h6>
                </div>
            </div>
            <div>
                <div class="py-12 relative flex flex-wrap justify-center items-center lg:max-w-6xl lg:mx-auto">
                    <div class="w-full mb-12">
                        <div class="w-full flex justify-center items-end h-screen bg-slate-600 bg-center bg-cover bg-no-repeat md:bg-left" style="background-image: url('<?= url('assets/img/products/mineral/dsc-490-4496x3000.jpg') ?>');">
                            <div class="w-full p-2 text-white bg-black bg-opacity-75 md:p-4">
                                <h6 class="text-4xl font-bold uppercase tracking-wide mb-2">Silica White Quartz</h6>
                                <p class="text-3xl font-bold tracking-wider">98.32% SiO<sub>2</sub></p>
                                <p class="mb-2 text-lg font-normal tracking-wide">Assay Percentages</p>
                                <p class="text-3xl font-bold tracking-wider">50k-150k Metric Tons per Month</p>
                                <p class="mb-2 text-lg font-normal tracking-wide">Supply Capacity</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="w-full flex justify-center items-end h-screen bg-slate-600 bg-center bg-cover bg-no-repeat md:bg-left" style="background-image: url('<?= url('assets/img/products/mineral/dsc-5311-2000x1335.jpg') ?>');">
                            <div class="w-full p-2 text-white bg-black bg-opacity-75 md:p-4">
                                <h6 class="text-4xl font-bold uppercase tracking-wide mb-2">Silica Red Quartz</h6>
                                <p class="text-3xl font-bold tracking-wider">94.64% SiO<sub>2</sub></p>
                                <p class="text-3xl font-bold tracking-wider">0.41% Fe</p>
                                <p class="mb-2 text-lg font-normal tracking-wide">Assay Percentages</p>
                                <p class="text-3xl font-bold tracking-wider">50k-150k Metric Tons per Month</p>
                                <p class="mb-2 text-lg font-normal tracking-wide">Supply Capacity</p>
                            </div>
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