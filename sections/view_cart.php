<?php
    // echo "<pre>";
    // print_r($_SESSION['cart']);
    // exit();
?>
<style>
    .mobile-fix-option {
        display: none !important;
    }
</style>
<div class="breadcrumb-section mt-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="page-title">
                    <h2>Your Products</h2>
                </div>
            </div>
            <div class="col-sm-6">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb w-50 ml-auto d-flex justify-content-end">
                        <li class="breadcrumb-item"><a href="https://<?= $web_data->website ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<section class="cart-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 sm-overflow-x-scroll">
                <table class="table cart-table table-responsive-xs cartList">
                    <tr class="table-head text-center">
                        <th scope="col" class="text-left">Product Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Total</th>
                        <th scope="col">Action</th>
                    </tr>
                    <?php
                    foreach($_SESSION['cart'] as  $product_details) {  ?>
                    <tr class="table-head">
                        <td scope="col"><?= $product_details['p_name'] ?></td>
                        <td scope="col" class="text-center"><?= $product_details['p_price'] ?></td>
                        <td scope="col" class="text-center"><i class="fa-regular fa-square-plus pr-2 quantity-plus"></i><?= $product_details['p_quantity'] ?><i class="fa-regular fa-square-minus pl-2 quantity-minus"></i></td>
                        <td scope="col" class="text-center"><?= $product_details['p_total_price'] ?></td>
                        <td scope="col" class="text-center"><i class="fa-solid fa-trash text-danger"></i></td>
                    </tr>
                    <?php } ?>
                </table>
                <table class="table cart-table table-responsive-md">
                    <tfoot>
                        <tr>
                            <td>total price :</td>
                            <td>
                                <h4 style="font-weight: bolder;"><?= @$me->currency; ?> <span class="cartTotal">0</span></h4>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
        <div class="row cart-buttons">
            <div class="col-6"><a href="https://<?= $web_data->website ?>" class="btn btn-solid">continue shopping</a></div>
            <div class="col-6"><a href="<?= baseurl . 'checkout' ?>" class="btn btn-solid">check out</a></div>
        </div>
    </div>
</section>  