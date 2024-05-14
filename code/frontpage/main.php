<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- 
    - primary meta tags
  -->
  <title>WE ARE Developers</title>
  <meta name="title" content="WE R Developers">
  <meta name="description" content="This is a SMS html template made by codewithAndy">

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&family=Forum&display=swap" rel="stylesheet">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - preload images
  -->
  <link rel="preload" as="image" href="./assets/images/hero-slider-1.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-2.jpg">
  <link rel="preload" as="image" href="./assets/images/hero-slider-3.jpg">

</head>

<body id="top">

  <!-- 
    - #PRELOADER
  -->

  <div class="preload" data-preaload>
    <div class="circle"></div>
    <p class="text">SMS</p>
  </div>





  <!-- 
    - #TOP BAR
  -->

  <div class="topbar">
    <div class="container">

      <address class="topbar-item">
        <div class="icon">
          <ion-icon name="location-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">
          Sinhgad Rd, Nanded Fata, Pandurang Industrial Area,Nanded, Pune, Maharashtra
        </span>
      </address>

      <div class="separator"></div>

      <div class="topbar-item item-2">
        <div class="icon">
          <!-- <ion-icon name="time-outline" aria-hidden="true"></ion-icon> -->
        </div>

        <!-- <span class="span">Daily : 8.00 am to 10.00 pm</span> -->
      </div>

      <a href="tel:+91 8380806582" class="topbar-item link">
        <div class="icon">
          <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">+91 8380806582</span>
      </a>

      <div class="separator"></div>

      <a href="mailto:societysystem03@gmail.com" class="topbar-item link">
        <div class="icon">
          <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>
        </div>

        <span class="span">societysystem03@gmail.com</span>
      </a>

    </div>
  </div>





  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="./assets/images/MY LOGO.png" width="160" height="50" alt="Grilli - Home">
      </a>

      <nav class="navbar" data-navbar>

        <button class="close-btn" aria-label="close menu" data-nav-toggler>
          <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
        </button>

        <a href="#" class="logo">
          <img src="./assets/images/MY LOGO.png" width="160" height="50" alt="SMS - Home">
        </a>

        <ul class="navbar-list">

          <li class="navbar-item">
            <a href="#home" class="navbar-link hover-underline active">
              <div class="separator"></div>

              <span class="span">Home</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#menu" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Services</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#about" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">About Us</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">Contact</span>
            </a>
          </li>

          <li class="navbar-item">
            <a href="#" class="navbar-link hover-underline">
              <div class="separator"></div>

              <span class="span">feedback</span>
            </a>
          </li>

        </ul>

        <div class="text-center">
          <p class="headline-1 navbar-title">Contact Us</p>

          <address class="body-4">
            Sinhgad Rd, Nanded Fata, Pandurang Industrial Area,<br>
             Nanded, Pune, Maharashtra
          </address>

          <a href="mailto:bookingflats@gmail.com" class="body-4 sidebar-link">bookingflats@gmail.com</a>

          <div class="separator"></div>

          <a href="tel:+91 9107992277" class="body-1 contact-number hover-underline">
          +91 9107992277
          </a>
        </div>

      </nav>

      <a href="login main/Enquiry.php" class="btn btn-secondary">
       
      <button type="submit"> 
      <span class="text text-1">ENQUIRY</span>

        <span class="text text-2" aria-hidden="true">ENQUIRY</span>
        </button>
      </a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <span class="line line-1"></span>
        <span class="line line-2"></span>
        <span class="line line-3"></span>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero text-center" aria-label="home" id="home">

        <ul class="hero-slider" data-hero-slider>

          <li class="slider-item active" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/society1.jpg" width="1880" height="950" alt="" class="img-cover black">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Community cohesion</p>

            <h1 class=" display-1 hero-title slider-reveal">
              Unity Bonds Community,<br> Strength Ensues.
              
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Family gatherings offer mouthwatering joy, managed by society.
            </p>

            <a href="login main/login.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Login</span>
              <span class="text text-2" aria-hidden="true">Login</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/society2.jpg" width="1880" height="950" alt="" class="img-cover black ">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Social responsibility</p>

            <h1 class="display-1 hero-title slider-reveal">
              Fostering a Culture of Responsibility
            </h1>

            <p class="body-2 hero-text slider-reveal">
              <!-- Fostering a Culture of Responsibility. -->
              Empowering communities through social responsibility
            </p>

            <a href="login main/login.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Login</span>

              <span class="text text-2" aria-hidden="true">login</span>
            </a>

          </li>

          <li class="slider-item" data-hero-slider-item>

            <div class="slider-bg">
              <img src="./assets/images/society3.jpg" width="1880" height="950" alt="" class="img-cover  black ">
            </div>

            <p class="label-2 section-subtitle slider-reveal">Discover & Amazing Offers</p>

            <h1 class="display-1 hero-title slider-reveal">
              Enhance community <br>life with efficiency
            </h1>

            <p class="body-2 hero-text slider-reveal">
              Enhancing Community Life Through Technology.
            </p>

            <a href="login main/login.php" class="btn btn-primary slider-reveal">
              <span class="text text-1">Login</span>

              <span class="text text-2" aria-hidden="true">Login</span>
            </a>

          </li>

        </ul>

        <button class="slider-btn prev" aria-label="slide to previous" data-prev-btn>
          <ion-icon name="chevron-back"></ion-icon>
        </button>

        <button class="slider-btn next" aria-label="slide to next" data-next-btn>
          <ion-icon name="chevron-forward"></ion-icon>
        </button>

        <a href="#" class="hero-btn has-after">
          <img src="./assets/images/city.png" width="48" height="48" alt="booking icon">

          <span class="label-2 text-center span">SMS</span>
        </a>

      </section>





      <!-- 
        - #SERVICE
      -->

      <section class="section service bg-black-10 text-center" aria-label="service">
        <div class="container">

          

          <h2 class="headline-1 section-title">Try Our Services</h2>

          <p class="section-text">
            Society amenities include parking, Billing, and Online Payment facilities, catering to residents'
            recreational and fitness needs, enhancing community well-being.
          </p>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/parking.jpg" width="285" height="336" loading="lazy" alt="Breakfast"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Parking</a>

                  <!-- <a href="#" class="btn-text hover-underline label-2">View More</a> -->
                  <!-- <button type="submit"class="btn-text hover-underline label-2" onclick="openPopup()">View More</button>
                  <div class="popup" id="popup-1">
                    <div class="overlay"></div>
                    <div class="content">
                      <div class="close-btn" onclick="togglePopup()">&times;</div>
                      <h1>Title</h1>
                    <p>Society parking management involves various aspects aimed at optimizing parking space within residential complexes. It typically includes the allocation of designated parking spots to residents, visitors, and service providers, often based on factors like ownership, tenancy agreements, or availability.
                    Modern society parking systems may integrate technology such as parking management software, automated ticketing systems, and CCTV surveillance for enhanced security and efficiency. These systems can provide real-time monitoring of parking availability, facilitate online booking of visitor parking slots, and generate automated alerts for unauthorized parking.
                    </p>
                  </div>
                </div>
                <button onclick="togglePopup()">show Popup</button>
              <script>
              function togglePopup() {
                document.getElementById("popup-1").classList.toggle("active")
              }
              </script> -->
              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/bill.jpg" width="285" height="336" loading="lazy" alt="Appetizers"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Billing</a>
                  </h3>

                  <!-- <a href="#" class="btn-text hover-underline label-2">View More</a> -->

                </div>

              </div>
            </li>

            <li>
              <div class="service-card">

                <a href="#" class="has-before hover:shine">
                  <figure class="card-banner img-holder" style="--width: 285; --height: 336;">
                    <img src="./assets/images/payment.jpg" width="285" height="336" loading="lazy" alt="Drinks"
                      class="img-cover">
                  </figure>
                </a>

                <div class="card-content">

                  <h3 class="title-4 card-title">
                    <a href="#">Online Payment</a>
                  </h3>

                  <!-- <a href="#" class="btn-text hover-underline label-2">View More</a> -->

                </div>

              </div>
            </li>

          </ul>

          <img src="./assets/images/build1.png" width="246" height="412" loading="lazy" alt="shape"
            class="shape shape-1 move-anim">
          <img src="./assets/images/build2.png" width="343" height="345" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">

        </div>
      </section>





      <!-- 
        - #ABOUT
      -->

      <!-- <section class="section about text-center" aria-labelledby="about-label" id="about">
        <div class="container">

          <div class="about-content">

            <p class="label-2 section-subtitle" id="about-label">Our Society</p>

            <h2 class="headline-1 section-title"> Entry-Exit Process For All Your Visitors</h2>

            <p class="section-text">
            Advance from manual entry and visitor logbooks with a smart visitor management system thus saving time and environment. We provide a mobile app based gate management solution that ensures a smooth, quick and pleasant entry-exit experience to all your visitors at the same time ensuring optimum security for the premises by restricting unauthorized visitors from entering and recording the time-stamps, photos and other details of visitors, daily help providers, cabs & delivery personnels
            </p>

            <div class="contact-label">Book Through Call</div>

            <a href="tel:+91 8380806582" class="body-1 contact-number hover-underline">+91 8380806582</a>

            <a href="#" class="btn btn-primary">
              <span class="text text-1">Read More</span>

              <span class="text text-2" aria-hidden="true"></span>
            </a>

          </div>

          <figure class="about-banner">

            <img src="./assets/images/flat2.jpg" width="570" height="570" loading="lazy" alt="about banner"
              class="w-100" data-parallax-item data-parallax-speed="1">

            <div class="abs-img abs-img-1 has-before" data-parallax-item data-parallax-speed="1.75">
              <img src="./assets/images/flat6.jpg" width="285" height="285" loading="lazy" alt=""
                class="w-100">
            </div>

            <div class="abs-img abs-img-2 has-before">
              <img src="./assets/images/2.png" width="133" height="134" loading="lazy" alt="">
            </div>

          </figure>

          <img src="./assets/images/build3.png" width="197" height="194" loading="lazy" alt="" class="shape">

        </div>
      </section> -->





      <!-- 
        - #SPECIAL DISH
      -->

      <section class="special-dish text-center" aria-labelledby="dish-label">

        <div class="special-dish-banner">
          <img src="./assets/images/new.jpg" width="940" height="900" loading="lazy" alt="special dish"
            class="img-cover">
        </div>

        <div class="special-dish-content bg-black-10">
          <div class="container">

            <img src="./assets/images/badge-1.png" width="28" height="41" loading="lazy" alt="badge" class="abs-img">

            <p class="section-subtitle label-2">Speciality</p>

            <h2 class="headline-1 section-title">About Us</h2>

            <p class="section-text" style="font-size: 20px;">
            Welcome to SMS. An online society and accounting management portal. A unique platform which can be used by Cooperative Housing Societies / Resident Welfare Association (RWA) / Apartment Association etc. This platform expands transparency and aims to strengthen the bond among members and Managing Committee.

