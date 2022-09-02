<!DOCTYPE html>
<html class="scroll-smooth" lang="en">

<head>
    <title>Graymark | Home</title>
    <?php view('layouts/head') ?>
</head>

<body id="top">
    <?php view('layouts/header') ?>
    <div>
        <div class="bg-[<?= url('assets/img/others/staff-landscape-bg-2000x1414.jpg')?>] bg-no-repeat bg-cover bg-center pt-24 md:pt-10 lg:pt-14 lg:w-2/3 xl:w-1/2 mx-auto">
            <img src="<?= url('assets/img/company/logo/graymark-high-uality-logo-3x2-no-undertext.png') ?>" alt="">
            <h1 class="text-2xl text-center font-bold p-4 lg:text-5xl">Graymark International Sourcing Corporation</h1>
            <a href="#main-prod"><button class="tour mt-64 sm:mt-20 md:mt-10 lg:mt-20 xl:mt-10 mb-10 hover:scale-105 transition duration-200 mx-auto block px-4 rounded-full">Main Products<br><i class="scale-x-[2] transition duration-200 fa-solid fa-angles-down"></i></button></a>
        </div>
        <div id="main-prod" class="main-products bg-slate-600 text-white py-5">
            <h1 class="text-3xl text-center font-bold">MAIN PRODUCTS</h1>

            <div class="flex flex-wrap justify-center text-center">

                <div class="max-w-m m-4 bg-white rounded-lg shadow-md ">
                    <img class="rounded-t-lg w-[400px] h-[300px]" src="<?= url('assets/img/home (1).jpg') ?>" alt="">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Mining and Quarry</h5>
                    </div>
                </div>

                <div class="max-w-m m-4 bg-white rounded-lg shadow-md ">
                    <img class="rounded-t-lg w-[400px] h-[300px]" src="<?= url('assets/img/home (2).jpg') ?>" alt="">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Industrial Commodities</h5>
                    </div>
                </div>

                <div class="max-w-m m-4 bg-white rounded-lg shadow-md ">
                    <img class="rounded-t-lg w-[400px] h-[300px]" src="<?= url('assets/img/home (3).jpg') ?>" alt="">
                    <div class="p-5">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">Garments</h5>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="backToTop">
        <i class="fa-solid fa-angle-up text-3xl text-white"></i>
    </div>
    <?php view('layouts/footer') ?>
</body>

</html>