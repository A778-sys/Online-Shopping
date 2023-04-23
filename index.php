<html>
<head>
  <title>Online Shopping</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" rel="stylesheet"
    type="text/css" />
    <script src="script.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <section id="banner">
    <img id="logo" src="leologo.jpg" alt="logo">
    <div class="banner-text">
      <h1>LEO</h1>
      <p>MUTUAL INDUSTRIES PVT. LTD.</p>
    </div>
    
  </section>
  
  <br>
  <div id="sideNav"> 
    <nav>
      <ul>
        <li><a href="#">HOME</a></li>
        <li><a href="#about_section">ABOUT US</a></li>
        <li><a href="#inside_section">WHAT'S INSIDE</a></li>
        <li><a href="#products_section">PRODUCTS</a></li>
        <li><a href="#">CONTACT US</a></li>

        <img id="logo1" src="login.jpg"><br><a href="login.html">Profile</a><br>
        <img id="logo2" src="contact.png"><br><a href="contactus.html">Contact</a>

      </ul>
    </nav>
  </div>
  <div id="menuBtn">
    <img src="https://cdn-icons-png.flaticon.com/512/5358/5358649.png" id="menu">
  </div>

  <!--Login-->
  <div id="back">
    <div id="div1">
    
        <form method="post">
            <h1 id="heading1">Login</h1>
            <p id="para1">Please login to use this platform</p>
            <span class="label">Enter your Email</span>
            <input type="text" name="username" class="input" placeholder="name85458@gmail.com"><br>
            <span class="label">Enter your  Password</span>
            <input type="password" name="password" class="input" placeholder="Password" id="pass">
            <a href="">Forgot Passowrd?</a> 
            <input type="checkbox" id="check" onclick="show()"><span id="show">Show password</span>
            <p id="para2">Not your device? Use guest mode to login privately</p>
            <a href="">Learn more</a><br><br><br>
            <a href="">Create account</a>
            <input type="submit" id="button" value="Login">
        </form>
    </div>   
