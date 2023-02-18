<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- link icon -->
    <link rel="stylesheet"
     href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <!-- --------- -->

    <!-- link css -->
    <link rel="stylesheet" href="stylebis.css">
    <!-- -------- -->

    <!-- link font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto:wght@500&display=swap" rel="stylesheet"> 
    <!-- -------- -->
</head>
<body>
  
    
          <!-- menu logo dan navbar -->
      <header id="header">
            
            <a href="#" class="logo">TellFood</a>
            <div class="bx bx-menu" id="menu-icon"></div>
            <ul class="navbar" id="navbar">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#menu">Menu</a></li>
                <li><a href="#service">Service</a></li>
                <li><a href="#contact">Contact</a></li>
                
            </ul>
        </header>
        <!-- menu start home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Kalau Lapar</h1>
            <h2>Makan !<br> 
            jangan tunggu AYANK</h2>
            <a href="#" class="btn">Lihat lebih</a>
        </div>

        <div class="home-img">
            <img src="img/home.png" alt="gambar home">
        </div>
    </section>
   
    <!-- menu about -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/about.png" alt="gambar tentang">
        </div>

        <div class="about-text">
            <span>About Us</span>
            <br>
            <h2>Rasakan Sensasi Makanan <br> Cepat dan Lezat </h2>
            <p>Tellfood menjamin kualitas bahan makanan yang digunakan, sehingga setiap hidangan yang disajikan memiliki cita rasa yang lezat dan berkualitas. 
               Dengan suasana yang nyaman dan pelayanan yang ramah, Tellfood menjadi salah satu pilihan 
               restoran yang ideal untuk mengisi waktu santai atau sebagai tempat nongkrong bersama teman-teman.</p>
               <a href="#" class="btn">Menu hari ini</a>
        </div>
    </section>

    <!-- menu makanan -->
    <section class="menu" id="menu">
        <div class="heading">
            <span>Menu Makanan</span>
            <h2>Makanan berkualitas dan harga pas</h2>
        </div>

        <div class="menu-container">

            <div class="box">
                <div class="box-img">
                    <img src="img/food1.png" alt="menu1">
                </div>  
                <h2>Burger Donat</h2>
                <h3>Tasty food</h3>
                <span>Rp 50.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/food2.png" alt="menu1">
                </div>  
                <h2>Burger Original</h2>
                <h3>Tasty food</h3>
                <span>Rp 40.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>

            <div class="box">
                <div class="box-img">
                    <img src="img/food3.png" alt="menu1">
                </div>  
                <h2>Ayam</h2>
                <h3>Tasty food</h3>
                <span>Rp 45.000</span>
                <i class='bx bx-cart-alt'></i>
            </div>


        </div>
    </section>

    <!-- menu service -->
    <section>
        <div class="service" id="service">
            <div class="heading">
                <span>Sevices</span>
                <h2>kami menyediakan layanan kualitas terbaik</h2>
            </div>

            <div class="service-container">

                <div class="s-box">
                    <img src="img/s1.png" alt="service1">
                    <h3>Order</h3>
                    <p>Lorem ipsum dolor sit, amet. Repudiandae suscipit consequatur ut reiciendis.</p>
                </div>

                <div class="s-box">
                    <img src="img/s2.png" alt="service2">
                    <h3>Shipping</h3>
                    <p>Lorem ipsum dolor sit, amet. Repudiandae suscipit consequatur ut reiciendis.</p>
                </div>

                <div class="s-box">
                    <img src="img/s3.png" alt="service3">
                    <h3>Delivered</h3>
                    <p>Lorem ipsum dolor sit, amet. Repudiandae suscipit consequatur ut reiciendis.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- menu panggil -->

    <section class="cta">
        <h2>Kami membuat makanan berkualitas <br> Setiap Hari </h2>
        <a href="#" class="btn">let's talk</a>
    </section>

    <!-- footer start -->
    <section class="contact" id="contact">
        <div class="footer">
            <div class="main">
                <div class="col">
                    <h4>Menu link</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Menu</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Our Service</h4>
                    <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">Web Development</a></li>
                        <li><a href="#">Marketing</a></li>
                        <li><a href="#">Product Management</a></li>
                        <li><a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms & Conditions</a></li>
                    </ul>
                </div>

                <div class="col">
                    <h4>Contract Us</h4>
                    <div class="social">
                        <a href="#"><i class='bx bxl-facebook'></i></a>
                        <a href="#"><i class='bx bxl-instagram'></i></a>
                        <a href="#"><i class='bx bxl-twitter'></i></a>
                        <a href="#"><i class='bx bxl-youtube'></i></a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- link javascript -->
    
    <script src="script2.js"></script>
    
    
</body>
</html>
 