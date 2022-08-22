<!DOCTYPE html>
<html lang="en">

<head>
    <?php view('layouts/head') ?>
    <title>Graymark | Our Valued Clients</title>
</head>

<style>
    .top-dev {
        clip-path: polygon(0 0, 100% 0, 100% calc(100% - 50px), 50% 100%, 0 calc(100% - 50px));
    }

    .bottom-dev {
        clip-path: polygon(0 50px, 50% 0, 100% 50px, 100% 100%, 0 100%);
        margin-top: -40px;
    }

    .address {
        margin-top: auto;
    }

    .address::before {
        content: "\f3c5";
        font-family: "font awesome 5 free";
        font-weight: bold;
        margin-right: 10px;
    }

    .contact::before {
        content: "\f095";
        font-family: "font awesome 5 free";
        font-weight: bold;
        margin-right: 10px;
    }

    .fax::before {
        content: "\f1ac";
        font-family: "font awesome 5 free";
        font-weight: bold;
        margin-right: 10px;
    }
</style>

<body>

    <?php view('layouts/header') ?>

    <div style="background-image:url(<?= url('assets/img/others/bg-client.png') ?>);" class="bg-cover bg-center bg-no-repeat top-dev">
        <div class="flex flex-col text-center">
            <h1 class="text-4xl font-bold text-center text-white p-10 md:p-20 md:text-7xl">OUR VALUED CLIENTS</h1>
            <div class="text-xl font-normal pb-20 text-white md:text-3xl">
                <ol>
                    <li class="p-3">FOREMOST FOODS INTERNATIONAL INC.</li>
                    <li class="p-3">INTERNATIONAL INTIMATES</li>
                    <li class="p-3">NORTHLAND CLOTHING PTY LTD.</li>
                    <li class="p-3">THE LITTLE IMPORT COMPANY</li>
                    <li class="p-3">EL CORTE INGLES, S.A.</li>
                    <li class="p-3">STAR CHILDREN'S DRESS CO., INC.</li>
                    <li class="p-3">PANACEA PRODUCT CORPORATION</li>
                </ol>
            </div>
        </div>
    </div>

    <div class="flex justify-center content-center m-auto">
        <h1 class="text-4xl font-bold text-center p-5 md:text-5xl md:p-10">ASSOCIATED PARTNERS AND MEMBERS</h1>
    </div>

    <div class="flex flex-wrap justify-center content-center lg:pb-5">
        <div class="about-secondary-card ">
            <h5 class="about-card-title">AAA Garments & Textile Mfg Inc.</h5>
            <p class="about-card-content2 ">Supplier</p>
            <p class="about-card-content2 address">Warehouse No.3, Republic Tube Compound, Km 16, Pamplona, Las Piñas City.</p>
            <p class="about-card-content2 contact">632-8751487 / 632-873041</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">SYON, Inc.</h5>
            <p class="about-card-content2 ">Supplier</p>
            <p class="about-card-content2 address">Lot 1 E. Maguyam Road, Maguyam, Silang Cavite.</p>
            <p class="about-card-content2 contact">632-529-8350</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">H & S Corporation</h5>
            <p class="about-card-content2 address">Building No. 2056 Corregidor Highway Ilanin Forest, East District Subic Bay Freeport Zone, Philippines</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">SHAN Craft Corporation</h5>
            <p class="about-card-content2">Supplier</p>
            <p class="about-card-content2 address">Purok 4, Brgy Cubacub, Mandaue City, Cebu. </p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">CEBU Asia Trade Center Mfg. Inc.</h5>
            <p class="about-card-content2 ">Supplier</p>
            <p class="about-card-content2 address">PO 43 H. Abellana Street, Basak, Mandaue City, Cebu, Philippines.</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">SGS Philippines, QC/Technician</h5>
            <p class="about-card-content2 ">Partner</p>
            <p class="about-card-content2 address">2nd Floor, Alegria Building, 229 Chino Roces Avenue, Makati City.</p>
            <p class="about-card-content2 contact">632-784-9400</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">Intertek Testing Services Philippines, Inc., QC/Technical</h5>
            <p class="about-card-content2 ">Partner</p>
            <p class="about-card-content2 address">2307 Don Chino Roces Ave., Ext. Brgy Magallanes, Makati City, Philippines, 1231.</p>
            <p class="about-card-content2 contact">632-819-5841/47</p>
            <p class="about-card-content2 fax">632-893-833</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">American President Line</h5>
            <p class="about-card-content2 ">Supplier</p>
            <p class="about-card-content2 address">9th Floor , North Quadrant One E-Com Center Harbor Drive, Mall of Asia Complex, Pasay City.</p>
            <p class="about-card-content2 contact">632-479-5000</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">Associated Freight Consolidation, Inc.</h5>
            <p class="about-card-content2 ">Logistic Partner</p>
            <p class="about-card-content2 address">Kaingin Road, Multinational Avenue, Sto. Nino Parañaque City.</p>
            <p class="about-card-content2 contact">632-822-1027 / 632-822-102</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">Eagle Express Lines, Inc.</h5>
            <p class="about-card-content2 address">Bldg. A, Cargo Village Complex, NAIA Avenue, Parañaque, 1701 Metro Manila</p>
            <p class="about-card-content2 contact">(632) 7900 4900</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">PNB (Philippine National Bank)</h5>
            <p class="about-card-content2 ">Banking Partner</p>
            <p class="about-card-content2 address">Morayta Branch, Nicanor Reyes Street, Sampaloc, Manila.</p>
            <p class="about-card-content2 contact">632-733-3511 / 632-735457</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">Union Bank of the Philippines</h5>
            <p class="about-card-content2 ">Banking Partner</p>
            <p class="about-card-content2 address">Tektite Branch, PSE Building, Ortigas Center, Pasig City.</p>
            <p class="about-card-content2 contact">632-6373279 to 80</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">BDO(Banco De Oro Unibank)</h5>
            <p class="about-card-content2 ">Banking Partner</p>
            <p class="about-card-content2 address">Pasig-Meralco Brand, Ground Floor, One Corporate Centre, Julia A Vargas Corner Meralco Avenue, Ortigas Center, Pasig City.</p>
            <p class="about-card-content2 contact">632-4708021 / 632-4709780</p>
            <p class="about-card-content2 fax">632-6384864</p>
        </div>

        <div class="about-secondary-card">
            <h5 class="about-card-title">UCPB (United Coconut Planters Bank)</h5>
            <p class="about-card-content2 ">Banking Partner</p>
            <p class="about-card-content2 address">Tektite Branch, Ground Floor, PSE Building – West Tower, Exchange Road, Ortigas Center, Pasig City.</p>
            <p class="about-card-content2 contact">632-6386756 to 80</p>
        </div>
    </div>

    <?php view('layouts/footer') ?>

</body>

</html>