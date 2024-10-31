<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel agancy</title>

  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

  <!-- 
    - #HEADER
  -->

  <header class="header" data-header>

    <div class="overlay" data-overlay></div>

    <div class="header-top">
      <div class="container">

        <a href="tel:+01123456790" class="helpline-box">

          <div class="icon-box">
            <ion-icon name="call-outline"></ion-icon>
          </div>

          <div class="wrapper">
            <p class="helpline-title">For Further Inquires :</p>

            <p class="helpline-number">+01 (123) 4567 90</p>
          </div>

        </a>

        <a href="index" class="logo">
          <img src="./assets/images/logo.svg" alt="Tourly logo">
        </a>

        <div class="header-btn-group">

          <button class="search-btn" aria-label="Search">
            <ion-icon name="search"></ion-icon>
          </button>

          <button class="nav-open-btn" aria-label="Open Menu" data-nav-open-btn>
            <ion-icon name="menu-outline"></ion-icon>
          </button>

        </div>

      </div>
    </div>

    <div class="header-bottom">
      <div class="container">

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

        <nav class="navbar" data-navbar>

          <div class="navbar-top">

            <a href="#" class="logo">
              <img src="./assets/images/logo-blue.svg" alt="Tourly logo">
            </a>

            <button class="nav-close-btn" aria-label="Close Menu" data-nav-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

          </div>

          <ul class="navbar-list"> 

            <li>
              <a href="index" class="navbar-link" data-nav-link>home</a>
            </li>

            <li>
              <a href="#" class="navbar-link" data-nav-link>about us</a>
            </li>

            <li>
              <a href="#destination" class="navbar-link" data-nav-link>destination</a>
            </li>

            <li>
              <a href="#package" class="navbar-link" data-nav-link>packages</a>
            </li>

            <li>
              <a href="#gallery" class="navbar-link" data-nav-link>gallery</a>
            </li>

            <li>
              <a href="#contact" class="navbar-link" data-nav-link>contact us</a>
            </li>

          </ul>

        </nav>
  
       
       
        @if(@isset($clientname))
        <li>
          <a href="{{url('/myaccount')}}" class="btn btn-sm btn btn-primary">{{$clientname}}</a>
        </li>
        <li>
          <a href="{{url('/book')}}" class="btn btn-sm btn btn-primary">Book Now</a>
        </li>
        @else
        <li>
          <a href="{{url('login')}}" class="btn btn-sm btn btn-primary">LOGIN</a> 
        </li>
        <li>
          <a href="{{url('/register')}}" class="btn btn-sm btn btn-primary">SING UP</a>
        </li>
       @endif
      </div>
    </div>

  </header>





  <main>
    <article>

      <!-- 
        - #HERO
      -->

      <section class="hero" id="home">
        <div class="container">

          <h2 class="h1 hero-title">Journey to explore world</h2>

          <p class="hero-text">
            Embarking on a journey to explore the world is a thrilling adventure of discovery and wonder. It's a quest to uncover new cultures, landscapes, and experiences that broaden horizons and deepen understanding. Each destination visited is a chapter in a story of exploration, creating memories that last a lifetime. It's about embracing the unknown, stepping out of comfort zones, and finding beauty in diversity. In this journey, we not only discover the world but also discover ourselves in profound ways.
          </p>

          

        </div>
      </section>










      <!-- 
        - #POPULAR
      -->

      <section class="popular" id="destination">
        <div class="container">

          {{-- <p class="section-subtitle">Uncover place</p> --}}

          <h2 class="h2 section-title">Popular destination</h2>

          {{-- <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p> --}}

          <ul class="popular-list">

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/Sissu.jpg" alt="Sissu" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                  @if(@isset($clientname))
                  <p class="card-subtitle">
                    <a href="{{url('/book')}}">MANALI</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="{{url('/book')}}">Sissu</a>
                  </h3>
                  @else
                  <p class="card-subtitle">
                    <a href="{{url('/login')}}">MANALI</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="{{url('/login')}}">Sissu</a>
                  </h3>
                 @endif

                 

                  <p class="card-text">
                    Sissu is a small town in the Lahaul valley of Himachal Pradesh in India. It is around 40 km from Manali and located on the right bank of Chandra river
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/ladakh.jpg" alt="ladakh lake, ladakh" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                  @if(@isset($clientname))
                  <p class="card-subtitle">
                    <a href="{{url('/book')}}">Ladakh</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="{{url('/book')}}">ladakh lake</a>
                  </h3>
                  @else
                  <p class="card-subtitle">
                    <a href="{{url('/login')}}">Ladakh</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="{{url('/login')}}">ladakh lake</a>
                  </h3>
                 @endif
                  

                  <p class="card-text">
                    In Ladakh, you never know what surprise nature has in store for you. Pangong Lake, situated at a height of almost 4,350m, is the worlds highest saltwater lake.
                  </p>

                </div>

              </div>
            </li>

            <li>
              <div class="popular-card">

                <figure class="card-img">
                  <img src="./assets/images/goa.jpg" alt="Candolim Beach Goa, GOA" loading="lazy">
                </figure>

                <div class="card-content">

                  <div class="card-rating">
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                    <ion-icon name="star"></ion-icon>
                  </div>
                  @if(@isset($clientname))
                  <p class="card-subtitle">
                    <a href="{{url('/book')}}">GOA</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="{{url('/book')}}">Candolim Beach Goa</a>
                  </h3>
                  @else
                  <p class="card-subtitle">
                    <a href="{{url('/login')}}">GOA</a>
                  </p>

                  <h3 class="h3 card-title">
                    <a href="{{url('/login')}}">Candolim Beach Goa</a>
                  </h3>
                 @endif

                  <p class="card-text">
                    One of the longest beaches in Goa, Candolim Beach is also sometimes called the gateway to the other popular beaches in the state. The beach that begins from Fort Aguada is comparatively quieter and is perfect for lazing, though for watersports lovers, there are some activities like parasailing and water skiing.
                  </p>

                </div>

              </div>
            </li>

          </ul>
          
          {{-- <a href="{{url('/destination')}}"class="btn btn-secondary" role="button" aria-pressed="true">More destintion</a> --}}

          {{-- <a href="{{url('destination')}}" class="btn btn-primary" role="button" aria-pressed="true">More destintion</a> --}}
          {{-- <a href="{{url('destination')}}" class="btn btn-primary">More destintion</a> --}}
          <a href="{{url('destination')}}" ><button class="btn btn-primary" >Click to see more destintions </button></a>
         
          {{-- <button class="btn btn-primary" href="{{url('destination')}}">More destintion</button> --}}

        </div>
      </section>





      <!-- 
        - #PACKAGE
      -->

      <section class="package" id="package">
        <div class="container">

          {{-- <p class="section-subtitle">Popular Packeges</p> --}}

          <h2 class="h2 section-title">Checkout Our Packeges</h2>
{{-- 
          <p class="section-text">
            Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
            Sit ornare
            mollitia tenetur, aptent.
          </p> --}}

          <ul class="package-list">

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-1.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Experience The Great Holiday On Lakshadweep Beach</h3>

                  <p class="card-text">
                    LAKSHADWEEP A PANORAMIC VIEW
                    One of world’s most spectacular tropical island systems, Lakshadweep is tucked away at 220-440Kms off the Kerala Coast. The islands offer a precious heritage of ecology and culture. The unique feature of the Islands is its coral reef, making it a pristine leisure spot to come back to. 4200 sq. kms. of lagoon, rich in marine wealth, is spread over 36 islands in an area of 32 sq. kms. The underwater view at Lakshadweep is kaleidoscopic and breathtaking. 
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">LAKSHADWEEP</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(25 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    &#8377;150000
                    <span>/ per person</span>
                  </p>
                  
                  @if(@isset($clientname))

                
                  <a href="{{url('/book')}}"class="btn btn-secondary">Book Now</a>
               

                
                @else
                
                  <a href="{{url('/login')}}"class="btn btn-secondary">Book Now</a>
                

                
               @endif
                  

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/packege-2.jpg" alt="Summer Holiday To The Oxolotan River" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Summer Holiday To The Oxolotan River</h3>

                  <p class="card-text">
                    Kashmir is a union territory of India that is known for its natural beauty, including lakes, valleys, temples, and Mughal gardens. Some of the best places to visit in Kashmir include:
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Kashmir</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(20 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    &#8377;25200
                    <span>/ per person</span>
                  </p>

                  @if(@isset($clientname))

                
                  <a href="{{url('/book')}}"class="btn btn-secondary">Book Now</a>
               

                
                @else
                
                  <a href="{{url('/login')}}"class="btn btn-secondary">Book Now</a>
                

                
               @endif

                </div>

              </div>
            </li>

            <li>
              <div class="package-card">

                <figure class="card-banner">
                  <img src="./assets/images/puri.webp" alt="PURi" loading="lazy">
                </figure>

                <div class="card-content">

                  <h3 class="h3 card-title">Puri Temple Weekend Vacation</h3>

                  <p class="card-text">
                    Puri is a coastal city in Odisha, India, known for its Jagannath Temple, Puri Beach, and other attractions.
                  </p>

                  <ul class="card-meta-list">

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="time"></ion-icon>

                        <p class="text">7D/6N</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="people"></ion-icon>

                        <p class="text">pax: 10</p>
                      </div>
                    </li>

                    <li class="card-meta-item">
                      <div class="meta-box">
                        <ion-icon name="location"></ion-icon>

                        <p class="text">Puri</p>
                      </div>
                    </li>

                  </ul>

                </div>

                <div class="card-price">

                  <div class="wrapper">

                    <p class="reviews">(40 reviews)</p>

                    <div class="card-rating">
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                      <ion-icon name="star"></ion-icon>
                    </div>

                  </div>

                  <p class="price">
                    &#8377;20600
                    <span>/ per person</span>
                  </p>

                  @if(@isset($clientname))

                
                  <a href="{{url('/book')}}"class="btn btn-secondary">Book Now</a>
               

                
                @else
                
                  <a href="{{url('/login')}}"class="btn btn-secondary">Book Now</a>
                 
               @endif

                </div>

              </div>
            </li>

          </ul>
          <a href="{{url('packages')}}" ><button class="btn btn-primary" >Click to see more packages</button></a>

          {{-- <button class="btn btn-primary">View All Packages</button> --}}

        </div>
      </section>





      <!-- 
        - #GALLERY
      -->

      <section class="gallery" id="gallery">
    <div class="container">

      {{-- <p class="section-subtitle">Photo Gallery</p> --}}

      <h2 class="h2 section-title">Photos From Travelers</h2>

        {{-- <p class="section-text">
          Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque laudantium.
          Sit ornare
          mollitia tenetur, aptent.
        </p> --}}

      <ul class="gallery-list">
        <li class="gallery-item">
          <div class="gallery-image">
            <img src="./assets/images/gallery-1.jpg" alt="Gallery image">
            <div class="back"><h1>MANALI</h1></div>
          </div>
        </li>
        <li class="gallery-item">
          <div class="gallery-image">
            <img src="./assets/images/gallery-2.jpg" alt="Gallery image">
            <div class="back"><h1>PURI</h1></div>
          </div>
        </li>
        <li class="gallery-item">
          <div class="gallery-image">
            <img src="./assets/images/gallery-3.jpg" alt="Gallery image">
            <div class="back"><h1>LADAKH</h1></div>
          </div>
        </li>
        <li class="gallery-item">
          <div class="gallery-image">
            <img src="./assets/images/gallery-4.jpg" alt="Gallery image">
            <div class="back"><h1>GOA</h1></div>
          </div>
        </li>
        <li class="gallery-item">
          <div class="gallery-image">
            <img src="./assets/images/gallery-5.jpg" alt="Gallery image">
            <div class="back"><h1>KASHMIR</h1></div>
          </div>
        </li>
      </ul>

    </div>
  </section>





      <!-- 
        - #CTA
      -->

      <section class="cta" id="contact">
        <div class="container">

          <div class="cta-content">
            <p class="section-subtitle">Call To Action</p>

            <h2 class="h2 section-title">Ready For Unforgatable Travel. Remember Us!</h2>

            {{-- <p class="section-text">
              Fusce hic augue velit wisi quibusdam pariatur, iusto primis, nec nemo, rutrum. Vestibulum cumque
              laudantium. Sit ornare
              mollitia tenetur, aptent.
            </p> --}}
          </div>

          <button > <a href="{{url('/contactus')}}"class="btn btn-secondary">Contact Us ! </a> </button>

        </div>
      </section>

    </article>
  </main>





  <!-- 
    - #FOOTER
  -->

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="./assets/images/logo.svg" alt="Tourly logo">
          </a>

          {{-- <p class="footer-text">
            Urna ratione ante harum provident, eleifend, vulputate molestiae proin fringilla, praesentium magna conubia
            at
            perferendis, pretium, aenean aut ultrices.
          </p> --}}

        </div>

        <div class="footer-contact">

          <h4 class="contact-title">Contact Us</h4>

          <p class="contact-text">
            Feel free to contact and reach us !!
          </p>

          <ul>

            <li class="contact-item">
              <ion-icon name="call-outline"></ion-icon>

              <a href="tel:+917602173474" class="contact-link">+917602173474</a>
            </li>

            <li class="contact-item">
              <ion-icon name="mail-outline"></ion-icon>

              <a href="mailto:info.tourly.com" class="contact-link">info.tourly.com</a>
            </li>

            <li class="contact-item">
              <ion-icon name="location-outline"></ion-icon>

              <address>Kolkata</address>
            </li>

          </ul>

        </div>

        <div class="footer-form">

          <p class="form-text">
            {{-- Subscribe our newsletter for more update & news !! --}}
            LOCATION
          </p>

          <form action="" class="form-wrapper">
            {{-- <input type="email" name="email" class="input-field" placeholder="Enter Your Email" required>

            <button type="submit" class="btn btn-secondary">Subscribe</button> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230.26759908056542!2d88.43149791644164!3d22.568569378394727!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275a38c95edfb%3A0x5f95acf3cc48628d!2sEjobindia!5e0!3m2!1sen!2sin!4v1713298932100!5m2!1sen!2sin" width="500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </form>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2024 <a href="">Tourly</a>. All rights reserved
        </p>

        <ul class="footer-bottom-list">

          <li>
            <a href="#" class="footer-bottom-link">Privacy Policy</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">Term & Condition</a>
          </li>

          <li>
            <a href="#" class="footer-bottom-link">FAQ</a>
          </li>

        </ul>

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up-outline"></ion-icon>
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