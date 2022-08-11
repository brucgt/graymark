<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php view('layouts/head') ?>
</head>

<body>
    <?php view('layouts/header') ?>

    <div class="w-full">
        <?php view('layouts/product-header') ?>
        
        <div class="product-preview">
            <div>
                
            </div>
        </div>
        <div class="product-list-all">
            <h5>Product List</h5>
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
    </div>

    <?php view('layouts/footer') ?>
</body>

</html>