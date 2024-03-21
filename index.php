<!DOCTYPE html>
<html lang="en">

<head>
    <title>Phoenix</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../project/css/index.css" rel="stylesheet">
    <link rel="shortcut icon" href="./media/index/websitetab.png">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.1/css/all.css">

</head>

<body>
    <div class="fullpage">
    <div class="navbar">
        <div class="sidemenubtn">
            <input type="checkbox" id="menucheck" onclick="sidemenu()"><i class="fa-solid fa-bars fa-2x" id="bars"></i>
        </div>
        <div class="logo">
            <a href="">Phoenix</a>
            <img src="/project/media/index/logo.gif">
        </div>
        <nav>
            <ul id="menuitems" class="menubox">
                <li><a href="http://localhost:8080/project/pj/pc_laptop.php"><i class="fa-solid fa-computer"></i>PC & Laptops</a></li>
                <li><a href="http://localhost:8080/project/html/games.php"><i class="fa-solid fa-gamepad-modern"></i>Games</a></li>
                <li><a href="http://localhost:8080/project/Nine/HTML/about%20us.html"><i class="fa-regular fa-address-card"></i></i>About</a></li>
                <li><a href="http://localhost:8080/project/Nine/HTML/contactus.html"><i class="fa-regular fa-phone-volume"></i>Contact Us</a></li>
            </ul>
        </nav>
        <a href="../project/php/protected.php" class="user-icon"> <i class="fa-solid fa-user"></i></a>
        <button class="loginbtn" name="loginuser" style="width:auto;">Login
        </button>
    </div>
    <div id="login-form" class="login-page">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" onclick="login()" class="toggle-btn">Sign In</button>
                <button type="button" onclick="register()" class="toggle-btn">Register</button>
            </div>
            <iframe name="register1" class="iframeemail" id="iframeemailbox"></iframe>
            <form id="login" class="input-group-login" method="post" action="../project/php/loginandregister.php">
                <input type="text" class="input-field" placeholder="Username or Email" required name="loginemail" value=""><i class="fa-regular fa-envelope" id="signin-icon"></i>
                <input type="password" id="psw" class="input-field" placeholder="Password" required name="loginpass" value=""><i class="fa-solid fa-lock" id="signin-icon"></i>
                <div class="showpassword">
                    <i id="pswshow" class="fa-solid fa-eye-slash"></i><input type="checkbox" class="showhide" id="showpsw" onclick="showhide()">
                </div>
                <input type="checkbox" class="check-box"><span class="loginremember">Remember Me</span><br>
                <a href="" class="forgot-password">Forgot Password?</a>
                <button type="submit" class="submit-btn" name="login-btn" id="login-btn" value="">Sign In</button>
                <span id="signinlabel">Or Sign in using</span>
                <div class="signinmethod">
                    <a href="https://accounts.google.com/b/0/AddMailService"><i class="fa-brands fa-google"></i></a>
                    <a href="https://www.instagram.com/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.facebook.com/"><i class="fa-brands fa-square-facebook"></i></i></a>
                </div>
            </form>
            <form method="post" name="registerform" action="../project/php/loginandregister.php" target="register1">
                <div id="register" class="input-group-register">
                    <input type="text" class="input-field" id="fname" placeholder="First Name" name="firstname">
                    <input type="text" class="input-field" id="lname" placeholder="Last Name" name="lastname">
                    <span id="nameerror"></span>
                    <input type="email" class="input-field" placeholder="Email" reqired name="registeremail">
                    <span id="emailerror"></span>
                    <input type="password" class="input-field" name="psw1" placeholder="Password">
                    <span id="pswerror"></span>
                    <input type="password" class="input-field" name="psw2" placeholder="Confirm Password">
                    <span id="pswcheckerror" class="pswcheckerror"></span><br>
                    <input type="checkbox" class="check-box" id="checkterms" required>
                    <span class="privacy">I accept the<a href="" id="privacy-policy"> Terms of Use</a> & <a href="" id="privacy-policy">Privacy Policy</a></span>
                    <span id="checkerror">aasdasd</span>
                    <button onclick="return pswcheck()" class="submit-btn" name="checkemail">Register</button>
                </div>

                <div id="payment" class="input-group-payment" method="post">
                    <div class="cardtype">
                        <label class="label-card">Card number</label><br>
                        <input type="text" id="cardnumber" name="cardnumber" class="cardnum" onkeyup="checkcardtype()" required>
                        <i class="fa-regular fa-credit-card" id="card-logo"></i>
                    </div>
                    <div class="card-date-security">
                        <div class="date">
                            <label class="label-expdate">Expiration date</label><br>
                            <select name="month">
                                <option>--</option>
                                <option>01</option>
                                <option>02</option>
                                <option>03</option>
                                <option>04</option>
                                <option>05</option>
                                <option>06</option>
                                <option>07</option>
                                <option>08</option>
                                <option>09</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                            </select>
                            <select name="year">
                                <option>--</option>
                                <option>2022</option>
                                <option>2023</option>
                                <option>2024</option>
                                <option>2025</option>
                                <option>2026</option>
                                <option>2027</option>
                                <option>2028</option>
                                <option>2029</option>
                                <option>2030</option>
                                <option>2031</option>
                                <option>2032</option>
                                <option>2033</option>
                                <option>2034</option>
                                <option>2035</option>
                                <option>2036</option>
                                <option>2037</option>
                                <option>2038</option>
                            </select>
                        </div>
                        <div class="security">
                            <label>Security Code</label><br>
                            <input type="text" class="security-code" name="securitycode">
                        </div>
                    </div>
                    <h1>Billing Information</h1>
                    <div class="payment-img">
                        <img src="./media/index/payment-visa.png">
                        <img src="./media/index/payment-mastercard.png">
                        <img src="./media/index/payment-discover.png">
                        <img src="./media/index/payment-amex.png">
                        <img src="./media/index/payment-jcb.png">
                    </div>
                    <div class="card-info">
                        <div class="cardownergroup">
                            <div>
                                <label class="label-ownername">First name</label><br>
                                <input type="text" class="input-owner-name" required name="cardownerfirstname">
                            </div>
                            <div>
                                <label class="label-ownerlname">Last name</label><br>
                                <input type="text" class="input-owner-name" required name="cardownerlastname">
                            </div>
                        </div>

                        <div class="location">
                            <label>City</label><br>
                            <input type="text" class="input-address" required name="city">
                        </div>
                        <div>
                            <label>Billing address</label><br>
                            <input type="text" class="input-address" required name="billindaddress1">
                        </div>
                        <div>
                            <label>Billing address, line 2</label><br>
                            <input type="text" class="input-address" required name="billindaddress2">
                        </div>
                        <div>
                            <label>Zip or Postal code</label><br>
                            <input type="text" class="input-address" required name="zipcode">
                        </div>
                        <div>
                            <label>Phone number</label><br>
                            <input type="text" class="input-phnumber" required name="phnumber">
                        </div>
                    </div>
                    <button type="submit" class="addpayment" name="register-btn" id="register-btn" value="">Add Payment</button>
                </div>
            </form>

        </div>
    </div>

    <section>
        <img src="../project/media/index/background.jpg" alt="Background Image" id="background">
        <img src="../project/media/index/luna.png" alt="Luna" id="luna">
        <img src="../project/media/index/nube1.png" alt="nube1" id="nube1">
        <img src="../project/media/index/nube2.png" alt="nube2" id="nube2">
        <img src="../project/media/index/jet.gif" alt="jet" id="jet">
        <img src="../project/media/index/ironman.png" alt="Ironman" id="ironman">
    </section>
    <div class="sec">
        <div class="cont">
            <h2><strong>PHOENIX</strong><br />Gaming Products and Games</h2>
        </div>

    </div>
    <div class="showcase2">
        <div class="trailer">

            <div>

                <video src="./media/games/EldenRing/eldenring.webm" class="showcase2-vid" loop muted></video>
                <img src="../project/media/games/EldenRing/header.jpg" class="showcase2-img">
            </div>
            <div class="game-price">
                <h2>Elden Ring</h2>
                <p>Price &nbsp;-&nbsp;$70<br />
                    Platforms&nbsp;-&nbsp;<i class="fa-brands fa-windows"></i>
                    <i class="fa-brands fa-playstation"></i>
                    <i class="fa-brands fa-xbox"></i><br />
                    Type&nbsp;-&nbsp;Adventure game, Action role-playing game, Fighting game, Platform game
                </p>

            </div>

            <div>

                <video src="./media/games/FrozaHorizon5/forzahorizon5.webm" class="showcase2-vid" loop muted></video>
                <img src="./media/games/FrozaHorizon5/header.jpg" class="showcase2-img">

            </div>
            <div class="game-price">
                <h2>FORZA HORIZON 5</h2>
                <p>Price &nbsp;-&nbsp;$80<br />
                    Platforms&nbsp;-&nbsp;<i class="fa-brands fa-windows"></i>
                    <i class="fa-brands fa-playstation"></i>
                    <i class="fa-brands fa-xbox"></i><br />
                    Type&nbsp;-&nbsp;Multiplayer & Single-player Racing Game, RPG
                </p>
            </div>


            <div>

                <video src="./media/games/GodofWar/godofwar.webm" class="showcase2-vid" loop muted></video>
                <img src="./media/games/GodofWar/header.jpg" class="showcase2-img">
            </div>
            <div class="game-price">
                <h2>GOD OF WAR</h2>
                <p>Price &nbsp;-&nbsp;$120<br />
                    Platforms&nbsp;-&nbsp;<i class="fa-brands fa-windows"></i>
                    <i class="fa-brands fa-playstation"></i>
                    <i class="fa-brands fa-xbox"></i><br />
                    Type&nbsp;-&nbsp;Action-adventure, hack and slash, RPG, Storyline Mode
                </p>
            </div>

            <div>

                <video src="./media/games/UNCHARTED Legacy of Thieves Collection/movie480_vp9.webm" class="showcase2-vid" loop muted></video>
                <img src="./media/games/UNCHARTED Legacy of Thieves Collection/header.jpg" class="showcase2-img">

            </div>
            <div class="game-price">
                <h2>UNCHARTED</h2>
                <p>Price &nbsp;-&nbsp;$60<br />
                    Platforms&nbsp;-&nbsp;<i class="fa-brands fa-windows"></i>
                    <i class="fa-brands fa-playstation"></i>
                    <i class="fa-brands fa-xbox"></i><br />
                    Type&nbsp;-&nbsp;Adventure, Action-Adventure, Storyline, Action
                </p>
            </div>

        </div>
    </div>
    <div class="razer-banner">
        <h1>GEAR UP WITH RAZER</h1>
        <div class="razer-all">
            <div class="razer-16-spec">
                <h2>Razer Blade 15 - QHD 240Hz - GeForce RTX 3070 Ti - Black
                    Flagship 15-inch</h2>
                <p id="spec">Specifications</p>

                <p> -1.8GHz 14-core Intel i7-12800H processor</p>
                <p> -Windows 11 Home</p>
                <p>-15.6" QHD 240Hz, 100% DCI-P3, G-Sync, 2.5ms</p>
                <p> -NVIDIA® GeForce RTX™ 3070 Ti (8GB GDDR6 VRAM)</p>
                <p> -1TB SSD (M.2 NVMe PCIe 4.0 x4)</p>
                <p>-16 GB DDR5 4800MHz dual-channel memory (slotted)</p>
            </div>
            <img src="https://assets2.razerzone.com/images/pnx.assets/e69b14d8b16a77ad61a59359a7275694/new-razer-blade-15-2022-nvidia-mobile.jpg">
        </div>
    </div>
    <div class="showcase2">
        <div class="trailer">
            <div>

                <img src="https://assets3.razerzone.com/bsIZwDms_tf0hauT2qWTVkTNeGQ=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh50%2Fh7f%2F9422672527390%2F220726-deathstalker-v2-pro-1500x1000-1.jpg" class="showcase2-img">
                <img src="https://assets3.razerzone.com/aFv45Y06y9mHLNcx2sOV7rRxDB4=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh4e%2Fh82%2F9422672461854%2F220726-deathstalker-v2-pro-1500x1000-5.jpg" class="showcase2-img">

            </div>
            <div>
                <img src="https://assets3.razerzone.com/_gD3IdhInq1H0W8Ry7r0N6C1N7M=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fh22%2Fhcd%2F9450422534174%2F221110-naga-v2-pro-2-1500x1000-6.jpg" class="showcase2-img">

                <img src="https://assets3.razerzone.com/QVcnJ3j9PxvIJq63ZI2QhZ565h0=/1500x1000/https%3A%2F%2Fhybrismediaprod.blob.core.windows.net%2Fsys-master-phoenix-images-container%2Fhcf%2Fhcd%2F9450422599710%2F221110-naga-v2-pro-2-1500x1000-4.jpg" class="showcase2-img">

            </div>
            <div>

                <img src="https://images.secretlab.co/theme/common/tr:n-w_600/2022-titan-evo-gallery-01-min.jpg" class="showcase2-img">

                <img src="https://images.secretlab.co/theme/common/home-featured-ovewatch-2-lg.jpg" class="showcase2-img">

            </div>
            <div>
                <img src="https://media.steelseriescdn.com/thumbs/filer_public/e2/a4/e2a4f3a7-45ad-437c-b130-54d62034ff5b/imgbuy_arctis_nova_pro_wl_1_blank.png__1850x800_crop-scale_optimize_subsampling-2.png" class="showcase2-img">

                <img src="https://media.steelseriescdn.com/thumbs/filer_public/97/41/9741165c-4367-4f2b-bf2e-80f0b523632f/imgbuy_arctis_nova_pro_wl_black_2_v2.png__1850x800_q100_crop-scale_optimize_subsampling-2.jpg" class="showcase2-img">

            </div>
        </div>
    </div>
    <hr>

    <div class="logo-foot">
        <h1>PHOENIX</h1>
        <img src="../project/media/index/logo.gif">
        <div>
            <p><a href="#home-nav">Explore more??, Login or Sign Up </a></p>
        </div>
    </div>

    <hr>
    <div class="copy-reserve">
        <p>&copy;All rights reserved...</p>
    </div>
    </div>
    <script src="javascript/index.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>
    <script>
        gsap.to("#background", {
            scrollTrigger: {
                scrub: true
            },
            y: 200,
            scale: 1.5
        })

        gsap.to("#luna", {
            scrollTrigger: {
                scrub: true
            },
            y: -400,
            scale: 2
        })

        gsap.to("#nube1", {
            scrollTrigger: {
                scrub: true
            },
            x: -400,
        })
        gsap.to("#nube2", {
            scrollTrigger: {
                scrub: true
            },
            x: 300
        })

        gsap.to("#jet", {
            scrollTrigger: {
                scrub: true
            },
            x: 1000,
            y: 200,
            scale: 4
        })

        gsap.to("#ironman", {
            scrollTrigger: {
                scrub: true
            },
            x: 0,
            y: -1800,
            scale: 1,
            
        })
    </script>
    <script>
        //showcase trailer video
        const trailer = document.querySelectorAll('.trailer-video');
        //showcase trailer video
        const showcase2img = document.querySelectorAll('.showcase2-img');
        const trailer2 = document.querySelectorAll('.showcase2-vid');
        //showcase trailer video
        for (let i = 0; i < trailer.length; i++) {
            trailer[i].addEventListener('mouseenter',
                function(e) {
                    trailer[i].play();
                })
        }

        //showcase2 img&video
        for (let i = 0; i < showcase2img.length; i++) {
            showcase2img[i].addEventListener('mouseenter', function(e) {
                showcase2img[i].classList.add('active');
                trailer2[i].play()
            })
            showcase2img[i].addEventListener('mouseout', function(e) {
                showcase2img[i].classList.remove('active');
                trailer2[i].pause()
                trailer2[i].currentTime = 0
            })
        }
    </script>

</body>

</html>