SMS puts an end to the out-of-date approach adopted by various societies and paves the way to create cooperative spirit among society members and management. In a matter of clicks, one can have access to maintenance bills, payments, agenda’s, meeting of minutes, circulars, notices and many more interesting features. 
            </p>

          
          </div>
        </div>

        <img src="./assets/images/build4.png" width="179" height="359" loading="lazy" alt="" class="shape shape-1">

        <img src="./assets/images/build5.png" width="351" height="462" loading="lazy" alt="" class="shape shape-2">

      </section>





      <!-- 
        - #MENU
      -->

      <!-- <section class="section menu" aria-label="menu-label" id="menu">
        <div class="container">

          <p class="section-subtitle text-center label-2">Special Selection</p>

          <h2 class="headline-1 section-title text-center">Best Offers</h2>

          <ul class="grid-list">

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/flat_1.jpg" width="100" height="100" loading="lazy" alt="Greek Salad"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">1 BHK Flat</a>
                    </h3>

                    <span class="badge label-1">₹250000</span>

                    <span class="span title-2">₹25.000050</span>
                  </div>

                  <p class="card-text label-1">
                    1 BHK flats for sale in Nanded City,Sinhgad road,pune
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/flat_1.jpg" width="100" height="100" loading="lazy" alt="Lasagne"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">2 BHK Flat</a>
                    </h3>

                    <span class="span title-2">₹400000</span>
                  </div>

                  <p class="card-text label-1">
                    BHK flats for sale in Nanded City,Sinhgad road,pune
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/flat_1.jpg" width="100" height="100" loading="lazy" alt="Butternut Pumpkin"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">3 BHK</a>
                    </h3>

                    <span class="span title-2">₹10.00</span>
                  </div>

                  <p class="card-text label-1">
                    BHK flats for sale in Nanded City,Sinhgad road,pune
                   </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/flat_1.jpg" width="100" height="100" loading="lazy" alt="Tokusen Wagyu"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">1 RK</a>
                    </h3>

                    <span class="badge label-1">New</span>

                    <span class="span title-2">₹390000</span>
                  </div>

                  <p class="card-text label-1">
                    BHK flats for sale in Nanded City,Sinhgad road,pune
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/flat_1.jpg" width="100" height="100" loading="lazy" alt="Olivas Rellenas"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">2 RK</a>
                    </h3>

                    <span class="span title-2">₹25000.00</span>
                  </div>

                  <p class="card-text label-1">
                    BHK flats for sale in Nanded City,Sinhgad road,pune
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="menu-card hover:card">

                <figure class="card-banner img-holder" style="--width: 100; --height: 100;">
                  <img src="./assets/images/flat_1.jpg" width="100" height="100" loading="lazy" alt="Opu Fish"
                    class="img-cover">
                </figure>

                <div>

                  <div class="title-wrapper">
                    <h3 class="title-3">
                      <a href="#" class="card-title">4 BHK</a>
                    </h3>

                    <span class="span title-2">₹90000.00</span>
                  </div>

                  <p class="card-text label-1">
                    BHK flats for sale in Nanded City,Sinhgad road,pune
                  </p>

                </div>

              </div>
            </li>

          </ul>

          <p class="menu-text text-center">
            During winter daily from <span class="span">7:00 pm</span> to <span class="span">9:00 pm</span>
          </p> 

          <a href="#" class="btn btn-primary">
            <span class="text text-1">View All Flats</span>

            <span class="text text-2" aria-hidden="true">View All Flats</span>
          </a>

          <img src="./assets/images/city.png" width="221" height="236" loading="lazy" alt="shape"
            class="shape shape-2 move-anim">
          <img src="./assets/images/build4.png" width="246" height="245" loading="lazy" alt="shape"
            class="shape shape-3 move-anim">

        </div>
      </section> -->





      <!-- 
        - #TESTIMONIALS
      -->

      <!-- <section class="section testi text-center has-bg-image"
        style="background-image: url('./assets/images/trio.jpg')" aria-label="testimonials">
        <div class="container">

          <div class="quote">”</div>

          <p class="headline-2 testi-text">           
          great website,wonderfull website
          </p>

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <div class="profile">
            <img src="./assets/images/andy.jpg" width="100" height="100" loading="lazy" alt="Aniket Lohar"
              class="img">

            <p class="label-2 profile-name">Aniket Lohar</p>
          </div>

        </div>
      </section> -->





      <!-- 
        - #RESERVATION
      -->
