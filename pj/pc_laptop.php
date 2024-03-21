
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home Page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../pj/CSS/pc_laptop.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia&effect=fire">
    <link rel="shortcut icon" href="../media/index/websitetab.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
    <div class="popup">
        <div class="contentBox">
            <div class="pop-close"></div>
            <div class="imgBox">
                <img src="../pj/Image/gift.png">
            </div>
            <div class="pop-content">
                <div>
                    <h3>Special Offer</h3>
                    <h2>15<sup>%</sup><span>Off</span></h2>
                    <p>Don't miss the chance!!!<br />Making your life easier...</p>
                    <a href="../pj/laptop.php #promo-slider">Get The Deal</a>
                </div>
            </div>
        </div>
    </div>


    <header>
    <a href="../index.php" class="logo">Phoenix<img src="../pj/Image/logo.gif" width="70px" id="phoenix"></a>
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
        <div class="text-photo">
            <div class="wavy">
                <span style="--i:1">W</span>
                <span style="--i:2">E</span>
                <span style="--i:3">L</span>
                <span style="--i:4">C</span>
                <span style="--i:5">O</span>
                <span style="--i:6">M</span>
                <span style="--i:7">E</span>
                <span style="--i:8">!</span>
                <span style="--i:9">!</span>
            </div>
            <p>Let me be your best seller..</p>
            <p>Choose whatever you want.</p>
            <p>Games don't make you violent, lag does.</p>
            <p>Failure doesn't mean the game is over,it means try again with experience.</p>
        </div>
    </section>

    <div class="choose_menu">
        <div class="container">
            <div class="box" style="--clr:#89ec5b;">
                <div class="content">
                    <div class="icon"><img src="../pj/Image/raizer laptop.jpg" width="200px" height="120px" alt="Laptops">
                    </div>
                    <div class="text">
                        <h3>Laptops</h3>
                        <p>Sleek high-performance gaming laptops</p>
                        <a href="../pj/laptop.php">More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="box" style="--clr:#5b98eb;">
                <div class="content">
                    <div class="icon"><img src="../pj/Image/raizer desktop.jpg" width="200px" height="120px"
                            alt="Desktops"></div>
                    <div class="text">
                        <h3>Desktops & Components</h3>
                        <p>Designed for performance</p>
                        <a href="../pj/monitor.php">More</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="box" style="--clr:#e25822;">
                <div class="content">
                    <div class="icon"><img src="../pj/Image/raizer accessories.jpg" width="200px" height="120px"
                            alt="Accessories">
                    </div>
                    <div class="text">
                        <h3>Accessories</h3>
                        <p>Crafting the perfect gaming experience</p>
                        <a href="../pj/pc-part.php">More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="console-header">
        <h2>Choose your Console</h2>
        <p>Your Choice Of Power<br />The Same Amazing Games And Entertainment</p>
        <div class="console">
            <div class="ps4">
                <div><img src="../pj/Image/ps4.webp" width="450px" height="300px" alt="PS4"></div>
                <h3>PlayStation 4</h3>
                <p>Incredible games live on PS4</p>
                <h4>Price - $60</h4>
                <div id="product-box">
                                <img src="../pj/Image/ps4.webp" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">PlayStation 4</h1>                      
                                <p class="product__price">$60</p>
                                <button class="category-btn add-to-cart" data-id="1">Buy</button>
                                </div>  
                            </div>
             
            </div>
            <div class="razer_edge">
                <div><img src="../pj/Image/razer edge.png" width="350px" height="300px" alt="PS4"></div>
                <h3>Razer Edge</h3>
                <p>The Ultimate Anroid Gaming Handheld</p>
                <h4>Price - $25</h4>
                <div id="product-box">
                                <img src="../pj/Image/razer edge.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Razer Edge</h1>                      
                                <p class="product__price">$25</p>
                                <button class="category-btn add-to-cart" data-id="2">Buy</button>
                                </div>  
                            </div>
            </div>
        </div>
    </div>
    <div class="steamdeck">
        <video width="100%" height="auto" autoplay loop muted>
            <source src="../pj/video/trailerloop_short.mp4" type="video/mp4" />
        </video>
        <div class="steamdeck-text">
            <h2>&#9813 &nbsp; STEAM DECK</h2>
        </div>
        <div class="vdlabel">
            <p>Steam Deck brings the Steam games and features<br /> you love to a powerful and convenient form
                factor<br />
                that you can take wherever you go.</p>
        </div>
        <div class="steamdeckbtn"><a href="#" onclick="buyclick();"><span></span>
                <span></span>
                <span></span>
                <span></span>
                BUY
            </a></div>
    </div>

    <section>
        <div class="best_sale">Best Sale Items</div>
        <div class="card-container">
            <div class="card">
                <div class="imgBx">
                    <img src="../pj/Image/MSI.png" width="240px">
                    <h2>MSI Raider GE77</h2>
                </div>
                <div class="card-content">
                    <p>CPU-12th Gen Intel® Core i9-12900<br />
                        Display 17.3 FHD (1920x1080)<br />
                        Duo Wave Speaker Design<br /></p>
                    <span>Price - $5200</span>
                    <div id="product-box">
                                <img src="../pj/Image/MSI.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">MSI Raider GE77</h1>                      
                                <p class="product__price"> $5200</p>
                                <button class="category-btn add-to-cart" data-id="3">Buy</button>
                                </div>  
                            </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="imgBx">
                    <img src="../pj/Image/rival_5.png" width="200px">
                    <h2>Rival 5 Destiny Edition</h2>
                </div>
                <div class="card-content">
                    <p>Cpi 100-18000<br />
                        Sensor- Optical<br />
                        Cable Length - 2m, 6.7ft<br /></p>
                    <span>Price - $390</span>
                    <div id="product-box">
                                <img src="../pj/Image/rival_5.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Rival 5 Destiny Edition</h1>                      
                                <p class="product__price"> $390</p>
                                <button class="category-btn add-to-cart" data-id="4">Buy</button>
                                </div>  
                            </div>
                </div>
                </div>
            </div>
        </div>
        <div class="card-container">
            <div class="card">
                <div class="imgBx">
                    <img src="../pj/Image/artics_Nova_Pro_Wireless.png" width="200px">
                    <h2>Arctis nova pro </h2>
                </div>
                <div class="card-content">
                    <p>Active Noise Cancellation<br />
                        Microphone Pop Filter<br />
                        Wireless range - 40ft<br /></p>
                    <span>Price - $380</span>
                    <div id="product-box">
                                <img src="../pj/Image/artics_Nova_Pro_Wireless.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Arctis nova pro</h1>                      
                                <p class="product__price"> $380</p>
                                <button class="category-btn add-to-cart" data-id="5">Buy</button>
                                </div>  
                            </div>
                </div>
            </div>
        </div>
    </section>
    <div class="mornitors">
        <div class="videocaption">
            <p class="font-effect-fire" id="fonteff">ALIEN<br /><br />WARE</p>
        </div>
        <div class="alienware">
            <video width="500" height="300" onmouseover="this.play()" onmouseout="this.pause();this.currentTime=0;" loop>
                <source src="../pj/video/Alienware 27 Gaming Monitor - AW2721D Product Video (2020).mp4" type="video/mp4">
            </video>
        </div>
    </div>
    <div class="sample-products">
        <div class="alienwarephoto">
            <div class="imge-alienware">
                <img src="../pj/Image/alienware front view.png" alt="Dell Gaming Mornitor"
                    onmouseover="this.src='../pj/Image/Alienware_34_Curved.png'" width="350px" height="430px"
                    onmouseout="this.src='../pj/Image/alienware front view.png'">
            </div>
            <div class="alien-text">
                <h2>Alienware AW2721D</h2>
                <p>Price - $750</p>
                <div id="product-box">
                                <img src="../pj/Image/Alienware_34_Curved.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Alienware AW2721D</h1>                      
                                <p class="product__price"> $750</p>
                                <button class="category-btn add-to-cart" data-id="6">Buy</button>
                                </div>  
                            </div>
            </div>
        </div>

        <div class="corsairkeyboard">
            <div class="imge-corsairkeyboard">
                <img src="../pj/Image/corsair fornt view.png" alt="Corsair keyboard"
                    onmouseover="this.src='../pj/Image/corsair side view.png'" width="380px" height="150px"
                    onmouseout="this.src='../pj/Image/corsair fornt view.png'">
            </div>
            <div class="corsairkey-text">
                <h2>Corsair keyboard K70</h2>
                <p>Price - $96</p>
                <div id="product-box">
                                <img src="../pj/Image/corsair fornt view.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Corsair keyboard K70</h1>                      
                                <p class="product__price"> $96</p>
                                <button class="category-btn add-to-cart" data-id="7">Buy</button>
                                </div>  
                            </div>
            </div>
        </div>

        <div class="secretlab">
            <div class="imge-gamingchair">
                <img src="../pj/Image/titan evo front.webp" alt="Dell Gaming Mornitor"
                    onmouseover="this.src='../pj/Image/sctlab side.png'" width="270px" height="430px"
                    onmouseout="this.src='../pj/Image/titan evo front.webp'">
            </div>
            <div class="gamingchair-text">
                <h2>Secretlab Titan Evo 2022</h2>
                <p>Price - $449.00</p>
                <div id="product-box">
                                <img src="../pj/Image/artics_Nova_Pro_Wireless.png" class="card__image">
                                <div class="card__info">
                                <h1 class="product__title">Arctis nova pro</h1>                      
                                <p class="product__price"> $449</p>
                                <button class="category-btn add-to-cart" data-id="8">Buy</button>
                                </div>  
                            </div>
            </div>
        </div>
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
                <h3>Office <div class="underline-eff"><span></span></div></h3>
                <p>Pyae Road,</p>
                <p>Diamond Condo,</p>
                <p>Kokaing</p>
                <p class="email-id">phoneixspace@gmail.com</p>
                <h4>09 - 769200024</h4>
            </div>
            <div class="foot-col2">
                <h3>Links <div class="underline-eff"><span></span></div></h3>
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
        const popup = document.querySelector('.popup');
        const close = document.querySelector('.pop-close');
        window.onload = function () {
            setTimeout(function () {
                popup.style.display = "block";
            }, 2000)
        }
        close.addEventListener('click', () =>{
            popup.style.display = "none";
        })
    </script>
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