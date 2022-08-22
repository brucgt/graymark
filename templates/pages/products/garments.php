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

    .bottom-dev {
        clip-path: polygon(0 0, 50% 50px, 100% 0, 100% 100%, 0 100%);
        margin-top: -45px;
    }

    .box-dev {
        --mask: radial-gradient(50px at 50px 50px, #0000 98%, #000) -50px -50px;
        -webkit-mask: var(--mask);
        mask: var(--mask);
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
                <img class="hidden w-[300px] h-auto lg:block" src="<?= url('assets/img/products/garment/customized/CT.png') ?>" alt="">
                <h1 class="text-3xl font-bold p-4">Customized Tailoring</h1>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/express-alterations-indiana-custom-400x267.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mbr-1547x1250.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mens-suit-alterations-757x504.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/outputs-2000x1500.jpg') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[150px] h-auto lg:block" src="<?= url('assets/img/products/garment/customized/CT.png') ?>" alt="">
                <div class="flex flex-col text-center">
                    <h1 class="text-3xl font-bold p-4">Alteration</h1>
                    <p class="font-bold">Jeans and Dress Alterations for Men, Women and Children.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/express-alterations-indiana-custom-400x267.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mbr-1547x1250.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mens-suit-alterations-757x504.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/outputs-2000x1500.jpg') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[150px] h-auto lg:block" src="<?= url('assets/img/products/garment/customized/CT.png') ?>" alt="">
                <div class="flex flex-col text-center">
                    <h1 class="text-3xl font-bold p-4">Children's Apparel</h1>
                    <p class="font-bold">Girl's Dresses, Boy's Polo Shirt, Shorts.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/express-alterations-indiana-custom-400x267.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mbr-1547x1250.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mens-suit-alterations-757x504.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/outputs-2000x1500.jpg') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[150px] h-auto lg:block" src="<?= url('assets/img/products/garment/customized/CT.png') ?>" alt="">
                <div class="flex flex-col text-center">
                    <h1 class="text-3xl font-bold p-4">Sports Apparel</h1>
                    <p class="font-bold">Team Uniform, Jersey.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/express-alterations-indiana-custom-400x267.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mbr-1547x1250.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mens-suit-alterations-757x504.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/outputs-2000x1500.jpg') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[150px] h-auto lg:block" src="<?= url('assets/img/products/garment/customized/CT.png') ?>" alt="">
                <div class="flex flex-col text-center">
                    <h1 class="text-3xl font-bold p-4">Fire / Traffic Uniform</h1>
                    <p class="font-bold">Vest, Reflextorize, Raincoats.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/express-alterations-indiana-custom-400x267.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mbr-1547x1250.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mens-suit-alterations-757x504.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/outputs-2000x1500.jpg') ?>" alt="">
            </div>
        </div>

        <div>
            <div class="flex flex-row justify-center items-center">
                <img class="hidden w-[150px] h-auto lg:block" src="<?= url('assets/img/products/garment/customized/CT.png') ?>" alt="">
                <div class="flex flex-col text-center">
                    <h1 class="text-3xl font-bold p-4">Police, Military Uniform</h1>
                    <p class="font-bold">Army, Navy, ROTC, Police.</p>
                </div>
            </div>
            <div class="flex flex-wrap justify-center my-10">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/express-alterations-indiana-custom-400x267.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mbr-1547x1250.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/mens-suit-alterations-757x504.jpg') ?>" alt="">
                <img class="rounded-md m-2 w-[80%] h-auto" src="<?= url('assets/img/products/garment/customized/outputs-2000x1500.jpg') ?>" alt="">
            </div>
        </div>
    </div>

    <?php view('layouts/footer') ?>
</body>

</html>