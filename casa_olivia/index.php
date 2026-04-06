<!DOCTYPE html>
<html>
    <head>
        <title>
            Casa Olivia Resort
        </title>

        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>

    <body>

        <header class="header">
            <a href="#" class="logo">
                <img src="images/logo.jpg" alt="Casa Olivia Logo">
                <span>Casa Olivia Resort</span>
            </a>

            <nav class="navbar">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#room">Room</a>
                <a href="#services">Services</a>
                <a href="#gallery">Gallery</a>
                <a href="#review">Review</a>
                <a href="#faq">Faq</a>
                <a href="#reservation">Reservation</a>
            </nav>

            <div id="menu-btn" class="btn">
                Book Now
            </div>
        </header>

        <section class="home" id="home">

            <div class="swiper home-slider">

                <div class="swiper-wrapper">

                    <div class="swiper-slide slide" style="background: url(images/pic1.png) no-repeat center / cover;">
                        <div class="content">
                            <h3 class="fade-item">WELCOME TO PARADISE</h3>
                            <h2 class="fade-item">Experience Relaxation <br> at Casa Olivia Resort</h2>
                            <div class="button-group fade-item">
                                <a href="#" class="btn">OUR ROOM</a>
                                <a href="#" class="btn btn-outline">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background: url(images/pic2.jpg) no-repeat center / cover;">
                        <div class="content">
                            <h3 class="fade-item">COMFORTABLE STAY</h3>
                            <h2 class="fade-item">Your Perfect Getaway <br> Starts Here</h2>

                            <div class="button-group fade-item">
                                <a href="#" class="btn">OUR ROOM</a>
                                <a href="#" class="btn btn-outline">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide slide" style="background: url(images/pic3.jpg) no-repeat center / cover;">
                        <div class="content">
                            <h3 class="fade-item">CELEBRATE WITH US</h3>
                            <h2 class="fade-item">Perfect Venue for Weddings, <br> Parties, and Special Events</h2>

                            <div class="button-group fade-item">
                                <a href="#" class="btn">OUR ROOM</a>
                                <a href="#" class="btn btn-outline">BOOK NOW</a>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>

            </div>

        </section>

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="script.js"></script>

    </body>
</html>