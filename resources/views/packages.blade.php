<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Packages</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .package {
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 20px;
        }

        .package img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
        }

        .package-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .package-description {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    @if(session('message'))
    <div class="alert alert-danger">{{session('message')}}</div>
    @endif
    @csrf
    
    <section class="package" id="package">
        <div class="container">

        

          <h2 class="h2 section-title">Checkout Our Packeges</h2>

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

                  <h3 class="h3 card-title">Summer Holiday To The kasmir River</h3>

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

            <li>
                <div class="package-card">
  
                  <figure class="card-banner">
                    <img src="./assets/images/taj.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                  </figure>
  
                  <div class="card-content">
  
                    <h3 class="h3 card-title">The Great Holiday On Agra Taj</h3>
  
                    <p class="card-text">
                        The Taj Mahal is a white marble mausoleum in Agra, India that was built by Mughal Emperor Shah Jahan in honor of his wife, Mumtaz Mahal.
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
  
                          <p class="text">Agra</p>
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
                      &#8377;10000
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
                    <img src="./assets/images/manali.jpg" alt="Experience The Great Holiday On Beach" loading="lazy">
                  </figure>
  
                  <div class="card-content">
  
                    <h3 class="h3 card-title">Holiday On manali</h3>
  
                    <p class="card-text">
                        Manali is a town in the Kullu district of Himachal Pradesh, India, located at the northern end of the Kullu Valley. It's a high-altitude resort town on the Beas River, known for its snow-capped mountains, lush forests, and tranquil nightlife.
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
  
                          <p class="text">Manali</p>
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
                      &#8377;16000
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
          
        </div>
      </section>
</body>
</html>
