<!DOCTYPE html>
<html lang="en">

<head>
    <title>Products | Graymark</title>
    <?php view('layouts/head') ?>
</head>

<body>
    <?php view('layouts/header') ?>

    <div class="w-full">
        <section class="product-preview relative px-0 flex flex-col sm:p-4 sm:gap-4 md:p-8 xl:px-0">
            <div class="row center-wrapper no-peek">
                <div class="column info" style="background-image: url('<?= url('assets/img/others/mbr.jpg') ?>');">
                    <div class="info-wrapper">
                        <h5>Agriculture Products</h5>
                        <p>Graymark International Sourcing Corporation offers various types of agri-products from sugar, rice to corn and other high value commodities for your production or for your other business needs.</p>
                        <a href="<?= url('/products/agriculture') ?>">View</a>
                    </div>
                </div>
            </div>
            <div class="row center-wrapper no-peek">
                <div class="column info" style="background-image: url('<?= url('assets/img/products/agriculture/magda-ehlers.jpeg') ?>');">
                    <div class="info-wrapper">
                        <h5>GM Market</h5>
                        <p>Our company supports its own local farm partners by offering our clients freshly picked fruits and veggies straight from farms to your location with care.</p>
                        <a href="<?= url('/products/market') ?>">View</a>
                    </div>
                </div>
            </div>
            <div class="row center-wrapper">
                <div class="column info" style="background-image: url('<?= url('assets/img/products/mineral/dsc-491-4496x3000.jpg') ?>');">
                    <div class="info-wrapper">
                        <h5>Mining</h5>
                        <p>The Company offers and supplies natural resources ready for operation and export mineral ores such as Iron, Copper and Nickel.</p>
                        <a href="<?= url('/products/mining') ?>">View</a>
                    </div>
                </div>
                <div class="column peek peek-1">
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/mineral/dsc-509-1108x739.jpg') ?>');">
                        <a href="<?= url('/products/mining#minerals') ?>">Minerals</a>
                    </div>
                </div>
            </div>
            <div class="row center-wrapper">
                <div class="column info" style="background-image: url('<?= url('assets/img/products/quarry/boulder/picture-stock-cdo-2-1080x1440.jpeg') ?>');">
                    <div class="info-wrapper">
                        <h5>Quarry</h5>
                        <p>The company offers and supplies natural resources ready for export such as River and Construction Sand, Sea Sand Material, Gravel, Armour Rock and Boulders for your project needs.</p>
                        <a href="<?= url('/products/quarry') ?>">View</a>
                    </div>
                </div>
                <div class="column peek peek-4">
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/quarry/construction-sand/dsc-347-3000x2000.jpg') ?>');">
                        <a href="<?= url('/products/quarry#construction-sand') ?>">Construction Sand</a>
                    </div>
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/quarry/gravel/dsc-707-2000x1335.jpeg') ?>');">
                        <a href="<?= url('/products/quarry#gravel') ?>">Gravel</a>
                    </div>
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/quarry/sea-sand/2020-10-12-11-39-img-7336-506x380.jpg') ?>');">
                        <a href="<?= url('/products/quarry#sea-sand') ?>">Sea Sand Material</a>
                    </div>
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/quarry/boulder/vlcsnap-2021-10-31-17h56m55s848-544x960.png') ?>');">
                        <a href="<?= url('/products/quarry#boulder') ?>">Armour Rock & Boulder</a>
                    </div>
                </div>
            </div>
            <div class="row center-wrapper no-peek">
                <div class="column info" style="background-image: url('<?= url('assets/img/products/industrial/cement-3-700x450.jpg') ?>');">
                    <div class="info-wrapper">
                        <h5>Industrial Commodities</h5>
                        <p>Graymark International Sourcing Corporation offers various types of Oil/Petrol and Cement.</p>
                        <a href="<?= url('/products/industrial') ?>">View</a>
                    </div>
                </div>
            </div>
            <div class="row center-wrapper">
                <div class="column info" style="background-image: url('<?= url('assets/img/products/garment/customized/tailoring-2575930-1280-810x540.jpg') ?>');">
                    <div class="info-wrapper">
                        <h5>Garments</h5>
                        <p>Our company produces different types of garments for men and women. We also accept tailoring and alterations for men women and children. We also produce Sports apparel and uniforms for fire, traffic and police and military.</p>
                        <a href="<?= url('/products/garments') ?>">View</a>
                    </div>
                </div>
                <div class="column peek peek-6">
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/garment/customized/express-alterations-indiana-custom-400x267.jpg') ?>');">
                        <a href="<?= url('/products/garments#customized') ?>">Customized Tailoring</a>
                    </div>
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/garment/alteration/hemming-pants-724x482.jpeg') ?>');">
                        <a href="<?= url('/products/garments#alterations') ?>">Alterations</a>
                    </div>
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/garment/childrens-wear/girls-dresses-3-mo-to-16-yrs-3-1015x976.jpg') ?>');">
                        <a href="<?= url('/products/garments#childrens-wear') ?>">Childrens Wear Apparels</a>
                    </div>
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/garment/sports/img-3358-357x357.jpeg') ?>');">
                        <a href="<?= url('/products/garments#sports') ?>">Sports Apparel</a>
                    </div>
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/garment/fire-traffic-uniform/mbr-13.jpeg') ?>');">
                        <a href="<?= url('/products/garments#fire-traffic-uniform') ?>">Fire and Traffic Personnel Uniform</a>
                    </div>
                    <div class="peek-item" style="background-image: url('<?= url('assets/img/products/garment/military/pilice-with-names-1-952x1387.png') ?>');">
                        <a href="<?= url('/products/garments#military') ?>">Military Uniform</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="product-list-all w-full relative bg-[#04281C]">
            <div class="list-wrapper p-4 lg:max-w-5xl lg:mx-auto xl:px-0">
                <h5 class="p-6 text-center text-3xl text-primary-green font-broad font-bold tracking-wide uppercase md:text-4xl">Product List</h5>
                <div class="products">
                    <div class="row">
                        <div class="column">
                            <h5>PRODUCT LINES</h5>
                            <ul>
                                <li>Books</li>
                                <li>Utensils</li>
                                <li>Garments</li>
                                <li>Furniture</li>
                                <li>Computers</li>
                                <li>Handicrafts</li>
                                <li>Decorations</li>
                                <li>Solar Battery</li>
                                <li>School Supplies</li>
                                <li>Tools & Equipment</li>
                                <li>Construction Supplies</li>
                                <li>Kitchen Essential (Cookware)</li>
                                <li>Beauty & Slimming Products</li>
                                <li>Generators</li>
                            </ul>
                        </div>
                        <div class="column">
                            <h5>GARMENTS</h5>
                            <ul>
                                <li>50% Children's Wear</li>
                                <li>Formal Wear</li>
                                <li>Casual Wear</li>
                                <li>Knits & Woven</li>
                                <li>Jacket & Lounge Wear</li>
                            </ul>
                        </div>
                        <div class="column">
                            <h5>PHILIPPINES HANDICRAFT</h5>
                            <ul>
                                <li>Furniture</li>
                                <li>House Wares</li>
                                <li>Garden Items</li>
                                <li>Dried Botanical Items</li>
                                <li>Shell and Shell Products</li>
                                <li>Seasonal and Holiday Decorations</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="column">
                            <h5>FEATURED PRODUCTS</h5>
                            <div class="subrow">
                                <div class="column">
                                    <h6>QUARRY & MINERAL PRODUCTS:</h6>
                                    <ul>
                                        <li>Construction Sand & River Sand</li>
                                        <li>Armour Rock & Boulders</li>
                                        <li>Silica White</li>
                                        <li>Silica Red</li>
                                    </ul>
                                </div>
                                <div class="column">
                                    <h6>AGRI PRODUCTS:</h6>
                                    <ul>
                                        <li>Corn</li>
                                        <li>Sugar</li>
                                        <li>Banana</li>
                                        <li>Pineapple</li>
                                        <li>Rice Flour</li>
                                        <li>Coco Sugar</li>
                                        <li>Thai and Vietnam Rice</li>
                                    </ul>
                                </div>
                                <div class="column">
                                    <h6>OTHERS:</h6>
                                    <ul>
                                        <li>Oil/Petrol</li>
                                        <li>Cement</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <div class="backToTop cursor-pointer">
        <i class="fa-solid fa-angle-up text-3xl text-white"></i>
    </div>

    <?php view('layouts/footer') ?>
</body>

</html>