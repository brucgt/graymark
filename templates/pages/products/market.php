<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products | Graymark Market</title>
    <?php view('layouts/head') ?>
</head>

<style>
.top-dev {
  clip-path: polygon(0 0,100% 0,100% calc(100% - 50px),calc(50% + 283.56px) calc(100% - 50px),50% 100%,calc(50% - 283.56px) calc(100% - 50px),0 calc(100% - 50px));
}

</style>

<body>
    <?php view('layouts/header') ?>

    <div class="w-full">
        <?php view('layouts/product-header') ?>

        <div class="product-list">

        </div>
    </div>
    <!-- flores -->
    <div>
        <div style="background-image: url(<?= url('assets/img/products/bg-gm.jpg')?>);" class="top-dev bg-cover bg-no-repeat bg-center">
            <div class="flex flex-col m-auto text-white w-[90%] py-10 lg:m-0 lg:w-[70%] lg:p-20">
                <h1 class="text-3xl font-bold p-5 lg:p-10 lg:text-8xl">Graymark Market</h1>
                <p class="text-lg p-5 lg:text-4xl w-[80%] sm:w-[60%] lg:w-full lg:p-10">Our Company supports its own local farm partners by offering our clients freshly picked fruits and veggies straight from farms to your location with care.</p>
            </div>
        </div>
    </div>

    <div class="p-4 md:p-10 lg:p-16">
        <img src="<?= url('assets/img/products/agriculture/gmfv-1500x4073.png')?>" alt="">
    </div>
    <!-- end flores -->
    <?php view('layouts/footer') ?>
</body>

</html>