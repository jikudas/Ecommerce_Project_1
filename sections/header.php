<?php
session_start();

   $generated_pages = $easyfie->generatedPages($token);
   // echo "<pre>";
   // print_r($generated_pages);
   // exit;
?>

<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>API Practice Project</title>
      
      <!-- AOS CSS -->
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="<?= baseurl; ?>css/bootstrap.min.css" />

      <!-- font awesome style -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <!-- Custom styles for this template -->
      <link href="<?= baseurl; ?>css/style.css" rel="stylesheet" />

      <!-- blog page template css -->
      <link href="<?= baseurl; ?>css/mediumish.css" rel="stylesheet">

      <!-- Custom CSS -->
      <link href="<?= baseurl; ?>css/custom.css" rel="stylesheet"/>

      <script>
        var baseurl = "<?php echo baseurl ?>";
      </script>
   </head>
   <body >



      <div class="hero_area">

         <!-- header section strats -->
         <header class="">
            <div class="container">
               <!-- nav top starts -->
               <div class="row d-lg-flex justify-content-between py-2">
                  <div class="col-lg-7 d-flex align-items-center px-0 header-top-left">
                     <div class="w-25">
                        <!-- logo starts-->
                        <a class="navbar-brand w-100 h-50 ml-2 ml-lg-0 d-flex justify-content-center align-items-center logo-anim" id="" href="index.php">
                           <img loading="lazy" src="<?php echo 'https://cdn.easyfie.com/' . $web_data->logo ?>" class="img-fluid w-100 h-100" alt="">
                        </a>
                        <!-- logo ends -->
                     </div>

                     <div class="w-75">
                        <!-- search box starts -->
                        <form action="<?= baseurl . 'search'; ?>" class="form-inline search-anim w-100 d-flex justify-content-lg-center">
                           <input class="form-control rounded-pill bg-transparent ml-sm-auto m-lg-0 header-form" id="home-search-input" type="search" placeholder="Search" aria-label="Search" name="query">
                           <button class="btn" id="home-search-button" type="submit">
                              <i class="fa-solid fa-magnifying-glass"></i>
                           </button>
                        </form>
                        <!-- search box ends -->
                     </div>
                  </div>
                  <div class="col-lg-5 d-none d-lg-flex justify-content-around align-items-center">
                     <!-- call us now starts -->
                     <div class="call-us-anim d-flex">
                        <div class="h5 pr-2 phone-rotate" ><i class="fa-solid fa-phone-volume"></i>
                        </div>
                        
                        <div class="">
                           <p class="text-uppercase m-0 menu-top-head">Call us now :</p>
                           <p class="m-0"><span class="mobile text-muted">Mobile:</span> <span class="number">01538126428</span></p>
                        </div>
                     </div>
                     <!-- call us now ends-->

                     <!-- shopping cart starts -->
                     <div class="shopping-cart-anim d-flex">
                        <div class="h5 pr-2 pt-1" ><i class="fa-solid fa-cart-shopping cart-icon"></i></div>
                        <div class="">
                           <a href="<?= baseurl . 'view-cart' ?>">
                              <p class="text-uppercase m-0 menu-top-head">Shopping Cart :</p>
                              <p class="m-0 text-muted"><span class="f-size-b-normal cart-items badge badge-danger">0</span> items - <span class="f-size-b-normal">$0.00</span>
                              </p>
                           </a>
                        </div>
                     </div>
                     <!-- shopping cart ends-->
                  </div>
               </div>
               <!-- nav top ends -->
            </div>
         </header>
         <!-- header section ends -->

         <menu class="menu-anim menu-top my-0 pl-0 shadow">
            <div class="container px-0 d-flex">
               <nav class="navbar navbar-expand-lg ml-lg-auto pl-0">
                  <!-- toggle button starts -->
                  <button class="navbar-toggler" 
                  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <!-- <span class="navbar-toggler-icon"></span> -->
                     <i class="fa-solid fa-bars h2 mb-0"></i>
                  </button>
                  <!-- toggle button ends -->                     

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">

                     <!-- left main menu starts -->
                     <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                           <a class="nav-link main-menu-left text-uppercase px-2 px-lg-4" href="<?= baseurl ?>">Home <span class="sr-only">(current)</span>
                           </a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link main-menu-left text-uppercase px-2 px-lg-4" href="<?= baseurl . 'products' ?>"> 
                              <span class="nav-label">Store</span>
                           </a>
                        </li>
                        <li class="nav-item dropdown">
                           <a class="nav-link main-menu-left text-uppercase px-2 px-lg-4" href="<?= baseurl . 'offers'?>">Offer</a>
                        </li>
                        <div class="dropdown">
                           <button class="btn dropdown-toggle main-menu-left text-uppercase px-2 px-lg-4 text-decoration-none" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Pages
                           </button>
                           <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                              <?php foreach($generated_pages as $generated_page) { 
                                 if($generated_page->menu == 'UpperMenu') { ?>                                 
                                 <a class="dropdown-item" href="<?= baseurl . 'pages/' . $generated_page->slug ?>"><?php echo($generated_page -> title) ?></a>
                              <?php 
                                 }
                              } ?>
                           </div>
                        </div>
                        <li class="nav-item">
                           <a class="nav-link main-menu-left text-uppercase px-2 px-lg-4" href="<?= baseurl . 'blog'?>">Blog</a>
                        </li>
                     </ul> 
                     <!-- left main menu ends -->
                  </div>
               </nav>
               <!-- all categories menu starts -->
               <ul class="ml-auto ">
                  <li class="dropdown all-categories-list pt-2">
                     <button class="btn text-uppercase main-menu-right dropdown-toggle pr-md-0 pr-lg-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        All categories
                        <i class="fa-solid fa-teeth-open h5 pl-2 m-0"></i>
                     </button>
                     <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <?php  foreach ($categories as $value) { ?>
                        <a class="dropdown-item" href="<?= baseurl . 'categories/' . $value->category ?>"><?= $value->english; ?></a>
                        <?php } ?>
                     </div>
                  </li>
               </ul>
               <!-- all categories menu ends -->
            </div>
         </menu>