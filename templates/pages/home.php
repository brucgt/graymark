<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
<head>
    <title>Document</title>
    <?php view('layouts/head') ?>
</head>
<body id="top" class="bg-no-repeat bg-[length:600px] sm:bg-[length:900px] lg:bg-[length:1050px] bg-[center_top_-10px] sm:bg-[center_top_-100px] lg:bg-[center_top_-170px]">
    <?php view('layouts/header') ?>
    <div>
        <div class="pt-24 md:pt-10 lg:pt-14 lg:w-2/3 xl:w-1/2 mx-auto">            
            <img  src="<?=url('assets\img\company\logo\graymark-high-uality-logo-6x4-inches.png')?>" alt="">
            <a href="#main-prod"><button class="tour mt-64 sm:mt-20 md:mt-10 lg:mt-20 xl:mt-10 mb-10 hover:scale-105 transition duration-200 mx-auto block px-4 rounded-full">Main Products<br><i class="scale-x-[2] transition duration-200 fa-solid fa-angles-down"></i></button></a>
        </div>
        <div id="main-prod" class="main-products bg-slate-600 text-white py-5">
           <h1 class="text-3xl text-center font-bold">MAIN PRODUCTS</h1>
         <section class="main-product-item">            
            <img class="w-2/5 pt-8 pb-4 mx-auto" src="<?=url('assets/img/others/mining.svg')?>" alt="">
            <a href="#"><h2 class="text-center underline underline-offset-2 text-xl font-medium">Mining & Quarry</h2></a>
            <p></p>
         </section>
         <section class="main-product-item">            
            <img class="w-2/5 pt-8 pb-4 mx-auto" src="<?=url('assets/img/others/industry.svg')?>" alt="">
            <a href="#"><h2 class="text-center underline underline-offset-2 text-xl font-medium">Industrial Commodities</h2></a>
            <p></p>
         </section>
         <section class="main-product-item">            
            <img class="w-2/5 pt-8 pb-4 mx-auto" src="<?=url('assets/img/others/garments.svg')?>" alt="">
            <a href="#"><h2 class="text-center underline underline-offset-2 text-xl font-medium">Garments</h2></a>
            <p></p>
         </section>
        </div>
    </div>
    <div class="backToTop">
        <i class="fa-solid fa-angle-up text-3xl text-white"></i>
</div>
    <?php view('layouts/footer') ?>
</body>
</html>