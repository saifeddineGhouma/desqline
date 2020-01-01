<!DOCTYPE html>

<html lang="fr">

<head>

<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta http-equiv="content-type" content="text/html; charset=utf-8" />

<meta name="author" content="" />

<meta name="description" content="Themeforest Template Polo">






<link href="css/plugins.css" rel="stylesheet">

<link href="css/style.css" rel="stylesheet">

<link href="css/responsive.css" rel="stylesheet">

<style>

i.icon-search1, i.icon-shopping-cart1, i.icon-flag11 {

    color: #fff;

}

</style>

</head>

<body> 


<div class="body-inner">



@yield('contenu')







</div> 

<a id="scrollTop"><i class="icon-chevron-up1"></i><i class="icon-chevron-up1"></i></a>

<script src="js/jquery.js"></script>
<script src="js/plugins.js"></script>

<script src="js/functions.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="js/jQuery.SimpleCart.js" ></script>

<script>
$(document).ready(function () {
  $('#cart').simpleCart();
  $('#recapcart').simpleCart();
});
</script>
<style>
.showb {
    opacity: 1;
    transform: scale(1);
    visibility: visible;
}</style>
</body>
</html>