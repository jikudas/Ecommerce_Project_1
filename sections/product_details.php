<!-- ***** Product Area Starts ***** -->
<?php if (!strpos($_SERVER['REQUEST_URI'], "blog") !== false) { ?>    
    <section class="section" id="product" style="margin-top:20px; margin-bottom: 100px"> 
        <div class="container">
            <div class="row product-details-main p-5">
                <div class="col-lg-6 pro-detail-left">
                     <img loading="lazy" class="zoom-img img-fluid mb-2 pro_detail_img w-100 h-75" id="zoom_01" src="<?= 'https://cdn.easyfie.com/' . $value->data->image ?>" data-zoom-image="<?= 'https://cdn.easyfie.com/' . $value->data->image ?>"/>
                    <div class="row magnifier-lens d-flex">
                        <div class="col-12 slider-nav">
                        <?php

                        if (count($value->images) > 0) {

                            foreach ($value->images as $image) { ?>
                            <div class="w-100 h-75 p-2" style="border-right: 1px solid #7a4838">
                                <img loading="lazy" src="<?= 'https://cdn.easyfie.com/' . $image->image ?>" alt="" class="img-fluid blur-up lazyload zoom-img" id="zoom_04" data-zoom-image="large/image1.jpg">
                            </div>
                        <?php  }
                        } ?>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-6 pro-detail-right">
                    <h3 class="font-weight-bold mb-3"><?= $value->data->name; ?></h3>
                    <p class="pro-brief f-size-b-normal"><?= html_entity_decode($value->data->description); ?></p>
                    <h6 class="font-weight-bold mb-3">CURRENT PRICE: <span class="text-warning"><?= @$me->currency; ?> <?= $value->data->price; ?></span></h6>
                    <a href="www.google.com" class="btn btn-lg pro-buttons" role="button" aria-pressed="true">Add to Cart</a>
                    <a href="www.google.com" class="btn btn-lg pro-buttons" role="button" aria-pressed="true"><i class="fa-solid fa-heart"></i></a>
                    <div class="magnified-img"></div>
                </div>

            </div>
        </div>
    </section>
<?php } ?>
    <!-- ***** Product Area Ends ***** -->
