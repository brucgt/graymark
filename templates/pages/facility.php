<!DOCTYPE html>
<html lang="en">

<head>
    <?php view('layouts/head') ?>
    <title>Facilities | Graymark</title>
</head>

<style>
    .top-dev {
        clip-path: polygon(0 0, 100% 0, 100% calc(100% - 50px), 50% 100%, 0 calc(100% - 50px));
    }
</style>

<body>
    <?php view('layouts/header') ?>

    <div class="top-dev text-center text-4xl p-10  text-white font-bold bg-[#0b201e] lg:text-7xl lg:p-20">
        <h1>Graymark Office and Production Facilities</h1>
    </div>

    <div>
        <h1 class="text-center text-3xl font-bold my-5 lg:text-5xl lg:my-10">Our Corporate Office</h1>
        <div class="m-auto grid gap-5 px-4 max-w-md lg:grid-cols-2 lg:max-w-screen-md ">
            <div>
                <img class="aspect-square rounded-md" src="<?= url('assets/img/facilities/office/img-4721-2000x1500.jpg') ?>" alt="">
                <h3 class="pb-5 text-center text-2xl font-bold">Graymark ISC Office</h3>
            </div>
            <div>
                <img class="aspect-square rounded-md" src="<?= url('assets/img/facilities/office/front-door-948x711.jpg') ?>" alt="">
                <h3 class="pb-5 text-center text-2xl font-bold">Graymark ICS Office</h3>
            </div>
            <div>
                <img class="aspect-square rounded-md" src="<?= url('assets/img/facilities/office/recieving-area-1076x606.jpg') ?>" alt="">
                <h3 class="pb-5 text-center text-2xl font-bold">Graymark ISC Reception Area</h3>
            </div>
            <div>
                <img class="aspect-square rounded-md" src="<?= url('assets/img/facilities/office/img-4714-1108x831.jpg') ?>" alt="">
                <h3 class="pb-5 text-center text-2xl font-bold">Board and Client Receiving Room</h3>
            </div>
        </div>
    </div>

    <div>
        <h1 class="text-center text-3xl font-bold my-5 lg:text-5xl lg:my-10">Design and Testing Division</h1>
        <div class="grid grid-cols-1 justify-center m-auto my-5 gap-10 px-4 lg:grid-cols-2 xl:grid-cols-4 pb-6">
            <div class="rounded-md">
                <img class="object-cover h-full" src="<?= url('assets/img/facilities/design/img-4717-2000x1500.jpg') ?>" alt="">
                <h3 class="pb-5 text-center text-xl font-bold">R&D and Design Area</h3>
            </div>
            <div class="rounded-md">
                <img class="object-cover h-full" src="<?= url('assets/img/facilities/design/designing-1108x831.jpg') ?>" alt="">
                <h3 class="pb-5 text-center text-xl font-bold">Design Tailoring Area</h3>
            </div>
            <div class="rounded-md">
                <img class="object-cover h-full" src="<?= url('assets/img/facilities/design/5369d2f6-e767-4ac5-a96a-651a1cf9eb24-1444x640.jpg') ?>" alt="">
                <h3 class="pb-5 text-center text-xl font-bold">Design Tailoring Area</h3>
            </div>
            <div class="rounded-md">
                <img class="object-cover h-full" src="<?= url('assets/img/facilities/design/outputs-1076x869.jpg') ?>" alt="">
                <h3 class="pb-5 text-center text-xl font-bold">Samples and Testing Designs</h3>
            </div>
        </div>
    </div>
    <div class="text-center text-3xl font-bold my-5 lg:text-5xl lg:my-10">Factory and Production</div>
    <div class="m-auto my-5 w-[95%] lg:w-[80%] xl:w-[60%]">
        <div id="indicators-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-0 z-20" data-carousel-item="active">
                    <img src="<?= url('assets/img/facilities/factory/stocks-1026x550.jpg') ?>" class="absolute block object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform translate-x-full z-10" data-carousel-item="">
                    <img src="<?= url('assets/img/facilities/factory/sewing-area-1026x550.jpg') ?>" class="absolute block object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                    <img src="<?= url('assets/img/facilities/factory/scan0024-2000x1827.jpeg') ?>" class="absolute block object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 4 -->
                <div class="hidden duration-700 ease-in-out absolute inset-0 transition-all transform" data-carousel-item="">
                    <img src="<?= url('assets/img/facilities/factory/ironing-area-1026x550.jpg') ?>" class="absolute block object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
                <!-- Item 5 -->
                <div class="duration-700 ease-in-out absolute inset-0 transition-all transform -translate-x-full z-10" data-carousel-item="">
                    <img src="<?= url('assets/img/facilities/factory/packing-area-1026x550.jpg') ?>" class="absolute block object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-white" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white " aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white " aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white " aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-white/50 hover:bg-white " aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev="">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                    </svg>
                    <span class="sr-only">Previous</span>
                </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next="">
                <span class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="sr-only">Next</span>
                </span>
            </button>
        </div>
    </div>

    <?php view('layouts/footer') ?>
</body>

</html>