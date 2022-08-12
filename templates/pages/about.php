<!DOCTYPE html>
<html lang="en">

<head>
    <?php view('layouts/head') ?>
    <title>About Us</title>
</head>

<style>
    .mapouter {
        position: relative;
        text-align: right;
        width: 50%;
        height: 500px;
    }

    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        width: 100%;
        height: 500px;
    }

    .gmap_iframe {
        height: 500px !important;
    }

    .top-dev {
        clip-path: polygon(0 0, 100% 0, 100% calc(100% - 50px), 50% 100%, 0 calc(100% - 50px));
    }

    .bottom-dev {
        clip-path: polygon(0 50px, 50% 0, 100% 50px, 100% 100%, 0 100%);
        margin-top: -40px;
    }
</style>

<body>
    <div style="background-image:url(<?= url('assets/img/others/bg-com.jpg') ?>);" class="bg-cover bg-center bg-no-repeat top-dev">
        <div class="about-primary-title text-white">
            <h1>GRAYMARK INTERNATIONAL SOURCING CORPORATION</h1>
        </div>

        <div class="flex flex-col m-auto pb-[70px] w-[85%] text-white md:pb-[100px] md:w-8/12">
            <p class="about-content">Graymark International Sourcing Corporation was registered with Securities and Exchange Commission on January 7, 2008 with authorized capital stock of One Million Pesos equivalent to 1,000 shares. The company’s primary purpose is to engage in the business of Mineral, Sand and Gravel, Mining and trading of goods such as handicrafts, apparel and wearing accessories on wholesale/retail and exporting basis.</p>
        </div>
    </div>

    <div class="flex justify-center content-center m-auto">
        <h1 class="about-secondary-title">OUR DIRECTORS</h1>
    </div>

        <div class="flex flex-wrap justify-center content-center m-auto">

            <div class="about-primary-card">
                <img class="rounded-t-lg" src="<?= url("assets\img\others\profile.png") ?>" alt="">
                <div class="p-5 text-center">
                    <h1 class="text-xl font-bold">MARILOU J. SUPERIO</h1>
                    <p class="mb-3 about-card-content ">Chairman</p>
                </div>
            </div>

            <div class="about-primary-card">
                <img class="rounded-t-lg" src="<?= url("assets\img\others\profile.png") ?>" alt="">
                <div class="p-5 text-center mt-auto">
                    <h1 class="text-xl font-bold">GIOVANNE S. SUPERIO</h1>
                    <p class="mb-3 about-card-content ">President</p>
                </div>
            </div>

            <div class="about-primary-card">
                <img class="rounded-t-lg" src="<?= url("assets\img\others\profile.png") ?>" alt="">
                <div class="p-5 text-center mt-auto">
                    <h1 class="text-xl font-bold">ROGELIO ABELEDA JR.</h1>
                    <p class="mb-3 about-card-content ">Vice-President</p>
                </div>
            </div>

            <div class="about-primary-card">
                <img class="rounded-t-lg" src="<?= url("assets\img\others\profile.png") ?>" alt="">
                <div class="p-5 text-center mt-auto">
                    <h1 class="text-xl font-bold">GRAZIELLE MAE J. SUPERIO</h1>
                    <p class="mb-3 about-card-content ">CORPORATE SECRETARY</p>
                </div>
            </div>

            <div class="about-primary-card">
                <img class="rounded-t-lg" src="<?= url("assets\img\others\profile.png") ?>" alt="">
                <div class="p-5 text-center mt-auto">
                    <h1 class="text-xl font-bold">JAMES PAUL S. BERNARDO</h1>
                    <p class="mb-3 about-card-content ">Sales & Outsourcing Specialist</p>
                </div>
            </div>

    </div>

    <div class="bg-slate-100 p-1 bottom-dev mt-5 lg:p-10">
        <div class="text-3xl font-bold text-center pt-12 text-secondary-dark md:text-5xl md:p-10">
            <h1>OUR LOCATION</h1>
        </div>

        <div class="flex flex-col items-center justify-center m-auto my-5 bg-white rounded-lg border shadow-md w-[97%] overflow-hidden sm:w-[80%]  md:w-[75%] lg:w-[95%] xl:w-[80%]  lg:flex-row">
            <div class="flex flex-col justify-between p-2 leading-normal text-primary-green lg:w-1/2">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 ">BUSINESS ADDRESS</h5>
                <p class="mb-3 font-normal text-gray-700">1902A EAST TOWER 19TH FLOOR, PHIL STOCK EXCHANGE BLDG, PASIG CITY, PHILIPPINES.</p>
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900">CONTACT DETAILS</h5>
                <p class="mb-3 font-bold text-gray-700">LANDLINE:</p>
                <p class="mb-3 font-normal text-gray-700">(+63) 286307484</p>
                <p class="mb-3 font-bold text-gray-700">MOBILE:</p>
                <p class="mb-3 font-normal text-gray-700">(+63) 97 - 7786 - 426</p>
                <p class="mb-3 font-bold text-gray-700">E-MAIL ADDRESSES:</p>
                <p class="mb-3 font-normal text-gray-700">malou.superio@graymark.com.ph</p>
                <p class="mb-3 font-normal text-gray-700">girlie.espiritu@graymark.com.ph</p>
            </div>
            
            <div class="mapouter right-0 hidden lg:block">
                <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=PHIL STOCK EXCHANGE BLDG, PASIG CITY, PHILIPPINES.&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embedmapgenerator.com/">embed google maps in website</a></div>
            </div>
        </div>
    </div>

</body>

</html>