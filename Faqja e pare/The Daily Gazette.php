<?php
  session_start();

    $hideLog="";
    $hideWrite="";
    $hideLS="";
    $hideCon="";

    if(empty($_SESSION['roli'])){
    $hideLog = "hideLog";
    $hideWrite = "hideWrite";
    $hideCon="hideCon";

    }else{
        $hideLog = "";
        $hideLS="hideLS";
        if($_SESSION['roli'] == "admin"){
            $hideWrite = "";
            $hideCon="hideCon";
        }else{
            $hideWrite = "hideWrite";
            $hideCon="";
        }
    }
    
    include_once '../NewsRepository.php';

    $newsRepo = new NewsRepository();
    $newsList = $newsRepo->getAllNews();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <li class="sek"><a href="The Daily Gazette.php" >Home</a></li>
            <li class="sek"><a href="../International News/International News.php" class="linkClass" onclick="redirect()">International</a></li>
            <li class="sek"><a href="../Culture News/Culture news.php" class="linkClass" onclick="redirect()">Culture</a></li>
            <li class="sek"><a href="../Sports News/Sports News.php" class="linkClass" onclick="redirect()">Sports</a></li>
        </ul>
        <ul class="login">
            <div class="<?php echo $hideLS ?>"><li class="log"><a href="../logIn.php">Log in</a></li></div>
            <div class="<?php echo $hideLS ?>"><li class="log"><a href="../Subscribe/Subscribe.php">Subscribe</a></li></div>
            <div class="<?php echo $hideWrite ?>"><li class="log"><a href="../WriteArticle/WriteArticle.php">Write Article</a></li></div>
            <div class="<?php echo $hideWrite ?>"><li class="log"><a href="../Comments.php">Comments</a></li></div>
            <div class="<?php echo $hideCon ?>"><li class="log"><a href="../ContactUs.php">Contact Us</a></li></div>
            <div class="<?php echo $hideLog ?>"><li class="log"><a href="../LogOut.php">Log Out</a></li></div>
        </ul>
        </div>
    </header>
    <main>
        <div class="box">

            <div class="rubrika">
                <a href="../International News/International News.php" class="linkClass" onclick="redirect()">
                    <?php
                    
                        
                        for ($i = 0; $i < count($newsList); $i++) {
                            if (isset($newsList[$i])) {
                                $newsItem = $newsList[$i];
                                if($newsItem['category'] == 'international'){
                                        echo "<div class='sdi'>";
                                        echo "<h3>International News</h3>";
                                            echo "<h3>" . htmlspecialchars($newsItem['title']) . "</h3>";
                                            echo "<p>" . htmlspecialchars($newsItem['text']) . "</p>";
                                            echo"<span>";
                                            echo "<p>Author: " . htmlspecialchars($newsItem['name']) . " " . htmlspecialchars($newsItem['lastName']) . "</p>";
                                            echo "<p>Date: " . htmlspecialchars($newsItem['date']) . "</p>";
                                            echo"</span>";
                                        echo "</div>";
                                    
                                    if (!empty($newsItem['img'])) {
                                        echo "<img src='../WriteArticle/" . htmlspecialchars($newsItem['img']) . "' alt='News Images' class='img'>";
                                    }
                                    break;
                                }
                            }
                        }
                    
                    ?>
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
                    <h2><i>News Preview</i></h2>
                    <div class="slider-container">
                        <div class="slider">
                        <?php
                            foreach ($newsList as $newsItem) {
                                echo "<div class='boxes'>";
                                echo "<h3>" . htmlspecialchars($newsItem['title']) . "</h3>";
                                echo "</div>";
                            }
                        ?>
                    <!--
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
                    -->
                        </div>

                        <button class="next-btn" onclick="nextSlide()">></button>
                    </div>
            </div>
            
            <div class="rubrika">
                <a href="../Culture News/Culture news.php" class="linkClass" onclick="redirect()">
                    <?php   
                        for ($j = 0; $j < count($newsList); $j++) {
                            if (isset($newsList[$j]) && $newsList[$j]['category'] == 'culture') {
                                $newsItem = $newsList[$j]; 
                                    echo "<div class='sdi'>";
                                        echo "<h3>Culture News</h3>";
                                        echo "<h3>" . htmlspecialchars($newsItem['title']) . "</h3>";
                                        echo "<p>" . htmlspecialchars($newsItem['text']) . "</p>";
                                        echo"<span>";
                                        echo "<p>Author: " . htmlspecialchars($newsItem['name']) . " " . htmlspecialchars($newsItem['lastName']) . "</p>";
                                        echo "<p>Date: " . htmlspecialchars($newsItem['date']) . "</p>";
                                        echo"</span>";
                                    echo "</div>";

                                    if (!empty($newsItem['img'])) {
                                        echo "<img src='../WriteArticle/" . htmlspecialchars($newsItem['img']) . "' alt='News Images' class='img'>";
                                    }
                                    break; 
                            }
                        } 
                    ?>
                    
                </a>
            </div>
        </div>

        <div class="box">
            <div class="rubrika">
                    <a href="../Sports News/Sports News.php" class="linkClass" onclick="redirect()">
                        
                    <?php
                    
                        for ($k = 0; $k < count($newsList); $k++) {
                            if (isset($newsList[$k]) && $newsList[$k]['category'] == 'sports') {
                                $newsItem = $newsList[$k];
                                    echo "<div class='sdi'>";
                                        echo "<h3>Culture News</h3>";
                                        echo "<h3>" . htmlspecialchars($newsItem['title']) . "</h3>";
                                        echo "<p>" . htmlspecialchars($newsItem['text']) . "</p>";
                                        echo"<span>";
                                        echo "<p>Author: " . htmlspecialchars($newsItem['name']) . " " . htmlspecialchars($newsItem['lastName']) . "</p>";
                                        echo "<p>Date: " . htmlspecialchars($newsItem['date']) . "</p>";
                                        echo"</span>";
                                    echo "</div>";

                                    if (!empty($newsItem['img'])) {
                                        echo "<img src='../WriteArticle/" . htmlspecialchars($newsItem['img']) . "' alt='News Images' class='img'>";
                                    }
                                    break;
                                
                            }
                        }
                    ?>

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

            
            function redirect(){
                if (<?php echo empty($_SESSION['roli']) ? 'true' : 'false'; ?>){
                    window.location.href = "../Subscribe/Subscribe.php";
                }
            }

            var links = document.getElementsByClassName('linkClass');

            if (<?php echo empty($_SESSION['roli']) ? 'true' : 'false'; ?>){
                for (var i = 0; i < links.length; i++) {
                    links[i].addEventListener('click', function(event) {
                        event.preventDefault();
                    });
                }
            }

      </script>
    
</body>
</html>