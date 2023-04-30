<?php include('serverpage.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <title>MegapixelPhotography</title>
 <link rel="icon" type="image/x-icon" href="img\favicon.png">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="./mobile.css">
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
 <!-- aos --> 
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">
  <nav class="navbar">
    <div class="content">
      <div class="logo"><a href="#">MegaPixel</a></div>
      <ul class="menu-list">
      <div class="icon cancel-btn">
        <i class="fas fa-times"></i>
      </div>
            <li><a href="#home" >Home</a></li>
            <li><a href="#about" >About</a></li>
            <li><a href="#services" >Services</a></li>
            <li><a href="#albums" >Albums</a></li>
            <li><a href="#contact" >Contact</a></li>
      </ul>
      <div class="icon menu-btn">
        <i class="fas fa-bars"></i>
      </div>
    </div>
  </nav>
  <!--home section starts-->
  <section class="home-section" id="home">
    <div class="container">
      <div class="row align-items-center">
        <div class="home-content">
          <h4>MegaPixel</h4>
          <h1>Photography</h1>
        </div>
      </div>
    </div>
    <a href="#about" class="scroll-down">
      <img src="img/icons/arrow-down.svg" alt="scroll-down">
    </a>
  </section>
  <!--home section ends-->

  <!--About section strats-->
  <section class="about-section" id="about">
    <div class="container">
      <div class="row about-me">
        <div class="about-img">
          <div class="img-box">
            <img src="img/about.jpg" alt="about me">
          </div>
        </div>
        <div class="about-content">
          <div class="row">
            <div class="section-title">
              <h1>About Me</h1>
            </div>
          </div>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

          <div class="stats">
            <div class="row">
              <div class="stats-box">
                <h2 id="awards">12</h2>
                <h5>Awards won</h5>
              </div>
              <div class="stats-box">
                <h2 id="projects">50</h2>
                <h5>Projects Done</h5>
              </div>
              <div class="stats-box">
                <h2 id="clients">200</h2>
                <h5>happy Clients</h5>
              </div>
              <div class="stats-box">
                <h2 id="shoots">1200</h2>
                <h5>All shoots</h5>
              </div>
            </div>
          </div>
          <a href="#contact" class="btn btn-01">Contact Me</a>
        </div>
      </div>
    </div>
  </section>
  <!--About section ends-->

  <!--Service section starts-->
  <section class="service-section" id="services">
    <div class="container">
      <div class="row">
        <div  class="section-title">
          <h1>Our Services</h1>
        </div>
      </div>
      <div class="row servies-row">
        <div class="service-item" data-aos="zoom-in" animation-delay="600">
          <div class="service-item-inner">
            <img src="img/service/1.jpg" alt="service" >
            <div class="overlay">
              <h4>Wedding Photography</h4>
            </div>
          </div>
        </div>
        <div class="service-item" data-aos="zoom-in" animation-delay="600">
          <div class="service-item-inner">
            <img src="img/service/2.jpg" alt="service">
            <div class="overlay">
              <h4>Travel Photography</h4>
            </div>
          </div>
        </div>
        <div class="service-item" data-aos="zoom-in" animation-delay="600">
          <div class="service-item-inner">
            <img src="img/service/3.jpg" alt="service">
            <div class="overlay">
              <h4>Event Photography</h4>
            </div>
          </div>
        </div>
        <div class="service-item" data-aos="zoom-in" animation-delay="600">
          <div class="service-item-inner">
            <img src="img/service/4.jpg" alt="service">
            <div class="overlay">
              <h4>Portrait Photography</h4>
            </div>
          </div>
        </div>
        <div class="service-item" data-aos="zoom-in" animation-delay="600">
          <div class="service-item-inner">
            <img src="img/service/5.jpg" alt="service">
            <div class="overlay">
              <h4>Fashion Photography</h4>
            </div>
          </div>
        </div>
        <div class="service-item" data-aos="zoom-in" animation-delay="600">
          <div class="service-item-inner">
            <img src="img/service/6.jpg" alt="service">
            <div class="overlay">
              <h4>Anniversary Photography</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Service section ends-->

  <!--albums section starts-->
   <section class="album-section" id="albums">
      <div class="container">
        <div class="row">
          <div  class="section-title ">
          <h1>Our Albums</h1>
        </div>
        </div>
          <div class="wrapper">
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="wedding">wedding</span>
        <span class="item" data-name="travel">Travel</span>
        <span class="item" data-name="event">Event</span>
        <span class="item" data-name="portrait">Portrait</span>
        <span class="item" data-name="fashion">Fashion</span>
      </div>
    </nav>
    <!-- gallery -->
    <div class="gallery">
      <div class="image" data-name="wedding"><span> <img src="img/albums/4.jpg"></span></div>
      <div class="image" data-name="travel"><span> <img src="img/albums/8.jpg"></span></div>
      <div class="image" data-name="event" ><span> <img src="img/albums/12.jpg"></span></div>
      <div class="image" data-name="portrait"><span> <img src="img/albums/20.jpg"></span></div>
      <div class="image" data-name="fashion"><span> <img src="img/albums/16.jpg"></span></div>
      <div class="image" data-name="wedding"><span> <img src="img/albums/1.jpg"></span></div>
      <div class="image" data-name="travel"><span> <img src="img/albums/13.jpg"></span></div>
      <div class="image" data-name="event"><span> <img src="img/albums/5.jpg"></span></div>
      <div class="image" data-name="portrait"><span> <img src="img/albums/9.jpg"></span></div>
      <div class="image" data-name="fashion"><span> <img src="img/albums/17.jpg"></span></div>
      <div class="image" data-name="wedding"><span> <img src="img/albums/2.jpg"></span></div>
      <div class="image" data-name="travel"><span> <img src="img/albums/6.jpg"></span></div>
      <div class="image" data-name="event"><span> <img src="img/albums/10.jpg"></span></div>
      <div class="image" data-name="portrait"><span> <img src="img/albums/14.jpg"></span></div>
      <div class="image" data-name="fashion"><span> <img src="img/albums/18.jpg"></span></div>
      <div class="image" data-name="wedding"><span> <img src="img/albums/3.jpg"></span></div>
      <div class="image" data-name="travel"><span> <img src="img/albums/7.jpg"></span></div>
      <div class="image" data-name="event"><span> <img src="img/albums/11.jpg"></span></div>
      <div class="image" data-name="portrait"><span> <img src="img/albums/15.jpg"></span></div>
      <div class="image" data-name="fashion"><span> <img src="img/albums/19.jpg"></span></div>

    </div>
  </div>

  <div class="preview-box">
    <div class="details">
      <span class="title">MegaPixel Photography</span>
      <span class="icon fas fa-times"></span>
    </div>
    <div class="image-box">
      <img src="">
    </div>
  </div>
  <div class="shadow"></div>
    
</div>
</section>
  <!--albums section ends-->
  

  <!-- contact section starts -->
  <section class="contact-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="contact-img">
          <div class="img-box">
            <div class="section-title">
              <h1>Contact Me</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="contact-form">
          <form class="form" action="index.php" method="post">
            <div class="row">
              <div class="left input-group">
                <label>Name</label>
                <input type="text" placeholder="Enter Your Name" class="input-control" name="name" required>
              </div>
              <div class="right input-group">
                <label>Email</label>
                <input type="email" placeholder="Enter Your Email or Phone" class="input-control" name="email" required>
              </div>
            </div>
            <div class="row">
              <div class="input-group">
                <label>Message</label>
                <textarea class="input-control" placeholder="Your Message Here" name="message" required></textarea>
              </div>
            </div>
            <div class="form-btn">
              <input type="submit" class="btn btn-01" name="submit" value="Submit">
            </div>
          </form>
        </div>
      </div>
      <div class="row">
        <div class="contact-info">
          <div class="row">
            <div class="info-item">
              <h5>Contact info</h5>
              <p>Flat no - 201, Kakinada</p>
              <p>91 630 587 8367</p>
              <p>megapixelphotography001@gmail.com</p>
              <p>megapixel.com</p>

            </div>
            <div class="info-item">
              <h5>About Me</h5>
              <p>Company</p>
              <p>Projects</p>
              <p>Events</p>
              <p>Awards</p>
              
            </div>
            <div class="info-item">
              <h5>Services</h5>
              <p>Photographer</p>
              <p>Videography</p>
              <p>Visual Efffects</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="social-links">
          <a href="https://www.facebook.com/mega.pixel.9634340" title="facebook"><img src="img/icons/facebook.svg" alt="facebook"></a>
          <a href="https://www.instagram.com/mega.pixelphotography/?hl=en" title="instagram"><img src="img/icons/instagram.svg" alt="instagram"></a>
          <a href="https://twitter.com/megapixel001" title="twitter"><img src="img/icons/twitter.svg" alt="twitter"></a>
          <a href="https://www.linkedin.com/in/megapixel-photography-58980b202/" title="linkedin"><img src="img/icons/linkedin.svg" alt="linkedin"></a>
          
        </div>
      </div>
    </div>
   
  </section>
  <footer>
    <hr>
  <div class="copyright">
    <h4>&copy;LeelaPrasad. All rights reserved</h4>
   
  </div>
  </footer>
  <!-- service section ends -->
  <script>
    AOS.init();
    
  </script>
  <script src="./jsfile.js"></script>
</body>
</html>