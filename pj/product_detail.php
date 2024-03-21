<!DOCTYPE html>
<html lang="en">

<head>
    <title>Product Details</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../pj/CSS/detail.css" rel="stylesheet">
</head>

<body>
    <div class="detail-frame">
        <div class="rc-frame">
            <h2>Related Items</h2>
            <div class="recommend-items">
                <!--Item 1-->
                <div class="msi-container">
                    <div class="msi-i1"><a href="../pj/product_detail2.php"><img src="../pj/Image/msi leo.png"></a></div>
                    <div class="msi-content">
                        <h3>GP76 Leopard</h3>
                        <button class="add-to-cart" onclick="buyclick();">BUY NOW</button>
                    </div>
                </div>
                <!--Item 1-->
                <div class="msi-container">
                    <div class="msi-i1"><img src="../pj/Image/msi vector gp76.png"></div>
                    <div class="msi-content">
                        <h3>Vector GP76 HX - 12U</h3>
                        <button class="add-to-cart" onclick="buyclick();">BUY NOW</button>
                    </div>
                </div>
                <!--Item 1-->
                <div class="msi-container">
                    <div class="msi-i2"><img src="../pj/Image/razer blade 15.png"></div>
                    <div class="msi-content">
                        <h3>Razer Blade 15</h3>
                        <button class="add-to-cart" onclick="buyclick();">BUY NOW</button>
                    </div>
                </div>
                <!--Item 1-->
                <div class="msi-container">
                    <div class="msi-i2"><img src="../pj/Image/flowp1.webp"></div>
                    <div class="msi-content">
                        <h3>ROG Flow X16</h3>
                        <button class="add-to-cart" onclick="buyclick();">BUY NOW</button>
                    </div>
                </div>
                <!--Item 1-->
                <div class="msi-container">
                    <div class="msi-i2"><img src="../pj/Image/rogs g15.png"></div>
                    <div class="msi-content">
                        <h3>ROG Strix G 15</h3>
                        <button class="add-to-cart" onclick="buyclick();">BUY NOW</button>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="details">
        <h2>Titan GT77 - 12U</h2>
        <img src="../pj/Image/msi titan gt77.png" width="400px">
           
            <div class="detail-table">
                <table class="de-table">
                    <tr>
                        <th>Price :</th>
                        <td>$3199</td>
                    </tr>
                       
                                <tr>
                                    <th>CPU :</th>
                                    <td>Up to 13th Gen Intel® Core™ i9 HX Processor</td>
                                </tr>
                                <tr>
                                    <th>OS :</th>
                                    <td>Windows 11 Home (MSI recommends Windows 11 Pro for business.)
                                        Windows 11 Pro</td>
                                </tr>
                                <tr>
                                    <th>DISPLAY :</th>
                                    <td>17” QHD+ (2560x1600), 240Hz, IPS-Level
                                        17” FHD+ (1920x1200), 165Hz, IPS-Level</td>
                                </tr>
                                <tr>
                                    <th>GRAPHICS :</th>
                                    <td>NVIDIA® GeForce RTX™ 4090 Laptop GPU 16GB GDDR6</td>
                                </tr>
                                <tr>
                                    <th>CHIPSET :</th>
                                    <td>Intel® HM770</td>
                                </tr>
                                <tr>
                                    <th>MEMORY :</th>
                                    <td>Max 64GB
                                        Up to DDR5-5600</td>
                                </tr>
                            </table>
                        
                    
                
               <a href="" class="detail-shop" onclick="buyclick();">Shop Now</a>
            </div>
        </div>
    </div>
</body>
<script>
    function buyclick() {
      let text = "Are you sure to buy?";
      if (confirm(text) == true) {
        alert("You're already bought!!");
      } 
    }
    </script>
</html>