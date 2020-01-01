<?php
$title="Shop cart Installine";
$author="INSPIRO";
include("includes/header.php");
?>
<style>
#header #header-wrap, #header .header-inner 
{
    background-color: #252525 !important; 
}
</style>
<section id="page-title">
<div class="container">
<div class="page-title">
<h1>Shopping Cart</h1>
<span>Shopping details</span>
</div>
<div class="breadcrumb">
<ul>
<li><a href="#">Home</a>
</li>
<li><a href="#">Shop</a>
</li>
<li class="active"><a href="#">Shopping Cart</a>
</li>
</ul>
</div>
</div>
</section>
<section id="shop-cart">
<div class="container">
<div class="shop-cart">
<div class="table table-sm table-striped table-responsive">
<table class="table" style='margin-bottom:0px;'>
<thead>
<tr>
<th class="cart-product-remove"></th>
<th class="cart-product-thumbnail">Product</th>
<th class="cart-product-price">Unit Price</th>
<th class="cart-product-quantity">Quantity</th>
<th class="cart-product-subtotal">Total</th>
</tr>
</thead>
</table>
	<div id="recapcart"></div>
</div>
<div class="row">
<div class="col-lg-4">
<form class="form-inline">
<div class="input-group">
<input type="text" placeholder="Coupon Code" id="CouponCode" class="form-control">
<div class="input-group-append">
<button type="submit" id="widget-subscribe-submit-button" class="btn">Apply</button>
</div>
</div>
<p class="small">Enter any valid coupon or promo code here to redeem your discount.</p>
</form>
</div>
<div class="col-lg-8 text-right">
<button type="button" class="btn">Update Card</button>
</div>
</div>

</div>
</div>
</section>

<section class="background-grey p-t-40 p-b-0">
<div class="container">
<div class="row">
<div class="col-lg-4">
<div class="icon-box effect small clean">
<div class="icon">
<a href="#"><i class="fa fa-gift"></i></a>
</div>
<h3>Free shipping on orders $60+</h3>
<p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
</div>
</div>
<div class="col-lg-4">
<div class="icon-box effect small clean">
<div class="icon">
<a href="#"><i class="fa fa-plane"></i></a>
</div>
<h3>Worldwide delivery</h3>
<p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
</div>
</div>
<div class="col-lg-4">
<div class="icon-box effect small clean">
<div class="icon">
<a href="#"><i class="fa fa-history"></i></a>
</div>
<h3>60 days money back guranty!</h3>
<p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
</div>
</div>
</div>
</div>
</section>
<style type="text/css">.quantity {
    color: #000;
}</style>
<?php include("includes/footer.php");?>