<!-- 
      <section class="reservation">
        <div class="container">

          <div class="form reservation-form bg-black-10">

            <form action="" class="form-left">

              <h2 class="headline-1 text-center">Online Reservation</h2>

              <p class="form-text text-center">
                Booking request <a href="tel:+88123123456" class="link">+88-123-123456</a>
                or fill out the order form
              </p>

              <div class="input-wrapper">
                <input type="text" name="name" placeholder="Your Name" autocomplete="off" class="input-field">

                <input type="tel" name="phone" placeholder="Phone Number" autocomplete="off" class="input-field">
              </div>

              <div class="input-wrapper">

                <div class="icon-wrapper">
                  <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="1-person">1 Person</option>
                    <option value="2-person">2 Person</option>
                    <option value="3-person">3 Person</option>
                    <option value="4-person">4 Person</option>
                    <option value="5-person">5 Person</option>
                    <option value="6-person">6 Person</option>
                    <option value="7-person">7 Person</option>
                  </select>

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                  <input type="date" name="reservation-date" class="input-field">

                  <ion-icon name="chevron-down" aria-hidden="true"></ion-icon>
                </div>

                <div class="icon-wrapper">
                  <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                  <select name="person" class="input-field">
                    <option value="08:00am">08 : 00 am</option>
                    <option value="09:00am">09 : 00 am</option>
                    <option value="010:00am">10 : 00 am</option>
                    <option value="011:00am">11 : 00 am</option>
                    <option value="012:00am">12 : 00 am</option>
                    <option value="01:00pm">01 : 00 pm</option>
                    <option value="02:00pm">02 : 00 pm</option>
                    <option value="03:00pm">03 : 00 pm</option>
                    <option value="04:00pm">04 : 00 pm</option>
                    <option value="05:00pm">05 : 00 pm</option>
                    <option value="06:00pm">06 : 00 pm</option>
                    <option value="07:00pm">07 : 00 pm</option>
                    <option value="08:00pm">08 : 00 pm</option>
                    <option value="09:00pm">09 : 00 pm</option>
                    <option value="10:00pm">10 : 00 pm</option>
                  </select> -->

                 <!-- <ion-icon name="chevron-down" aria-hidden="true"></ion-icon> -->
                </div>

              </div> 

              <!-- <textarea name="message" placeholder="Message" autocomplete="off" class="input-field"></textarea> -->

              <!-- <button type="submit" class="btn btn-secondary">
                <span class="text text-1"  >Submit</span>

                <span class="text text-2" aria-hidden="true" style="margin-left: 750px;">Submit</span>
              </button> -->

            </form>

            <div class="form-right text-center" style="background-image: url('./assets/images/form-pattern.png')">

              <h2 class="headline-1 text-center">Contact Us</h2>

              <p class="contact-label">Booking Request</p>

              <a href="tel:+91 8380806582" class="body-1 contact-number hover-underline">+91 8380806582</a>

              <div class="separator"></div>

              <p class="contact-label">Location</p>

              <address class="body-4">
                Sinhgad Rd, Nanded Fata, Pandurang Industrial Area,
                <br> Nanded, Pune, Maharashtra
              </address>

              <!-- <p class="contact-label"></p>

              <p class="body-4">
                Monday to Sunday <br>
                11.00 am - 2.30pm
              </p>

              <p class="contact-label">Dinner Time</p>

              <p class="body-4">
                Monday to Sunday <br>
                05.00 pm - 10.00pm
              </p> -->

            </div>

          </div>

        </div>
      </section>





      <!-- 
        - #FEATURES
      -->

      <section class="section features text-center" aria-label="features">
        <div class="container">

          <p class="section-subtitle label-2">Why Choose Us</p>

          <h2 class="headline-1 section-title">Our Strength</h2>

          <ul class="grid-list">

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/security.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Security</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/easy .png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Easy to Use</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/trust.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Trustworthy</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

            <li class="feature-item">
              <div class="feature-card">

                <div class="card-icon">
                  <img src="./assets/images/time.png" width="100" height="80" loading="lazy" alt="icon">
                </div>

                <h3 class="title-2 card-title">Time Saving</h3>

                <p class="label-1 card-text">Lorem Ipsum is simply dummy printing and typesetting.</p>

              </div>
            </li>

          </ul>

          <img src="./assets/images/build3.png" width="208" height="178" loading="lazy" alt="shape"
            class="shape shape-1">

          <img src="./assets/images/shape-8.png" width="120" height="115" loading="lazy" alt="shape"
            class="shape shape-2">

        </div>
      </section>





