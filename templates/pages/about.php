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
        width: 600px;
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
</style>

<body>

    <div class="about-primary-title">
        <h1>GRAYMARK INTERNATIONAL SOURCING CORPORATION</h1>
    </div>

    <div class="flex flex-col m-auto w-8/12">
        <p class="about-secondary-title">COMPANY DETAILS</p>
        <p class="about-content">Graymark International Sourcing Corporation was registered with Securities and Exchange Commission on January 7, 2008 with authorized capital stock of One Million Pesos equivalent to 1,000 shares. The company’s primary purpose is to engage in the business of Mineral, Sand and Gravel, Mining and trading of goods such as handicrafts, apparel and wearing accessories on wholesale/retail and exporting basis.</p>
    </div>

    <div class="flex justify-center content-center m-auto">
        <h1 class="about-secondary-title">OUR DIRECTORS</h1>
    </div>

    <div class="flex flex-row justify-center content-center m-auto">

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

    <div class="flex flex-col text-center">
        <h1 class="text-5xl font-bold p-10">OUR VALUED CLIENTS</h1>
        <div class="text-2xl font-normal">
            <ol>
                <li>FOREMOST FOODS INTERNATIONAL INC.</li>
                <li>INTERNATIONAL INTIMATES</li>
                <li>NORTHLAND CLOTHING PTY LTD.</li>
                <li>THE LITTLE IMPORT COMPANY</li>
                <li>EL CORTE INGLES, S.A.</li>
                <li>STAR CHILDREN'S DRESS CO., INC.</li>
                <li>PANACEA PRODUCT CORPORATION</li>
            </ol>
        </div>
    </div>

    <div class="flex justify-center content-center m-auto">
        <h1 class="about-secondary-title">ASSOCIATED PARTNERS AND MEMBERS</h1>
    </div>

    <div class="flex flex-wrap justify-center content-center">
        <div class="about-secondary-card ">
            <h5 class="about-card-title">AAA Garments & Textile Mfg Inc.</h5>
            <p class="about-card-content ">Supplier</p>
            <p class="about-card-content ">ADDRESS: Warehouse No.3, Republic Tube Compound, Km 16, Pamplona, Las Piñas City.</p>
            <p class="about-card-content ">TEL. : 632-8751487 / 632-873041</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">SYON, Inc.</h5>
            <p class="about-card-content ">Supplier</p>
            <p class="about-card-content ">ADDRESS: Lot 1 E. Maguyam Road, Maguyam, Silang Cavite.</p>
            <p class="about-card-content ">TEL. : 632-529-8350</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">H & S Corporation</h5>
            <p class="about-card-content ">ADDRESS: Building No. 2056 Corregidor Highway Ilanin Forest, East District Subic Bay Freeport Zone, Philippines</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">SHAN Craft Corporation</h5>
            <p class="about-card-content ">Supplier</p>
            <p class="about-card-content ">ADDRESS: Purok 4, Brgy Cubacub, Mandaue City, Cebu. </p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">CEBU Asia Trade Center Mfg. Inc.</h5>
            <p class="about-card-content ">Supplier</p>
            <p class="about-card-content ">PO 43 H. Abellana Street, Basak, Mandaue City, Cebu, Philippines.</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">SGS Philippines, QC/Technician</h5>
            <p class="about-card-content ">Partner</p>
            <p class="about-card-content ">ADDRESS: 2nd Floor, Alegria Building, 229 Chino Roces Avenue, Makati City.</p>
            <p class="about-card-content ">TEL. : 632-784-9400</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">Intertek Testing Services Philippines, Inc., QC/Technical</h5>
            <p class="about-card-content ">Partner</p>
            <p class="about-card-content ">ADDRESS: 2307 Don Chino Roces Ave., Ext. Brgy Magallanes, Makati City, Philippines, 1231.</p>
            <p class="about-card-content ">TEL. : 632-819-5841/47</p>
            <p class="about-card-content ">FAX. : 632-893-833</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">American President Line</h5>
            <p class="about-card-content ">Supplier</p>
            <p class="about-card-content ">ADDRESS: 9th Floor , North Quadrant One E-Com Center Harbor Drive, Mall of Asia Complex, Pasay City.</p>
            <p class="about-card-content ">TEL. : 632-479-5000</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">Associated Freight Consolidation, Inc.</h5>
            <p class="about-card-content ">Logistic Partner</p>
            <p class="about-card-content ">ADDRESS: Kaingin Road, Multinational Avenue, Sto. Nino Parañaque City.</p>
            <p class="about-card-content ">TEL. : 632-822-1027 / 632-822-102</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">Eagle Express Lines, Inc.</h5>
            <p class="about-card-content ">ADDRESS: Bldg. A, Cargo Village Complex, NAIA Avenue, Parañaque, 1701 Metro Manila</p>
            <p class="about-card-content ">TEL. : (632) 7900 4900</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">PNB (Philippine National Bank)</h5>
            <p class="about-card-content ">Banking Partner</p>
            <p class="about-card-content ">ADDRESS: Morayta Branch, Nicanor Reyes Street, Sampaloc, Manila.</p>
            <p class="about-card-content ">TEL. : 632-733-3511 / 632-735457</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">Union Bank of the Philippines</h5>
            <p class="about-card-content ">Banking Partner</p>
            <p class="about-card-content ">ADDRESS: Tektite Branch, PSE Building, Ortigas Center, Pasig City.</p>
            <p class="about-card-content ">TEL. : 632-6373279 to 80</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">BDO(Banco De Oro Unibank)</h5>
            <p class="about-card-content ">Banking Partner</p>
            <p class="about-card-content ">ADDRESS: Pasig-Meralco Brand, Ground Floor, One Corporate Centre, Julia A Vargas Corner Meralco Avenue, Ortigas Center, Pasig City.</p>
            <p class="about-card-content ">TEL. : 632-4708021 / 632-4709780</p>
            <p class="about-card-content ">FAX. : 632-6384864</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">UCPB (United Coconut Planters Bank)</h5>
            <p class="about-card-content ">Banking Partner</p>
            <p class="about-card-content ">ADDRESS: Tektite Branch, Ground Floor, PSE Building – West Tower, Exchange Road, Ortigas Center, Pasig City.</p>
            <p class="about-card-content ">TEL. : 632-6386756 to 80</p>
        </div>
    </div>
    <div class="flex justify-center content-center m-auto text-5xl font-bold my-10">
        <h1>OUR LOCATION AND FACILITIES</h1>
    </div>
    <div class="flex flex-row justify-center content-center m-auto my-12">
        <div class="flex flex-col mr-5">
            <h1 class="text-3xl font-bold">BUSINESS ADDRESS</h1>
            <p class="p-5 text-xl">1902A EAST TOWER 19TH FLOOR, PHIL STOCK EXCHANGE BLDG, <br>PASIG CITY, PHILIPPINES.</p>
            <h1 class="text-3xl font-bold pb-5">CONTACT DETAILS</h1>
            <h3 class="font-bold text-2xl">LANDLINE:</h3>
            <p class="p-5 text-xl">(+63) 286307484</p>
            <h3 class="font-bold text-2xl">MOBILE:</h3>
            <p class="p-5 text-xl">(+63) 97-778-6426</p>
            <h3 class="font-bold text-2xl">E-MAIL ADDRESSES:</h3>
            <div class="p-5 text-xl">
                <p>malou.superio@graymark.com.ph</p>
                <p>girlie.espiritu@graymark.com.ph</p>
            </div>
        </div>

        <div class="mapouter">
            <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=PHIL STOCK EXCHANGE BLDG, PASIG CITY, PHILIPPINES.&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embedmapgenerator.com/">embed google maps in website</a></div>
        </div>
    </div>

</body>

</html>