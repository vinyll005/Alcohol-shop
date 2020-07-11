<?php require_once(ROOT.'/views/layout/header.php'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('/template/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Products <i
                            class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread">Products</h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-4">
                    <div class="col-md-12 d-flex justify-content-between align-items-center">
                        <h4 class="product-select">Select Types of Products</h4>
                        <select class="selectpicker" multiple>
                            <option>Brandy</option>
                            <option>Gin</option>
                            <option>Rum</option>
                            <option>Tequila</option>
                            <option>Vodka</option>
                            <option>Whiskey</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($products as $product) { ?>

                    <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center"
                                style="background-image: url(/template/images/products/<?php echo $product['id']; ?>.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href='/' data-id = <?php echo $product['id']; ?> class="add-to-cart d-flex align-items-center justify-content-center"><span
                                                class="flaticon-shopping-bag"></span></a>
                                        <a href="/products/<?php echo $product['id']; ?>" class="d-flex align-items-center justify-content-center"><span
                                                class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <?php if($product['is_new']): ?>
                                    <span class="new">New Arrival</span>
                                <?php elseif($product['is_recommended']): ?>
                                    <span class="seller">Best Seller</span>
                                <?php endif; ?>
                                <span class="category"><?php echo $product['category_name']; ?></span>
                                <h2><?php echo $product['name']; ?></h2>
                                <span class="price">$<?php echo $product['price']; ?></span>
                                
                            </div>
                        </div>
                    </div>

                    <?php } ?>

                    <!-- Product example with SALE in it -->

                    <!-- <div class="col-md-4 d-flex">
                        <div class="product ftco-animate">
                            <div class="img d-flex align-items-center justify-content-center"
                                style="background-image: url(/template/images/prod-1.jpg);">
                                <div class="desc">
                                    <p class="meta-prod d-flex">
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                                class="flaticon-shopping-bag"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                                class="flaticon-heart"></span></a>
                                        <a href="#" class="d-flex align-items-center justify-content-center"><span
                                                class="flaticon-visibility"></span></a>
                                    </p>
                                </div>
                            </div>
                            <div class="text text-center">
                                <span class="sale">Sale</span>
                                <span class="category">Brandy</span>
                                <h2>Bacardi 151</h2>
                                <p class="mb-0"><span class="price price-sale">$69.00</span> <span
                                class="price">$49.00</span></p>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="row mt-5">
                    <div class="col text-center">
                        <div class="block-27">
                        <?php echo $pagination->get();?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="sidebar-box ftco-animate">
                    <div class="categories">
                        <h3>Product Types</h3>
                        <ul class="p-0">
                        <li><a href="/products">All<span class="fa fa-chevron-right"></span></a></li>

                            <?php foreach($categories as $category) {   ?>
                            <li><a href="/products/<?php echo lcfirst($category['name']); ?>"><?php echo $category['name']; ?><span
                                        class="fa fa-chevron-right"></span></a></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once(ROOT.'/views/layout/footer.php'); ?>