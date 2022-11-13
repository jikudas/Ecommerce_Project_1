<?php
require 'vendor/autoload.php';

use Buki\Router\Router;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$router = new Router;
$baseurl = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http';
// $baseurl =  $baseurl . "://" . $_SERVER['SERVER_NAME'];
$baseurl = 'http://localhost/Easyfie/Ecommerce_Project_1/';
define('baseurl', $baseurl);

$router->group("/Easyfie/Ecommerce_Project_1", function ($router) {
    // global $baseurl;
    $router->get('/', function () {

        require 'config.php';
        require('sections/header.php');
        require('sections/banner.php');
        require('sections/regular_products.php');
        require('sections/new_arrivals.php');
        require('sections/latest_products.php');
        require('sections/why.php');
        require('sections/offer_products.php');
        require('sections/home_blog.php');
        require ('sections/footer.php');
    });

    $router->get('/search', function () {
        require 'config.php';
        require('sections/header.php');
        require('sections/search.php');
        // require('sections/generaloffer.php');
        // require('sections/cartfix.php');
        require 'sections/footer.php';
    });
    
    $router->get('/checkout', function () {
        require 'config.php';
        require('sections/header.php');
        require('sections/shopping_cart.php');
        require 'sections/footer.php';
    });

    $router->get('/shipping-address', function () {
        require 'config.php';
        require('sections/header.php');
        require('sections/shipping_address.php');
        require 'sections/footer.php';
    });

    $router->get('/products', function () {
        require 'config.php';
        require('sections/header.php');
        // require('sections/products_title.php');
        require('sections/products.php');
        require 'sections/footer.php';
    });

    $router->get('/product-details/:any', function ($id) {        
        require 'config.php';
        require('sections/header.php');
        require('sections/details_page_query.php');
        require ('sections/product_details.php');
        require ('sections/footer.php');
    });

    $router->get('/offers', function () {
        require 'config.php';
        require('sections/header.php');
        // require('sections/products_title.php');
        require('sections/offer_page.php');
        require 'sections/footer.php';
    });

    $router->get('pages/:any', function ($slug) {
    require 'config.php';
    require('sections/header.php');
    require('sections/upper_menu.php');
    require 'sections/footer.php';
    });

    $router->get('categories/:any', function ($category_id) {
    require 'config.php';
    require('sections/header.php');
    require('sections/category_product.php');
    require 'sections/footer.php';
    });

    $router->get('/blog', function () {
        require 'config.php';
        require('sections/header.php');
        require('sections/blog_page.php');
        require 'sections/footer.php';
    });

    $router->get('/blog/:any', function ($slug) {

        $slug_explode = explode("-", $slug);
        $id = end($slug_explode);
        require 'config.php';
        require('sections/header.php');
        require('sections/details_page_query.php');
        require('sections/blog-details.php');
        require('sections/footer.php');
    });
});


$router->run();
