<?php $page = empty($_GET['page']) ? 1 : $_GET['page'];
$limit = 12;
$products = $easyfie->ProductsOrBlogs($token, "products", $limit, "desc", $page);
?>

<!-- product section -->
   <section class="product_section layout_padding">
      <div class="container">
         <div class="heading_container heading_center">
            <h2>
               <span class="title">All Products</span>
            </h2>
         </div>
         <div class="row">
            <?php foreach ($products->data as $key => $product) {

               $product_name = str_word_count($product->name);

               if ($product_name > 5) {

                  $product_explode = explode(" ", $product->name);
                  $product_str = $product_explode[0] . " " . $product_explode[1] . " " . $product_explode[2] . " " . $product_explode[3];
                  $product_url = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $product_str)));
                  $product_url = $product_url . "-" . $product->id;
               } else {
                  $product_url = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $product->name)));
                  $product_url = $product_url . "-" . $product->id;
               }

               ?>
               <?php if ($product->remark == '') { ?>
                  <div class="col-sm-6 col-md-4 col-lg-4" data-aos="zoom-in">
                     <div class="box">
                        <div class="option_container">
                           <div class="options">
                              <a href="<?= baseurl . 'product-details/' . $product->id?>" class="option2" name="$product->id">
                                 Check Details
                              </a>
                              <a href="" class="option1">
                                 Add to Cart
                              </a>
                           </div>
                        </div>
                        <div class="img-box">
                           <a href="<?= baseurl . 'product/' . $product_url ?>"><img loading="lazy" src="<?= 'https://cdn.easyfie.com/' . str_replace('_image', '_image_small',  $product->image) ?>" class="img-fluid lazyload bg-img" alt="">
                           </a>
                        </div>
                        <div class="detail-box">
                           <h5>
                              <a href="<?= baseurl . 'product/' . $product_url ?>" class="product-name-link">
                                 <?= substr($product->name, 0, 50) ?>
                                 <?php
                                 if (strlen($product->name) > 50) {
                                    echo '...';
                                 }
                                 ?>
                              </a>
                           </h5>
                           <h6>
                           <?= @$me->currency; ?> <?= $product->price ?>
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
               echo $easyfie->Paginate($page, $products->total, $limit);
               ?>
            </div>
         </div>
      </div>
   </section>
<!-- end product section -->