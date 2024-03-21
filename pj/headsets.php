<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Headsets</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../pj/CSS/headsets.css" rel="stylesheet">
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

    <div class="HScontainer">
        <table id="table1">
            <tr>
                <td colspan="5" id="brandtitle">
                    <p id="productbrand" style="color: #2e2e; font-family: fantasy; font-size: 50px;">CORSAIR</p>
                </td>
            </tr>
            <tr>
                <td><a href="../pj/details/hs1d.html"><img
                            src="https://www.corsair.com/medias/sys_master/images/images/h43/h00/9788813738014/CA-9011188-NA/Gallery/VIRTUOSO_XT_01/-CA-9011188-NA-Gallery-VIRTUOSO-XT-01.png_515Wx515H"
                            height="175px" width="200px"><br>VIRTUOSO RGB WIRELESS XT Gaming Headset<br>$200</a>
                            <div id="product-box">
                                <img src="https://www.corsair.com/medias/sys_master/images/images/h43/h00/9788813738014/CA-9011188-NA/Gallery/VIRTUOSO_XT_01/-CA-9011188-NA-Gallery-VIRTUOSO-XT-01.png_515Wx515H" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">VIRTUOSO RGB WIRELESS XT Gaming Headset</h1>                      
                                <p class="product__price">$200</p>
                                <button class="category-btn add-to-cart" data-id="127">BUY</button>
                                </div>  
                            </div>
                </td>
                <td><a href="../pj/details/hs2d.html"><img
                            src="https://www.corsair.com/medias/sys_master/images/images/hea/h60/10092332548126/base-hs80-rgb-usb-config/Gallery/HS80_RGB_USB_BLACK_01/-base-hs80-rgb-usb-config-Gallery-HS80-RGB-USB-BLACK-01.png_515Wx515H"
                            height="175px" width="200px"><br>HS80 RGB USB Wired Gaming Headset<br>$100</a>
                            <div id="product-box">
                                <img src="https://www.corsair.com/medias/sys_master/images/images/hea/h60/10092332548126/base-hs80-rgb-usb-config/Gallery/HS80_RGB_USB_BLACK_01/-base-hs80-rgb-usb-config-Gallery-HS80-RGB-USB-BLACK-01.png_515Wx515H" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">HS80 RGB USB Wired Gaming Headset</h1>                      
                                <p class="product__price">$100</p>
                                <button class="category-btn add-to-cart" data-id="128">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://www.corsair.com/medias/sys_master/images/images/h6c/h4c/9326072954910/-CA-9011202-NA-Gallery-VOID-RGB-ELITE-WIRELESS-WHITE-01.png"
                            height="175x" width="200px"><br>VOID RGB ELITE Wireless Premium Gaming
                        Headset<br>$110</a>
                        <div id="product-box">
                                <img src="https://www.corsair.com/medias/sys_master/images/images/h6c/h4c/9326072954910/-CA-9011202-NA-Gallery-VOID-RGB-ELITE-WIRELESS-WHITE-01.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">VOID RGB ELITE Wireless Premium Gaming
                        Headset</h1>                      
                                <p class="product__price">$110</p>
                                <button class="category-btn add-to-cart" data-id="129">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://www.corsair.com/medias/sys_master/images/images/hd9/hd7/9254023331870/-CA-9011198-NA-Gallery-HS35-RED-01.png"
                            height="175x" width="200px"><br>HS35 Stereo Gaming Headset<br>$60</a>
                            <div id="product-box">
                                <img src="https://www.corsair.com/medias/sys_master/images/images/hd9/hd7/9254023331870/-CA-9011198-NA-Gallery-HS35-RED-01.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">HS35 Stereo Gaming Headset</h1>                      
                                <p class="product__price">$60</p>
                                <button class="category-btn add-to-cart" data-id="130">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://www.corsair.com/medias/sys_master/images/images/h94/h2f/10123695718430/CA-9011261-NA/Gallery/CA-9011261-NA_01/-CA-9011261-NA-Gallery-CA-9011261-NA-01.png_515Wx515H"
                            height="175x" width="200px"><br>HS55 STEREO Wired Gaming Headset<br>$60</a>
                            <div id="product-box">
                                <img src="https://www.corsair.com/medias/sys_master/images/images/h94/h2f/10123695718430/CA-9011261-NA/Gallery/CA-9011261-NA_01/-CA-9011261-NA-Gallery-CA-9011261-NA-01.png_515Wx515H" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">HS55 STEREO Wired Gaming Headset</h1>                      
                                <p class="product__price">$60</p>
                                <button class="category-btn add-to-cart" data-id="131">BUY</button>
                                </div>  
                            </div>
                        </td>
            </tr>

            <tr>
                <td colspan="5" id="brandtitle">
                    <p id="productbrand" style="color: #2e2e; font-family: fantasy; font-size: 50px;">Steelseries</p>
                </td>
            </tr>
            <tr>
                <td><a href="../pj/details/hs3d.html"><img
                            src="https://media.steelseriescdn.com/thumbs/catalog/items/61520/90658027dc584e768f7746b12c5e572d.png.350x280_q100_crop-fit_optimize.png"
                            height="150px" width="200px"><br>ARTICS NOVA PRO WIRELESS<br>$380</a> 
                            <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalog/items/61520/90658027dc584e768f7746b12c5e572d.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ARTICS NOVA PRO WIRELESS</h1>                      
                                <p class="product__price">$380</p>
                                <button class="category-btn add-to-cart" data-id="132">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://media.steelseriescdn.com/thumbs/catalog/items/61521/ca17bed6f7894480b7dca1c6e0c2e33a.png.350x280_q100_crop-fit_optimize.png"
                            height="150x" width="200px"><br>ARTICS NOVA PRO<br>$360</a>
                            <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalog/items/61521/ca17bed6f7894480b7dca1c6e0c2e33a.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ARTICS NOVA PRO</h1>                      
                                <p class="product__price">$360</p>
                                <button class="category-btn add-to-cart" data-id="133">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://media.steelseriescdn.com/thumbs/catalog/items/61484/21ceeebd676e4e1b880350ddd8a472dc.png.350x280_q100_crop-fit_optimize.png"
                            height="150px" width="200px"><br>ARTICS 9 WIRELESS<br>$155</a>
                            <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalog/items/61484/21ceeebd676e4e1b880350ddd8a472dc.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ARTICS 9 WIRELESS</h1>                      
                                <p class="product__price">$155</p>
                                <button class="category-btn add-to-cart" data-id="134">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://media.steelseriescdn.com/thumbs/catalog/items/61481/950b684d6a7e4d83a598bb5baebcaa6c.png.350x280_q100_crop-fit_optimize.png"
                            height="150px" width="200px"><br>ARTICS 9X<br>$40</a>
                            <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalog/items/61481/950b684d6a7e4d83a598bb5baebcaa6c.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ARTICS 9X</h1>                      
                                <p class="product__price">$40</p>
                                <button class="category-btn add-to-cart" data-id="135">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://media.steelseriescdn.com/thumbs/catalogue/products/00933-arctis-pro/f821642c0eba47db92f191144a27c2f9.png.350x280_q100_crop-fit_optimize.png"
                            height="150px" width="200px"><br>ARTICS PRO<br>$200</a>
                            <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalogue/products/00933-arctis-pro/f821642c0eba47db92f191144a27c2f9.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ARTICS PRO</h1>                      
                                <p class="product__price">$200</p>
                                <button class="category-btn add-to-cart" data-id="136">BUY</button>
                                </div>  
                            </div>
                        </td>
            </tr>
            <tr>
                <td><a href="#"><img
                            src="https://media.steelseriescdn.com/thumbs/catalogue/products/00964-arctis-5-black-2019-edition/2d05914f40f34ebe8accceeffe9d2f41.png.350x280_q100_crop-fit_optimize.png"
                            height="150px" width="200px"><br>ARTICS 5<br>$100</a>
                            <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalogue/products/00964-arctis-5-black-2019-edition/2d05914f40f34ebe8accceeffe9d2f41.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ARTICS 5</h1>                      
                                <p class="product__price">$100</p>
                                <button class="category-btn add-to-cart" data-id="137">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://media.steelseriescdn.com/thumbs/catalogue/products/00970-arctis-3-black-2019-edition/f800e7c31ffc4e6397d4a34a81e3c770.png.350x280_q100_crop-fit_optimize.png"
                            height="150px" width="200px"><br>ARTICS 3<br>$80</a>
                            <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalogue/products/00970-arctis-3-black-2019-edition/f800e7c31ffc4e6397d4a34a81e3c770.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ARTICS 3</h1>                      
                                <p class="product__price">$80</p>
                                <button class="category-btn add-to-cart" data-id="138">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://media.steelseriescdn.com/thumbs/catalog/items/61499/abe31454327949c6956b0ab1c8410a4d.png.350x280_q100_crop-fit_optimize.png"
                            height="150px" width="200px"><br>ARTICS 3 CONSOLE<br>$70</a>
                            <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalog/items/61499/abe31454327949c6956b0ab1c8410a4d.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ARTICS 3 CONSOLE</h1>                      
                                <p class="product__price">$70</p>
                                <button class="category-btn add-to-cart" data-id="139">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://media.steelseriescdn.com/thumbs/catalogue/products/01038-arctis-1/8e3aa05394e24b94afb50175573be728.png.350x280_q100_crop-fit_optimize.png"
                            height="150px" width="200px"><br>ARTICS 1<br>$40</a>
                            <div id="product-box">
                                <img src="https://media.steelseriescdn.com/thumbs/catalogue/products/01038-arctis-1/8e3aa05394e24b94afb50175573be728.png.350x280_q100_crop-fit_optimize.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">ARTICS 1</h1>                      
                                <p class="product__price">$40</p>
                                <button class="category-btn add-to-cart" data-id="140">BUY</button>
                                </div>  
                            </div>
                        </td>
                        <td id="nocontent"></td>
            </tr>

            <tr>
                <td colspan="5" id="brandtitle">
                    <p id="productbrand" style="color: #2e2e; font-family: fantasy; font-size: 50px;">LOGITECH</p>
                </td>
            </tr>
            <tr>
                <td><a href="../pj/details/hs4d.html"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/pro-wireless/pro-wireless-headset-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH PRO X WIRELESS<br>$170</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/pro-wireless/pro-wireless-headset-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH PRO X WIRELESS</h1>                      
                                <p class="product__price">$170</p>
                                <button class="category-btn add-to-cart" data-id="141">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/pro-x/pro-headset-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH PRO X<br>$130</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/pro-x/pro-headset-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH PRO X</h1>                      
                                <p class="product__price">$130</p>
                                <button class="category-btn add-to-cart" data-id="142">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/pro-x/pro-headset-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH PRO<br>$100</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/pro-x/pro-headset-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH PRO</h1>                      
                                <p class="product__price">$100</p>
                                <button class="category-btn add-to-cart" data-id="143">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH G735 WIRELESS<br>$200</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/audio/g735-wireless-headset/gallery/g735-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH G735 WIRELESS</h1>                      
                                <p class="product__price">$200</p>
                                <button class="category-btn add-to-cart" data-id="144">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g335/g335-black-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH G335<br>$70</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g335/g335-black-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH G335</h1>                      
                                <p class="product__price">$70</p>
                                <button class="category-btn add-to-cart" data-id="145">BUY</button>
                                </div>  
                            </div>
                        </td>
            </tr>
            <tr>
                <td><a href="#"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g733/gallery/g733-white-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH G733<br>$150</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g733/gallery/g733-white-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH G733</h1>                      
                                <p class="product__price">$150</p>
                                <button class="category-btn add-to-cart" data-id="146">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g332/g332-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH G332<br>$60</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g332/g332-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH G332</h1>                      
                                <p class="product__price">$60</p>
                                <button class="category-btn add-to-cart" data-id="147">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g432/g432-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH G432<br>$80</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g432/g432-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH G432</h1>                      
                                <p class="product__price">$80</p>
                                <button class="category-btn add-to-cart" data-id="148">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g333-gaming-earphones/g333-black-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH G333<br>$50</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g333-gaming-earphones/g333-black-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH G333</h1>                      
                                <p class="product__price">$50</p>
                                <button class="category-btn add-to-cart" data-id="149">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g333-kda/g333-kda-gallery-1.png?v=1"
                            height="150px" width="200px"><br>LOGITECH G333 KDA<br>$50</a>
                            <div id="product-box">
                                <img src="https://resource.logitechg.com/w_386,ar_1.0,c_limit,f_auto,q_auto,dpr_2.0/d_transparent.gif/content/dam/gaming/en/products/g333-kda/g333-kda-gallery-1.png?v=1" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">LOGITECH G333 KDA</h1>                      
                                <p class="product__price">$50</p>
                                <button class="category-btn add-to-cart" data-id="150">BUY</button>
                                </div>  
                            </div>
                        </td>
            </tr>

            <tr>
                <td colspan="5" id="brandtitle">
                    <p id="productbrand" style="color: #2e2e; font-family: fantasy; font-size: 50px;">Razer</p>
                </td>
            </tr>
            <tr>
                <td><a href="../pj/details/hs5d.html"><img
                            src="https://assets3.razerzone.com/N-o1Wnxe6gHFmHGMJ2HSBViJ_C0=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh6a%2Fhff%2F9397630140446%2Fkraken-v3-pro-3-500x500.png"
                            height="175px" width="200px"><br>Razer Kraken V3 Pro<br>$200</a>
                            <div id="product-box">
                                <img src="https://assets3.razerzone.com/N-o1Wnxe6gHFmHGMJ2HSBViJ_C0=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh6a%2Fhff%2F9397630140446%2Fkraken-v3-pro-3-500x500.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Kraken V3 Pro</h1>                      
                                <p class="product__price">$200</p>
                                <button class="category-btn add-to-cart" data-id="151">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://assets3.razerzone.com/xPnRsQj1tloAz-Tigp7s2w8Qedk=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhab%2Fhfb%2F9397630271518%2Fkraken-v3-3-500x500.png"
                            height="175px" width="200px"><br>Razer Kraken V3<br>$100</a>
                            <div id="product-box">
                                <img src="https://assets3.razerzone.com/xPnRsQj1tloAz-Tigp7s2w8Qedk=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhab%2Fhfb%2F9397630271518%2Fkraken-v3-3-500x500.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Kraken V3</h1>                      
                                <p class="product__price">$100</p>
                                <button class="category-btn add-to-cart" data-id="152">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://assets3.razerzone.com/I6dGobVy_U8qjOlD1E4xHpsFqGQ=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh83%2Fh7e%2F9399589666846%2F2-blackshark-v2-pro-black-500x500.png"
                            height="175px" width="200px"><br>Razer BlackShark V2 Pro
                        <br>$180</a>
                        <div id="product-box">
                                <img src="https://assets3.razerzone.com/I6dGobVy_U8qjOlD1E4xHpsFqGQ=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh83%2Fh7e%2F9399589666846%2F2-blackshark-v2-pro-black-500x500.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer BlackShark V2 Pro</h1>                      
                                <p class="product__price">$180</p>
                                <button class="category-btn add-to-cart" data-id="153">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://assets3.razerzone.com/ebMf2l3rmux3QoatLaoifw1kpLc=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhed%2Fhf4%2F9397630468126%2Fkraken-v3-hypersense-3-500x500.png"
                            height="175px" width="200px"><br>Razer Kraken V3 HyperSense<br>$130</a>
                            <div id="product-box">
                                <img src="https://assets3.razerzone.com/ebMf2l3rmux3QoatLaoifw1kpLc=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhed%2Fhf4%2F9397630468126%2Fkraken-v3-hypersense-3-500x500.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Kraken V3 HyperSense</h1>                      
                                <p class="product__price">$130</p>
                                <button class="category-btn add-to-cart" data-id="154">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://assets3.razerzone.com/RTAJgyBvX09r1j-zCtpppdYpCTM=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh33%2Fh0c%2F9081100632094%2FKraken-Kitty-Quartz-500x500.png"
                            height="175px" width="200px"><br>Razer Kraken Kitty Quartz<br>$110</a>
                            <div id="product-box">
                                <img src="https://assets3.razerzone.com/RTAJgyBvX09r1j-zCtpppdYpCTM=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh33%2Fh0c%2F9081100632094%2FKraken-Kitty-Quartz-500x500.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Kraken Kitty Quartz</h1>                      
                                <p class="product__price">$110</p>
                                <button class="category-btn add-to-cart" data-id="155">BUY</button>
                                </div>  
                            </div>
                        </td>
            </tr>
            <tr>
                <td><a href="#"><img
                            src="https://assets3.razerzone.com/KoLktsT9QpMVC0_PfvnPhzMQJ6w=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fha7%2Fhaa%2F9445641224222%2Fkaira-hyperspeed-ps-2022-500x500.png"
                            height="175px" width="200px"><br>Razer Kaira HyperSpeed PlayStation<br>$130</a>
                            <div id="product-box">
                                <img src="https://assets3.razerzone.com/KoLktsT9QpMVC0_PfvnPhzMQJ6w=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fha7%2Fhaa%2F9445641224222%2Fkaira-hyperspeed-ps-2022-500x500.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Kaira HyperSpeed PlayStation</h1>                      
                                <p class="product__price">$130</p>
                                <button class="category-btn add-to-cart" data-id="156">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://assets3.razerzone.com/9y2D3rqyAWWDlHPK2PZG5FW5v_U=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh66%2Fhce%2F9397619884062%2Fkaira-pro-xbox-halo-2-500x500.png"
                            height="175px" width="200px"><br>Razer Kaira Pro for Xbox Halo Infinite<br>$170</a>
                            <div id="product-box">
                                <img src="https://assets3.razerzone.com/9y2D3rqyAWWDlHPK2PZG5FW5v_U=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh66%2Fhce%2F9397619884062%2Fkaira-pro-xbox-halo-2-500x500.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Kaira Pro for Xbox Halo Infinite</h1>                      
                                <p class="product__price">$170</p>
                                <button class="category-btn add-to-cart" data-id="157">BUY</button>
                                </div>  
                            </div>
                        </td>
                <td><a href="#"><img
                            src="https://assets3.razerzone.com/cHZsLAOZghICJRZP2wFObW3QixE=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh40%2Fh85%2F9399589470238%2F2-nari-ultimate-500x500.png"
                            height="175px" width="200px"><br>Razer Nari Ultimate<br>$200</a>
                            <div id="product-box">
                                <img src="https://assets3.razerzone.com/cHZsLAOZghICJRZP2wFObW3QixE=/300x300/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh40%2Fh85%2F9399589470238%2F2-nari-ultimate-500x500.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Nari Ultimate</h1>                      
                                <p class="product__price">$200</p>
                                <button class="category-btn add-to-cart" data-id="158">BUY</button>
                                </div>  
                            </div>
                        </td>
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