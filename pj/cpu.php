<?php ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>CPUs</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../pj/CSS/cpu.css" rel="stylesheet">
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

    <div class="Cpucontainer">
        <table id="table1">
            <tr>
                <td colspan="5" id="brandtitle">
                    <p id="productbrand" style="color: rgb(231, 10, 10); font-family: fantasy; font-size: 50px;">Intel</p>
                </td>
            </tr>
            <tr>
                <td><a href="../pj/details/cpu1d.html"><img src="../pj/hardware parts/i7 8700.jpg" height="175px"
                            width="200px"><br>Intel®Core™ i7-8700 Processor<br>$189</a>
                            <div id="product-box">
                                <img src="../pj/hardware parts/i7 8700.jpg" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Intel®Core™ i7-8700 Processor</h1>                      
                                <p class="product__price">$189</p>
                                <button class="category-btn add-to-cart" data-id="39">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="../pj/details/cpu2d.html"><img src="../pj/hardware parts/i9 12900.jpeg" height="175px"
                            width="200px"><br>Intel® Core™ i9-12900Processor<br>$568</a>
                            <div id="product-box">
                                <img src="../pj/hardware parts/i9 12900.jpeg" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Intel® Core™ i9-12900Processor</h1>                      
                                <p class="product__price">$568</p>
                                <button class="category-btn add-to-cart" data-id="40">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img src="../pj/hardware parts/i9 11900.jpeg" height="175px"
                            width="200px"><br>Intel® Core™ i9-11900Processor<br>$320</a>
                            <div id="product-box">
                                <img src="../pj/hardware parts/i9 11900.jpeg" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Intel® Core™ i9-11900Processo</h1>                      
                                <p class="product__price">$320</p>
                                <button class="category-btn add-to-cart" data-id="41">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img src="../pj/hardware parts/i9 10900.jpeg" height="175px"
                            width="200px"><br>Intel® Core™ i9-10900 Processor<br>$415</a>
                            <div id="product-box">
                                <img src="../pj/hardware parts/i9 10900.jpeg" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Intel® Core™ i9-10900 Processor</h1>                      
                                <p class="product__price">$415</p>
                                <button class="category-btn add-to-cart" data-id="42">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img src="../pj/hardware parts/i7 13700.jpeg" height="175px"
                            width="200px"><br>Intel® Core™ i7-13700K Processor<br>$459</a>
                            <div id="product-box">
                                <img src="../pj/hardware parts/i7 13700.jpeg" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Intel® Core™ i7-13700K Processor</h1>                      
                                <p class="product__price">$459</p>
                                <button class="category-btn add-to-cart" data-id="43">BUY</button>
                                </div>  
                            </div>
                        </td>
            </tr>

            <tr>
                <td><a href="#"><img src="../pj/hardware parts/i7 4700.png" height="175px"
                 width="200px"><br>Intel® Core™ i7-4700<br>$150</a>   
                                <div id="product-box">
                                <img src="../pj/hardware parts/i7 4700.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Intel® Core™ i7-4700</h1>                      
                                <p class="product__price">$150</p>
                                <button class="category-btn add-to-cart" data-id="44">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img src="../pj/hardware parts/i5 9400.jpeg" height="175px"
                            width="200px"><br>Intel® Core™ i5-9400<br>$295</a>
                            <div id="product-box">
                                <img src="../pj/hardware parts/i5 9400.jpeg" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Intel® Core™ i5-9400</h1>                      
                                <p class="product__price">$295</p>
                                <button class="category-btn add-to-cart" data-id="45">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img src="../pj/hardware parts/i5 7500.png" height="175px"
                 width="200px"><br>Intel® Core™ i5-7500<br>$110</a>
                        <div id="product-box">
                                <img src="../pj/hardware parts/i5 7500.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Intel® Core™ i5-7500</h1>                      
                                <p class="product__price">$110</p>
                                <button class="category-btn add-to-cart" data-id="46">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img src="../pj/hardware parts/i3 9100f.png" height="175px"
                            width="200px"><br>Intel® Core™ i3-9100F<br>$120</a>
                            <div id="product-box">
                                <img src="../pj/hardware parts/i3 9100f.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Intel® Core™ i3-9100F</h1>                      
                                <p class="product__price">$120</p>
                                <button class="category-btn add-to-cart" data-id="47">BUY</button>
                                </div>  
                            </div>
                        </td>
                        <td id="nocontent"></td>
            </tr>

            <tr>
                <td colspan="5" id="brandtitle">
                    <p id="productbrand" style="color: rgb(231, 10, 10); font-family: fantasy; font-size: 50px;">Ryzen</p>
                </td>
            </tr>

            <tr>
                <td><a href="../pj/details/cpu3d.html"><img src="../pj/hardware parts/r5 5600.png" height="175px" width="200px"><br>AMD
                        Ryzen™ 5 5600G<br>$485</a>
                        <div id="product-box">
                                <img src="../pj/hardware parts/r5 5600.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AMD Ryzen™ 5 5600G</h1>                      
                                <p class="product__price">$485</p>
                                <button class="category-btn add-to-cart" data-id="48">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="../pj/details/cpu4d.html"><img src="data:image/jpeg;base64,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"
                            height="175px" width="200px"><br>AMD Ryzen™5 PRO 4650G<br>$300</a>
                            <div id="product-box">
                                <img src="data:image/jpeg;base64,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" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AMD Ryzen™5 PRO 4650G</h1>                      
                                <p class="product__price">$300</p>
                                <button class="category-btn add-to-cart" data-id="49">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img src="../pj/hardware parts/r3600.png" height="175px"
                 width="200px"><br>AMD Ryzen™ 5 3600<br>$250</a>
                        <div id="product-box">
                                <img src="../pj/hardware parts/r3600.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AMD Ryzen™ 5 3600</h1>                      
                                <p class="product__price">$250</p>
                                <button class="category-btn add-to-cart" data-id="50">BUY</button>
                                </div>  
                            </div>
                    </td>
                <td><a href="#"><img src="../pj/hardware parts/r9 5900x.png" height="175px" width="200px"><br>
                AMD Ryzen™ 9 5900X<br>$630</a>
                        <div id="product-box">
                                <img src="../pj/hardware parts/r9 5900x.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AMD Ryzen™ 9 5900X</h1>                      
                                <p class="product__price">$630</p>
                                <button class="category-btn add-to-cart" data-id="51">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="data:image/jpeg;base64,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"
                            height="175px" width="200px"><br>AMD Ryzen™ 7 3800XT<br>$550</a>
                            <div id="product-box">
                                <img src="data:image/jpeg;base64,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" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AMD Ryzen™ 7 3800XT</h1>                      
                                <p class="product__price">$550</p>
                                <button class="category-btn add-to-cart" data-id="52">BUY</button>
                                </div>  
                            </div>
                        </td>
            </tr>

            <tr>
                <td><a href="#"><img
                            src="data:image/jpeg;base64,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"
                            height="175px" width="200px"><br>AMD Ryzen™ 3 3100<br>$113</a>
                            <div id="product-box">
                                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAoHCBUVFRgVFRUYGRgaHBoZGhwYGhgYGBgYHhocGhocGRwcIS4lHB8rIRgcJjgmKzAxNTc1GiQ7QDszPy40NTEBDAwMEA8QHxISHzQsIyw0MT06MT83NDQ7MT83NDQ0NDU2MTY2MTc2NDQxNDQ0NjE0NDE0ND03NDQ0NDQ0NDQ0NP/AABEIAMIBAwMBIgACEQEDEQH/xAAbAAEAAQUBAAAAAAAAAAAAAAAAAwECBAUHBv/EAEMQAAECAgUIBggEBQQDAAAAAAEAAgMRBBIhMfAFQVFhcZGhsQYiMnKBwQcTQnOy0eHxNFJikiMkM4KzFEOiwhZEo//EABkBAQADAQEAAAAAAAAAAAAAAAABAwQCBf/EACsRAAMAAgEDAwIFBQAAAAAAAAABAgMRBBIhMRNBUSIyBSNhkaEUFTOx0f/aAAwDAQACEQMRAD8A7MiIgCIiAIi18bK9HaSHRoYIvFZpO4GaA2CLRRulVGbc5zu613nJYkXpgz2Ybz3i1vKaA9Qi8VE6VxT2WMbtrOPMLFiZepDv9wjU1rRxlNToHv1FEjtb2nBu0gc1ziLTIju0952udLdNYxUA6FGy7R23xWnuzd8M1r43S2COy2I7wAHEzXjCrCpB6iN0yd7MIDW5xPAAc1gR+ldIdcWN7rQfiJWjKsJxjMhBnxstUh3ajP8A7TV+GS0uV6XEm11d9a3rB7p75zWVNazLJ7PiuLpRPUyzHDulKJ6N0lpjOzSH/wBxET4wVs4HTymN7Rhv7zJfCQsTIeTmuh1nsDvWOLATKbGBrhXE/wBVlijoeS2PhOa4hkQRXMDjORLWglp1WOM1nea2l0pdzSsGNNqm+x6Oj+kV/t0dp1teW8C081s6P0/o7u0yIzwa4cDPgvHxsmwW1nVnljWQ3gtqzdXc5s5HNYDJY3+hYHtDnmo9tdrw2ZAt7TdUjOSpeXNL8os9HDS7JnTIHSuhvujAd4Ob8QktlAylBf2IrHd1zT5rkVNoAY1r2xBEa4kAgSuvzrFDVy+XcvVJEf0kUty2dymqri1HpcRnYiPZ3XOHAFbKH0kpjbo7v7msdzbNdxzpf3LRXXDteHs6ui5a3p7S2GT2QnjTVc0nc6XBe06J5dNMhOeWBha4sIDqwPVaZ3D83BbZpUtrwZaly9M36Ii6ICIiAIiIAiIgCIiALkNJb13953Mrry5rQixlJe95Aa2ubROc3VJAZzJx3TUoGphQ3OMmtJOgAk8Fn0bJ0V7HPazqsnWM2irVEyCCZ3alsxTobWmHXY0hgYIgrGt/De0TqgnqucbvzDQoYtMgyrte5z3B7HCRBcDDDGvd4icr+sbkINY0q9RNKumgLiVQlUJVCUAJVhVSVYUAJVhKqSrZ4xjPoQA68b1rMs+ztOMeS2RxmWuywLG7T5KjP9jNHF/yowDFcaoLiQ3szJ6vd0LKjU17wWvdMF1c2ATdVqzsGgLCapWrzHT+T1+lGzhZTMqrmNc2oxkus3qsJLbQb7VlUbKjC51dkmFnq2tZ7LZ22kzt0rStUgIRXe+3crrHGu/Yzo1Ka5jWNbINe4ttn1XaTpmscKL1gCkY8HOuLm2upoTUJ9KZKFeFaFc1Z2WFXMBEiJhe79HMAMgRADYYpI1dRi8MF7/oD/Rf7w/C1a+DdLJ077MycuV0dXueqREXsnmBERAEREAREQBERAFynKI67j+o8yurLl1NEy7vO5qUDCcJhWBXsNisdYVJBK1yvmoGuV4cgJCVaSrZqk1ALiVYUmqTQBypNUmqE4xixCRNa7K9zdp5BbEnGNuLZa7LBsbtPlj6zApzrcMv4rSyrf6muar64CgMRGlZ8fF33o1ZuZp6j9zI9YVRryowVcCtU4olaSMNZbp7bJfWnSqCIdPAKNJqfTleyId0/LZkspZF4nzWfDeHCYWnVYcUsMwZcismfhzS3PZ/wacPKqXqu6N2F77oF/Rf7w/C1c3o1Ma4WyB4HNYukdAv6L/eH4WrJxcdY86VL5L+Tc1h3LPVIiL2DzQiIgCIiAIiIAiIgC5fH7T+87mV1Bcuinru7zuZUoGC2wo8KtIEnIUIIwVdNWATMgtpRYQbt0qrLmWNfqX4cFZH+hh/6d/5HblG9pFhBB1iS37FdFgteKrhMcRsWNc17+pdi+uItfSzzk1SalplGMN1U2g3HSPmseeM2MZ1vmlS2jHUuXplZ4xjPoTTjH01W0J54x8gqHGPDhqE5IKnGMc1rctXN2u5DGJrYz4Y+W/WFgZWHVbtPIYxIAagY+aqDjH3UZxdj5K4HH3+6kglBVwKiBxi9XIC+aTVs0mgLpq0lUJVpKAqXLq/ozj16M+d4iEHX1GW7pLkpK6p6Kvw0T3p+Bi5cptP3R0m9NHuURFJAREQBERAEREAREQBcsjHru7zuZXU1yqKeu7vO5lSgQUkKyGZhZkKhvimoxtZ0iZTaLBffZnSLkekQml74RDReZscBm9kkoEY0EWqeLSqlgtPAKAw3MALmkVhWbP2mm4jSFG+ixKwBY+s4VgKpmW/mAlaNaxrH6lt14N+XJ6UKY8/JT/VvnOtbpkJrb5PyiHya+x2bQ75FaV1GeL2PG1jh5YsUIfVM5yI4HHLWrcuCLnWjLGape9np8pwK7Dpb1h5jcvNTx9scF6mjRw9jXjONxzjevM0plV7m5gTLZeMfRZ+HTW4fsW8lJ6pe5bPH2xozKgxgeH2lK2eOePmJJ4xi+ycwtxlLp43/XNp2LDypa1u08gsonGNg3C8CYxcpdlu13IfPzzzQGpeFHPHBZDgoHjbjF+5SQUDte9A8aRvxgKN8MuVW0ZRsnRL6waRvSuNI4Yzoyiq8UVR1E6I6yoSstlFWJSG1XEfNSnshotJXVvRP+Gie+PwMXJicYxYuseiY/ysT3zvDqMUkHu0RFBIREQBERAEREAREQBcoinrv7zuZXV1yaMeu7vO5lSgbDI0B74lWE+o6qTWtusmLMWLcxqLSYcKkGPGD4fqngCZmHGUja0axfnWlyPGa1z6zgJwojROybiLBtUdHfXo0eC51rC2KyZvlY8CZtszaSjE9mZuQYLaXBhseROA7rTzwXWy3tlsCwaVl14pLqQyqb2MDgSKlwsBF9/ioeijzVpMj/68TyVuSMn+vjNhkyBmXHPVFplrNyrxfaaOVPTkaXj/AKeryVlyKYL6RSAxsNtjaocHPd+mbtNg0nRJebyLl18ExXNgl4e6sbT1O0QJhp059G1bLpLk+kxHNZDgkQWCTGtLLZCVYitO6wDRrKg6Kx3wYNKexhe9hZ1JEkmbgR1bbLdysM5tqF0iERpLoFUzIlMHm0aVFkfJ0OKI7Xtaa1QBxArNm0t6pzGYzK+idJHvBr0cslZaXDg5qwBELaPSnNJBaYJBGYhwII4XrKn+brfz7Ghr8revg1mRqBKmNgxWgyc9rgbjJjiD43jbtC1tPaGxYjQJAPeABmAcQBulz0Ee2obBSIlGpjAKwrMigZiGOE9VunM5uheJykf40X3kT43efHRn0mchnjXjAJmcTKR6re87kMb1kz8PLl5eCxMqdhtntHkLPpZmuRAw1E9uMYCkY7GOao4YxyUgmokCbZ6ypvUAaFNRWD1BJkRPO4NEpi9xwVHDqGs4NnVIrFrw+YM5mYFss40LlonZLAghwsIOay21SGjK9jyxge0NAJ9suLnCxrJAAzcQLtmtKRFeKok0OLZuAY98rTnaQMFNAkhUdedyoJRXjX5D5rff6xzSQQJTY1pl7RDSQ4ZpgmWyS0OWj/Gft8hjcpQMNxxjFmhda9Eh/lYnvj/jYuRk4+6636I/wsX3x/xsQg96iIgCIiAIiIAiIgCIiALkdIPXd3ncyuuLkFJPXf3ncypQL5rGpDcXKZpsUUeUlINfCeWvIu+XyWyg0h7DWY5zXaWkg67RmWqpLZEOCyKPEmFmT6K0/DPUy4/XwrJPlG3Z0kpTbozjtDHc2qHJmX4tHc8sqEvNZ1ZpMzbdJwla48lr4iiYwucAM/L5YvV+1rZ5il717nu6D0piPYHPYy2fZLgJXZyV59+Vg2HSINUkvLA1wPZqyvF+Y4mEdFDGamiW3QNpWjc+ZJN5mTvt488xtWXC6u3T8exqzzOOVK8+56DorlttHc4Pn6t4tkJ1XDsmQvmJgy1SukNTTYofEe8XOe9wvnJziW8D97lig4xi6elVBxt58Z/qWoyF88Y3arrLlBTx1B3neFgUk9ePnrzaRcraW2bB3jyFwx5ogaphxrxuUoxjE1G8Yv2Yzq9jsY57lIN1k6EHQpH88817XB1viFK6G0F18n3jNdIkaLFhUSkBrJazqVkSmKCTZvgseG1p9W6TnNlZLMQoaRChmU2gyEhMk2X5zbetcaeseLTVANwyK0WSErMwzSlukNy83lSJOK8657gMbleaUVhxXzcTjFvIomGWE4++b5W3rrnoh/CxffO+Bm9chnjdp8OC696IPwsX3zs8/YYpIPfoiIAiIgCIiAIiIAiIgC4/Su2/vu+IrsC45GPWd3jzUoFWFHmyQ5qJhV7j46lJBhRBO8eIWKxxaZFZURsjdLYVaWh1h+u5VZI6kbOJyfRbVeGStfMFSUZwbbqtOZY7YYAs42/fmoYjsYxpVc4n09LZZl5MPJ1SvBPS6VXsHZHE5zjxCxwcYxoncoyccsbiqg45/bhnVsypWkY7urrqolDsYx3VUHG3H0co633xuv8AHMrp6cY46CujgkDsbLz4YqqsYTYM3WPIX7cEqzHjo8OeYK91rLva/wCotx5qUDWxBi7GtRMMjjHyWTEZjONFixXNxjXvKAviOdZK1QEOOYrIY7HPHgFecZtvDcLM6jROzCLTnVrlkxG4xd5bSsd7cYu8rk0RsiL5ZuKhJxdz8eOpSuGMY3qE4z6N/wBtKaBQnH3xecwXX/Q+f5WL74/42Lj2NOMTvXYPQ8f5WL7455/7bMcc6A6CiIgCIiAIiIAiIgCIiALjMY9Z3ePNdmXFop6ztp5qUCk1eTjGZREqrSpIII0p+xvM1HPBtH7haFLF1cGiXFY7rNW9h3ixQCatiy3dY7wtUETGMHarg7Flv/U8FbEx9Z2757UBCTjHHkgdjGNisccfPHiqB2MY1qCSYO+f1+vFXA40fLhfnUTTjGNavafn8/qdlqAkBlo2as1+bcNqn9jP2vIX/KyySxmnH23mWoTUdKpZYxllhe6tp7In4784UNpd2dxDt9M+SSK3ZtnzWI9uMx2HMZbgswEOAcLjaCLuKxordnlfjx2Lo41p6ZA04u+x5BTNOBw+m9QO++fPn02585VzHYxx0oC94xyxtKx3tx8saysg4xnwFE/GM/ndmUAw3DGMblC7GMZ9SyXjH1z+exY78YxdqUgjdjG3z1LsPofaRRIk88ZxH7Gb1yCGyZ1Z8eHDUF2T0UfhonvT8DFW6+pSXek/Tdvwe7REXZSEREAREQBERAEREAXHqPFc10QtbWJBGkAVhaR4S8V2FcVhUhzHEtN5t0GRmJ+NqA2DzR3AWlpzyFUyk8kSlKY6gzz8VWLkoCVR4IN1YWHrhnaF/aGa22yxY7KawkV2AidspCzrG43drTmUceMxhBgveJzrCZF0i2c8/iQJBSQRU2iPaKzm2XTtcLyLm3dk4K17rNX7m85hbCPT3uZUJBaasvZ7M5Sq2m8rXgaAf/oOKAsa/Pxsl4kTB8QquNnL6Wy3HwUbjbr8CeFV3NVDt/HxsBPiChJC/H1wFZWx543qr8avlwUVbGMWqATNdx5+Z37VIHcca58SsnJVA9ZNzp1BMWe0fpO+3Qs5+RfyP/cPMcrlRWeJrpbNE8XLU9SXY1Ydf52y2zv8c5usWLlfsM755cduma2j8mxW21Z90izZnHgL7VqsrsLWNBEuubCJeyPlts1rqrmpfSy7iY6nOupNeTDoNLLDI2tO8ax8ltC8OFYGY05thGY68y0Kqx5baCRsXE5HPZnocnhTlfVPZ/7Nq4Y1eYluCsBxd9tRzBYT6U4y1ZhMAnOSFT15lLjn171Z6qMP9uy/KNiDjF3leqOxu4WbhbeVqy8nOd6lZSXTtM9u2c99qhZUTf4baW00zIiDGMW61ivGLlmP0437+JuksN9+MfZd1WvBjxY+pvq7JFWGxdd9Ejp0WJ74/Axcdmuveh4zosX3x/xsVUT9WzdyKlYFJ0JERXnmBERAEREAREQBERAFpsodHKNGmXQw1x9pnUdPSZWE7QVuUQHgcodBHi2DFDv0vEj+4WHcF5en5IpEEn1kJ7R+aVZn7hMb/FdmVCEBwsnjrNu61yxy227e0+bprsWUOjFFjTLoQa43uZ1HHbVsd4gryeUfR48TdR4jXfpiBrD+4MM/EBSDw8YHXL+6XEOGAog6zVvHCsOS2uVMh0iAJxYLmgXuAaWD+9oaBvWnJz36zM8TP4ggDzn4/IzPNVoNEMV9W4XuOgcp70ZDc8gNEybvvbKW1eloNFENtUbSdJWXk51jnS8s2cPjPNW34Rkw2BoDWiQFgC9DQWUN7Gh5qPAkTMtmdp6pXnprb5GocGKHCI+q6Yq9YCYlodYbV52Gm68J7+T1eRKWPe2tfBJlXJAhtERj6zZyN0xO60WELw3TLsw+87kF0inZPECiRG1qwLmuBlK9zRp1Fc26YdiH3ncgr3KnKu2u3g54lu5799PyeWREVxtCIiAKiKajw8+7bpxnlYRNdTO3opzZZxw6ZkkgDhy+nAXFYzzqsUz2z2ajjXxNyug0d7yGQ2Oe78rGue79omcawVoab7ex4U3MLq8t/sjBeuv+hv8ACRffO+Bi8VQvR/T4tvqhDBzxXhv/ABE3bwuo9COjjqDAdCc9r3OeXktaWgTa1shMzPZvsXSWvBRVuntnpkRFJyEREAREQBERAEREAREQBERAEREBQhaHKnRKhxyXPgta8+3D6j56Zi/xmt+iA5//AOBmEXOgxA8m6vY4N0VhOfDMtdSsnxYXbY5o0ym39wsXUFaQsubizke96Ztwc68S6dJo5QCvQUDJdHjQ2yi1Ykus2YNvddafBekpmQYES0sDTpZ1TwsPiFoqZ0RcLYbw7U4SO8WHcFlXGvG96TRsfMjKktuX+6JKbQHQKJEa5wdNzS2UxZWbZI3Gwrm/S/sQ+87kF6ynUeOxobFDw0XTJc0bCCQF5/L0Jr2MrCfWOeWYKZfXlSS129yyKWHG7p7772jxSL0VCyGYplDgvf3Q5w8SDILdUf0ZUl8iXMhd51d0tjLOK1vFSE/iGGn32jwaoSuwZN9FtGbIxoj4pzgfw2bm9b/kvV5N6PUWB/RgQ2n8waC/xcZk71KxP3OL/Eca+1N/wcRyV0TpceRbR31dLhUbLa+XCa9hk70ZRHWx4zWD8sMFx/c6QBzWAyzFdSkqq2ZU+DzM3IvM9vx8HlaB0CoMORdDMQjPFNYHa0SbwXo6NRWQ21YbGsAzNaGjcFkIuigIiIAiIgCIiAIiIAiIgCIiAIiIAiIgCIiAIiIAiIgKIiIC1aKLQIRpDJwoZ6pNrGm2QtuvRFy/KO17m7hiQkFe5EXRwioVURAEREAREQBERAEREAREQBERAf/Z" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AMD Ryzen™ 3 3100</h1>                      
                                <p class="product__price">$113</p>
                                <button class="category-btn add-to-cart" data-id="53">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img src="../pj/hardware parts/r5 3600.jpg" height="175px" width="200px"><br>
                AMD Ryzen™ R5 3600<br>$299</a>
                        <div id="product-box">
                                <img src="../pj/hardware parts/r5 3600.jpg" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">AMD Ryzen™ R5 3600</h1>                      
                                <p class="product__price">$299</p>
                                <button class="category-btn add-to-cart" data-id="54">BUY</button>
                                </div>  
                            </div>
                        </td>
                        <td id="nocontent"></td>
                        <td id="nocontent"></td>
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