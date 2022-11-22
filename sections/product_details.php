<!-- ***** Product Area Starts ***** -->
<?php if (!strpos($_SERVER['REQUEST_URI'], "blog") !== false) { ?>    
    <section class="section" id="product" style="margin-top:20px; margin-bottom: 100px"> 
        <div class="container">
            <div class="row product-details-main p-5">
                <div class="row col-md-6 pro-detail-left">
                    <div class="zoomHolder col-md-12">
                        <img src="<?= 'https://cdn.easyfie.com/' . $value->data->image ?>" alt="" srcset=""
                            class="mx-auto w-100 productImage" id="NZoomImg" data-NZoomscale="2">
                    </div>

                    <div class="d-flex gallery-img">

                        <?php
                        
                        if (count($value->images) > 0) {
                        
                        foreach ($value->images as $image) { ?>
                        
                            <div class="border mx-1 imageSwitch">
                                <img src="<?= 'https://cdn.easyfie.com/' . $image->image ?>" class="w-100 product-img">
                            </div>

                        <?php  } } ?>
                    </div>
                </div> 
                <div id="message"></div>
                <div class="col-lg-6 pro-detail-right">
                    <h1 class="font-weight-bold mb-3 p_title"><?= $value->data->name; ?></h1>
                    <p class="pro-brief f-size-b-normal"><?= html_entity_decode($value->data->description); ?></p>
                    <h6 class="font-weight-bold mb-3">CURRENT PRICE: <span class="text-warning"><?= @$me->currency; ?> <?= $value->data->price; ?></span></h6>

                    <a href="#" class="btn btn-lg pro-buttons itemBtn" >Add to Cart</a>
                    <a href="#" class="btn btn-lg pro-buttons" role="button" aria-pressed="true"><i class="fa-solid fa-heart"></i></a>
                    <div class="magnified-img"></div>
                </div>

            </div>
        </div>
    </section>
<?php } ?>
    <!-- ***** Product Area Ends ***** -->
