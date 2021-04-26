<?php

$count = 1;

if(array_key_exists("rower", $_COOKIE)){
  
  $count = $_COOKIE["rower"] + 1;

}

  setcookie("rower", $count, time() + (60 * 60 * 24));

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rower</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500" rel="stylesheet">
    <!-- CSS -->
    <link href="../css/product_style.css" rel="stylesheet">
    <meta name="robots" content="noindex,follow" />

  </head>

  <body>
    <main class="container">

      <!-- Left Column / Headphones Image -->
      <!-- <div class="left-column"> -->
        <figure><img src="../images/rower.png" alt="img"/></figure>
      <!-- </div> -->


      <!-- Right Column -->
      <div class="right-column">

        <!-- Product Description -->
        <div class="product-description">
          <span>Rower</span>
          <h1>Rower</h1>
          <p>An indoor rower, or rowing machine, is a machine used to simulate the action of watercraft rowing for the purpose of exercise or training for rowing.</p>
        </div>

        <!-- Product Configuration -->
        <div class="product-configuration">

         <!-- Product Pricing -->
        <div class="product-price">
          <span>150$</span>
          <a href="#" class="cart-btn">Add to cart</a>
        </div>
      </div>
    </main>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js" charset="utf-8"></script>
    <script src="script.js" charset="utf-8"></script>
  </body>
</html>