</div>
  <br>
  <!--About us-->
  <section class="about">
    <div id="mainaboutframe">
      <a id="about_section"></a>
    <div class="about_left_col">
      <img id="us" src="aboutus.jpg"><br><br>
    </div>
    <div class="about_right_col">
    <div class="about-us">
      <h1>About Us</h1>
      <br>
      <p>LEO is a household brand under the umbrella of Mutual Industries Ltd.<br>
         A pioneer in providing engineered polymer-based products and services,
          we have been a popular name in the business for the last four decades.
        What sets LEO apart is its evolution in the adoption of modern technology and special-grade 
        raw materials in the manufacturing Of its durable products. Along with superior quality, 
        LEO assures competitive pricing on its product range.
        <br>
        Mutual Industries Ltd. is committed to its diverse clientele and has been providing top-range products right from the inception of the brand. 
        <br>
        Customer satisfaction is our top priority and every feedback is extremely valuable to us.
        <br>
        Feel free to send in your suggestions or queries at customercare@mutual-industries.com.
        </p><br>
    </div>
    </div>
    </div>
  </section>
  <!--inside-->
  <section class="whats-inside">
    <a id="inside_section"></a>
      <h2 class="demo">what's</h2>
      <h2 class="demo2">INSIDE...</h2>
      <div>
        <img src="inside.jpeg" class="inside">
        <br>
      </div>
  </section>
    <!--vf-->
      <section class="shop-container">
        <a id="products_section"></a>
        <br>
        <h2 class="section-title">Shop Product</h2>
        <!-- content -->
        <div class="Shop Content">
          <!-- main box -->
          <div class="product-box">
          <h2 class="product-title"></h2>
          <br>
          <img src="vflask.jpeg" class="center">
          </div><br>
          <br>
            <div class="bottle-products">
              <!--box1-->
              <div class="vacuum-flask">
                <h2 class="product-title">Fabio 500</h2>
                <img id="image" src="vf1.jpeg" alt="vf1">
                <br>
                <p>
                  Available in : grey color
                  <br>
                  Master Pack : 12pcs
                  <br>
                  MRP Rs.735/-
                </p>
              </div><br>
              <br>
              <!--box2-->
              <div class="vacuum-flask">
                <h2 class="product-title">Fabio 750</h2>
                <img id="image" src="vf2.jpeg" alt="vf2">
                <br>
                <p>
                  Available in : grey color
                  <br>
                  Master Pack : 12pcs
                  <br>
                  MRP Rs.985/-
                </p>
              </div><br>
              <br>
              <!--box3-->
              <div class="vacuum-flask">
                <h2 class="product-title">Fabio 1000</h2>
                <img id="image" src="vf3.jpeg" alt="vf3">
                <br>
                <p>
                  Available in : grey color
                  <br>
                  Master Pack : 12pcs
                  <br>
                  MRP Rs.1095/-
                </p>
              </div><br>
              <br>
              <!--box4-->
              <div class="vacuum-flask">
                <h2 class="product-title">Kraft 500</h2>
                <img id="image" src="K1.jpeg" alt="K1">
                <br>
                <p>
                  Available in : grey color
                  <br>
                  Master Pack : 12pcs
                  <br>
                  MRP Rs.855/-
                </p>
              </div><br>
              <br>
              <!--box5-->
              <div class="vacuum-flask">
                <h2 class="product-title">Kraft 750</h2>
                <img id="image" src="K2.jpeg" alt="K2">
                <br>
                <p>
                  Available in : grey color
                  <br>
                  Master Pack : 12pcs
                  <br>
                  MRP Rs.1095/-
                </p>
              </div><br>
              <br>
              <!--box6-->
              <div class="vacuum-flask">
                <h2 class="product-title">Kraft 1000</h2>
                <img id="image" src="K3.jpeg" alt="K3">
                <br>
                <p>
                  Available in : grey color
                  <br>
                  Master Pack : 12pcs
                  <br>
                  MRP Rs.1320/-
                </p>
              </div><br>
              <br>
              <!--box7-->
              <div class="vacuum-flask">
                <h2 class="product-title">Kraft 7 - 500</h2>
                <img id="image" src="K4.jpeg" alt="K4">
                <br>
                <p>
                  Available in : grey, black, blue, red color
                  <br>
                  Master Pack : 12pcs
                  <br>
                  MRP Rs.855/-
                </p>
              </div><br>
              <br>
              <!--box8-->
              <div class="vacuum-flask">
                <h2 class="product-title">Kraft 7 - 750</h2>
                <img id="image" src="K5.jpeg" alt="K5">
                <br>
                <p>
                  Available in : grey, black, blue, red color
                  <br>
                  Master Pack : 12pcs
                  <br>
                  MRP Rs.1095/-
                </p>
              </div><br>
              <br>
              <!--box9-->
              <div class="vacuum-flask">
                <h2 class="product-title">Kraft 7 - 1000</h2>
                <img id="image" src="K6.jpeg" alt="K6">
                <br>
                <p>
                  Available in : grey, black, blue, red color
                  <br>
                  Master Pack : 12pcs
                  <br>
                  MRP Rs.1320/-
                </p>
              </div>
            </div>
              

        </div>
      </section>
    <!-- sw -->
    <section class="shop-container1">
      <br>
      <h2 class="section-title1">Product No.2</h2>
      <!--content-->
      <div class="Shop Content1">
        <!--main box-->
        <div class="product-box1">
          <h2 class="product-title1"></h2>
          <br>
          <img src="singlewall.jpeg" class="center1">
        </div><br>
        <br>
        <div class="bottle-products2">
          <!--box1-->
          <div class="single-wall">
            <h2 class="product-title1">POLO SIPPER 800</h2>
            <img id="sw" src="sw1.jpeg" alt="sw1">
            <br>
            <p>
              Available in : blue,yellow,pink,black color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.390/-
            </p>
          </div><br>
          <br>
          <!--box2-->
          <div class="single-wall">
            <h2 class="product-title1">POLO SPORTZ 800</h2>
            <img id="sw" src="sw2.jpeg" alt="sw2">
            <br>
            <p>
              Available in : grey color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.429/-
            </p>
          </div><br>
          <br>
          <!--box3-->
          <div class="single-wall">
            <h2 class="product-title1">POLO VIBRANT 750</h2>
            <img id="sw" src="sw3.jpeg" alt="sw3">
            <br>
            <p>
              Available in : grey color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.405/-
            </p>
          </div><br>
          <br>
          <!--box4-->
          <div class="single-wall">
            <h2 class="product-title1">POLO VIBRANT 1000</h2>
            <img id="sw" src="sw4.jpeg" alt="sw4">
            <br>
            <p>
              Available in : grey color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.441/-
            </p>
          </div><br>
          <br>
          <!--box5-->
          <div class="single-wall">
            <h2 class="product-title1">POLO ALFA 750</h2>
            <img id="sw" src="sw5.jpeg" alt="sw">
            <br>
            <p>
              Available in : grey color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.452/-
            </p>
          </div><br>
          <br>
          <!--box6-->
          <div class="single-wall">
            <h2 class="product-title1">POLO ALFA 1000</h2>
            <img id="sw" src="sw6.jpeg" alt="sw6">
            <br>
            <p>
              Available in : grey color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.485/-
            </p>
          </div><br>
          <br>
          <!--box7-->
          <div class="single-wall">
            <h2 class="product-title1">POLO RIO 750</h2>
            <img id="sw" src="sw7.jpeg" alt="sw7">
            <br>
            <p>
              Available in : grey, black, blue, red color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.435/-
            </p>
          </div><br>
          <br>
          <!--box8-->
          <div class="single-wall">
            <h2 class="product-title1">POLO RIO 1000</h2>
            <img id="sw" src="sw8.jpeg" alt="sw8">
            <br>
            <p>
              Available in : grey, black, blue, red color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.509/-
            </p>
          </div><br>
          <br>
          <!--box9-->
          <div class="single-wall">
            <h2 class="product-title1">AQUA 750</h2>
            <img id="sw" src="sw9.jpeg" alt="sw9">
            <br>
            <p>
              Available in : grey, black, blue, red color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.414/-
            </p>
          </div><br>
          <br>
          <!--box10-->
          <div class="single-wall">
            <h2 class="product-title1">AQUA 1000</h2>
            <img id="sw" src="sw10.jpeg" alt="sw10">
            <br>
            <p>
              Available in : grey, black, blue, red color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.441/-
            </p>
          </div><br>
          <br>
          <!--box11-->
          <div class="single-wall">
            <h2 class="product-title1">NOVA 750</h2>
            <img id="sw" src="sw11.jpeg" alt="sw11">
            <br>
            <p>
              Available in : grey, black, blue, red color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.449/-
            </p>
          </div><br>
          <br>
          <!--box12-->
          <div class="single-wall">
            <h2 class="product-title1">NOVA 1000</h2>
            <img id="sw" src="sw12.jpeg" alt="sw12">
            <br>
            <p>
              Available in : grey, black, blue, red color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.499/-
            </p>
            </div><br>
            <br>
        </div>
      </div>
    </section>
    <!--cb-->
    <section class="shop-container2">
      <br>
      <h2 class="section-title1">Product No.3</h2>
      <!--content-->
      <div class="Shop Content2">
        <!--main box-->
        <div class="product-box2">
          <h2 class="product-title2"></h2>
          <br>
          <img src="cb.jpeg" class="center2">
        </div><br>
        <br>
        <div class="bottle-products3">
          <!--box1-->
          <div class="copper-bottle">
            <h2 class="product-title2">POLO SIPPER 800</h2>
            <img id="cb" src="cb1.jpeg" alt="cb1">
            <br>
            <p>
              Available in : blue,yellow,pink,black color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.390/-
            </p>
          </div><br>
          <br>
          <!--box2-->
          <div class="copper-bottle">
            <h2 class="product-title2">POLO SPORTZ 800</h2>
            <img id="cb" src="cb2.jpeg" alt="cb2">
            <br>
            <p>
              Available in : grey color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.429/-
            </p>
          </div><br>
          <br>
          <!--box3-->
          <div class="copper-bottle">
            <h2 class="product-title2">POLO VIBRANT 750</h2>
            <img id="cb" src="cb3.jpeg" alt="cb3">
            <br>
            <p>
              Available in : grey color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.405/-
            </p>
          </div><br>
          <br>
          <!--box4-->
          <div class="copper-bottle">
            <h2 class="product-title2">POLO VIBRANT 1000</h2>
            <img id="cb" src="cb4.jpeg" alt="cb4">
            <br>
            <p>
              Available in : grey color
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.441/-
            </p>
          </div><br>
          <br>
        </div>
      </div>
    </section>
    <!--ic-->
    <section class="shop-container4">
      <br>
      <h2 class="section-title1">Product No.4</h2>
      <!--content-->
      <div class="Shop Content3">
      <!--main box-->
      <div class="product-box3">
        <h2 class="product-title3"></h2>
        <br>
        <img src="ic.jpeg" class="center3">
      </div><br><br>
      <div class="casse-role">
        <!--box1-->
        <div class="insulated-casserole">
          <h2 class="product-title4">UNICORN 800</h2>
          <img id="ic" src="ic1.jpeg" alt="ic1"><br>
          <p>
            Available in : white, yellow, pink
            <br>
            Master Pack : 48pcs
            <br>
            MRP Rs.:340/-
          </p>
        </div><br><br>
        <!--box2-->
        <div class="insulated-casserole">
          <h2 class="product-title4">UNICORN 1200</h2>
          <img id="ic" src="ic2.jpeg" alt="ic2"><br>
          <p>
            Available in : white, yellow, pink
            <br>
            Master Pack : 48pcs
            <br>
            MRP Rs.:399/-
          </p>
        </div><br><br>
        <!--box3-->
        <div class="insulated-casserole">
          <h2 class="product-title4">UNICORN 2400</h2>
          <img id="ic" src="ic3.jpeg" alt="ic3"><br>
          <p>
            Available in : white, yellow, pink
            <br>
            Master Pack : 36pcs
            <br>
            MRP Rs.:599/-
          </p>
        </div><br><br>
        <!--box4-->
        <div class="insulated-casserole">
          <h2 class="product-title4">UNICORN 3600</h2>
          <img id="ic" src="ic4.jpeg" alt="ic4"><br>
          <p>
            Available in : white, yellow, pink
            <br>
            Master Pack : 24pcs
            <br>
            MRP Rs.:899/-
          </p>
        </div><br><br>
        <!--box5-->
        <div class="insulated-casserole">
          <h2 class="product4">UNICORN 3pc </h2>
          <img id="ic" src="ic5.jpeg" alt="ic2"><br>
          <p>
            Available in : white, yellow, pink
            <br>
            Master Pack : 12pcs
            <br>
            MRP Rs.:1299/-
          </p>
        </div><br><br>
        <!--box6-->
        <div class="insulated-casserole">
          <h2 class="product4">KLASSIC 1000</h2>
          <img id="ic" src="ic6.jpeg" alt="ic6"><br>
          <p>
            Available in : green, red, blue
            <br>
            Master Pack : 48pcs
            <br>
            MRP Rs.:325/-
          </p>
        </div><br><br>
        <!--box7-->
        <div class="insulated-casserole">
          <h2 class="product4">KLASSIC 1700</h2>
          <img id="ic" src="ic7.jpeg" alt="ic7"><br>
          <p>
            Available in : green, red, blue
            <br>
            Master Pack : 36pcs
            <br>
            MRP Rs.:449/-
          </p>
        </div><br><br>
        <!--box8-->
        <div class="insulated-casserole">
          <h2 class="product4">KLASSIC 2500</h2>
          <img id="ic" src="ic8.jpeg" alt="ic8"><br>
          <p>
            Available in : green, red, blue
            <br>
            Master Pack : 36pcs
            <br>
            MRP Rs.:699/-
          </p>
        </div><br><br>
        <!--box9-->
        <div class="insulated-casserole">
          <h2 class="product4">KLASSIC 3500</h2>
          <img id="ic" src="ic9.jpeg" alt="ic9"><br>
          <p>
            Available in : green, red, blue
            <br>
            Master Pack : 24pcs
            <br>
            MRP Rs.:799/-
          </p>
        </div><br><br>
        <!--box10-->
        <div class="insulated-casserole">
          <h2 class="product4">KLASSIC 2500</h2>
          <img id="ic" src="ic10.jpeg" alt="ic10"><br>
          <p>
            Available in : green, red, blue
            <br>
            Master Pack : 12pcs
            <br>
            MRP Rs.:899/-
          </p>
        </div><br><br>
        <!--box11-->
        <div class="insulated-casserole">
          <h2 class="product4">DAZZLE 1500</h2>
          <img id="ic" src="ic11.jpeg" alt="ic11"><br>
          <p>
            Available in : grey
            <br>
            Master Pack : 24pcs
            <br>
            MRP Rs.:999/-
          </p>
        </div><br><br>
        <!--box12-->
        <div class="insulated-casserole">
          <h2 class="product4">DAZZLE 2500</h2>
          <img id="ic" src="ic12.jpeg" alt="ic12"><br>
          <p>
            Available in : grey
            <br>
            Master Pack : 12pcs
            <br>
            MRP Rs.:1199/-
          </p>
        </div><br><br>
        <!--box13-->
        <div class="insulated-casserole">
          <h2 class="product4">DAZZLE 3500</h2>
          <img id="ic" src="ic13.jpeg" alt="ic13"><br>
          <p>
            Available in : grey
            <br>
            Master Pack : 12pcs
            <br>
            MRP Rs.:1499/-
          </p>
        </div><br><br>
        <!--box14-->
        <div class="insulated-casserole">
          <h2 class="product4">RIVO 500</h2>
          <h4 class="product4">OIL DISPENSER</h4>
          <img id="ic" src="ic14.jpeg" alt="ic14"><br>
          <p>
            Available in : grey
            <br>
            Master Pack : 48pcs
            <br>
            MRP Rs.399/-
          </p>
        </div><br><br>
        <!--box15-->
        <div class="insulated-casserole">
          <h2 class="product4">RIVO 700</h2>
          <h4 class="product4">OIL DISPENSER</h4>
          <img id="ic" src="ic15.jpeg" alt="ic15"><br>
          <p>
            Available in : grey
            <br>
            Master Pack : 48pcs
            <br>
            MRP Rs.:429/-
          </p>
        </div><br><br>
        <!--box16-->
        <div class="insulated-casserole">
          <h2 class="product4">RIVO 1000</h2>
          <h4 class="product4">OIL DISPENSER</h4>
          <img id="ic" src="ic16.jpeg" alt="ic10"><br>
          <p>
            Available in : grey
            <br>
            Master Pack : 48pcs
            <br>
            MRP Rs.:499/-
          </p>
        </div><br><br>
        </div>
      </div>
    </section>
    <!--tiffin-->
    <section class="shop-container5">
      <br>
      <h2 class="section-title1">Product No.5</h2>
      <!--content-->
      <div class="Shop Content5">
        <!--main box-->
        <div class="product-box5">
          <h1 class="product-title5">STEEL CONTAINER</h1>
          <br>
        </div><br>
        <br>
        <div class="tiffin">
          <!--box1-->
          <div class="steel-box">
            <h2 class="product-title6">STEELO</h2>
            <h4>TIFFIN 800/150 2PC SET</h4>
            <img id="t" src="t1.jpeg" alt="t1">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.899/-
            </p>
          </div><br>
          <br>
          <!--box2-->
          <div class="steel-box">
            <h2 class="product-title6">STEELO</h2>
            <h4>TIFFIN 800 1PC SET</h4>
            <img id="t" src="t2.jpeg" alt="t2">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.699/-
            </p>
          </div><br>
          <br>
          <!--box3-->
          <div class="steel-box">
            <h2 class="product-title6">STEELO</h2>
            <h4>TIFFIN with PC LID 800/150 2PC SET</h4>
            <img id="t" src="t3.jpeg" alt="t3">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.749/-
            </p>
          </div><br>
          <br>
          <!--box4-->
          <div class="steel-box">
            <h2 class="product-title6">NOVA 225</h2>
            <h4>STEEL CONTAINER</h4>
            <img id="t" src="t4.jpeg" alt="t4">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 96pcs
              <br>
              MRP Rs.120/-
            </p>
          </div><br>
          <br>
          <!--box5-->
          <div class="steel-box">
            <h2 class="product-title6">NOVA 375</h2>
            <h4>STEEL CONTAINER</h4>
            <img id="t" src="t5.jpeg" alt="t5">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 96pcs
              <br>
              MRP Rs.130/-
            </p>
          </div><br>
          <br>
          <!--box6-->
          <div class="steel-box">
            <h2 class="product-title6">NOVA 550</h2>
            <h4>STEEL CONTAINER</h4>
            <img id="t" src="t6.jpeg" alt="t6">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 96pcs
              <br>
              MRP Rs.155/-
            </p>
          </div><br>
          <br>
          <!--box7-->
          <div class="steel-box">
            <h2 class="product-title6">INSULA 400</h2>
            <h4>STEEL CONTAINER</h4>
            <img id="t" src="t7.jpeG" alt="t4">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 96pcs
              <br>
              MRP Rs.299/-
            </p>
          </div><br>
          <br>
          <!--box8-->
          <div class="steel-box">
            <h2 class="product-title6">INSULA 700</h2>
            <h4>STEEL CONTAINER</h4>
            <img id="t" src="t8.jpeg" alt="t8">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 96pcs
              <br>
              MRP Rs.329/-
            </p>
          </div><br>
          <br>
          <!--box9-->
          <div class="steel-box">
            <h2 class="product-title6">REFRESH</h2>
            <h4>LUNCH SET 2PC (350ml-2)</h4>
            <img id="t" src="t9.jpeg" alt="t9">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 36pcs
              <br>
              MRP Rs.699/-
            </p>
          </div><br>
          <br>
          <!--box10-->
          <div class="steel-box">
            <h2 class="product-title6">REFRESH</h2>
            <h4>LUNCH SET 3PC (275ml-1,350ml-2)</h4>
            <img id="t" src="t10.jpeg" alt="t10">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.990/-
            </p>
          </div><br>
          <br>
          <!--box11-->
          <div class="steel-box">
            <h2 class="product-title6">REFRESH</h2>
            <h4>LUNCH SET 4PC (275ml-2,350ml-2)</h4>
            <img id="t" src="t11.jpeg" alt="t11">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 12pcs
              <br>
              MRP Rs.1199/-
            </p>
          </div><br>
          <br>
          <!--box12-->
          <div class="steel-box">
            <h2 class="product-title6">DURO</h2>
            <h4>LUNCH SET 2PC<BR>(375ml-2)</h4>
            <img id="t" src="t12.jpeg" alt="t12">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 36pcs
              <br>
              MRP Rs.449/-
            </p>
          </div><br>
          <br>
          <!--box13-->
          <div class="steel-box">
            <h2 class="product-title6">DURO</h2>
            <h4>LUNCH SET 3PC (225ml-1,375ml-1,550ml-1)</h4><br>
            <img id="t" src="t13.jpeg" alt="t13">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.599/-
            </p>
          </div><br>
          <br>
          <!--box14-->
          <div class="steel-box">
            <h2 class="product-title6">DURO</h2>
            <h4>LUNCH SET 4PC (225ml-1,375ml-1,550ml-1,Glass 350ML-1)</h4>
            <img id="t" src="t14.jpeg" alt="t14">
            <br>
            <p>
              Available in : red, blue, green
              <br>
              Master Pack : 12pcs
              <br>
              MRP Rs.1199/-
            </p>
          </div><br>
          <br>
        </div>
      </div>
    </section>
    <!--food container-->
    <section class="shop-container6">
      <br>
      <h2 class="section-title1">Product No.6</h2>
      <!--content-->
      <div class="Shop Content6">
        <!--main box-->
        <div class="product-box6">
          <h1 class="product-title6">FOOD CONTAINER</h1>
          <br>
          <img src="fc.jpeg" class="center4">
        </div><br>
        <br>
        <div class="food-cont">
          <!--box1-->
          <div class="plastic-box">
            <h2 class="product-title7">FRESHCO</h2>
            <h4>1000 ml - 1</h4>
            <img id="fc" src="fc1.jpeg" alt="fc1">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 72pcs
              <br>
              MRP Rs.99/-
            </p>
          </div><br>
          <br>
          <!--box2-->
          <div class="plastic-box">
            <h2 class="product-title7">FRESHCO</h2>
            <h4>2 Pc Set - 750 ml</h4>
            <img id="fc" src="fc2.jpeg" alt="fc2">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 60pcs
              <br>
              MRP Rs.131/-
            </p>
          </div><br>
          <br>
          <!--box3-->
          <div class="plastic-box">
            <h2 class="product-title7">FRESHCO</h2>
            <h4>3 Pc Set - 500 ml</h4>
            <img id="fc" src="fc3.jpeg" alt="fc3">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 60pcs
              <br>
              MRP Rs.145/-
            </p>
          </div><br>
          <!--box4-->
          <div class="plastic-box">
            <h2 class="product-title7">SNACKER</h2>
            <h4>3 Pc Set - 900 ml</h4>
            <img id="fc" src="fc4.jpeg" alt="fc4">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.181/-
            </p>
          </div><br>
          <!--box5-->
          <div class="plastic-box">
            <h2 class="product-title7">SNACKER</h2>
            <h4>3 Pc Set - 1.7 L</h4>
            <img id="fc" src="fc5.jpeg" alt="fc5">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.253/-
            </p>
          </div><br>
          <!--box6-->
          <div class="plastic-box">
            <h2 class="product-title7">SNACKER</h2>
            <h4>3 Pc Set - 3 Ltr</h4>
            <img id="fc" src="fc6.jpeg" alt="fc6">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 18pcs
              <br>
              MRP Rs.399/-
            </p>
          </div><br>
          <!--box7-->
          <div class="plastic-box">
            <h2 class="product-title7">SNACKER PRENIUM</h2>
            <h4>3 Pc Set - 225 ml</h4>
            <img id="fc" src="fc7.jpeg" alt="fc7">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 72pcs
              <br>
              MRP Rs.91/-
            </p>
          </div><br>
          <!--box8-->
          <div class="plastic-box">
            <h2 class="product-title7">SNACKER PRENIUM</h2>
            <h4>3 Pc Set - 900 ml</h4>
            <img id="fc" src="fc8.jpeg" alt="fc8">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 36pcs
              <br>
              MRP Rs.254/-
            </p>
          </div><br>
          <!--box9-->
          <div class="plastic-box">
            <h2 class="product-title7">SNACKER PRENIUM</h2>
            <h4>2 Pc Set - 1500 ml</h4>
            <img id="fc" src="fc9.jpeg" alt="fc9">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.199/-
            </p>
          </div><br>
          <!--box10-->
          <div class="plastic-box">
            <h2 class="product-title7">SNACKER PRENIUM</h2>
            <h4>1 Pc - 3 L</h4>
            <img id="fc" src="fc10.jpeg" alt="fc10">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.145/-
            </p>
          </div><br>
          <!--box11-->
          <div class="plastic-box">
            <h2 class="product-title7">SNACKER S</h2>
            <h4>3 Pc Set - 1000 ml</h4>
            <img id="fc" src="fc11.jpeg" alt="fc11">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.163/-
            </p>
          </div><br>
          <!--box12-->
          <div class="plastic-box">
            <h2 class="product-title7">SNACKER S</h2>
            <h4>3 Pc Set - 1800 ml</h4>
            <img id="fc" src="fc12.jpeg" alt="fc12">
            <br>
            <p>
              Available in : red, blue, green, yellow
              <br>
              Master Pack : 30pcs
              <br>
              MRP Rs.264/-
            </p>
          </div><br>
          <!--box13-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER</h2>
            <h4>5 L - 1 Pc</h4>
            <img id="fc" src="fc13.jpeg" alt="fc13">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.99/-
            </p>
          </div><br>
          <!--box14-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER</h2>
            <h4>7 L - 1 Pc</h4>
            <img id="fc" src="fc14.jpeg" alt="fc14">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 27pcs
              <br>
              MRP Rs.156/-
            </p>
          </div><br>
          <!--box15-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER</h2>
            <h4>11 L - 1 Pc</h4>
            <img id="fc" src="fc15.jpeg" alt="fc15">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 12pcs
              <br>
              MRP Rs.208/-
            </p>
          </div><br>
          <!--box16-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER</h2>
            <h4>3 Pc Set (1L-1Pc, 2L-1Pc, 3L-1Pc)</h4>
            <img id="fc" src="fc16.jpeg" alt="fc16">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.220/-
            </p>
          </div><br>
          <!--box17-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER</h2>
            <h4>3 Pc Set (2L-1Pc, 3L-1Pc, 5L-1Pc)</h4>
            <img id="fc" src="fc17.jpeg" alt="fc17">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.304/-
            </p>
          </div><br>
          <!--box18-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER</h2>
            <h4>3 Pc Set (5L-1Pc, 7L-1Pc, 11L-1Pc)</h4>
            <img id="fc" src="fc18.jpeg" alt="fc18">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 12pcs
              <br>
              MRP Rs.518/-
            </p>
          </div><br>
          <!--box19-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER ROUND</h2>
            <h4>3 Pc Set (1.5 L - 3)</h4>
            <img id="fc" src="fc19.jpeg" alt="fc19">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.191/-
            </p>
          </div><br>
          <!--box20-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER DOTTED</h2>
            <h4>3 Pc Set (1L-1, 2L-1, 3L-1)</h4>
            <img id="fc" src="fc20.jpeg" alt="fc20">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.243/-
            </p>
          </div><br>
          <!--box21-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER DOTTED</h2>
            <h4>3 Pc Set (2L-1, 3L-1, 5L-1)</h4>
            <img id="fc" src="fc21.jpeg" alt="fc21">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.333/-
            </p>
          </div><br>
          <!--box22-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER DOTTED</h2>
            <h4>3 Pc Set (5L-1, 7L-1, 11L-1,)</h4>
            <img id="fc" src="fc22.jpeg" alt="fc22">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 12pcs
              <br>
              MRP Rs.569/-
            </p>
          </div><br>
          <!--box23-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER FLORA</h2>
            <h4>3 Pc Set (1L-1, 2L-1, 3L-1,)</h4>
            <img id="fc" src="fc23.jpeg" alt="fc23">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.259/-
            </p>
          </div><br>
          <!--box24-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER FLORA</h2>
            <h4>3 Pc Set (2L-1, 3L-1, 5L-1)</h4>
            <img id="fc" src="fc24.jpeg" alt="fc24">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.359/-
            </p>
          </div><br>
          <!--box25-->
          <div class="plastic-box">
            <h2 class="product-title7">AMBER FLORA</h2>
            <h4>3 Pc Set (5L-1, 7L-1, 11L-1)</h4>
            <img id="fc" src="fc25.jpeg" alt="fc25">
            <br>
            <p>
              Available in : red, blue, pink, yellow
              <br>
              Master Pack : 12pcs
              <br>
              MRP Rs.623/-
            </p>
          </div><br>
          <!--box26-->
          <div class="plastic-box">
            <h2 class="product-title7">TITAN</h2>
            <h4>OVAL CONTAINER</h4><br> 2 Pc Set (500 ml - 2)<br>
            <img id="fc" src="fc26.jpeg" alt="fc26">
            <br>
            <p>
              Available in : red, purple
              <br>
              Master Pack : 60pcs
              <br>
              MRP Rs.125/-
            </p>
          </div><br>
          <!--box27-->
          <div class="plastic-box">
            <h2 class="product-title7">TITAN</h2>
            <h4>OVAL CONTAINER</h4><br> 1 Pc 1 L - 1<br>
            <img id="fc" src="fc27.jpeg" alt="fc27">
            <br>
            <p>
              Available in : red, purple
              <br>
              Master Pack : 60pcs
              <br>
              MRP Rs.165/-
            </p>
          </div><br>
          <!--box28-->
          <div class="plastic-box">
            <h2 class="product-title7">TITAN</h2>
            <h4>OVAL CONTAINER</h4><br> 1 Pc 1.7 L - 1<br>
            <img id="fc" src="fc28.jpeg" alt="fc28">
            <br>
            <p>
              Available in : red, purple, pink
              <br>
              Master Pack : 60pcs
              <br>
              MRP Rs.199/-
            </p>
          </div><br>
          <!--box29-->
          <div class="plastic-box">
            <h2 class="product-title7">TITAN</h2>
            <h4>OVAL CONTAINER</h4><br> 1 Pc 2 L - 1<br>
            <img id="fc" src="fc29.jpeg" alt="fc29">
            <br>
            <p>
              Available in : red, purple
              <br>
              Master Pack : 60pcs
              <br>
              MRP Rs.265/-
            </p>
          </div><br>
          <!--box30-->
          <div class="plastic-box">
            <h2 class="product-title7">TITAN</h2>
            <h4>SQ CONTAINER</h4><br> 1 Pc 2.6 L - 1<br>
            <img id="fc" src="fc30.jpeg" alt="fc30">
            <br>
            <p>
              Available in : red, purple
              <br>
              Master Pack : 48pcs
              <br>
              MRP Rs.275/-
            </p>
          </div><br>
          <!--box31-->
          <div class="plastic-box">
            <h2 class="product-title7">TITAN</h2>
            <h4>SQ CONTAINER</h4><br> 1 Pc 4 L - 1<br>
            <img id="fc" src="fc31.jpeg" alt="fc31">
            <br>
            <p>
              Available in : red, purple
              <br>
              Master Pack : 36pcs
              <br>
              MRP Rs.350/-
            </p>
          </div><br>
          <!--box32-->
          <div class="plastic-box">
            <h2 class="product-title7">TITAN</h2>
            <h4>SQ CONTAINER</h4><br> 1 Pc 5.5 L - 1<br>
            <img id="fc" src="fc32jpeg.jpeg" alt="fc32">
            <br>
            <p>
              Available in : red, purple
              <br>
              Master Pack : 24pcs
              <br>
              MRP Rs.450/-
            </p>
          </div><br>
          <br>
          <br>
        </div>
      </div>
  </section>
      <!--ca-->
      <section class="shop-container7">
        <br>
        <h2 class="section-title1">Product No.7</h2>
        <!--content-->
        <div class="Shop Content7">
          <!--main box-->
          <div class="product-box7">
            <h2 class="product-title7"></h2>
            <br>
            <img src="be.jpeg" class="center5">
          </div><br>
          <br>
          <div class="bath-essentials">
            <!--box1-->
            <div class="buckets">
              <h2 class="product-title8">BUCKET 7<BR>7 L</h2>
              <img id="ca" src="ca1.jpeg" alt="ca1">
              <br>
              <p>
                Available in : blue,pink,green
                <br>
                Master Pack : 36pcs
                <br>
                MRP Rs.170/-
              </p>
            </div><br>
            <br>
            <!--box2-->
            <div class="buckets">
              <h2 class="product-title8">BUCKET 11<BR>11 L</h2>
              <img id="ca" src="ca2.jpeg" alt="ca2">
              <br>
              <p>
                Available in : blue,pink,green
                <br>
                Master Pack : 24pcs
                <br>
                MRP Rs.205/-
              </p>
            </div><br>
            <br>
            <!--box3-->
            <div class="buckets">
              <h2 class="product-title8">BUCKET 13<BR>13 L</h2>
              <img id="ca" src="ca3.jpeg" alt="ca3">
              <br>
              <p>
                Available in : blue,pink,green
                <br>
                Master Pack : 24pcs
                <br>
                MRP Rs.240/-
              </p>
            </div><br>
            <br>
            <!--box4-->
            <div class="buckets">
              <h2 class="product-title8">BUCKET 16<BR>16 L</h2>
              <img id="ca" src="ca4.jpeg" alt="ca4">
              <br>
              <p>
                Available in : blue,pink,green
                <br>
                Master Pack : 24pcs
                <br>
                MRP Rs.290/-
              </p>
            </div><br>
            <br>
            <!--box5-->
            <div class="buckets">
              <h2 class="product-title8">BUCKET 18<BR>18 L</h2>
              <img id="ca" src="ca5.jpeg" alt="ca5">
              <br>
              <p>
                Available in : blue,pink,green
                <br>
                Master Pack : 24pcs
                <br>
                MRP Rs.310/-
              </p>
            </div><br>
            <br>
            <!--box6-->
            <div class="buckets">
              <h2 class="product-title8">BUCKET 20<BR>20 L</h2>
              <img id="ca" src="ca6.jpeg" alt="ca6">
              <br>
              <p>
                Available in : blue,pink,green
                <br>
                Master Pack : 24pcs
                <br>
                MRP Rs.355/-
              </p>
            </div><br>
            <br>
            <!--box7-->
            <div class="buckets">
              <h2 class="product-title8">OMEGA 25<BR>25 L</h2>
              <img id="ca" src="ca7.jpeg" alt="ca7">
              <br>
              <p>
                Available in : blue,pink,green
                <br>
                Master Pack : 24pcs
                <br>
                MRP Rs.415/-
              </p>
            </div><br>
            <br>
            <!--box8-->
            <div class="buckets">
              <h2 class="product-title8">SQUARE<BR>BUCKET 20<BR>20 L</h2>
              <img id="ca" src="ca8.jpeg" alt="ca8">
              <br>
              <p>
                Available in : black,blue
                <br>
                Master Pack : 48pcs
                <br>
                MRP Rs.499/-
              </p>
            </div><br>
            <br>
            <!--box9-->
            <div class="buckets">
              <h2 class="product-title8">SQUARE<BR>BUCKET 25<BR>25 L</h2>
              <img id="ca" src="ca9.jpeg" alt="ca9">
              <br>
              <p>
                Available in : black,blue
                <br>
                Master Pack : 36pcs
                <br>
                MRP Rs.650/-
              </p>
            </div><br>
            <br>
            <!--box10-->
            <div class="buckets">
              <h2 class="product-title8">SQUARE<BR>MUG 1.5 L</h2>
              <img id="ca" src="ca10.jpeg" alt="ca10">
              <br>
              <p>
                Available in : black,blue
                <br>
                Master Pack : 288pcs
                <br>
                MRP Rs.80/-
              </p>
            </div><br>
            <br>
            <!--box11-->
            <div class="buckets">
              <h2 class="product-title8">OMEGA<BR>MUG 1 L</h2>
              <img id="ca" src="ca11.jpeg" alt="ca11">
              <br>
              <p>
                Available in : blue, pink, green
                <br>
                Master Pack : 144pcs
                <br>
                MRP Rs.41/-
              </p>
            </div><br>
            <br>
            <!--box12-->
            <div class="buckets">
              <h2 class="product-title8">OMEGA<BR>MUG 1.5 L</h2>
              <img id="ca" src="ca12.jpeg" alt="ca12">
              <br>
              <p>
                Available in : blue, pink, green
                <br>
                Master Pack : 144pcs
                <br>
                MRP Rs.53/-
              </p>
            </div><br>
            <br>
            <!--box13-->
            <div class="buckets">
              <h2 class="product-title8">PANDA<BR>STOOL 10 inch</h2>
              <img id="ca" src="ca13.jpeg" alt="ca13">
              <br>
              <p>
                Available in : black,white,brown
                <br>
                Master Pack : 24pcs
                <br>
                MRP Rs.349/-
              </p>
            </div><br>
            <br>
            <!--box14-->
            <div class="buckets">
              <h2 class="product-title8">TWIN<BR>STOOL 12.5 inch</h2>
              <img id="ca" src="ca14.jpeg" alt="ca14">
              <br>
              <p>
                Available in : green,blue,peach
                <br>
                Master Pack : 24pcs
                <br>
                MRP Rs.469/-
              </p>
            </div><br>
            <br>
          </div>
        </div>
      </section>
      <!--ca-->
      <section class="shop-container8">
        <br>
        <h2 class="section-title1">Product No.8</h2>
        <!--content-->
        <div class="Shop Content8">
          <!--main box-->
          <div class="product-box8">
            <h2 class="product-title8"></h2>
            <br>
            <img src="ca.jpeg" class="center6">
          </div><br>
          <br>
          <div class="cleaning">
            <!--box1-->
            <div class="mop">
              <h2 class="product-title9">QUICK SPIN MOP<BR>17 L</h2>
              <img id="ca" src="ca15.jpeg" alt="ca15">
              <br>
              <p>
                Available in : blue,brown,green
                <br>
                Master Pack : 4pcs
                <br>
                MRP Rs.1399/-
              </p>
            </div><br>
            <br>
            <!--box2-->
            <div class="mop">
              <h2 class="product-title9">HANGER 01<BR>6 pc Set</h2>
              <img id="ca" src="ca16.jpeg" alt="ca16">
              <br>
              <p>
                Available in : brown,yellow,peach,blue
                <br>
                Master Pack : 52pcs
                <br>
                MRP Rs.176/-
              </p>
            </div><br>
            <br>
            <!--box3-->
            <div class="mop">
              <h2 class="product-title9">SERVO SERVING TRAY<BR>3 Pc Set</h2>
              <img id="ca" src="ca17.jpeg" alt="ca17">
              <br>
              <p>
                Available in : 3 Designs
                <br>
                Master Pack : 7pcs
                <br>
                MRP Rs.649/-
              </p>
            </div><br>
            <br>
          </div> 
          </div>
      </section>
      <!--KW-->
      <section class="shop-container9">
        <br>
        <h2 class="section-title1">Product No.9</h2>
        <!--content-->
        <div class="Shop Content9">
          <!--main box-->
          <div class="product-box9">
            <h2 class="product-title9"></h2>
            <br>
            <img src="kw.jpeg" class="center7">
          </div><br>
          <br>
          <div class="kit-chen">
            <!--box1-->
            <div class="serving">
              <h2 class="product-title8">SWIFT <BR>MINI VEGGIE CHOPPER<BR>1 Pc 450 ml</h2>
              <img id="ca" src="kw1.jpeg" alt="kw1">
              <br>
              <p>
                Available in : grey
                <br>
                Master Pack : 60pcs
                <br>
                MRP Rs.450/-
              </p>
            </div><br>
            <br>
            </div>
          </div>  
      </section>    

