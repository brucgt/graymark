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
            <div class="header-wrapper center-wrapper">
                <h5>Mining</h5>
                <p>The Company offers and supplies natural resources ready for operation and export mineral ores such as Iron, Copper and Nickel.</p>
            </div>
        </header>
        <section id="minerals" class="product-section">
            <header class="product-highlight">
                <div class="highlight-wrapper center-wrapper">
                    <div>
                        <h6>Minerals</h6>
                    </div>
                </div>
            </header>
            <div class="category-content">
                <div class="content-wrapper center-wrapper">
                    <div class="w-full my-8">
                        <div class="relative flex flex-wrap shadow-md">
                            <div class="w-full bg-slate-600 md:w-1/2 md:order-2">
                                <img src="<?= url('assets/img/products/mineral/dsc-490-4496x3000.jpg') ?>" alt="silica-white">
                            </div>
                            <div class="w-full p-4 border md:w-1/2 md:order-1 lg:p-8">
                                <h6 class="text-2xl font-semibold font-broad lg:text-3xl">Silica White Quartz</h6>
                                <div class="mb-4">
                                    <p class="text-xl font-medium lg:text-2xl">98.32% SiO<sub>2</sub></p>
                                    <p class="text-gray-500 lg:text-lg">Assay Percentages</p>
                                </div>
                                <div class="mb-4">
                                    <p class="text-xl font-medium lg:text-2xl">50k-150k Metric Tons per Month</p>
                                    <p class="text-gray-500 lg:text-lg">Supply Capacity</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-gallery">
                            <h6>Product Gallery</h6>
                            <div class="gallery-container">
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-473-554x370.jpg') ?>" alt="silica-white-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-476-554x370.jpg') ?>" alt="silica-white-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-477-554x370.jpg') ?>" alt="silica-white-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-482-4496x3000.jpg') ?>" alt="silica-white-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-487-554x370.jpg') ?>" alt="silica-white-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-491-4496x3000.jpg') ?>" alt="silica-white-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-492-554x370.jpg') ?>" alt="silica-white-gallery-item"></div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="relative flex flex-wrap shadow-md">
                            <div class="w-full bg-slate-600 md:w-1/2 md:order-2">
                                <img src="<?= url('assets/img/products/mineral/dsc-5311-2000x1335.jpg') ?>" alt="silica-red">
                            </div>
                            <div class="w-full p-4 border md:w-1/2 md:order-1 lg:p-8">
                                <h6 class="text-2xl font-semibold font-broad lg:text-3xl">Silica Red Quartz</h6>
                                <div class="mb-4">
                                    <p class="inline-block text-xl font-medium lg:text-2xl">94.64% SiO<sub>2</sub></p>
                                    <p class="inline-block text-xl lg:text-2xl">,</p>
                                    <p class="inline-block text-xl font-medium lg:text-2xl">0.41% Fe</p>
                                    <p class="text-gray-500 lg:text-lg">Assay Percentages</p>
                                </div>
                                <div class="mb-4">
                                    <p class="text-xl font-medium lg:text-2xl">50k-150k Metric Tons per Month</p>
                                    <p class="text-gray-500 lg:text-lg">Supply Capacity</p>
                                </div>
                            </div>
                        </div>
                        <div class="product-gallery">
                            <h6>Product Gallery</h6>
                            <div class="gallery-container">
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-509-1108x739.jpg') ?>" alt="silica-red-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-513-1108x739.jpg') ?>" alt="silica-red-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-518-1108x739.jpg') ?>" alt="silica-red-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-548-4496x3000.jpg') ?>" alt="silica-red-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-549-1108x739.jpg') ?>" alt="silica-red-gallery-item"></div>
                                <div class="gallery-item"><img src="<?= url('assets/img/products/mineral/dsc-529-1108x739.jpg') ?>" alt="silica-red-gallery-item"></div>
                            </div>
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