<!--       
        - #EVENT
      -->

      <section class="section event bg-black-10" aria-label="event">
        <div class="container">

          <p class="section-subtitle label-2 text-center">Recent Updates</p>

          <h2 class="section-title headline-1 text-center">Society Event</h2>

          <ul class="grid-list">

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/cultural.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-15">15/09/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Social Culture</p>

                  <h3 class="card-title title-2 text-center">
                    Social culture shapes our interactions, norms, and values.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/meeting.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-08">08/09/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Community Meetings</p>

                  <h3 class="card-title title-2 text-center">
                    Regular community meetings foster collaboration and problem-solving.
                  </h3>
                </div>

              </div>
            </li>

            <li>
              <div class="event-card has-before hover:shine">

                <div class="card-banner img-holder" style="--width: 350; --height: 450;">
                  <img src="./assets/images/sg.jpg" width="350" height="450" loading="lazy"
                    alt="Flavour so good you’ll try to eat with your eyes." class="img-cover">

                  <time class="publish-date label-2" datetime="2022-09-03">03/09/2024</time>
                </div>

                <div class="card-content">
                  <p class="card-subtitle label-2 text-center">Social Gatherings</p>

                  <h3 class="card-title title-2 text-center">
                    Community potluck gathering Saturday evening.
                  </h3>
                </div>

              </div>
            </li>

          </ul>

          <a href="#" class="btn btn-primary">
            <span class="text text-1">View Our Blog</span>

            <span class="text text-2" aria-hidden="true">View Our Blog</span>
          </a>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer section has-bg-image text-center  "
    style="background-image: url('./assets/images/last.jpg')">
    <div class="container">

      <div class="footer-top grid-list">

        <div class="footer-brand has-before has-after">

          <a href="#" class="logo">
            <img src="./assets/images/MY LOGO.png" width="160" height="50" loading="lazy" alt="home">
          </a>

          <address class="body-4">
            Sinhgad Rd, Nanded Fata, Pandurang Industrial Area,<br>
             Nanded, Pune, Maharashtra
          </address>

          <a href="mailto:booking@flats.com" class="body-4 contact-link">booking@flats.com</a>

          <a href="tel:+88123123456" class="body-4 contact-link">Booking Request : +91 8380806582</a>

          <!-- <p class="body-4">
            Open : 09:00 am - 01:00 pm
          </p> -->

          <div class="wrapper">
            <div class="separator"></div>
            <div class="separator"></div>
            <div class="separator"></div>
          </div>

          <p class="title-1">Get News & Offers</p>

          <p class="label-1">
            Subscribe us & Get <span class="span">25% Off.</span>
          </p>

          <form action="" class="input-wrapper">
            <div class="icon-wrapper">
              <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

              <input type="email" name="email_address" placeholder="Your email" autocomplete="off" class="input-field">
            </div>

            <button type="submit" class="btn btn-secondary">
              <span class="text text-1">Subscribe</span>

              <span class="text text-2" aria-hidden="true">Subscribe</span>
            </button>
          </form>

        </div>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Home</a>
          </li>

          <li>
            <a href="grid-list" class="label-2 footer-link hover-underline">Services</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">About Us</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Our Flats</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Contact</a>
          </li>

        </ul>

        <ul class="footer-list">

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Facebook</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Instagram</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Twitter</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Youtube</a>
          </li>

          <li>
            <a href="#" class="label-2 footer-link hover-underline">Google Map</a>
          </li>

        </ul>

      </div>

      <div class="footer-bottom">

        <p class="copyright">
          &copy; 2024 SMS. All Rights Reserved | Crafted by <a href=https://github.com/Aniketlohar818
            target="_blank" class="link">codewithAndy</a>
        </p>

      </div>

    </div>
  </footer>





  <!-- 
    - #BACK TO TOP
  -->

  <a href="#top" class="back-top-btn active" aria-label="back to top" data-back-top-btn>
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>