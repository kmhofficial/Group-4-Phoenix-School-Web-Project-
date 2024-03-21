<!DOCTYPE html>
<html lang="en">

<head>
  <title></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../pj/CSS/laptop.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="shortcut icon" href="../media/index/websitetab.png">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/dcb9efbc7e.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.css" integrity="sha512-+1GzNJIJQ0SwHimHEEDQ0jbyQuglxEdmQmKsu8KI7QkMPAnyDrL9TAnVyLPEttcTxlnLVzaQgxv2FpLCLtli0A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://fonts.cdnfonts.com/css/games" rel="stylesheet">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">
</head>

<body>
<header>
    <a href="../index.php" class="logo">Phoenix<img src="../pj/Image/logo.gif" width="70px"></a>
    <div class="group">
      <ul class="navigation">
        <li><a href="../pj/pc_laptop.php">Home</a></li>
        <li><a href="../pj/laptop.php">Laptops</a></li>
        <li><a href="../pj/pc-part.php">PC parts</a></li>
      </ul>
      

    
      <div class="search"  onclick="searchfocus()">
        <span class="icon">
          <ion-icon name="search-outline" class="searchBtn"></ion-icon>
          <ion-icon name="close-outline" class="closeBtn"></ion-icon>
        </span>
      </div>
      <ion-icon name="menu-outline" class="menuToggle"></ion-icon>
    </div>
    <div class="searchBox">
      <input type="text" placeholder="Search here..." id="search" onkeyup="searchshow()">
    </div>

 <!--search item -->
 <div class="itemboxsearch" id="showitembox">
  <ul id="searchitems">
      <li><img src="../media/games/dota2/header.webp" class="search-item-image"><a href="../html/gamedetail5.html">Dota2</a></li>
      <li><img src="../media/games/Assassin's Creed Valhalla/header.jpg" class="search-item-image"><a href="../html/gamedetail1.html">ASSASSIN'S CREED VALHALLA</a></li>
      <li><img src="../media/games/ApexLegend/header.jpg" class="search-item-image"><a href="../html/gamedetail2.html">Apex Legend</a></li>
      <li><img src="../media/games/BattleField/header.jpg" class="search-item-image"><a href="../html/gamedetail3.html">Battlefield™ 2042</a></li>
      <li><img src="../media/games/pubg/header.jpg" class="search-item-image"><a href="../html/gamedetail5.html">PUBG: BATTLEGROUNDS</a></li>
      <!--Casing-->
      <li><img src="https://www.gamdias.com/img/case/TALOS_E3_MESH/TALOS_E3_MESH_Slogan_Small.png" class="search-item-image"><a href="../pj/details/casing1d.html">Talos E3 MESH</a></li>
      <li><img src="https://www.gamdias.com/img/case/TALOS_E3_MESH_WH/TALOS_E3_MESH_WH_Slogan_Small.png" class="search-item-image"><a href="../pj/details/casing2d.html">Talos E3 MESH White</a></li>
      <li><img src="https://www.corsair.com/medias/sys_master/images/images/haa/h60/9659502493726/base-5000x/Gallery/5000X_RGB_BLACK_001/-base-5000x-Gallery-5000X-RGB-BLACK-001.png_515Wx515H" class="search-item-image"><a href="../pj/details/casing3d.html">iCUE 5000X RGB Tempered Glass</a></li>
      <li><img src="https://cdn.coolermaster.com/media/assets/1029/380_02-hover.png" class="search-item-image"><a href="../pj/details/casing4d.html">Silencio S600</a></li>
      <!--Laptop-->
      <li><img src="../pj/Image/razer blade 15.png" class="search-item-image"><a href="../pj/product_detail3.php">Razer Blade 15</a></li>
      <li><img src="../pj/Image/msi titan gt77.png" class="search-item-image"><a href="../pj/product_detail.php">Titan GT77 - 12U</a></li>
      <li><img src="../pj/Image/msi leo.png" class="search-item-image"><a href="../pj/product_detail2.php">GP76 Leopard</a></li>
      <!--CPU-->
      <li><img src="../pj/hardware parts/i7 8700.jpg" class="search-item-image"><a href="../pj/details/cpu1d.html">Intel®Core™ i7-8700 Processor</a></li>
      <li><img src="../pj/hardware parts/i9 12900.jpeg" class="search-item-image"><a href="../pj/details/cpu2d.html">Intel® Core™ i9-12900Processor</a></li>
      <!--Gaming Chair-->
      <li><img src="https://www.corsair.com/medias/sys_master/images/images/h36/h43/10171031158814/CF-9010043-WW/Gallery/CF-9010043-WW_01/-CF-9010043-WW-Gallery-CF-9010043-WW-01.png_515Wx515H" class="search-item-image"><a href="../pj/details/gc1d.html">TC200 Plush Leather Black/Black</a></li>
      <li><img src="https://www.corsair.com/medias/sys_master/images/images/h34/hc5/10171016609822/CF-9010049-WW/Gallery/CF-9010049-WW_01/-CF-9010049-WW-Gallery-CF-9010049-WW-01.png_515Wx515H" class="search-item-image"><a href="../pj/details/gc2d.html">TC200 Soft Fabric Black/Black</a></li>
      <!--GPU-->
      <li><img src="https://dlcdnwebimgs.asus.com/gain/6d667c63-0039-4f87-8b66-79835d21f20f/w185/fwebp" class="search-item-image"><a href="../pj/details/gpu1d.html">ASUS DUAL-GTX 1650-O4GD6-MINI-CSM</a></li>
      <li><img src="https://dlcdnwebimgs.asus.com/gain/7ab4eba9-e3d3-4277-8d7d-543aa4a059d8/w185/fwebp" class="search-item-image"><a href="../pj/details/gpu2d.html">ASUS Dual GeForce RTX™ 2060 EVO OC Edition</a></li>
      <!--Headset-->
      <li><img src="https://www.corsair.com/medias/sys_master/images/images/h43/h00/9788813738014/CA-9011188-NA/Gallery/VIRTUOSO_XT_01/-CA-9011188-NA-Gallery-VIRTUOSO-XT-01.png_515Wx515H" class="search-item-image"><a href="../pj/details/hs1d.html">VIRTUOSO RGB WIRELESS XT Gaming Headset</a></li>
      <li><img src="../pj/Image/msi leo.png" class="search-item-image"><a href="https://www.corsair.com/medias/sys_master/images/images/hea/h60/10092332548126/base-hs80-rgb-usb-config/Gallery/HS80_RGB_USB_BLACK_01/-base-hs80-rgb-usb-config-Gallery-HS80-RGB-USB-BLACK-01.png_515Wx515H">HS80 RGB USB Wired Gaming Headset</a></li>
      <!--Keyboard-->
      <li><img src="https://www.corsair.com/medias/sys_master/images/images/h1f/hb4/9686905716766/CH-912A01A-NA/Gallery/K100_RGB_01/-CH-912A01A-NA-Gallery-K100-RGB-01.png_515Wx515H" class="search-item-image"><a href="../pj/details/kb1d.htmlp">K100 RGB Optical-Mechanical Gaming Keyboard</a></li>
      <li><img src="https://media.steelseriescdn.com/thumbs/catalog/items/64868/13d8e8f0ee7047e7ac4e9188fef67448.png.350x280_q100_crop-fit_optimize.png" class="search-item-image"><a href="../pj/details/kb2d.html">APEX PRO TKL WIRELESS</a></li>
      <!--MotherBoard-->
      <li><img src="https://dlcdnwebimgs.asus.com/gain/CF424F00-69AA-4A45-941F-5520614F191D/w185/fwebp" class="search-item-image"><a href="../pj/details/mb1d.html">ROG MAXIMUS Z790 APEX</a></li>
      <li><img src="https://dlcdnwebimgs.asus.com/gain/59FED254-C70F-43F8-B95A-A318F62DB76E/w185/fwebp" class="search-item-image"><a href="../pj/details/mb2d.html">ROG STRIX Z790-E GAMING WIFI</a></li>
      <!--Mice-->
      <li><img src="https://media.steelseriescdn.com/thumbs/catalogue/products/00994-rival-600/bb0a643f86414f49b04da758dd316d16.png.350x280_q100_crop-fit_optimize.png" class="search-item-image"><a href="../pj/details/mice1d.html">Rival 600</a></li>
      <li><img src="https://media.steelseriescdn.com/thumbs/catalog/items/62552/3feb3ffc40f54d3d8a819a3902b18c85.png.350x280_q100_crop-fit_optimize.png" class="search-item-image"><a href="../pj/details/mice2d.html">Rival 5 Destiny Edition</a></li>
      <!--Mornitor-->
      <li><img src="https://dlcdnwebimgs.asus.com/gain/9233c983-f5a0-46b3-9e57-44d8f38a4a0d/w800/fwebp" class="search-item-image"><a href="../pj/details/monitor1d.html">TUF Gaming VG24VQE Curved</a></li>
      <li><img src="https://dlcdnwebimgs.asus.com/gain/c2d43cfc-e174-47b6-8269-2632bb8bdc99/w800/fwebp" class="search-item-image"><a href="../pj/details/monitor2d.html">TUF Gaming VG27VQM Curved</a></li>
      <!--Mousepad-->
      <li><img src="https://www.corsair.com/medias/sys_master/images/images/h60/h7f/8872168718366/-CH-9100020-WW-Gallery-MM100-001.png" class="search-item-image"><a href="../pj/details/mousepad1d.html">CORSAIR MM100 CLOTH</a></li>
      <li><img src="https://www.corsair.com/medias/sys_master/images/images/h79/h12/8840705867806/-CH-9000099-WW-Gallery-MM200-001.png" class="search-item-image"><a href="../pj/details/mousepad2d.html">CORSAIR MM200 CLOTH</a></li>
      <!--Ram-->
      <li><img src="https://www.corsair.com/medias/sys_master/images/images/h8c/hf1/9650689998878/CMT32GX4M2C3600C18/Gallery/DOMINATOR_PLAT_RGB_01/-CMT32GX4M2C3600C18-Gallery-DOMINATOR-PLAT-RGB-01.png_515Wx515H" class="search-item-image"><a href="../pj/details/ramdetail.html">DOMINATOR® PLATINUM RGB 32GB</a></li>
      <!--SSD-->
      <li><img src="https://media.kingston.com/kingston/product/ktc-product-ssd-sfyrd-sfyrdk-productcard-tn.png" class="search-item-image"><a href="../pj/details/ssddetail.html">Kingston FURY Renegade PCIe M.2 SSD 256GB</a></li>
  </ul>
