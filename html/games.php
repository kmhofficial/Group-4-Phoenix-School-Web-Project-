
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Games</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/game.css" rel="stylesheet">
    <link rel="shortcut icon" href="../media/index/websitetab.png">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">

</head>

<body>
    <div class="full-body">

        <div class="navbar nav-transparent" id="navbar-color">
            <div class="sidemenubtn">
                <input type="checkbox" id="menucheck" onclick="sidemenu()"><i class="fa-solid fa-bars fa-2x" id="bars"></i>
            </div>
            <nav>
                <div class="logo">
                    <a href="../php/protected.php">Phoenix</a>
                    <img src="../media/index/logo.gif">
                </div>
                <ul class="topmenu" id="menu">
                    <li><a href="#action" class="link">Action</a></li>
                    <li><a href="#Adventure" class="link">Adventure</a></li>
                    <li><a href="#Role-Playing" class="link">Role-Playing</a></li>
                    <li><a href="#Strategy" class="link">Strategy</a></li>
                    <li><a href="#Simulation" class="link">Simulation</a></li>
                    <li><a href="#SportsRacing" class="link">Sports & Racing</a></li>
                </ul>
                <div class="search-box" id="search-box">
                    <div class="search-icon" onclick="searchfocus()">
                        <i class="fa-solid fa-magnifying-glass fa-search"></i>
                    </div>
                    <div class="search">
                        <input type="text" class="search-input searching" id="search" placeholder="Search" onkeyup="searchshow()">
                    </div>

                </div>

                <div class="cart-box">
                    <i class="fa-solid fa-cart-shopping fa-xl" id="cart"></i>
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
            </nav>
            <!--search item -->
            <div class="itemboxsearch" id="showitembox">
                <ul id="searchitems">
                    <li><img src="../media/games/dota2/header.webp" class="search-item-image"><a href="../html/gamedetail5.html">Dota2</a></li>
                    <li><img src="../media/games/Assassin's Creed Valhalla/header.jpg" class="search-item-image"><a href="../html/gamedetail1.html">ASSASSIN'S CREED VALHALLA</a></li>

                    <li><img src="../media/games/ApexLegend/header.jpg" class="search-item-image"><a href="../html/gamedetail2.html">Apex Legend</a></li>
                    <li><img src="../media/games/Battlefield2042/header.jpg" class="search-item-image"><a href="../html/gamedetail3.html">Battlefield™ 2042</a></li>

                    <li><img src="../media/games/pubg/header.jpg" class="search-item-image"><a href="../html/gamedetail5.html">PUBG: BATTLEGROUNDS</a></li>
                </ul>
            </div>
            <!--end-->
        </div>

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

        <div class="main-banner">

            <h1>
                <span style="--i:1;">V</span>
                <span style="--i:2;">A</span>
                <span style="--i:3;">L</span>
                <span style="--i:4;">E</span>
                <span style="--i:5;">N</span>
                <span style="--i:6;">T</span>
                <span style="--i:7;">I</span>
                <span style="--i:8;">N</span>
                <span style="--i:9;">E</span>
                <span style="--i:10;margin-left:3vw;">S</span>
                <span style="--i:11;">A</span>
                <span style="--i:12;">L</span>
                <span style="--i:13;">E</span>
            </h1>
            <span class="sale-date">February 1-15 at 10am Pacific</span>
        </div>


        <div class="showcase" id="showcase">

            <div class="show" id="show1">
                <img src="../media/games/dota2/header.webp" class="imgshow" id="imgbox1">
                <div class="price-info">
                    <h1>-60%</h1>
                    <span class="detail">$50</span>
                    <span class="discount">$20</span>
                </div>
                <div id="show-content1" class="show-content">
                    <video src="../media/games/dota2/dota2.webm" class="trailer-video" loop muted>
                    </video>
                    <div class="productdetails" id="product-box">
                        <img src="../media/games/dota2/header.webp" class="card__image" alt="">
                        <div class="card__info">
                            <h1>Dota 2</h1>
                            <h1 class="product__title">Dota 2</h1>
                            <span class="detail">DEVELOPER:</span>CAPCOM Co., Ltd.<br>
                            <span class="detail">PUBLISHER:</span> CAPCOM Co., Ltd.<br>
                            <span class="detail">ALL REVIEWS:</span><span class="review"> Very Positive </span>(138,014)
                            <p class="product__price">$20</p>
                            <button class="buy-btn add-to-cart" data-id="301">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="show" id="show2">
                <img src="../media/games/csgo/header.jpg" class="imgshow">
                <div class="price-info">
                    <h1>-60%</h1>
                    <span class="detail">$40</span>
                    <span class="discount">$16</span>
                </div>
                <div id="show-content2" class="show-content">
                    <video src="../media/games/csgo/csgo.webm" class="trailer-video" loop muted>
                    </video>
                    <div class="productdetails" id="product-box">
                        <img src="../media/games/csgo/header.jpg" class="card__image" alt="">
                        <div class="card__info">
                            <h1>Counter-Strike: Global Offensive</h1>
                            <h1 class="product__title">Counter-Strike: Global Offensive</h1>
                            <span class="detail">DEVELOPER:</span>CAPCOM Co., Ltd.<br>
                            <span class="detail">PUBLISHER:</span> CAPCOM Co., Ltd.<br>
                            <span class="detail">ALL REVIEWS:</span><span class="review"> Very Positive </span>(138,014)
                            <p class="product__price">$16</p>
                            <button class="buy-btn add-to-cart" data-id="302">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="show" id="show3">
                <img src="../media/games/BattleField/header.jpg" class="imgshow" id="imgbox3">
                <div class="price-info">
                    <h1>-60%</h1>
                    <span class="detail">$60</span>
                    <span class="discount">$24</span>
                </div>
                <div id="show-content3" class="show-content">
                    <video src="../media/games/BattleField/video.webm" class="trailer-video" loop muted>
                    </video>
                    <div class="productdetails" id="product-box">
                        <img src="../media/games/BattleField/header.jpg" class="card__image" alt="">
                        <div class="card__info">
                            <h1>Battlefield™ 1</h1>
                            <h1 class="product__title">Battlefield™ 1</h1>
                            <span class="detail">DEVELOPER:</span>CAPCOM Co., Ltd.<br>
                            <span class="detail">PUBLISHER:</span> CAPCOM Co., Ltd.<br>
                            <span class="detail">ALL REVIEWS:</span><span class="review"> Very Positive </span>(138,014)
                            <p class="product__price">$24</p>
                            <button class="buy-btn add-to-cart" data-id="303">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="showcase2">
            <h1>Upcoming Games in 2024</h1>
            <div class="trailer">

                <div>
                    <video src="../media/games/AmongUs/amongus.mp4" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/AmongUs/header.jpg" class="showcase2-img">
                </div>
                <div>

                    <video src="../media/games/Aokana/aokana.mp4" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/Aokana/header.jpg" class="showcase2-img">
                </div>
                <div>

                    <video src="../media/games/EldenRing/eldenring.webm" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/EldenRing/header.jpg" class="showcase2-img">

                </div>
                <div>

                    <video src="../media/games/FrozaHorizon5/forzahorizon5.webm" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/FrozaHorizon5/header.jpg" class="showcase2-img">

                </div>
                <div>

                    <video src="../media/games/GenshinImpact/genshinimpact.mp4" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/GenshinImpact/header.webp" class="showcase2-img">

                </div>
                <div>

                    <video src="../media/games/Battlefield2042/battlefield2042.webm" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/Battlefield2042/header.jpg" class="showcase2-img">
                </div>
                <div>

                    <video src="../media/games/GodofWar/godofwar.webm" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/GodofWar/header.jpg" class="showcase2-img">
                </div>
                <div>

                    <video src="../media/games/TheWitcher3/thewitcher3.webm" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/TheWitcher3/header.jpg" class="showcase2-img">

                </div>
                <div>

                    <video src="../media/games/pubg/pubg.webm" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/pubg/header.jpg" class="showcase2-img">

                </div>
                <div>

                    <video src="../media/games/stray/stray.webm" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/stray/header.jpg" class="showcase2-img">

                </div>
                <div>

                    <video src="../media/games/toweroffantasy/toweroffantasy.webm" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/toweroffantasy/header.jpg" class="showcase2-img">

                </div>
                <div>

                    <video src="../media/games/valorant/valorant.mp4" class="showcase2-vid" loop muted></video>
                    <img src="../media/games/valorant/header.jpg" class="showcase2-img">

                </div>
            </div>
        </div>
        <div class="slideshow-box">
            <h1>Top 3 Games of the week</h1>
            <div class="slideshow-container">
                <div class="slideshow fade">
                    <img src="../media/games/GtaV/header.jpg" class="slideshow-img">
                    <div class="text">
                        <a href="">Grand Theft Auto V</a>
                        <span class="releade-date">Release date: Oct 10, 2007</span>
                        <div class="review-box">
                            <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345 User
                                Reviews</span>
                        </div>
                        <h3>SYSTEM REQUIREMENTS</h3>
                        <div class="requirement">
                            <div class="minimun">
                                <h5>minimum</h5>
                                <span class="requirement_detail">Requires a 64-bit processor and operating
                                    system</span><br>
                                <span class="requirement_detail">OS:</span><span>Windows 10 64-bits</span><br>
                                <span class="requirement_detail">Processor:</span><span>Intel Core i5-2500K@3.3GHz or
                                    AMD FX 6300@3.5GHz</span><br>
                                <span class="requirement_detail">Memory:</span><span>8 GB RAM</span><br>
                                <span class="requirement_detail">Graphics:</span><span>Nvidia GeForce GTX 780 (3 GB) or
                                    AMD Radeon R9 290 (4GB)</span><br>
                                <span class="requirement_detail">DirectX:</span><span>Version 12</span><br>
                                <span class="requirement_detail">Storage:</span><span>100 GB available space</span>
                            </div>
                            <div class="recommended">
                                <h5>recommended</h5>
                                <span class="requirement_detail">Requires a 64-bit processor and operating
                                    system</span><br>
                                <span class="requirement_detail">OS:</span><span>Windows 10 64-bits</span><br>
                                <span class="requirement_detail">Processor:</span><span> Intel Core i7-4770K@3.5GHz or
                                    Ryzen 5 1500X@3.5GHz</span><br>
                                <span class="requirement_detail">Memory:</span><span>16 GB RAM</span><br>
                                <span class="requirement_detail">Graphics:</span><span>Nvidia GeForce GTX 1060 (6 GB) or
                                    AMD Radeon R9 580 (8GB)</span><br>
                                <span class="requirement_detail">DirectX:</span><span>Version 12</span><br>
                                <span class="requirement_detail">Storage:</span><span>100 GB available space</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slideshow fade">
                    <img src="../media/games/Destiny2/header.jpg" class="slideshow-img">
                    <div class="text">
                        <a href="">Destiny 2</a>
                        <span class="releade-date">Release date: Oct 10, 2007</span>
                        <div class="review-box">
                            <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345 User
                                Reviews</span>
                        </div>
                        <h3>SYSTEM REQUIREMENTS</h3>
                        <div class="requirement">
                            <div class="minimun">
                                <h5>minimum</h5>
                                <span class="requirement_detail">Requires a 64-bit processor and operating
                                    system</span><br>
                                <span class="requirement_detail">OS:</span><span>Windows 10 64-bits</span><br>
                                <span class="requirement_detail">Processor:</span><span>Intel Core i5-2500K@3.3GHz or
                                    AMD FX 6300@3.5GHz</span><br>
                                <span class="requirement_detail">Memory:</span><span>8 GB RAM</span><br>
                                <span class="requirement_detail">Graphics:</span><span>Nvidia GeForce GTX 780 (3 GB) or
                                    AMD Radeon R9 290 (4GB)</span><br>
                                <span class="requirement_detail">DirectX:</span><span>Version 12</span><br>
                                <span class="requirement_detail">Storage:</span><span>100 GB available space</span>
                            </div>
                            <div class="recommended">
                                <h5>recommended</h5>
                                <span class="requirement_detail">Requires a 64-bit processor and operating
                                    system</span><br>
                                <span class="requirement_detail">OS:</span><span>Windows 10 64-bits</span><br>
                                <span class="requirement_detail">Processor:</span><span> Intel Core i7-4770K@3.5GHz or
                                    Ryzen 5 1500X@3.5GHz</span><br>
                                <span class="requirement_detail">Memory:</span><span>16 GB RAM</span><br>
                                <span class="requirement_detail">Graphics:</span><span>Nvidia GeForce GTX 1060 (6 GB) or
                                    AMD Radeon R9 580 (8GB)</span><br>
                                <span class="requirement_detail">DirectX:</span><span>Version 12</span><br>
                                <span class="requirement_detail">Storage:</span><span>100 GB available space</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="slideshow fade">
                    <img src="../media/games/Callofdutybo3/header.jpg" class="slideshow-img">
                    <div class="text">
                        <a href="">Call of Duty®: Black Ops III</a>
                        <span class="releade-date">Release date: Oct 10, 2007</span>
                        <div class="review-box">
                            <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345 User
                                Reviews</span>
                        </div>
                        <h3>SYSTEM REQUIREMENTS</h3>
                        <div class="requirement">
                            <div class="minimun">
                                <h5>minimum</h5>
                                <span class="requirement_detail">Requires a 64-bit processor and operating
                                    system</span><br>
                                <span class="requirement_detail">OS:</span><span>Windows 10 64-bits</span><br>
                                <span class="requirement_detail">Processor:</span><span>Intel Core i5-2500K@3.3GHz or
                                    AMD FX 6300@3.5GHz</span><br>
                                <span class="requirement_detail">Memory:</span><span>8 GB RAM</span><br>
                                <span class="requirement_detail">Graphics:</span><span>Nvidia GeForce GTX 780 (3 GB) or
                                    AMD Radeon R9 290 (4GB)</span><br>
                                <span class="requirement_detail">DirectX:</span><span>Version 12</span><br>
                                <span class="requirement_detail">Storage:</span><span>100 GB available space</span>
                            </div>
                            <div class="recommended">
                                <h5>recommended</h5>
                                <span class="requirement_detail">Requires a 64-bit processor and operating
                                    system</span><br>
                                <span class="requirement_detail">OS:</span><span>Windows 10 64-bits</span><br>
                                <span class="requirement_detail">Processor:</span><span> Intel Core i7-4770K@3.5GHz or
                                    Ryzen 5 1500X@3.5GHz</span><br>
                                <span class="requirement_detail">Memory:</span><span>16 GB RAM</span><br>
                                <span class="requirement_detail">Graphics:</span><span>Nvidia GeForce GTX 1060 (6 GB) or
                                    AMD Radeon R9 580 (8GB)</span><br>
                                <span class="requirement_detail">DirectX:</span><span>Version 12</span><br>
                                <span class="requirement_detail">Storage:</span><span>100 GB available space</span>
                            </div>
                        </div>
                    </div>
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
        </div>

        <!-- action -->
        <div class="category" id="action">
            <h1>Action</h1>
            <ul class="action-list list">
                <li>
                    <div class="category_box" id="t1">

                        <img src="../media/games/Assassin's Creed Valhalla/header.jpg" class="category_img">
                        <video src="../media/games/Assassin's Creed Valhalla/video.webm" class="category_vid" id="b1" loop muted></video>

                        <div class="category_text">
                            <a href="../html/gamedetail1.html"> ASSASSIN'S CREED VALHALLA</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$49</span>
                                <div id="product-box">
                                    <img src="../media/games/Assassin's Creed Valhalla/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">ASSASSIN'S CREED VALHALLA</h1>
                                        <p class="product__price">$49</p>
                                        <button class="category-btn add-to-cart" data-id="304">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/ApexLegend/header.jpg" class="category_img">
                        <video src="../media/games/ApexLegend/apexlegend.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="../html/gamedetail2.html"> Apex Legend</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">SEP 11, 2010</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$29</span>
                                <div id="product-box">
                                    <img src="../media/games/ApexLegend/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Apex Legend</h1>
                                        <p class="product__price">$29</p>
                                        <button class="category-btn add-to-cart" data-id="305">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/BattleField/header.jpg" class="category_img">
                        <video src="../media/games/Battlefield2042/battlefield2042.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="../html/gamedetail3.html"> Battlefield™ 2042</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">JUN 11, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$15</span>
                                <div id="product-box">
                                    <img src="../media/games/BattleField/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Battlefield™ 2042</h1>
                                        <p class="product__price">$15</p>
                                        <button class="category-btn add-to-cart" data-id="306">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/pubg/header.jpg" class="category_img">
                        <video src="../media/games/pubg/pubg.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="../html/gamedetail4.html"> PUBG: BATTLEGROUNDS</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">SEP 16, 2010</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$25</span>
                                <div id="product-box">
                                    <img src="../media/games/pubg/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">PUBG: BATTLEGROUNDS</h1>
                                        <p class="product__price">$25</p>
                                        <button class="category-btn add-to-cart" data-id="307">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/csgo/header.jpg" class="category_img">
                        <video src="../media/games/csgo/csgo.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> Counter-Strike: Global Offensive</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">JAN 5, 2009</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$5</span>
                                <div id="product-box">
                                    <img src="../media/games/csgo/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Counter-Strike: Global Offensive</h1>
                                        <p class="product__price">$5</p>
                                        <button class="category-btn add-to-cart" data-id="308">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Hitman3/header.jpg" class="category_img">
                        <video src="../media/games/Hitman3/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> HITMAN 3</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">FEB 16, 2014</span>
                            <i class="fa-brands fa-windows"></i>
                            <div class="price-buy">
                                <span class="category_price">$59</span>
                                <div id="product-box">
                                    <img src="../media/games/Hitman3/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">HITMAN 3</h1>
                                        <p class="product__price">$59</p>
                                        <button class="category-btn add-to-cart" data-id="309">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/sea of thieves/header.jpg" class="category_img">
                        <video src="../media/games/sea of thieves/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> Sea of Thieves</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">NOV 21, 2007</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <div class="price-buy">
                                <span class="category_price">$19</span>
                                <div id="product-box">
                                    <img src="../media/games/sea of thieves/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title"> Sea of Thieves</h1>
                                        <p class="product__price">$19</p>
                                        <button class="category-btn add-to-cart" data-id="3010">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/FINAL FANTASY VII REMAKE INTERGRADE/header.jpg" class="category_img">
                        <video src="../media/games/FINAL FANTASY VII REMAKE INTERGRADE/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> FINAL FANTASY VII REMAKE INTERGRADE</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">DEC 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$9</span>
                                <div id="product-box">
                                    <img src="../media/games/FINAL FANTASY VII REMAKE INTERGRADE/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">FINAL FANTASY VII REMAKE INTERGRADE</h1>
                                        <p class="product__price">$9</p>
                                        <button class="category-btn add-to-cart" data-id="3011">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/NARAKA BLADEPOINT/header.jpg" class="category_img">
                        <video src="../media/games/NARAKA BLADEPOINT/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> NARAKA BLADEPOINT</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">JAN 18, 2022</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$19</span>
                                <div id="product-box">
                                    <img src="../media/games/NARAKA BLADEPOINT/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">NARAKA BLADEPOINT</h1>
                                        <p class="product__price">$19</p>
                                        <button class="category-btn add-to-cart" data-id="3012">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Marvel's Spider-Man Remastered/header.jpg" class="category_img">
                        <video src="../media/games/Marvel's Spider-Man Remastered/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> Marvel's Spider-Man Remastered</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 07, 2012</span>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$5</span>
                                <div id="product-box">
                                    <img src="../media/games/Marvel's Spider-Man Remastered/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Marvel's Spider-Man Remastered</h1>
                                        <p class="product__price">$5</p>
                                        <button class="category-btn add-to-cart" data-id="3013">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>

                    <div class="category_box">
                        <img src="../media/games/MONSTER HUNTER RISE/header.jpg" class="category_img">
                        <video src="../media/games/MONSTER HUNTER RISE/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> MONSTER HUNTER RISE</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">FEB 21, 2018</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$10</span>
                                <div id="product-box">
                                    <img src="../media/games/MONSTER HUNTER RISE/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">MONSTER HUNTER RISE</h1>
                                        <p class="product__price">$10</p>
                                        <button class="category-btn add-to-cart" data-id="3014">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <!--fix here-->
                    <div class="category_box">
                        <img src="../media/games/Tom Clancy's Rainbow Six® Siege/header.jpg" class="category_img">
                        <video src="../media/games/Tom Clancy's Rainbow Six® Siege/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> Tom Clancy's Rainbow Six® Siege</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2020</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <div class="price-buy">
                                <span class="category_price">$10</span>
                                <div id="product-box">
                                    <img src="../media/games/Tom Clancy's Rainbow Six® Siege/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Tom Clancy's Rainbow Six® Siege</h1>
                                        <p class="product__price">$10</p>
                                        <button class="category-btn add-to-cart" data-id="3015">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <button class="show-more show1">Show more</button>
        </div>


        <!--adventure-->

        <div class="category" id="Adventure">
            <h1>Adventure</h1>
            <ul class="adventure-list list">
                <li>
                    <div class="category_box">
                        <img src="../media/games/STAR WARS Jedi Fallen Order/header.jpg" class="category_img">
                        <video src="../media/games/STAR WARS Jedi Fallen Order/movie480.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> STAR WARS Jedi: Fallen Order™</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">DEC 11, 2016</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$84</span>
                                <div id="product-box">
                                    <img src="../media/games/STAR WARS Jedi Fallen Order/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title"> STAR WARS Jedi: Fallen Order™</h1>
                                        <p class="product__price">$84</p>
                                        <button class="category-btn add-to-cart" data-id="3016">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Assassin's Creed® Odyssey/header.jpg" class="category_img">
                        <video src="../media/games/Assassin's Creed® Odyssey/movie480 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Assassin's Creed® Odyssey</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">JUN 21, 2019</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$54</span>
                                <div id="product-box">
                                    <img src="../media/games/Assassin's Creed® Odyssey/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Assassin's Creed® Odyssey</h1>
                                        <p class="product__price">$54</p>
                                        <button class="category-btn add-to-cart" data-id="3017">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/UNCHARTED Legacy of Thieves Collection/header.jpg" class="category_img">
                        <video src="../media/games/UNCHARTED Legacy of Thieves Collection/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> UNCHARTED™: Legacy of Thieves Collection</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">JAN 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$19</span>
                                <div id="product-box">
                                    <img src="../media/games/UNCHARTED Legacy of Thieves Collection/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title"> UNCHARTED™: Legacy of Thieves Collection</h1>
                                        <p class="product__price">$19</p>
                                        <button class="category-btn add-to-cart" data-id="3018">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Days Gone/header.jpg" class="category_img">
                        <video src="../media/games/Days Gone/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> Days Gone</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">FEB 04, 2016</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$45</span>
                                <div id="product-box">
                                    <img src="../media/games/Days Gone/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title"> Days Gone</h1>
                                        <p class="product__price">$45</p>
                                        <button class="category-btn add-to-cart" data-id="3019">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/DRAGON BALL Z KAKAROT/header.jpg" class="category_img">
                        <video src="../media/games/DRAGON BALL Z KAKAROT/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">DRAGON BALL Z: KAKAROT</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">JUN 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$55</span>
                                <div id="product-box">
                                    <img src="../media/games/DRAGON BALL Z KAKAROT/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">DRAGON BALL Z: KAKAROT</h1>
                                        <p class="product__price">$55</p>
                                        <button class="category-btn add-to-cart" data-id="3020">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Tales of Arise/header.jpg" class="category_img">
                        <video src="../media/games/Tales of Arise/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Tales of Arise</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">JAN 11, 2016</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$7</span>
                                <div id="product-box">
                                    <img src="../media/games/Tales of Arise/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Tales of Arise</h1>
                                        <p class="product__price">$7</p>
                                        <button class="category-btn add-to-cart" data-id="3021">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/The Elder Scrolls V Skyrim Special Edition/header.jpg" class="category_img">
                        <video src="../media/games/The Elder Scrolls V Skyrim Special Edition/movie480.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">The Elder Scrolls V Skyrim Special Edition</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">MAY 20, 2010</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$15</span>
                                <div id="product-box">
                                    <img src="../media/games/The Elder Scrolls V Skyrim Special Edition/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">The Elder Scrolls V Skyrim Special Edition</h1>
                                        <p class="product__price">$15</p>
                                        <button class="category-btn add-to-cart" data-id="3022">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Ys VIII Lacrimosa of DANA/header.jpg" class="category_img">
                        <video src="../media/games/Ys VIII Lacrimosa of DANA/movie480 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Ys VIII: Lacrimosa of DANA</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2018</span>
                            <i class="fa-brands fa-windows"></i>
                            <div class="price-buy">
                                <span class="category_price">$5</span>
                                <div id="product-box">
                                    <img src="../media/games/Ys VIII Lacrimosa of DANA/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Ys VIII: Lacrimosa of DANA</h1>
                                        <p class="product__price">$5</p>
                                        <button class="category-btn add-to-cart" data-id="3023">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/The Forest/header.jpg" class="category_img">
                        <video src="../media/games/The Forest/movie480.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> The Forest</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 26, 2018</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$10</span>
                                <div id="product-box">
                                    <img src="../media/games/The Forest/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title"> The Forest</h1>
                                        <p class="product__price">$10</p>
                                        <button class="category-btn add-to-cart" data-id="3024">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Horizon Zero Dawn™ Complete Edition/header.jpg" class="category_img">
                        <video src="../media/games/Horizon Zero Dawn™ Complete Edition/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Horizon Zero Dawn™ Complete Edition</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">SEP 28, 2014</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$40</span>
                                <div id="product-box">
                                    <img src="../media/games/Horizon Zero Dawn™ Complete Edition/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Horizon Zero Dawn™ Complete Edition</h1>
                                        <p class="product__price">$40</p>
                                        <button class="category-btn add-to-cart" data-id="3025">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Tiny Tina's Wonderlands/header.jpg" class="category_img">
                        <video src="../media/games/Tiny Tina's Wonderlands/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Tiny Tina's Wonderlands</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <div class="price-buy">
                                <span class="category_price">$20</span>
                                <div id="product-box">
                                    <img src="../media/games/Tiny Tina's Wonderlands/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Tiny Tina's Wonderlands</h1>
                                        <p class="product__price">$20</p>
                                        <button class="category-btn add-to-cart" data-id="3026">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/New World/header.jpg" class="category_img">
                        <video src="../media/games/New World/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">New World</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <div class="price-buy">
                                <span class="category_price">$29</span>
                                <div id="product-box">
                                    <img src="../media/games/New World/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">New World</h1>
                                        <p class="product__price">$29</p>
                                        <button class="category-btn add-to-cart" data-id="3027">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <button class="show-more show2">Show more</button>
        </div>



        <!--Role-Playing-->

        <div class="category" id="Role-Playing">
            <h1>Role-Playing</h1>
            <ul class="roleplaying-list list">
                <li>
                    <div class="category_box">
                        <img src="../media/games/Marvel's Midnight Suns/header.jpg" class="category_img">
                        <video src="../media/games/Marvel's Midnight Suns/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> Marvel's Midnight Suns</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">OCT 18, 2017</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$49</span>
                                <div id="product-box">
                                    <img src="../media/games/Marvel's Midnight Suns/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Marvel's Midnight Suns</h1>
                                        <p class="product__price">$49</p>
                                        <button class="category-btn add-to-cart" data-id="3028">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Black Desert/header.jpg" class="category_img">
                        <video src="../media/games/Black Desert/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Black Desert</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$39</span>
                                <div id="product-box">
                                    <img src="../media/games/Black Desert/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Black Desert</h1>
                                        <p class="product__price">$39</p>
                                        <button class="category-btn add-to-cart" data-id="3029">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/NARUTO SHIPPUDEN Ultimate Ninja STORM 4/header.jpg" class="category_img">
                        <video src="../media/games/NARUTO SHIPPUDEN Ultimate Ninja STORM 4/movie480.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> NARUTO SHIPPUDEN Ultimate Ninja STORM 4</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">JAN 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$19</span>
                                <div id="product-box">
                                    <img src="../media/games/NARUTO SHIPPUDEN Ultimate Ninja STORM 4/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">NARUTO SHIPPUDEN Ultimate Ninja STORM 4</h1>
                                        <p class="product__price">$19</p>
                                        <button class="category-btn add-to-cart" data-id="3030">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/HOGWARTS LEGACY/header.jpg" class="category_img">
                        <video src="../media/games/HOGWARTS LEGACY/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Hogwarts Legacy</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">FEB 21, 2012</span>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$29</span>
                                <div id="product-box">
                                    <img src="../media/games/HOGWARTS LEGACY/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Hogwarts Legacy</h1>
                                        <p class="product__price">$29</p>
                                        <button class="category-btn add-to-cart" data-id="3031">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/toweroffantasy/header.jpg" class="category_img">
                        <video src="../media/games/toweroffantasy/toweroffantasy.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Tower of Fantasy</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">SEPT 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$6</span>
                                <div id="product-box">
                                    <img src="../media/games/toweroffantasy/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Tower of Fantasy</h1>
                                        <p class="product__price">$6</p>
                                        <button class="category-btn add-to-cart" data-id="3032">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Baldur's Gate 3/header.jpg" class="category_img">
                        <video src="../media/games/Baldur's Gate 3/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Baldur's Gate 3</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">NOV 07, 2010</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$79</span>
                                <div id="product-box">
                                    <img src="../media/games/Baldur's Gate 3/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Baldur's Gate 3</h1>
                                        <p class="product__price">$79</p>
                                        <button class="category-btn add-to-cart" data-id="3033">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Lost Ark/header.jpg" class="category_img">
                        <video src="../media/games/Lost Ark/movie.mp4" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Lost Ark</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <div class="price-buy">
                                <span class="category_price">$99</span>
                                <div id="product-box">
                                    <img src="../media/games/Lost Ark/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Lost Ark</h1>
                                        <p class="product__price">$99</p>
                                        <button class="category-btn add-to-cart" data-id="34">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/undecember/header.jpg" class="category_img">
                        <video src="../media/games/undecember/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">UNDECEMBER</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <div class="price-buy">
                                <span class="category_price">$49</span>
                                <div id="product-box">
                                    <img src="../media/games/undecember/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">UNDECEMBER</h1>
                                        <p class="product__price">$49</p>
                                        <button class="category-btn add-to-cart" data-id="35">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Guild Wars 2/header.jpg" class="category_img">
                        <video src="../media/games/Guild Wars 2/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Guild Wars 2</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$89</span>
                                <div id="product-box">
                                    <img src="../media/games/Guild Wars 2/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Guild Wars 2</h1>
                                        <p class="product__price">$89</p>
                                        <button class="category-btn add-to-cart" data-id="36">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Phantasy Star Online 2 New Genesis/header.jpg" class="category_img">
                        <video src="../media/games/Phantasy Star Online 2 New Genesis/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Phantasy Star Online 2 New Genesis</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$7</span>
                                <div id="product-box">
                                    <img src="../media/games/Phantasy Star Online 2 New Genesis/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Phantasy Star Online 2 New Genesis</h1>
                                        <p class="product__price">$7</p>
                                        <button class="category-btn add-to-cart" data-id="37">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Wartales/header.jpg" class="category_img">
                        <video src="../media/games/Wartales/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Wartales</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$9</span>
                                <div id="product-box">
                                    <img src="../media/games/Wartales/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Wartales</h1>
                                        <p class="product__price">$9</p>
                                        <button class="category-btn add-to-cart" data-id="38">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Warframe/header.jpg" class="category_img">
                        <video src="../media/games/Warframe/warframe.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Warframe</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-playstation"></i>
                            <div class="price-buy">
                                <span class="category_price">$6</span>
                                <div id="product-box">
                                    <img src="../media/games/Warframe/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Warframe</h1>
                                        <p class="product__price">$6</p>
                                        <button class="category-btn add-to-cart" data-id="39">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <button class="show-more show3">Show more</button>
        </div>


        <!--strategy-->
        <div class="category" id="Strategy">
            <h1>Strategy</h1>
            <ul class="strategy-list list">
                <li>
                    <div class="category_box">
                        <img src="../media/games/IXION/header.jpg" class="category_img">
                        <video src="../media/games/IXION/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">IXION</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$4</span>
                                <div id="product-box">
                                    <img src="../media/games/IXION/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">IXION</h1>
                                        <p class="product__price">$4</p>
                                        <button class="category-btn add-to-cart" data-id="40">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Persona 5 Royal/header.jpg" class="category_img">
                        <video src="../media/games/Persona 5 Royal/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Persona 5 Royal</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$20</span>
                                <div id="product-box">
                                    <img src="../media/games/Persona 5 Royal/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Persona 5 Royal</h1>
                                        <p class="product__price">$20</p>
                                        <button class="category-btn add-to-cart" data-id="41">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Victoria 3/header.jpg" class="category_img">
                        <video src="../media/games/Victoria 3/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Victoria 3</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$9</span>
                                <div id="product-box">
                                    <img src="../media/games/Victoria 3/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Victoria 3</h1>
                                        <p class="product__price">$9</p>
                                        <button class="category-btn add-to-cart" data-id="42">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Summoners War Chronicles/header.jpg" class="category_img">
                        <video src="../media/games/Summoners War Chronicles/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Summoners War Chronicles</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$39</span>
                                <div id="product-box">
                                    <img src="../media/games/Summoners War Chronicles/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Summoners War Chronicles</h1>
                                        <p class="product__price">$39</p>
                                        <button class="category-btn add-to-cart" data-id="43">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Demeo PC Edition/header.jpg" class="category_img">
                        <video src="../media/games/Demeo PC Edition/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> Demeo PC Edition</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$8</span>
                                <div id="product-box">
                                    <img src="../media/games/Demeo PC Edition/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Demeo PC Edition</h1>
                                        <p class="product__price">$8</p>
                                        <button class="category-btn add-to-cart" data-id="44">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/CARDFIGHT VANGUARD DEAR DAYS/header.jpg" class="category_img">
                        <video src="../media/games/CARDFIGHT VANGUARD DEAR DAYS/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">CARDFIGHT!! VANGUARD DEAR DAYS</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$9</span>
                                <div id="product-box">
                                    <img src="../media/games/CARDFIGHT VANGUARD DEAR DAYS/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">CARDFIGHT!! VANGUARD DEAR DAYS</h1>
                                        <p class="product__price">$9</p>
                                        <button class="category-btn add-to-cart" data-id="45">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Land of the Vikings/header.jpg" class="category_img">
                        <video src="../media/games/Land of the Vikings/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Land of the Vikings</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$9</span>
                                <div id="product-box">
                                    <img src="../media/games/Land of the Vikings/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Land of the Vikings</h1>
                                        <p class="product__price">$9</p>
                                        <button class="category-btn add-to-cart" data-id="46">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Richman 11/header.jpg" class="category_img">
                        <video src="../media/games/Richman 11/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Richman 11</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$59</span>
                                <div id="product-box">
                                    <img src="../media/games/Richman 11/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Richman 11</h1>
                                        <p class="product__price">$59</p>
                                        <button class="category-btn add-to-cart" data-id="47">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Soccer Clubs/header.jpg" class="category_img">
                        <video src="../media/games/Soccer Clubs/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Soccer Clubs</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$19</span>
                                <div id="product-box">
                                    <img src="../media/games/Soccer Clubs/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Soccer Clubs</h1>
                                        <p class="product__price">$49</p>
                                        <button class="category-btn add-to-cart" data-id="48">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <!--fix here-->
                    <div class="category_box">
                        <img src="../media/games/Crossfire Legion/header_alt_assets_2.jpg" class="category_img">
                        <video src="../media/games/Crossfire Legion/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Crossfire Legion</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$69</span>
                                <div id="product-box">
                                    <img src="../media/games/Crossfire Legion/header_alt_assets_2.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Crossfire Legion</h1>
                                        <p class="product__price">$69</p>
                                        <button class="category-btn add-to-cart" data-id="49">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Alina of the Arena/header.jpg" class="category_img">
                        <video src="../media/games/Alina of the Arena/movie480_vp9 (1).mp4" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href=""> Alina of the Arena</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <div class="price-buy">
                                <span class="category_price">$89</span>
                                <div id="product-box">
                                    <img src="../media/games/Alina of the Arena/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Alina of the Arena</h1>
                                        <p class="product__price">$89</p>
                                        <button class="category-btn add-to-cart" data-id="50">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Manor Lords/header.jpg" class="category_img">
                        <video src="../media/games/Manor Lords/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Manor Lords</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$5</span>
                                <div id="product-box">
                                    <img src="../media/games/Manor Lords/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Manor Lords</h1>
                                        <p class="product__price">$5</p>
                                        <button class="category-btn add-to-cart" data-id="51">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <button class="show-more show4">Show more</button>
        </div>


        <!--simulation-->
        <div class="category" id="Simulation">
            <h1>Simulation</h1>
            <ul class="simulation-list list">
                <li>
                    <div class="category_box">
                        <img src="../media/games/War Thunder/header.jpg" class="category_img">
                        <video src="../media/games/War Thunder/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">War Thunder</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$50</span>
                                <div id="product-box">
                                    <img src="../media/games/War Thunder/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">War Thunder</h1>
                                        <p class="product__price">$50</p>
                                        <button class="category-btn add-to-cart" data-id="52">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/The Sims™ 4/header.jpg" class="category_img">
                        <video src="../media/games/The Sims™ 4/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">The Sims™ 4</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$49</span>
                                <div id="product-box">
                                    <img src="../media/games/The Sims™ 4/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">The Sims™ 4</h1>
                                        <p class="product__price">$49</p>
                                        <button class="category-btn add-to-cart" data-id="53">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Farming Simulator 22/header.jpg" class="category_img">
                        <video src="../media/games/Farming Simulator 22/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Farming Simulator 22</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$49</span>
                                <div id="product-box">
                                    <img src="../media/games/Farming Simulator 22/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Farming Simulator 22</h1>
                                        <p class="product__price">$49</p>
                                        <button class="category-btn add-to-cart" data-id="54">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/X-Plane 12/header.jpg" class="category_img">
                        <video src="../media/games/X-Plane 12/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">X-Plane 12</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <div class="price-buy">
                                <span class="category_price">$4</span>
                                <div id="product-box">
                                    <img src="../media/games/X-Plane 12/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">X-Plane 12</h1>
                                        <p class="product__price">$4</p>
                                        <button class="category-btn add-to-cart" data-id="55">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Microsoft Flight Simulator 40th Anniversary Edition/header.jpg" class="category_img">
                        <video src="../media/games/Microsoft Flight Simulator 40th Anniversary Edition/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Microsoft Flight Simulator 40th Anniversary Edition</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$6</span>
                                <div id="product-box">
                                    <img src="../media/games/Microsoft Flight Simulator 40th Anniversary Edition/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Microsoft Flight Simulator 40th Anniversary Edition</h1>
                                        <p class="product__price">$6</p>
                                        <button class="category-btn add-to-cart" data-id="56">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Euro Truck Simulator 2/header.jpg" class="category_img">
                        <video src="../media/games/Euro Truck Simulator 2/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Euro Truck Simulator 2</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$7</span>
                                <div id="product-box">
                                    <img src="../media/games/Euro Truck Simulator 2/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Euro Truck Simulator 2</h1>
                                        <p class="product__price">$7</p>
                                        <button class="category-btn add-to-cart" data-id="57">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Police Simulator Patrol Officers/header.jpg" class="category_img">
                        <video src="../media/games/Police Simulator Patrol Officers/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Police Simulator: Patrol Officers</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$19</span>
                                <div id="product-box">
                                    <img src="../media/games/Police Simulator Patrol Officers/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Police Simulator: Patrol Officers</h1>
                                        <p class="product__price">$19</p>
                                        <button class="category-btn add-to-cart" data-id="58">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Coral Island/header.jpg" class="category_img">
                        <video src="../media/games/Coral Island/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Coral Island</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$10</span>
                                <div id="product-box">
                                    <img src="../media/games/Coral Island/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Coral Island</h1>
                                        <p class="product__price">$10</p>
                                        <button class="category-btn add-to-cart" data-id="59">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/OverDrift Festival/header.jpg" class="category_img">
                        <video src="../media/games/OverDrift Festival/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">OverDrift Festival</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$11</span>
                                <div id="product-box">
                                    <img src="../media/games/OverDrift Festival/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">OverDrift Festival</h1>
                                        <p class="product__price">$11</p>
                                        <button class="category-btn add-to-cart" data-id="60">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Cygnus Enterprises/header.jpg" class="category_img">
                        <video src="../media/games/Cygnus Enterprises/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Cygnus Enterprises</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$99</span>
                                <div id="product-box">
                                    <img src="../media/games/Cygnus Enterprises/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Cygnus Enterprises</h1>
                                        <p class="product__price">$99</p>
                                        <button class="category-btn add-to-cart" data-id="61">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <button class="show-more show5">Show more</button>
        </div>

        <!--sportracing-->
        <div class="category" id="SportsRacing">
            <h1>Sports & Racing</h1>
            <ul class="sportsracing-list list">
                <li>
                    <div class="category_box">
                        <img src="../media/games/EA SPORTS™ FIFA 23/header.jpg" class="category_img">
                        <video src="../media/games/EA SPORTS™ FIFA 23/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">EA SPORTS™ FIFA 23</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$6</span>
                                <div id="product-box">
                                    <img src="../media/games/EA SPORTS™ FIFA 23/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">EA SPORTS™ FIFA 23</h1>
                                        <p class="product__price">$6</p>
                                        <button class="category-btn add-to-cart" data-id="62">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/NBA 2K23/header.jpg" class="category_img">
                        <video src="../media/games/NBA 2K23/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">NBA 2K23</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$99</span>
                                <div id="product-box">
                                    <img src="../media/games/NBA 2K23/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">NBA 2K23</h1>
                                        <p class="product__price">$99</p>
                                        <button class="category-btn add-to-cart" data-id="63">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Football Manager 2023/header.jpg" class="category_img">
                        <video src="../media/games/Football Manager 2023/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Football Manager 2023</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$79</span>
                                <div id="product-box">
                                    <img src="../media/games/Football Manager 2023/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Football Manager 2023</h1>
                                        <p class="product__price">$79</p>
                                        <button class="category-btn add-to-cart" data-id="64">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Assetto Corsa/header.jpg" class="category_img">
                        <video src="../media/games/Assetto Corsa/movie480.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Assetto Corsa</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <div class="price-buy">
                                <span class="category_price">$19</span>
                                <div id="product-box">
                                    <img src="../media/games/Assetto Corsa/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Assetto Corsa</h1>
                                        <p class="product__price">$19</p>
                                        <button class="category-btn add-to-cart" data-id="65">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/iRacing/header.jpg" class="category_img">
                        <video src="../media/games/iRacing/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">iRacing</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$9</span>
                                <div id="product-box">
                                    <img src="../media/games/iRacing/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">iRacing</h1>
                                        <p class="product__price">$9</p>
                                        <button class="category-btn add-to-cart" data-id="66">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/F1® 22/header.jpg" class="category_img">
                        <video src="../media/games/F1® 22/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">F1® 22</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$79</span>
                                <div id="product-box">
                                    <img src="../media/games/F1® 22/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">F1® 22</h1>
                                        <p class="product__price">$79</p>
                                        <button class="category-btn add-to-cart" data-id="67">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/PGA TOUR 2K23/header.jpg" class="category_img">
                        <video src="../media/games/PGA TOUR 2K23/movie480_vp9 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">PGA TOUR 2K23</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$59</span>
                                <div id="product-box">
                                    <img src="../media/games/PGA TOUR 2K23/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">PGA TOUR 2K23</h1>
                                        <p class="product__price">$59</p>
                                        <button class="category-btn add-to-cart" data-id="68">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Need for Speed™ Unbound/header.jpg" class="category_img">
                        <video src="../media/games/Need for Speed™ Unbound/movie480_vp9.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Need for Speed™ Unbound</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$70</span>
                                <div id="product-box">
                                    <img src="../media/games/Need for Speed™ Unbound/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Need for Speed™ Unbound</h1>
                                        <p class="product__price">$70</p>
                                        <button class="category-btn add-to-cart" data-id="69">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/Fishing Planet/header.jpg" class="category_img">
                        <video src="../media/games/Fishing Planet/movie480.webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">Fishing Planet</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-windows"></i>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$39</span>
                                <div id="product-box">
                                    <img src="../media/games/Fishing Planet/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">Fishing Planet</h1>
                                        <p class="product__price">$39</p>
                                        <button class="category-btn add-to-cart" data-id="70">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="category_box">
                        <img src="../media/games/theHunter Classic/header.jpg" class="category_img">
                        <video src="../media/games/theHunter Classic/movie480 (1).webm" class="category_vid" loop muted></video>
                        <div class="category_text">
                            <a href="">theHunter Classic</a>
                            <div class="review-box">
                                <span class="review-color">Very Positive</span><span class="review-user"> 6,123,2345
                                    User Reviews</span>
                            </div>
                            <span class="release-date">AUG 21, 2012</span>
                            <i class="fa-brands fa-playstation"></i>
                            <i class="fa-brands fa-xbox"></i>
                            <i class="fa-solid fa-mobile"></i>
                            <div class="price-buy">
                                <span class="category_price">$49</span>
                                <div id="product-box">
                                    <img src="../media/games/theHunter Classic/header.jpg" class="card__image">
                                    <div class="card__info">
                                        <h1 class="product__title">theHunter Classic</h1>
                                        <p class="product__price">$49</p>
                                        <button class="category-btn add-to-cart" data-id="71">Add to Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <button class="show-more show6">Show more</button>
        </div>
    </div>
    <script src="../javascript/game.js"></script>
</body>

</html>