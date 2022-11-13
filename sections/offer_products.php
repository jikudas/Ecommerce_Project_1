<?php

$offers = $easyfie->ProductsOrBlogs($token, 'offer', 12, 'desc');

foreach ($offers->data as $key => $offer) {

    $offer_name = str_word_count($offer->name);

    if ($offer_name > 5) {

        $offer_explode = explode(" ", $offer->name);
        $offer_str = $offer_explode[0] . " " . $offer_explode[1] . " " . $offer_explode[2] . " " . $offer_explode[3];
        $offer_url = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $offer_str)));
        $offer_url = $offer_url . "-" . $offer->id;
    } else {
        $offer_url = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $offer->name)));
        $offer_url = $offer_url . "-" . $offer->id;
    }
?>
    <?php if ($offer->remark == 'Offer') { ?>
        <div class="heading_container heading_center mt-5 pt-5">
         <h2>
            <span class="title">Offers</span>
         </h2>
      </div>
    <?php break;
    } ?>
<?php } ?>


<!-- product section -->
<section class="product_section">
   <div class="container">
      <div class="row regular-products">
         <?php foreach ($offers->data as $offer) { ?>
            <?php if ($offer->remark == 'Offer') { ?>
            <div class="col-sm-6 col-md-4 col-lg-4" data-aos="fade-up-right">
               <div class="box">
                  <div class="option_container">
                     <div class="options">
                        <a href="<?= baseurl . 'product-details/' . $offer->id?>" class="option2" name="$offer->id">
                        Check Details
                        </a>
                        <a href="" class="option1">
                        Add to Cart
                        </a>
                     </div>
                  </div>
                  <div class="img-box">
                     <img loading="lazy" src="<?= 'https://cdn.easyfie.com/' . str_replace('_image', '_image_small',  $offer->image) ?>" class="img-fluid lazyload bg-img" alt="">
                  </div>
                  <div class="detail-box">
                     <h5>
                        <a href="<?= baseurl . "offer/" . $offer_url ?>" class="product-name-link">
                           <?= substr($offer->name, 0, 50) ?>
                           <?php
                           if (strlen($offer->name) > 50) {
                              echo '...';
                           }
                           ?>
                        </a>
                     </h5>
                     <h6>
                        <?= @$me->currency; ?> <?= $offer->price ?>
                     </h6>
                  </div>
               </div>
            </div>
            <?php } ?>
         <?php } ?>
      </div>
      <div class="btn-box">
         <?php foreach ($offers->data as $key => $offer) { ?>
            <?php if ($offer->remark == 'Offer') { ?>
               <div class="col-md-12 text-center mx-auto">
                  <a href="<?= baseurl . 'offers' ?>" class="btn btn-solid">
                        View All products
                  </a>
               </div>
            <?php break;
            } ?>
         <?php } ?>
      </div>
   </div>
</section>
      <!-- end product section -->