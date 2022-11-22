<?php
require 'vendor/autoload.php';

$easyfie = new \EasyFie\EasyFie();

$user = "fabian25_838";
$pass = sha1("easyfie323232");

$token = $easyfie->getToken($user, $pass)->access_token;

$me = $easyfie->Me($token);
// echo "<pre>";
// print_r($me);
// exit();

$web_data =  $easyfie->WebData($token);

// echo "<pre>";
// print_r($web_data);
// exit();

$categories = $easyfie->getAllCategories($token);

// echo "<pre>";
// print_r($categories);
// exit();

$themes_color = $easyfie->getThemesColor($token);

$easyfie->generatedPages($token);
// echo "<pre>";
// print_r($generated_page);
// exit();



//$easyfie->generatedPageSingle($token, $slug); //for dynmic page single


// $meta = $easyfie->getMetaData($token); //for meta information for pages

// $easyfie->ProductsOrBlogs($token, 'products', 6, 'desc', 1); //get all information products,offer,service,shouts or article

// $easyfie->ProductsOrBlogs($token, 'products', 6, 'asc'); //get all information products,offer,service,shouts or article

// $easyfie->ProductsOrBlogs($token, 'offer', 6, 'desc'); //get all information products,offer,service,shouts or article

 //$articles = $easyfie->ProductsOrBlogs($token, 'article', 6, 'desc'); //get all information products,offer,service,shouts or article

// echo "<pre>";
// print_r($articles);
// exit();

// $easyfie->SingleData($token, $type, $id) //get all posts single page data


// $easyfie->Search($token, $type, $keyword, $limit) //get search data without blogs

// $cart_page = $easyfie->Orders($token, $postRequest); //post order information data we required some info what we listed this link



// $easyfie->OrdersPayment($token, $order_id, $payment_status) // for update payment status

// $easyfie->Portfolio($token, $limit, $order, $paginate) //get protfolio data and pagination

// $easyfie->paginate($page, $total, $limit) //get paginate design 1,2,3....

?>