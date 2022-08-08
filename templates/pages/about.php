<!DOCTYPE html>
<html lang="en">

<head>
    <?php view('layouts/head') ?>
    <title>About Us</title>
</head>

<style>
    .custom-primary-title {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        margin-top: 40px;
        margin-bottom: 40px;
        font-size: xx-large;
        font-weight: bold;
    }

    .custom-secondary-title {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;
        font-size: x-large;
        font-weight: 700;
    }

    .custom-content {
        display: flex;
        text-align: center;
        margin: auto;
        width: 60%;
        font-size: large;
    }

    .custom-card {
        display: flex;
        flex-direction: column;
        margin: 20px;
        border: 2px solid black;
        width: 20%;
    }

    .custom-wrapper {
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        margin: auto;
    }

    .custom-list {
        list-style-type: none;
        text-align: center;
    }
</style>

<body>

    <div>
        <h1 class="custom-primary-title">GRAYMARK INTERNATIONAL SOURCING CORPORATION</h1>
    </div>
    <div>
        <h1 class="custom-secondary-title">Who We Are</h1>
        <p class="custom-content">Graymark International Sourcing Corporation was registered with Securities and Exchange Commission on January 7, 2008 with authorized capital stock of One Million Pesos equivalent to 1,000 shares. The company’s primary purpose is to engage in the business of Mineral, Sand and Gravel, Mining and trading of goods such as handicrafts, apparel and wearing accessories on wholesale/retail and exporting basis.</p>
        <div class="custom-wrapper">
            <div class="custom-card">
                <img src="assets/img/others/file78flefwgwtl18azjg47x-1577992859.jpeg" alt="demo">
                <div class="custom-card-title">Lorem ipsum dolor sit amet.</div>
                <div>lorem</div>
                <div>Lorem ipsum dolor sit amet consectet.</div>
            </div>
            <div class="custom-card">
                <img src="assets/img/others/file78flefwgwtl18azjg47x-1577992859.jpeg" alt="demo">
                <div class="custom-card-title">Lorem ipsum dolor sit amet.</div>
                <div>lorem</div>
                <div>Lorem ipsum dolor sit amet consectet.</div>
            </div>
            <div class="custom-card">
                <img src="assets/img/others/file78flefwgwtl18azjg47x-1577992859.jpeg" alt="demo">
                <div class="custom-card-title">Lorem ipsum dolor sit amet.</div>
                <div>lorem</div>
                <div>Lorem ipsum dolor sit amet consectet.</div>
            </div>
        </div>

        <div class="max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="/docs/images/blog/image-1.jpg" alt="">
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.</p>
            </div>
        </div>

    </div>
    <div>
        <h1 class="custom-secondary-title">Our services</h1>
        <ul class="custom-list">
            <li>Buying Office</li>
            <li>Buyers Representative</li>
            <li>Sourcing Office</li>
            <li>Trading Office</li>
            <li>Quality Control and Export Documentation</li>
        </ul>
    </div>
    <div>
        <h1 class="custom-secondary-title">Our valued clients</h1>
    </div>
    <div>
        <h1 class="custom-secondary-title">Associated Partners and Members</h1>
    </div>
    <div>
        <h1 class="custom-secondary-title">Our location and facilities</h1>
        <p class="custom-content">Business Address 1902A EAST TOWER 19TH FLOOR, PHIL STOCK EXCHANGE BLDG, PASIG CITY, PHILIPPINES.</p>
    </div>

</body>

</html>