<!DOCTYPE html>
<html lang="en">
<head>
    <title>The Daily Gazette</title>
    <link rel="stylesheet" href="daily.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="title">
            <a href="The Daily Gazette.php"><h1><i>The Daily Gazette</i></h1></a>
        </div>
        <div class="menu">
        <ul class="sektoret">
            <li class="sek"><a href="The Daily Gazette.php">Home</a></li>
            <li class="sek"><a href="../International News/International News.php">International</a></li>
            <li class="sek"><a href="../Culture News/Culture news.php">Culture</a></li>
            <li class="sek"><a href="../Sports News/Sports News.php">Sports</a></li>
        </ul>
        <ul class="login">
            <li class="log"><a href="../Log in/logIn.php">Log in</a></li>
            <li class="log"><a href="../Subscribe/Subscribe.php">Subscribe</a></li>
        </ul>
        </div>
    </header>
    <main>
        <div class="box">
            <div class="rubrika">
                    <a href="../International News/International News.php">
                        <div class="text">
                            <h3>International News</h3>
                            <h4> A look into the long history of the Israeli-Palestinian conflict</h4>
                            <p>The Hamas terrorist attack on Israel this weekend comes amid the backdrop of a longstanding history of conflict over 
                            land and independence that has plagued the region...</p>
                            <h4>Iceland volcano eruption likelihood remains high, possibly within 'just days'</h4>
                            <p>Icelandic officials earlier this month declared a state of emergency
                            near the Mount Fagradalsfjall ...</p>
                        </div>    
                        <div class="images">
                            <img src="1.jpg" alt="foto" class="img">
                        </div>
                        </a>   
            </div>
            <div class="weather-widget">
                <div id="w1">
                    <div class="weather-icon">
                        <img src="rain.png" alt="Weather Icon " class="wimg">
                    </div>
                    <div class="temp">1°C</div>
                    <div class="location">Prishtina, Kosovo</div>
                </div>    
                <div id="w2">
                    <div class="weather-icon">
                        <img src="rain.png" alt="Weather Icon " class="wimg">
                    </div>
                    <div class="temp">4°C</div>
                    <div class="location">Prizren, Kosovo</div>
                </div>  
                <br> 
                <div id="w3">
                    <div class="weather-icon">
                        <img src="d1.png" alt="Weather Icon " class="wimg">
                    </div>
                    <div class="temp">5°C</div>
                    <div class="location">Gjakove, Kosovo</div>
                </div>    
                <div id="w4">
                    <div class="weather-icon">
                        <img src="thunder.png" alt="Weather Icon " class="wimg">
                    </div>
                    <div class="temp">0°C</div>
                    <div class="location">Peje, Kosovo</div>
                </div>   
            
            </div>
        </div>
        
        <div class="box">
            <div class="breaking-widget">
                    <h2><i>Breaking News</i></h2>
                    <div class="slider-container">
                        <div class="slider">
                            <div class="boxes">
                                
                                <h3>Suspect arrested in shooting of 3 Palestinian college students in Vermont, police say</h3>
                            </div>
                            <div class="boxes">
                                <h3>Israeli president talks hostages, truces and criticizes Irish PM’s tweet</h3>
                            </div>
                            <div class="boxes">
                                <h3>Hamas may have dealt a fatal blow to Israel’s farms</h3>
                            </div>
                            <div class="boxes">
                                <h3>Truce gives Gazans moment to breathe – and reveals scale of devastation</h3>
                            </div>
                        </div>

                        <button class="next-btn" onclick="nextSlide()">></button>
                    </div>
            </div>
            <div class="rubrika">
                        <a href="../Culture News/Culture news.php">
                        <div class="text">
                            <h3>Culture News</h3>
                            <h4>Vatican Museums Open Ancient Roman Necropolis to the Public for the First Time</h4>
                            <p>The ancient Roman burial ground lies beneath Vatican City, and is replete with marble sarcophagi, open burial graves,
                            and Roman mosaics and frescoes...</p>
                            <h4>The Art World’s Winter Happenings to Add to Your Calendar</h4>
                            <p>Exhibitions, Books, and Music to Look Forward to in Winter 2023-24.</p>
                        </div>    
                        <div class="images">
                            <img src="2.jpg" alt="foto" class="img">
                        </div>
                        </a>
                     
            </div>
        </div>

        <div class="box">
            <div class="rubrika">
                    <a href="../Sports News/Sports News.php">
                        <div class="text">
                            <h3>Sports News</h3>
                            <h4>Manchester United are planning to offload at least 10 players in the next two transfer windows, according to reports.</h4>
                            <p>Man United 'are planning a major clearout in 2024', with the club 'set to offload at least TEN players across the two transfer windows' in a bid to help Erik ten Hag reshape his squad</p>
                            <h4>World Ice Skating Day is Dec. 3</h4>
                            <p>This event promises an array of global celebrations that showcase ice skating sports...</p>
                        </div>    
                        <div class="images">
                            <img src="3.jfif" alt="foto" class="img">
                        </div>
                    </a>
            </div>
            <div class="book-widget">
                <div class="">
                    <div id="recs"><h3><i>Book recommendations</i></h3></div>
                    <div>
                        <img class="image" src="crime.webp" alt="Image 1">
                        <img class="image" src="perf.jpg" alt="Image 2">
                        <img class="image" src="a.jpeg" alt="Image 3">
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <div class="f">
            <h2>About The Daily Gazette</h2>
            <h2>Our Links</h2>
            <div class="ff">
                <a href="" class="a"><img src="facebook.png" alt=""></a>
                <a href="" class="a"><img src="twitter.png" alt=""></a>
                <a href="" class="a"><img src="instagram.png" alt=""></a>
                <a href="" class="a"><img src="pinterest.png" alt=""></a>
            </div>
        </div>
        <div class="footermain">
            <div class="footerleft">
                <p>The Daily Gazette is a new online newspaper, specializing in International, Culture and Sports news.</p>
            </div>
            <div class="footercenter">
                <p>Support: thedailygazette@gmail.com</p>
                <p>Contact us: (+383)49800832</p>
            </div>
            <div class="footerright">
                <p>Terms of use</p>
                <p>Privacy Policy</p>
            </div>
        </div>
        <div class="fundi">
            <p>Copyright 2023 The Daily Gazette Company. All rights reserved.</p>
        </div>
    </footer>

    <script>
let CIndex = 0;

const slides = document.querySelectorAll('.slider div');

function showSlide(index2) {
    if (index2 < 0) {
        CIndex = slides.length - 1;
    } 
    else if (index2 >= slides.length) {
        CIndex = 0;
    }
    else {
        CIndex = index2;
    }

    slides.forEach((slide, i) => {
        slide.classList.toggle('active', i === CIndex);
    });
}

showSlide(0);

function nextSlide() {
    showSlide(CIndex + 1);

}

        function changeImage() {
          var images = document.getElementsByClassName('image');
      
          for (var i = 0; i < images.length; i++) {
            images[i].style.display = 'none';
          }
      
          var currentIndex = (imageIndex + 1) % images.length;
          images[currentIndex].style.display = 'block';
      
          imageIndex = currentIndex;
        }
        var imageIndex = 0;
        setInterval(changeImage, 3500);

      </script>
      
</body>
</html>