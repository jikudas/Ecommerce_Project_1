<?php 

    $page = empty($_GET['page']) ? 1 : $_GET['page'];
    $limit = 12;
    $category_product = $easyfie->singleCategories($token, $category_id, $limit, $page);
   //  echo "<pre>";
   //  print_r($category_product);
   //  exit;
?>

<!-- product section -->
   <?php
      if(!empty($category_product->data)) { 
   ?>
   <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center title d-flex justify-content-center align-items-center">
            <h2><?= $category_product->data[0]->english ?></h2>
         </div>
         <div class="row">
            <?php foreach ($category_product->data as $key => $singlecategory) {

               $product_name = str_word_count($singlecategory->name);

               if ($product_name > 5) {

                  $product_explode = explode(" ", $singlecategory->name);
                  $product_str = $product_explode[0] . " " . $product_explode[1] . " " . $product_explode[2] . " " . $product_explode[3];
                  $product_url = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $product_str)));
                  $product_url = $product_url . "-" . $singlecategory->id;
               } else {
                  $product_url = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $singlecategory->name)));
                  $product_url = $product_url . "-" . $singlecategory->id;
               }

               ?>
               <?php if ($singlecategory->remark == '') { ?>
                  <div class="col-sm-6 col-md-4 col-lg-4" data-aos="zoom-in">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="<?= baseurl . 'product-details/' . $singlecategory->id?>" class="option2" name="$singlecategory->id">
                                 Check Details
                              </a>
                              <a href="" class="option1">
                                 Add to Cart
                              </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <a href="<?= baseurl . 'product/' . $product_url ?>"><img loading="lazy" src="<?= 'https://cdn.easyfie.com/' . str_replace('_image', '_image_small',  $singlecategory->image) ?>" class="img-fluid lazyload bg-img" alt="">
                           </a>
                        </div>
                        <div class="detail-box">
                           <h5>
                              <a href="<?= baseurl . 'product/' . $product_url ?>" class="product-name-link">
                                 <?= substr($singlecategory->name, 0, 50) ?>
                                 <?php
                                 if (strlen($singlecategory->name) > 50) {
                                    echo '...';
                                 }
                                 ?>
                              </a>
                           </h5>
                           <h6>
                           <?= @$me->currency; ?> <?= $singlecategory->price ?>
                           </h6>
                        </div>
                     </div>
                  </div>
               <?php } ?>
            <?php } ?>
         </div>
         <div class="row mt-5">
            <div class='d-flex mx-auto'>
               <?php
                   if($category_product->total){
                       echo $easyfie->paginate($page, $category_product->total, $limit);
                   }

               ?>
            </div>
         </div>
      </div>
   </section> 
   <?php } else { ?>
      <div class="card w-25" data-aos="zoom-in">
         <div class="category_product card-body text-center">
            We are sorry, there don't have any products for this category
         </div>
      </div>  
   <?php } ?>
<!-- end product section -->