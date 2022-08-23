<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php view('layouts/head') ?>
</head>

<style>
    .top-dev {
        clip-path: polygon(0 0, 100% 0, 100% calc(100% - 50px), 50% 100%, 0 calc(100% - 50px));
    }
</style>

<body>
    <?php view('layouts/header') ?>

    <div class="w-full">
        <?php view('layouts/product-header') ?>

        <div class="product-list">

        </div>
    </div>

    <div class="top-dev text-center text-white font-bold p-10 bg-center bg-no-repeat bg-cover lg:p-40" style="background-image: url('<?= url('assets/img/others/main-prods-landscape-2-bg-2000x1177.jpg') ?>');">
        <h1 class="text-2xl lg:text-6xl p-4">Graymark International Sourcing Corporation</h1>
        <h2 class="text-xl lg:text-4xl p-4">Garments</h2>
        <p class="text-lg lg:text-2xl p-4">Tailoring and Alteration for Mens, Womens and Childrens.</p>
    </div>

    <div class="my-10 mx-2">
        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[280px] h-auto lg:block" src="<?= url('assets/img/products/garment/customized/CT.png') ?>" alt="">
                <h1 class="text-3xl font-bold p-4 lg:text-6xl">Customized Tailoring</h1>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/customized/express-alterations-indiana-custom-400x267.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/customized/mbr-1547x1250.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/customized/mens-suit-alterations-757x504.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/customized/outputs-2000x1500.jpg') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[280px] h-auto lg:block" src="<?= url('assets/img/products/garment/alteration/AL.png') ?>" alt="">
                <div class="flex flex-col p-4 text-center lg:text-left">
                    <h1 class="text-3xl font-bold lg:text-6xl">Alteration</h1>
                    <p class="text-lg font-bold py-4">Jeans and Dress Alterations for Men, Women and Children.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/alteration/hemming-pants-724x482.jpeg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/alteration/bcaa7092660cac3c7d9fe137a422308bb4-outfit7.2x.w710-1.webp') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/alteration/https-images.prismic.io-suitshop-f1191453-7c53-45d1-8e09-78475c10f204-pantbreak-1076x814.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/alteration/jeansalterationslondon-596x533.jpeg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/alteration/diy-clothing-tutorials-before-and-after-refashioned-dress-by-gretchenhope-via-flickr-640x589.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/alteration/7edb5671fa59ec56178d1d202d341ce3-841x779.png') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[280px] h-auto lg:block" src="<?= url('assets/img/products/garment/childrens-wear/CA.png') ?>" alt="">
                <div class="flex flex-col p-4 text-center lg:text-left">
                    <h1 class="text-3xl font-bold lg:text-6xl">Children's Apparel</h1>
                    <p class="text-lg font-bold py-4">Girl's Dresses, Boy's Polo Shirt, Shorts.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-1-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-2-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-3-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-5-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-6-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-8-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-9-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-10-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-11-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-12-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-17-1015x976.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[300px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-18-1015x976.jpg') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[280px] h-auto lg:block" src="<?= url('assets/img/products/garment/sports/SP.png') ?>" alt="">
                <div class="flex flex-col p-4 text-center lg:text-left">
                    <h1 class="text-3xl font-bold lg:text-6xl">Sports Apparel</h1>
                    <p class="text-lg font-bold py-4">Team Uniform, Jersey.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/sports/sport-wear3-1-1026x550.jpeg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/sports/sport-wear-3-1026x550.jpeg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/sports/sport-wear5-1-1026x550.jpeg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/sports/sport-wear4-1-1026x550.jpeg') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[280px] h-auto lg:block" src="<?= url('assets/img/products/garment/fire-traffic-uniform/FTU.png') ?>" alt="">
                <div class="flex flex-col p-4 text-center lg:text-left">
                    <h1 class="text-3xl font-bold lg:text-6xl">Fire / Traffic Uniform</h1>
                    <p class="text-lg font-bold py-4">Vest, Reflextorize, Raincoats.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/fire-traffic-uniform/51gfd1fasl.-sl500-ac-ss350-350x350.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/fire-traffic-uniform/91ihmnaz3tl.-ac-sy450-369x450.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/fire-traffic-uniform/abmk-131751645458954032ugbr5he921-640x480.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/fire-traffic-uniform/bdd919d834365336eb8564c208455df3-800x800.jpg') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[280px] h-auto lg:block" src="<?= url('assets/img/products/garment/military/M.png') ?>" alt="">
                <div class="flex flex-col p-4 text-center lg:text-left">
                    <h1 class="text-3xl font-bold lg:text-6xl">Police, Military Uniform</h1>
                    <p class="text-lg font-bold py-4">Army, Navy, ROTC, Police.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/military/3062808585-f0c089ec53-z-639x438.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/military/navy-580x356.jpeg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/military/pa-soldiers-with-new-uniform-643x361.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[500px] h-auto shadow-lg" src="<?= url('assets/img/products/garment/military/pnp-uniforms-970x614.jpg') ?>" alt="">
            </div>
        </div>
    </div>

    <?php view('layouts/footer') ?>
</body>

</html>