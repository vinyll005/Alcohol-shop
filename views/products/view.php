<?php require_once(ROOT.'/views/layout/header.php'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('/template/images/bg_2.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate mb-5 text-center">
                <p class="breadcrumbs mb-0"><span class="mr-2"><a href="/">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span><a href="/products">Products <i
                                class="fa fa-chevron-right"></i></a></span> <span>Products Single <i
                            class="fa fa-chevron-right"></i></span></p>
                <h2 class="mb-0 bread"><?php echo $product['name']; ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-5 ftco-animate">
                <a href="/template/images/products/<?php echo $product['id']; ?>.jpg" class="image-popup prod-img-bg"><img
                        src="/template/images/products/<?php echo $product['id']; ?>.jpg" class="img-fluid" alt="Colorlib Template"></a>
            </div>
            <div class="col-lg-6 product-details pl-md-5 ftco-animate">
                <h3><?php echo $product['name']; ?></h3>
                <div class="rating d-flex">
                    <p class="text-left mr-4">
                        <a href="#" class="mr-2" style="color: #000;"><?php echo $product['strong']; ?><span style="color: #bbb;">% Alcohol</span></a>
                    </p>
                    <p class="text-left">
                        <a href="#" class="mr-2" style="color: #000;">500 <span style="color: #bbb;">Sold</span></a>
                    </p>
                </div>
                <p class="price"><span>$<?php echo $product['price']; ?></span></p>
                <p><?php echo $product['description']; ?></p>

                <p><a href="/cart" data-id = <?php echo $product['id']; ?> class="add-to-cart btn btn-primary py-3 px-5 mr-2">Add to Cart</a></p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12 nav-link-wrap">
                <div class="nav nav-pills d-flex text-center" id="v-pills-tab" role="tablist"
                    aria-orientation="vertical">
                    <a class="nav-link ftco-animate active mr-lg-1" id="v-pills-1-tab" data-toggle="pill"
                        href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Description</a>

                    <a class="nav-link ftco-animate mr-lg-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2"
                        role="tab" aria-controls="v-pills-2" aria-selected="false">Manufacturer</a>

                </div>
            </div>
            <div class="col-md-12 tab-wrap">

                <div class="tab-content bg-light" id="v-pills-tabContent">

                    <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="day-1-tab">
                        <div class="p-4">
                            <h3 class="mb-4"><?php echo $product['name']; ?></h3>
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from
                                it would have been rewritten a thousand times and everything that was left from its
                                origin would be the word "and" and the Little Blind Text should turn around and return
                                to its own, safe country. But nothing the copy said could convince her and so it didn’t
                                take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and
                                Parole and dragged her into their agency, where they abused her for their.</p>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-day-2-tab">
                        <div class="p-4">
                            <h3 class="mb-4">Manufactured By Liquor Store</h3>
                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came from
                                it would have been rewritten a thousand times and everything that was left from its
                                origin would be the word "and" and the Little Blind Text should turn around and return
                                to its own, safe country. But nothing the copy said could convince her and so it didn’t
                                take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and
                                Parole and dragged her into their agency, where they abused her for their.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>

<?php require_once(ROOT.'/views/layout/footer.php'); ?>