</div>
<!--end-->
    <div class="cart-box">
                   <i class="fa-solid fa-cart-shopping fa-xl" id="cart" style="color:#2e2e;cursor:pointer;"></i>
                </div>
                
                   <!--Update table-->
                   <div id="shopping-cart" class="shopping-cart-container">
                    <h1>Cart</h1>
                    <iframe name="foundation" class="carterror"></iframe>
                    <form method="post" id="ismForm" action="../php/order.php" target="foundation">
                        <div class="cart-table">

                            <table id="cart-content">

                                <thead></thead>
                                <tbody></tbody>
                            </table>
                        </div>
                        <p class="total-container" id="total-price"></p>
                        <input type="text" value="" id="total-prod" class="pnames" name="prodnames">
                        <button type="submit" id="checkout-btn" class="cart-btn order" name="orderproduct">Checkout</button>
                        <a href="#" id="clear-cart" class="cart-btn">Clear Cart</a>
                    </form>
                </div>
                <!--end-->
                <div class="checkout">
            <i class="fa-light fa-circle-exclamation fa-3x"></i>
            <h1 id="cart-display">Do you want to buy?</h1>
            <div class="lds-default">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div class="buy-product-btn">
                <button class="buy-product" id="buy-yes">YES</button>
                <button class="buy-product" id="buy-no">NO</button>
            </div>
        </div>
  </header>
  <div class="sliderText">
    <div class="slider">
      <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <input type="radio" name="radio-btn" id="radio5">
        <div class="slide first" id="imgtext1">
          <img src="../pj/Image/msi.jpeg">
        </div>
        <div class="slide" id="imgtext2">
          <img src="../pj/Image/rog.webp">
        </div>
        <div class="slide" id="imgtext3">
          <img src="../pj/Image/rog1.webp">
        </div>
        <div class="slide" id="imgtext4">
          <img src="../pj/Image/msi1.jpeg">
        </div>
        <div class="slide" id="imgtext5">
          <img src="../pj/Image/tuf2.jpg">
        </div>
        <div class="navigation-auto">
          <div class="auto-btn-1"></div>
          <div class="auto-btn-2"></div>
          <div class="auto-btn-3"></div>
          <div class="auto-btn-4"></div>
          <div class="auto-btn-5"></div>
        </div>
      </div>
      <div class="navigation-mannual">
        <label for="radio1" class="mannual-btn"></label>
        <label for="radio2" class="mannual-btn"></label>
        <label for="radio3" class="mannual-btn"></label>
        <label for="radio4" class="mannual-btn"></label>
        <label for="radio5" class="mannual-btn"></label>
      </div>
    </div>
  </div>
  <div class="checkout">
                <i class="fa-light fa-circle-exclamation fa-3x"></i>
                <h1 id="cart-display">Do you want to buy?</h1>
                <div class="lds-default">
                    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                </div>
                <div class="buy-product-btn">
                <button class="buy-product" id="buy-yes">YES</button>
                <button class="buy-product" id="buy-no">NO</button>
                </div>
            </div>
  <section class="item-cap">
    <ul>
      <li class="list" data-filter="All"><a href="#promo-slider">Promotions</a></li>
      <li class="list" data-filter="MSI"><a href="#MSI">MSI</a></li>
      <li class="list" data-filter="ROG"><a href="#ASUS">ASUS</a></li>
      <li><a href="#RAZER">RAZER</a></li>
    </ul>
  </section>
  <section class="product-slider" id="promo-slider">
    <div class="promo">
      <h3>Special Offer</h3>
    </div>
    <ul id="autoWidth" class="cs-hidden">
      <!--1-->
      <li class="item-a">
        <div class="products">
          <span id="spanpromo"></span>
          <div class="product_image"><img src="../pj/Image/flowp2.webp" width="230px"></div>
          <div class="imgtext">ROG Flow Z13<br /><span><strike>$1649</strike> to $1200</span><br />  
          <div id="product-box">
                                <img src="../pj/Image/flowp2.webp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Flow Z13</h1>                      
                                <p class="product__price">$1200</p>
                                <button class="category-btn add-to-cart" data-id="1111" id="pro-buy">BUY</button>
                                </div>  
                            </div>
        </div>
      </li>
      
      <!--3-->
      <li class="item-a">
        <div class="products">
          <span id="spanpromo"></span>
          <div class="product_image"><img src="../pj/Image/rogs g17.png"></div>
          <div class="imgtext">ROG Strix G17<br /><span><strike>$1649</strike> to $1200</span><br />
          <div id="product-box">
                                <img src="../pj/Image/rogs g17.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Strix G17</h1>                      
                                <p class="product__price">$1200</p>
                                <button class="category-btn add-to-cart" data-id="1113" id="pro-buy">BUY</button>
                                </div>  
                            </div>
        </div>
      </li>
      <!--4-->
      <li class="item-a">
        <div class="products">
          <span id="spanpromo"></span>
          <div class="product_image"><img src="https://storage.us.aoc.com/assets/2022/11/asset-4in6cc-small.png"
                            height="175px" width="200px"></div>
          <div class="imgtext">AOC C27G2Z Curved<br /><span><strike>$450</strike> to $430</span><br />
          <div id="product-box">
                                <img src="https://storage.us.aoc.com/assets/2022/11/asset-4in6cc-small.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AOC C27G2Z Curved</h1>                      
                                <p class="product__price">$430</p>
                                <button class="category-btn add-to-cart" data-id="1114" id="pro-buy">BUY</button>
                                </div>  
                            </div>
        </div>
      </li>
      <!--5-->
      <li class="item-a">
        <div class="products">
          <span id="spanpromo"></span>
          <div class="product_image"><img
                            src="https://www.corsair.com/medias/sys_master/images/images/h6c/h4c/9326072954910/-CA-9011202-NA-Gallery-VOID-RGB-ELITE-WIRELESS-WHITE-01.png"
                            height="175x" width="200px"></div>
          <div class="imgtext">VOID RGB ELITE<br /><span><strike>$110</strike> to $100</span><br />
          <div id="product-box">
                                <img src="https://www.corsair.com/medias/sys_master/images/images/h6c/h4c/9326072954910/-CA-9011202-NA-Gallery-VOID-RGB-ELITE-WIRELESS-WHITE-01.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">VOID RGB ELITE</h1>                      
                                <p class="product__price">$100</p>
                                <button class="category-btn add-to-cart" data-id="1115" id="pro-buy">BUY</button>
                                </div>  
                            </div>
        </div>
      </li>
      <!--6-->
      <li class="item-a">
        <div class="products">
          <span id="spanpromo"></span>
          <div class="product_image"><img src="	https://cdn.coolermaster.com/media/assets/1036/mb511argb_00_01_380-hover.png"
                            height="200px" width="200px"></div>
          <div class="imgtext">MasterBox MB511 ARGB<br /><span><strike>$115</strike> to $100</span><br />
          <div id="product-box">
                                <img src="https://cdn.coolermaster.com/media/assets/1036/mb511argb_00_01_380-hover.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">MasterBox MB511 ARGB</h1>                      
                                <p class="product__price">$100</p>
                                <button class="category-btn add-to-cart" data-id="1116" id="pro-buy">BUY</button>
                                </div>  
                            </div>
        </div>
      </li>
      <!--7-->
      <li class="item-a">
        <div class="products">
          <span id="spanpromo"></span>
          <div class="product_image"><img
                            src="https://media.steelseriescdn.com/thumbs/catalog/items/62401/4fc6959164d24b90a5ba63deb22bc5c3.png.350x280_q100_crop-fit_optimize.png"
                            height="150px" width="200px"></div>
          <div class="imgtext">AEROX 5<br /><span><strike>$90</strike> to $85</span><br />
          <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalog/items/62401/4fc6959164d24b90a5ba63deb22bc5c3.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AEROX 5</h1>                      
                                <p class="product__price">$85</p>
                                <button class="category-btn add-to-cart" data-id="1117" id="pro-buy">BUY</button>
                                </div>  
                            </div>
        </div>
      </li>
      <!--2-->
      <li class="item-a">
        <div class="products">
          <span id="spanpromo"></span>
          <div class="product_image"><img
                            src="https://static.gigabyte.com/StaticFile/Image/Global/5fb12f96af9b8658d45e16d2868f4fb5/Product/29205/webp/300"
                            height="200px" width="200px"></div>
          <div class="imgtext">AORUS GeForce RTX™<br /><span><strike>$1570</strike> to $1550</span><br />
          <div id="product-box">
                                <img src="https://static.gigabyte.com/StaticFile/Image/Global/5fb12f96af9b8658d45e16d2868f4fb5/Product/29205/webp/300" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AORUS GeForce RTX™</h1>                      
                                <p class="product__price">$1550</p>
                                <button class="category-btn add-to-cart" data-id="1112" id="pro-buy">BUY</button>
                                </div>  
                            </div>
        </div>
      </li>
      <!--8-->
      <li class="item-a">
        <div class="products">
          <span id="spanpromo"></span>
          <div class="product_image"><img
                            src="https://assets3.razerzone.com/osLCaLKhvIBopNS-eT6CUPtneCY=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh20%2Fhf0%2F9090120712222%2Fblackwidow-v3-500x500-quartz.png"
                            height="175px" width="200px"></div>
          <div class="imgtext">Razer BlackWidow V3 Pink<br /><span><strike>$140</strike> to $130</span><br />
          <div id="product-box">
                                <img src="https://assets3.razerzone.com/osLCaLKhvIBopNS-eT6CUPtneCY=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh20%2Fhf0%2F9090120712222%2Fblackwidow-v3-500x500-quartz.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer BlackWidow V3 Pink</h1>                      
                                <p class="product__price">$130</p>
                                <button class="category-btn add-to-cart" data-id="1118" id="pro-buy">BUY</button>
                                </div>  
                            </div>
        </div>
      </li>
    </ul>
  </section>
  <div class="lighteff" id="RAZER">
    <h2><span>R</span><span>A</span><span>Z</span><span>E</span><span>R</span></h2>
  </div>
  <div class="razer-newitems">
    <a href="#" onclick="buyclick();">BUY</a>
    <h3>NEW RAZER BLADE 14</h3>
    <p>Now available in a contemporary Mercury Edition finish. Ultra-powerful 14-inch Gaming Laptop with AMD Ryzen™
      6900HX process</p>
    
  </div>
  <div class="Razer-product">
    <!--item1-->
    <div  class="razer-container">
      <div class="razer-i1"><a href="../pj/product_detail3.php"><img src="../pj/Image/razer blade 15.png" width="250px"></a> </div>
      <div class="razer-content">
        <h3>Razer Blade 15</h3>
        <h2 class="razer-price">$3299.<small>99</small></h2>
        <div id="product-box">
                                <img src="../pj/Image/razer blade 15.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Blade 15</h1>                      
                                <p class="product__price">$3300</p>
                                <button class="category-btn add-to-cart" data-id="9">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--item2-->
    <div class="razer-container">
      <div class="razer-i1"><img src="../pj/Image/razer blade 17.png" width="250px"> </div>
      <div class="razer-content">
        <h3>Razer Blade 17</h3>
        <h2 class="razer-price">$3799.<small>99</small></h2>
        <div id="product-box">
                                <img src="../pj/Image/razer blade 17.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Blade 17</h1>                      
                                <p class="product__price">$3800</p>
                                <button class="category-btn add-to-cart" data-id="10">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--item3-->
    <div class="razer-container">
      <div class="razer-i1"><img src="../pj/Image/razer blade 14.png" width="250px"> </div>
      <div class="razer-content">
        <h3>Razer Blade 14</h3>
        <h2 class="razer-price">$1849.<small>99</small></h2>
        <div id="product-box">
                                <img src="../pj/Image/razer blade 14.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Blade 14</h1>                      
                                <p class="product__price">$1850</p>
                                <button class="category-btn add-to-cart" data-id="11">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--item4-->
    <div data-id="4" class="razer-container">
      <div class="razer-i1"><img src="../pj/Image/razer blade 17 pro.png" width="250px"> </div>
      <div class="razer-content">
        <h3>Razer Blade pro 17</h3>
        <h2 class="razer-price">$3199.<small>99</small></h2>
        <div id="product-box">
                                <img src="../pj/Image/razer blade 17 pro.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Blade pro 17</h1>                      
                                <p class="product__price">$1850</p>
                                <button class="category-btn add-to-cart" data-id="12">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--item5-->
    <div data-id="5" class="razer-container">
      <div class="razer-i1"><img src="../pj/Image/razer blade 17.png" width="250px"> </div>
      <div class="razer-content">
        <h3>Razer Blade 17-Full</h3>
        <h2 class="razer-price">$3799.<small>99</small></h2>
        <div id="product-box">
                                <img src="../pj/Image/razer blade 17.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Blade 17-Full</h1>                      
                                <p class="product__price">$7800</p>
                                <button class="category-btn add-to-cart" data-id="12">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--item6-->
    <div data-id="6" class="razer-container">
      <div class="razer-i1"><img src="../pj/Image/razer blade 15.png" width="250px"> </div>
      <div class="razer-content">
        <h3>Razer Blade 15-Full</h3>
        <h2 class="razer-price">$3599.<small>99</small></h2>
        <div id="product-box">
                                <img src="../pj/Image/razer blade 17.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Blade 15-Full</h1>                      
                                <p class="product__price">$3600</p>
                                <button class="category-btn add-to-cart" data-id="12">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--item7-->
    <div data-id="7" class="razer-container">
      <div class="razer-i1"><img src="../pj/Image/razer blade 17 pro.png" width="250px"> </div>
      <div class="razer-content">
        <h3> Blade 17 pro-Full</h3>
        <h2 class="razer-price">$3499.<small>99</small></h2>
        <div id="product-box">
                                <img src="../pj/Image/razer blade 17 pro.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Blade 17 pro-Full</h1>                      
                                <p class="product__price">$3500</p>
                                <button class="category-btn add-to-cart" data-id="12">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--item8-->
    <div data-id="8" class="razer-container">
      <div class="razer-i1"><img src="../pj/Image/razer blade 14.png" width="250px"> </div>
      <div class="razer-content">
        <h3>Razer Blade 14-Full</h3>
        <h2 class="razer-price">$3199.<small>99</small></h2>
        <div id="product-box">
                                <img src="../pj/Image/razer blade 14.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Blade 14-Full</h1>                      
                                <p class="product__price">$3200</p>
                                <button class="category-btn add-to-cart" data-id="12">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
  </div>
  <div class="msi-text" id="MSI">
    <h2>MSI</h2>
  </div>
  <div class="msi-cover">
    <div class="arrowtext">
      <h2>Mouse On</h2>
    </div>
    <div class="arroweff">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="msi-img"><img src="../pj/Image/path to future.jpg" width="600px" id="msi-img-photo"></div>
    <div class="msidiv">
      <p>Game stores are highly specialized and interesting shops <br>selling entertainment products to a targeted
        niche.<br> Opening a Game Store can be a good business opportunity <br>if you have an idea and passion for
        gaming.</p>
      <div class="msi-video"><video width="600" height="800" id="msi-video-vd" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" loop muted>
          <source src="../pj/video/Bravo 15 B5E  MSI.mp4" type="video/mp4">
        </video></div>
    </div>
    <div class="background"></div>
  </div>
  <div class="msi-product">
    <!--Msi item 1-->
    <div class="msi-container">
      <div class="msi-i1"><a href="../pj/product_detail.php"><img src="../pj/Image/msi titan gt77.png"></a></div>
      <div class="msi-content">
        <h3>Titan GT77 - 12U</h3>
        <div id="product-box">
                                <img src="../pj/Image/msi titan gt77.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Titan GT77 - 12U</h1>                      
                                <p class="product__price">$3199</p>
                                <button class="category-btn add-to-cart" data-id="13">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--Msi item 2-->
    <div class="msi-container">
      <div class="msi-i1"><img src="../pj/Image/msi stealth 17.png"></div>
      <div class="msi-content">
        <h3>Stealth 17M - A12U</h3>
        <div id="product-box">
                                <img src="../pj/Image/msi stealth 17.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Stealth 17M - A12U</h1>                      
                                <p class="product__price">$3599</p>
                                <button class="category-btn add-to-cart" data-id="14">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--Msi item 3-->
    <div class="msi-container">
      <div class="msi-i1"><img src="../pj/Image/msi stealth gs.png"></div>
      <div class="msi-content">
        <h3>Stealth GS77 - 12U</h3>
        <div id="product-box">
                                <img src="../pj/Image/msi stealth gs.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Stealth GS77 - 12U</h1>                      
                                <p class="product__price">$3599</p>
                                <button class="category-btn add-to-cart" data-id="15">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--Msi item 4-->
    <div class="msi-container">
      <div class="msi-i1"><img src="../pj/Image/msi raider ge.png"></div>
      <div class="msi-content">
        <h3>Raider GE77 HX - 12U</h3>
        <div id="product-box">
                                <img src="../pj/Image/msi raider ge.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Raider GE77 HX - 12U</h1>                      
                                <p class="product__price">$3599</p>
                                <button class="category-btn add-to-cart" data-id="16">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--Msi item 5-->
    <div class="msi-container">
      <div class="msi-i1"><img src="../pj/Image/msi raider g76.png"></div>
      <div class="msi-content">
        <h3>Raider GE76 - 12U</h3>
        <div id="product-box">
                                <img src="../pj/Image/msi raider g76.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Raider GE76 - 12U</h1>                      
                                <p class="product__price">$4199</p>
                                <button class="category-btn add-to-cart" data-id="17">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--Msi item 6-->
    <div class="msi-container">
      <div class="msi-i1"><img src="../pj/Image/msi raider ge66.png"></div>
      <div class="msi-content">
        <h3>Raider GE66</h3>
        <div id="product-box">
                                <img src="../pj/Image/msi raider ge66.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Raider GE66U</h1>                      
                                <p class="product__price">$1199</p>
                                <button class="category-btn add-to-cart" data-id="18">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--Msi item 7-->
    <div class="msi-container">
      <div class="msi-i1"><img src="../pj/Image/msi vector gp76.png"></div>
      <div class="msi-content">
        <h3>Vector GP76 HX - 12U</h3>
        <div id="product-box">
                                <img src="../pj/Image/msi vector gp76.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Vector GP76 HX - 12U</h1>                      
                                <p class="product__price">$3200</p>
                                <button class="category-btn add-to-cart" data-id="19">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--Msi item 8-->
    <div class="msi-container">
      <div class="msi-i1"><img src="../pj/Image/msi vector gp66.png"></div>
      <div class="msi-content">
        <h3>Vector GP66 - 12U</h3>
        <div id="product-box">
                                <img src="../pj/Image/msi vector gp66.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Vector GP66 - 12U</h1>                      
                                <p class="product__price">$2199</p>
                                <button class="category-btn add-to-cart" data-id="20">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
    <!--Msi item 9-->
    <div class="msi-container">
      <div class="msi-i1"><a href="../pj/product_detail2.php"><img src="../pj/Image/msi leo.png"></a></div>
      <div class="msi-content">
        <h3>GP76 Leopard</h3>
        <div id="product-box">
                                <img src="../pj/Image/msi leo.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">GP76 Leopard</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="21">Add to cart</button>
                                </div>  
                            </div>
      </div>
    </div>
  </div>
  <hr style="border: 1px solid red;">
  <div class="starBg" id="ASUS">
    <h2>ASUS</h2>
    <p>Republic Of Gamer(ROG)</p>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <a href="#"><img src="../pj/Image/rogs scar17.png" id="starRog1"></a>
    <a href="#"><img src="../pj/Image/rogX13.png" id="starRog2"></a>
    <a href="#"><img src="../pj/Image/rogx16.png" id="starRog3"></a>
    <a href="#"><img src="../pj/Image/rogz duo16.png" id="starRog4"></a>
    <img src="../pj/Image/as.gif" id="asgif">
  </div>
  <div class="asus">
    <!--Asus Flow Series-->
    <div class="asus-flow">
      <div class="flowcap">
        <h3>ROG FLOW</h3>
      </div>
      <div class="flow-products">
        <!--item 1-->
        <div class="flow-container">
          <div><img src="../pj/Image/flowp1.webp"></div>
          <div class="flow-content">
            <h3>ROG Flow X16</h3>
            <div id="product-box">
                                <img src="../pj/Image/flowp1.webp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Flow X16</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="22">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 2-->
        <div class="flow-container">
          <div><img src="../pj/Image/flowp2.webp"></div>
          <div class="flow-content">
            <h3>ROG Flow Z13</h3>
            <div id="product-box">
                                <img src="../pj/Image/flowp2.webp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Flow Z13</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="23">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 3-->
        <div class="flow-container">
          <div><img src="../pj/Image/flowp3.webp"></div>
          <div class="flow-content">
            <h3>ROG Flow X13</h3>
            <div id="product-box">
                                <img src="../pj/Image/flowp3.webp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Flow X13</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="24">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 4-->
        <div class="flow-container">
          <div><img src="../pj/Image/flowp5.webp"></div>
          <div class="flow-content">
            <h3>ROG Flow X15</h3>
            <div id="product-box">
                                <img src="../pj/Image/flowp5.webp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Flow X15</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="25">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 5-->
        <div class="flow-container">
          <div><img src="../pj/Image/rog mothership.png"></div>
          <div class="flow-content">
            <h3>ROG Mothership</h3>
            <div id="product-box">
                                <img src="../pj/Image/rog mothership.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Mothership</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="26">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Asus Zephyrus Series-->
    <div class="asus-flow">
      <div class="flowcap">
        <h3>ROG STRIX</h3>
      </div>
      <div class="flow-products">
        <!--item 1-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogs g15.png"></div>
          <div class="flow-content">
            <h3>ROG Strix G 15</h3>
           <div id="product-box">
                                <img src="../pj/Image/rogs g15.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Strix G 15</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="27">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 2-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogs scar17.png"></div>
          <div class="flow-content">
            <h3>ROG Scar 17</h3>
            <div id="product-box">
                                <img src="../pj/Image/rogs scar17.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Scar 17</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="28">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 3-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogX13.png"></div>
          <div class="flow-content">
            <h3>ROG Strix X13</h3>
            <div id="product-box">
                                <img src="../pj/Image/rogX13.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Flow X13</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="29">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 4-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogx16.png"></div>
          <div class="flow-content">
            <h3>ROG Strix X16</h3>
            <div id="product-box">
                                <img src="../pj/Image/rogx16.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Flow X16</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="30">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 5-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogs g15.png"></div>
          <div class="flow-content">
            <h3>ROG Scar 15</h3>
            <div id="product-box">
                                <img src="../pj/Image/rogs g15.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Scar 15</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="31">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Asus Strix Series-->
    <div class="asus-flow">
      <div class="flowcap">
        <h3>ROG ZEPHRUS</h3>
      </div>
      <div class="flow-products">
        <!--item 1-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogz duo16.png"></div>
          <div class="flow-content">
            <h3>ROG Zephyrus Duo 16</h3>
            <div id="product-box">
                                <img src="../pj/Image/rogz duo16.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Zephyrus Duo 16</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="32">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 2-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogz g14.png"></div>
          <div class="flow-content">
            <h3>ROG Zephyrus G 14</h3>
            <div id="product-box">
                                <img src="../pj/Image/rogz g14.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Zephyrus G 14</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="33">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 3-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogz m16.png"></div>
          <div class="flow-content">
            <h3>ROG Zephyrus M 16</h3>
            <div id="product-box">
                                <img src="../pj/Image/rogz m16.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Zephyrus M 16</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="34">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 4-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogz13.png"></div>
          <div class="flow-content">
            <h3>ROG Zephyrus Z 13</h3>
            <div id="product-box">
                                <img src="../pj/Image/rogz13.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Zephyrus Z 13</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="35">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
        <!--item 5-->
        <div class="flow-container">
          <div><img src="../pj/Image/rogzg15.png"></div>
          <div class="flow-content">
            <h3>ROG Zephyrus G 15</h3>
            <div id="product-box">
                                <img src="../pj/Image/rogzg15.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ROG Zephyrus G 15</h1>                      
                                <p class="product__price">$3099</p>
                                <button class="category-btn add-to-cart" data-id="36">Add to cart</button>
                                </div>  
                            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="laptop_scribe">
    <h2>Laptop for Gaming</h2>
    <p>There is nothing worse than sitting down to play and finding your computer is crawling rather than flying through
      levels for those who love gaming. You may be frustrated with the lack of speed or precision. Sometimes, the screen
      itself can be limiting with poor graphic quality. Today's computer games are packed with fantastic tools and
      resources to make gameplay a lot of fun. The question is, then, what are the best laptops for gaming?

      With so many options on the market, it is easy to get confused or feel limited by your options. The key is to know
      what to look for when comparing your options. Here is the good news. Gaming laptops can do a lot, and you do not
      always have to spend a lot of money to get a great solution. At Lenovo, you will find that the best laptop for
      gaming for you is readily available and priced right.

      To get to that point, let us take a closer look at the features and specs that make these laptops ideal for the
      gaming experience:</p>

    <p>Start with Your Display: A good place to start is with the display itself. Most of the time, laptops like this
      should have fantastic graphics cards. It can impact your gameplay and overall results when you have a screen that
      is inferior to your opponents. There are a few things to consider here:
      What size is right for you? Bigger is sometimes better, but only if it is within your budget. You can get a great
      screen that is smaller with fantastic features. A larger size means the laptop will be heavier, but it is okay in
      this case. Most people do not want to lug their gaming laptops everywhere because that could risk damage. Aim for
      at least a 15-inch screen or larger.

      Resolution is important. The resolution can range widely, but it is important for you to compare several options.
      Look at the previous of any laptop you are considering to see the difference in the screen type. The key here is
      that you want to have a great resolution level to see the details built into your game.</p>

    <p>Refresh rate is another factor. Gaming is fast. You want to be sure that the display can keep up. A high refresh
      rate is important to consider when it comes to having a display that is beautiful and functionally efficient.

      While the display is important, some people may wish to reduce how much they spend on a laptop by reducing the
      size of these features. Instead, they buy an external monitor. Since external monitors can be very high quality in
      terms of resolution, refresh rate, and overall quality but tend to be a fraction of the cost of the same type of
      laptop screen. If you want to stay mobile, though, that is not an option.</p>
    <h2>How to Save Money Buying Gaming Laptops</h2>
    <p>There is nothing worse than sitting down to play and finding your computer is crawling rather than flying through
      levels for those who love gaming. You may be frustrated with the lack of speed or precision. Sometimes, the screen
      itself can be limiting with poor graphic quality. Today's computer games are packed with fantastic tools and
      resources to make gameplay a lot of fun. The question is, then, what are the best laptops for gaming?</p>
    <p>CPU and GPU: As you look for good laptops for gaming, you also need to think about the CPU and GPU. It is
      important to compare each of these carefully. The best way to do this is to simply compare several laptops to each
      other to determine which features are better. Look at the core count and the clock speed, for example. You may
      want to look at other factors that play a role in quality.</p>
    <p>As you compare your options, look at:</p>
    <ul>
      <li>The Bezels: Seek out thin bezels to reduce the size of the device</li>
      <li>Build quality: Aluminum casings are better for durability</li>
      <li>Weight: Whenever possible, keep weight low so that your laptop remains as portable as possible</li>
      <li>Luxury extras: You may want some nice features such as ultra-wide aspect ratios, upgradable hardware, and more
        than one screen</li>
      <li>Wireless connectivity: Next, take a look at the connectivity offered, such as access to the fastest wireless
        internet possible</li>
    </ul>
    <h3>Phoenix.com pricing, restrictions, warranties, and more</h3>
    <p><strong>Consumers Only:</strong>Phoenix.com sells and ships products to end-user customers only. Lenovo may
      cancel your order if we suspect you are purchasing products for resale.</p>
    <p><strong>Limits:</strong> Limit 5 per customer. Offers valid from Lenovo in the US only. Lenovo may increase or
      decrease these limits, from time to time, for certain offerings.</p>
    <p><strong>Shipping Date:</strong> Shipping times listed are estimates based on production time and product
      availability. An estimated ship date will be posted on our order status site after your order is placed. Ship
      dates do not include delivery times which will vary depending on the delivery method selected at checkout. Lenovo
      is not responsible for delays outside of our immediate control, including delays related to order processing,
      credit issues, inclement weather, or unexpected increase in demand. To obtain the latest information about the
      availability of a specific part number, please call the phone number listed in the masthead at the top of this
      page.</p>
    <p> <strong>Same Day Shipping:</strong> Products ship within the same business day (excl. bank holidays and
      weekends) for orders which have been placed prior to 3pm ET and which are prepaid in full or payment approved.
      Limited quantities are available. Software and accessories will be shipped separately and may have a different
      estimated ship date. Same day shipping may not be available for some orders placed with Klarna and Zibby payment
      options.</p>
    <p><strong>Warranty:</strong> For a copy of applicable warranties, write to: Lenovo Warranty Information, 1009 Think
      Place, Morrisville, NC, 27560. Lenovo makes no representation or warranty regarding third party products or
      services. The Lenovo Limited Warranty applies only to Lenovo hardware products purchased for your own use, and
      does not transfer upon resale.</p>
    <p> <strong>Battery:</strong>These systems do not support batteries that are not genuine Lenovo-made or authorized.
      Systems will continue to boot, but may not charge unauthorized batteries. Attention: Lenovo has no responsibility
      for the performance or safety of unauthorized batteries, and provides no warranties for failures or damage arising
      out of their use. Battery life (and recharge times) will vary based on many factors, including system settings and
      usage.</p>
    <p> <strong>Pricing: </strong> Does not include tax, shipping and handling, or recycling fees. Reseller prices may
      vary. Savings referenced off regular Lenovo web prices.</p>
    <hr id="laptop_hr">
  </div>
  <footer>  
    <div class="foot-row">
      <div class="foot-col">
        <a href="#" class="logo">Phoenix<img src="../pj/Image/logo.gif" width="70px"></a>
        <p>As the copyright notice, the terms of service are not mandatory,<br>but they should be included in
          the<br>
          website footer....</p>
      </div>
      <div class="foot-col">
        <h3>Office <div class="underline-eff"><span></span></div>
        </h3>
        <p>Pyae Road,</p>
        <p>Diamond Condo,</p>
        <p>Kokaing</p>
        <p class="email-id">phoneixspace@gmail.com</p>
        <h4>09 - 769200024</h4>
      </div>
      <div class="foot-col2">
        <h3>Links <div class="underline-eff"><span></span></div>
        </h3>
        <p><a href="../pj/pc_laptop.php">Home</a></p>
        <p><a href="../pj/laptop.php">Laptops</a></p>
        <p><a href="../pj/pc-part.php">PC Parts</a></p>
      </div>
      <div class="foot-col3">
        <h3>Newsletter</h3>
        <form>
          <i class="far fa-envelope"></i>
          <input type="email" placeholder="Enter your email id" required>
          <button type="submit"><i class="fas fa-arrow-right"></i></button>
        </form>
        <div class="social-icons">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
        </div>
      </div>
    </div>
    <hr id="bottom-hr">
    <p class="copyright">Copyright &copy;2023-2024 Phoenix Inc. All rights reserved.</p>
  </footer>
  <!--JS //////////////////-->
  <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js" integrity="sha512-Gfrxsz93rxFuB7KSYlln3wFqBaXUc1jtt3dGCp+2jTb563qYvnUBM/GP2ZUtRC27STN/zUamFtVFAIsRFoT6/w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <!--Search Button-->
  <script>
    let searchBtn = document.querySelector('.searchBtn');
    let closeBtn = document.querySelector('.closeBtn');
    let searchBox = document.querySelector('.searchBox');
    let navigation = document.querySelector('.navigation');
    let menuToggle = document.querySelector('.menuToggle');
    let header = document.querySelector('header');
    let search_item = document.querySelector('.itemboxsearch');
    searchBtn.onclick = function() {
      searchBox.classList.add('active');
      closeBtn.classList.add('active');
      searchBtn.classList.add('active');
      menuToggle.classList.add('hide');
      header.classList.remove('open');
    }
    closeBtn.onclick = function() {
      searchBox.classList.remove('active');
      closeBtn.classList.remove('active');
      searchBtn.classList.remove('active');
      menuToggle.classList.remove('hide');
    }
    menuToggle.onclick = function() {
      header.classList.toggle('open');
      searchBox.classList.remove('active');
      closeBtn.classList.remove('active');
      searchBtn.classList.remove('active');
    }
  </script>
  <!--nav var-->
  <script type="text/javascript">
    window.addEventListener("scroll", function() {
      var header = document.querySelector("header");
      header.classList.toggle("sticky", window.scrollY > 0);
    })
  </script>
  <!--scroll bar-->
  <script type="text/javascript">
    var progressbar = document.getElementById("progressbar");
    var percent = document.getElementById("percent");

    var totalHeight = document.body.scrollHeight - window.innerHeight;
    window.onscroll = function() {
      var progress = (window.pageYOffset / totalHeight) * 100;
      progressbar.style.height = progress + "%";
    }
  </script>
  <!--auto slide show-->
  <script>
    var counter = 1;
    setInterval(function() {
      document.getElementById('radio' + counter).checked = true;
      counter++;
      if (counter > 4) {
        counter = 1;
      }

    }, 6000);
  </script>

  <!--Product slider-->
  <script>
    $(document).ready(function() {
      $('#autoWidth').lightSlider({
        autoWidth: true,
        loop: true,
        onSliderLoad: function() {
          $('#autoWidth').removeClass('cS-hidden');
        }
      });
    });
  </script>
 <script>
    // When the user clicks on div, open the popup
    function myFunction() {
      var popup = document.getElementById("myPopup");
      popup.classList.toggle("show");
    }
  </script>
  
  <script>
        function buyclick() {
          let text = "Are you sure to buy?";
          if (confirm(text) == true) {
            alert("You're already bought!!");
          } 
         
        }
        </script>
<script src="../pj/cart.js"></script>
</body>

</html>