<!--Contact Us-->
<section class="contact">
  <div class="contact-us">
    <img id="logo" src="leo_logo.jpg" alt="logo">
    <br><br><br>
    <h3 id="title">Contact Us</h3>
    <p>Interested in knowing more about our products and services?
      <br>Please find our Contact details to reach out to us. <br> 
      Email:<a href="mailto.ajaykashyap73@gmail.com? subject=Learn More">ajaykashyap73@gmail.com</a></p>
    <br>
    <h3 id="title">Corporate Office:</h3>
    <h2 id="title">Mutual Industries Limited</h2>
    <p>A - 701, Heritage Plaza, Gundavali.<br>
      Nityanand Nagar,Telli Galli Cross Road,<br>
      Andheri (E), Mumbai - 400069<br> Tel.: *91-22-8448170933
      </p>  
    <br>
    <h3 id="title">Factory / Warehouse</h3>
    <p>Survey No. 166/1 Part 1, Near Radium Creation, <br> Radium Creation Road, Village Tumb, Taluka Umargaon,<br> District Valsad, Gujarat - 396150.</p>
    </div>
</section>

  <script>
    var menuBtn = document.getElementById("menuBtn");
    var sideNav = document.getElementById("sideNav");
    var menu = document.getElementById("menu");

    sideNav.style.right == "-250px";

    menuBtn.onclick = function () {
      if (sideNav.style.right == "-250px") {
        sideNav.style.right = "0";
      }
      else {
        sideNav.style.right = "-250px";
       
      }
    }
  </script>
</body>
</html>