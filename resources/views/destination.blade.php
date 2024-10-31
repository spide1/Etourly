<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Destinations</title>
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
            padding: 0 20px;
        }

        .section-title {
            text-align: center;
            margin-bottom: 30px;
        }

        .popular-list {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .popular-card {
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease;
        }

        .popular-card:hover {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }

        .card-img {
            overflow: hidden;
        }

        .card-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }

        .card-img img:hover {
            transform: scale(1.1);
        }

        .card-content {
            padding: 20px;
        }

        .card-title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 16px;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <!-- Destination section -->
    <section class="popular" id="more-destinations">
        <div class="container">
            <h2 class="h2 section-title">These are our popular Destinations</h2>
            <ul class="popular-list">
                <!-- Destination: Puri -->
                <li>
                    <div class="popular-card">
                        <figure class="card-img">
                            <img src="./assets/images/puri.webp" alt="Puri" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h3 class="card-title">Puri, India</h3>
                            <p class="card-text">Puri is a coastal city in Odisha, India, known for its Jagannath Temple and Puri Beach.</p>
                        </div>
                    </div>
                </li>
                <!-- Destination: Shimla -->
                <li>
                    <div class="popular-card">
                        <figure class="card-img">
                            <img src="./assets/images/shimla.jpg" alt="Shimla" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h3 class="card-title">Shimla, India</h3>
                            <p class="card-text">Shimla is the capital city of the Indian state of Himachal Pradesh. It is a popular hill station.</p>
                        </div>
                    </div>
                </li>
                <!-- Destination: Australia -->
                <li>
                    <div class="popular-card">
                        <figure class="card-img">
                            <img src="./assets/images/ladakh.jpg" alt="Australia" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h3 class="card-title">Ladakh</h3>
                            <p class="card-text">Ladakh is most famous for breathtaking landscapes, the crystal clear skies, the highest mountain passes, thrilling adventure activities, Buddhist Monasteries and festivals.</p>
                        </div>
                    </div>
                </li>
                <!-- Add more destinations as needed -->
                <li>
                    <div class="popular-card">
                        <figure class="card-img">
                            <img src="./assets/images/packege-1.jpg" alt="" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h3 class="card-title">LAKSHADWEEP</h3>
                            <p class="card-text">Lakshadweep is a tropical archipelago of 36 atolls and coral reefs in the Laccadive Sea, off the coast of Kerala, India. Not all of the islands are inhabited, and only a few are open to visitors (permits required).</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="popular-card">
                        <figure class="card-img">
                            <img src="./assets/images/goa.jpg" alt="" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h3 class="card-title">Goa</h3>
                            <p class="card-text"> Goa is also known for its beaches, ranging from popular stretches at Baga and Palolem to those in laid-back fishing villages such as Agonda.</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="popular-card">
                        <figure class="card-img">
                            <img src="./assets/images/manali.jpg" alt="Australia" loading="lazy">
                        </figure>
                        <div class="card-content">
                            <h3 class="card-title">Manali</h3>
                            <p class="card-text">Manali is a high-altitude Himalayan resort town in India’s northern Himachal Pradesh state. It has a reputation as a backpacking center and honeymoon destination.</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</body>
</html>