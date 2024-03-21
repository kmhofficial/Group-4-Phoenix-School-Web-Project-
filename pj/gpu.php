<!DOCTYPE html>
<html lang="en">
    <head>
        <title>GPUs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../pj/CSS/gpu.css" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="shortcut icon" href="../media/index/websitetab.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.1.js"
        integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/dcb9efbc7e.js" crossorigin="anonymous"></script>
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

    <section class="banner">
    </section>

    <nav class="menu-bar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class=" fas fa-bars"></i>
        </label>

        <!--<label class="logo">Phoenix</label>-->
        <ul>
            <li class="active"><a href="../pj/cpu.php">CPUs</a>

            </li>

            <li><a href="../pj/gpu.php">GPUs</a>

            </li>
            <li><a href="../pj/monitor.php">Monitors</a>

            </li>
            <li><a href="../pj/Casing.php">Casings</a>

            </li>

            <li><a href="../pj/Gamingchair.php">Chairs</a>

            </li>
            <li><a href="../pj/Motherboard.php">MBoards</a>

            </li>
            <li><a href="#">Accessories</a>
                <ul>
                    <li><a href="../pj/mice.php">Mice</a></li>
                    <li><a href="../pj/keyboard.php">Keyboards</a></li>
                    <li><a href="../pj/headsets.php">HeadSets</a></li>
                    <li><a href="../pj/mousepad.php">MousePads</a></li>
                    <li><a href="../pj/ram&fan.php">RAM & FANs</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    
    <div class="Gpucontainer">
        <table id="table1">
            <tr> 
                <td colspan="5"  id="brandtitle">
                    <p id="productbrand" style="color: rgb(236, 139, 11); font-family: fantasy; font-size: 50px;">ASUS</p>
                </td>
            </tr>
            <tr>
                <td><a href="../pj/details/gpu1d.html"><img
                            src="https://dlcdnwebimgs.asus.com/gain/6d667c63-0039-4f87-8b66-79835d21f20f/w185/fwebp"
                            height="200px" width="200px"><br>ASUS DUAL-GTX 1650-O4GD6-MINI-CSM<br>$210</a>
                            <div id="product-box">
                                <img src="https://dlcdnwebimgs.asus.com/gain/6d667c63-0039-4f87-8b66-79835d21f20f/w185/fwebp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ASUS DUAL-GTX 1650-O4GD6-MINI-CSM</h1>                      
                                <p class="product__price">$210</p>
                                <button class="category-btn add-to-cart" data-id="55">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="../pj/details/gpu2d.html"><img
                            src="https://dlcdnwebimgs.asus.com/gain/7ab4eba9-e3d3-4277-8d7d-543aa4a059d8/w185/fwebp"
                            height="200px" width="200px"><br>ASUS Dual GeForce RTX™ 2060 EVO OC Edition<br>$380</a>
                            <div id="product-box">
                                <img src="https://dlcdnwebimgs.asus.com/gain/7ab4eba9-e3d3-4277-8d7d-543aa4a059d8/w185/fwebp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ASUS Dual GeForce RTX™ 2060 EVO OC Edition</h1>                      
                                <p class="product__price">$380</p>
                                <button class="category-btn add-to-cart" data-id="56">BUY</button>
                                </div>  
                            </div>
                </td>
                <td><a href="#"><img
                            src="https://dlcdnwebimgs.asus.com/gain/BA157A73-6BC7-4584-8EC6-E642077E966D/w185/fwebp"
                            height="200x" width="200px"><br>ASUS ROG Strix GeForce RTX™ 3050<br>$430</a>
                            <div id="product-box">
                                <img src="https://dlcdnwebimgs.asus.com/gain/BA157A73-6BC7-4584-8EC6-E642077E966D/w185/fwebp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ASUS ROG Strix GeForce RTX™ 3050</h1>                      
                                <p class="product__price">$430</p>
                                <button class="category-btn add-to-cart" data-id="57">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://dlcdnwebimgs.asus.com/gain/441db968-0373-48b7-b257-f983ba6262aa/w185/fwebp"
                            height="200px" width="200px"><br>TUF Gaming GeForce RTX™ 3070 Ti<br>$700</a>
                            <div id="product-box">
                                <img src="https://dlcdnwebimgs.asus.com/gain/441db968-0373-48b7-b257-f983ba6262aa/w185/fwebp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">TUF Gaming GeForce RTX™ 3070 Ti</h1>                      
                                <p class="product__price">$700</p>
                                <button class="category-btn add-to-cart" data-id="58">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://dlcdnwebimgs.asus.com/gain/39305244-868C-4680-B6BB-3885EE03C630/w185/fwebp"
                            height="200px" width="200px"><br>ASUS ROG Strix GeForce RTX™ 3080<br>$800</a>
                            <div id="product-box">
                                <img src="https://dlcdnwebimgs.asus.com/gain/39305244-868C-4680-B6BB-3885EE03C630/w185/fwebp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ASUS ROG Strix GeForce RTX™ 3080</h1>                      
                                <p class="product__price">$800</p>
                                <button class="category-btn add-to-cart" data-id="59">BUY</button>
                                </div>  
                            </div>
                        </td>

            </tr>

            <tr>
                <td><a href="#"><img
                            src="https://dlcdnwebimgs.asus.com/gain/410d8984-a462-4d4f-8f3c-1922093a15b8/w185/fwebp"
                            height="200px" width="200px"><br>ASUS TUF Gaming GeForce RTX™ 3090 Ti<br>$1500</a>
                            <div id="product-box">
                                <img src="https://dlcdnwebimgs.asus.com/gain/410d8984-a462-4d4f-8f3c-1922093a15b8/w185/fwebp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ASUS TUF Gaming GeForce RTX™ 3090 Ti</h1>                      
                                <p class="product__price">$1500</p>
                                <button class="category-btn add-to-cart" data-id="60">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://dlcdnwebimgs.asus.com/gain/6CEB03EC-708D-4C30-A7E1-BF77B938D1AA/w185/fwebp"
                            height="200px" width="200px"><br>ASUS ROG Strix GeForce RTX™ 4080<br>$1500</a>
                            <div id="product-box">
                                <img src="https://dlcdnwebimgs.asus.com/gain/6CEB03EC-708D-4C30-A7E1-BF77B938D1AA/w185/fwebp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ASUS ROG Strix GeForce RTX™ 4080</h1>                      
                                <p class="product__price">$1500</p>
                                <button class="category-btn add-to-cart" data-id="61">BUY</button>
                                </div>  
                            </div>
                        </td>
                        <td id="nocontent"></td>
                        <td id="nocontent"></td>
                        <td id="nocontent"></td>
            </tr>
            <tr>
                <td colspan="5"  id="brandtitle">
                    <p id="productbrand" style="color: rgb(236, 139, 11); font-family: fantasy; font-size: 50px;">GIGABYTE</p>
                </td>
            <tr>
                <td><a href="../pj/details/gpu3d.html"><img
                            src="https://static.gigabyte.com/StaticFile/Image/Global/8cd9b83c084dde40c3b8dcaf8603158f/Product/17568/webp/300"
                            height="200px" width="200px"><br>AORUS GeForce® GTX 1080 Ti Waterforce WB<br>$725</a>
                            <div id="product-box">
                                <img src="https://static.gigabyte.com/StaticFile/Image/Global/8cd9b83c084dde40c3b8dcaf8603158f/Product/17568/webp/300" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AORUS GeForce® GTX 1080 Ti Waterforce WB</h1>                      
                                <p class="product__price">$725</p>
                                <button class="category-btn add-to-cart" data-id="62">BUY</button>
                                </div>  
                            </div>
                </td>
                <td><a href="../pj/details/gpu4d.html"><img
                            src="https://static.gigabyte.com/StaticFile/Image/Global/30623baf40e8e9dec2e341ed03fbad04/Product/23151/webp/300"
                            height="200px" width="200px"><br>AORUS GeForce® GTX 1660 Ti<br>$900</a>
                            <div id="product-box">
                                <img src="https://static.gigabyte.com/StaticFile/Image/Global/30623baf40e8e9dec2e341ed03fbad04/Product/23151/webp/300" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AORUS GeForce® GTX 1660 Ti</h1>                      
                                <p class="product__price">$900</p>
                                <button class="category-btn add-to-cart" data-id="63">BUY</button>
                                </div>  
                            </div></td>

                <td><a href="#"><img
                            src="https://static.gigabyte.com/StaticFile/Image/Global/bba09e7eb981846fc5e12056bbec746f/Product/23236/webp/300"
                            height="200px" width="200px"><br>AORUS GeForce® RTX 2080 SUPER™<br>$1150</a>
                            <div id="product-box">
                                <img src="https://static.gigabyte.com/StaticFile/Image/Global/bba09e7eb981846fc5e12056bbec746f/Product/23236/webp/300" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AORUS GeForce® RTX 2080 SUPER™</h1>                      
                                <p class="product__price">$1150</p>
                                <button class="category-btn add-to-cart" data-id="64">BUY</button>
                                </div>  
                            </div>
                        </td>

                <td><a href="#"><img
                            src="https://static.gigabyte.com/StaticFile/Image/Global/5fb12f96af9b8658d45e16d2868f4fb5/Product/29205/webp/300"
                            height="200px" width="200px"><br>AORUS GeForce RTX™ 3080 Ti XTREME WB<br>$1570</a>
                            <div id="product-box">
                                <img src="https://static.gigabyte.com/StaticFile/Image/Global/5fb12f96af9b8658d45e16d2868f4fb5/Product/29205/webp/300" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AORUS GeForce RTX™ 3080 Ti XTREME WB</h1>                      
                                <p class="product__price">$1570</p>
                                <button class="category-btn add-to-cart" data-id="65">BUY</button>
                                </div>  
                            </div>
                </td>
                <td id="nocontent"></td>
            </tr>


            <tr>
                <td colspan="5" id="brandtitle">
                    <p id="productbrand" style="color: rgb(236, 139, 11); font-family: fantasy; font-size: 50px;">MSI</p>
                </td>
            </tr>
            <tr>
                <td><a href="../pj/details/gpu5d.html"><img
                            src="https://asset.msi.com/resize/image/global/product/product_1637822701c4f0d5fc339448acd945f495d4853b59.png62405b38c58fe0f07fcef2367d8a9ba1/400.png"
                            height="150px" width="200px"><br>MSI GeForce RTX™ 2060 VENTUS<br>$400</a>
                            <div id="product-box">
                                <img src="https://asset.msi.com/resize/image/global/product/product_1637822701c4f0d5fc339448acd945f495d4853b59.png62405b38c58fe0f07fcef2367d8a9ba1/400.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">MSI GeForce RTX™ 2060 VENTUS</h1>                      
                                <p class="product__price">$400</p>
                                <button class="category-btn add-to-cart" data-id="66">BUY</button>
                                </div>  
                            </div>
                </td>
                <td><a href="#"><img
                            src="https://asset.msi.com/resize/image/global/product/product_2_20190604104753_5cf5dbd9c793e.png62405b38c58fe0f07fcef2367d8a9ba1/400.png"
                            height="150px" width="200px"><br>MSI GeForce RTX 2080 Ti LIGHTNING Edition<br>$1200</a>
                            <div id="product-box">
                                <img src="https://asset.msi.com/resize/image/global/product/product_2_20190604104753_5cf5dbd9c793e.png62405b38c58fe0f07fcef2367d8a9ba1/400.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">MSI GeForce RTX 2080 Ti LIGHTNING Edition</h1>                      
                                <p class="product__price">$1200</p>
                                <button class="category-btn add-to-cart" data-id="67">BUY</button>
                                </div>  
                            </div>
                </td>
                <td><a href="#"><img
                            src="https://asset.msi.com/resize/image/global/product/product_164854661778abe72756db1d7891395bc4fd97521d.png62405b38c58fe0f07fcef2367d8a9ba1/400.png"
                            height="150px" width="200px"><br>MSI GeForce RTX™ 3090 Ti GAMING TRIO<br>$1600</a>
                            <div id="product-box">
                                <img src="https://asset.msi.com/resize/image/global/product/product_164854661778abe72756db1d7891395bc4fd97521d.png62405b38c58fe0f07fcef2367d8a9ba1/400.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">MSI GeForce RTX™ 3090 Ti GAMING TRIO</h1>                      
                                <p class="product__price">$1600</p>
                                <button class="category-btn add-to-cart" data-id="68">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://asset.msi.com/resize/image/global/product/product_1668072619aaa562df9dd1ada3ffebd483276bac5c.png62405b38c58fe0f07fcef2367d8a9ba1/400.png"
                            height="150px" width="200px"><br>MSI GeForce RTX™ 4080 SUPRIM X <br>$2100</a>
                            <div id="product-box">
                                <img src="https://asset.msi.com/resize/image/global/product/product_1668072619aaa562df9dd1ada3ffebd483276bac5c.png62405b38c58fe0f07fcef2367d8a9ba1/400.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">MSI GeForce RTX™ 4080 SUPRIM X</h1>                      
                                <p class="product__price">$2100</p>
                                <button class="category-btn add-to-cart" data-id="69">BUY</button>
                                </div>  
                            </div>
                        </td>
                        <td id="nocontent"></td>
            </tr>

        </table>
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




    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
        let searchBtn = document.querySelector('.searchBtn');
        let closeBtn = document.querySelector('.closeBtn');
        let searchBox = document.querySelector('.searchBox');
        let navigation = document.querySelector('.navigation');
        let menuToggle = document.querySelector('.menuToggle');
        let header = document.querySelector('header');
        searchBtn.onclick = function () {
            searchBox.classList.add('active');
            closeBtn.classList.add('active');
            searchBtn.classList.add('active');
            menuToggle.classList.add('hide');
            header.classList.remove('open');
        }
        closeBtn.onclick = function () {
            searchBox.classList.remove('active');
            closeBtn.classList.remove('active');
            searchBtn.classList.remove('active');
            menuToggle.classList.remove('hide');
        }
        menuToggle.onclick = function () {
            header.classList.toggle('open');
            searchBox.classList.remove('active');
            closeBtn.classList.remove('active');
            searchBtn.classList.remove('active');
        }
    </script>
    <script type="text/javascript">
        window.addEventListener("scroll", function () {
            var header = document.querySelector("header");
            header.classList.toggle("sticky", window.scrollY > 0);
        })
    </script>
    
<script src="../pj/cart.js"></script>
    </body>
</html>