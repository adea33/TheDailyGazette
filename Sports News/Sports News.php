<?php
  session_start();

    $hideWrite="";
    $hideDel="";

    if(empty($_SESSION['role'])){
    header("location: ../Subscribe/Subscribe.php");
    }else{
        if($_SESSION['role'] == "admin"){
            $hideWrite = "";
            $hideDel="";
        }else{
            $hideWrite = "hideWrite";
            $hideDel="hideDel";
        }
    }

    include_once '../NewsRepository.php';

    $newsRepo = new NewsRepository();
    $newsList = $newsRepo->getAllNews();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sports News</title>
    <link rel="stylesheet" href="sports.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="title"> 
            <a href="../Faqja e pare/The Daily Gazette.php"><h1><i>The Daily Gazette</i></h1></a>
        </div>
        <div class="menu">
        <ul class="sektoret">
            <li class="sek"><a href="../Faqja e pare/The Daily Gazette.php">Home</a></li>
            <li class="sek"><a href="../International News/International News.php">International</a></li>
            <li class="sek"><a href="../Culture News/Culture news.php">Culture</a></li>
            <li class="sek"><a href="../Sports News/Sports News.php">Sports</a></li>
        </ul>
        <ul class="login">
            <li class="log"><a href="../Log in/logIn.php">Log in</a></li>
            <li class="log"><a href="../Subscribe/Subscribe.php">Subscribe</a></li>
            <div class="<?php echo $hideWrite ?>"><li class="log"><a href="../WriteArticle/WriteArticle.php">Write Article</a></li></div>
            <li class="log"><a href="../Log in/LogOut.php">Log Out</a></li>
        </ul>
        </div>
    </header>

    <main>
        <div class="title2">
                <hr class="in">
                <h2>Sports News</h2>
                <hr class="in">
            </div>
        <div class="first">
            <?php    
                echo "<div class='col1'>";
                    foreach ($newsList as $newsItem) {
                        if($newsItem['category'] == 'sports'){
                            echo "<div class='box'>";
                                echo "<div class='sdi'>";
                                    echo "<h3>" . htmlspecialchars($newsItem['title']) . "</h3>";
                                    echo "<p>" . htmlspecialchars($newsItem['text']) . "</p>";
                                    echo"<span>";
                                    echo "<p>Author: " . htmlspecialchars($newsItem['name']) . " " . htmlspecialchars($newsItem['lastName']) . "</p>";
                                    echo "<p>Date: " . htmlspecialchars($newsItem['date']) . "</p>";
                                    echo"</span>";
                                echo "</div>";

                                echo "<div class='foto-box'>";
                                if (!empty($newsItem['img'])) {
                                    echo "<img src='../WriteArticle/" . htmlspecialchars($newsItem['img']) . "' alt='News Images' class='foto1'>";
                                }else{
                                    echo "false qr";
                                }
                                echo "<form method='POST' action='../WriteArticle/DeleteNews.php'>";
                                echo "<input type='hidden' name='news_id' value='" . $newsItem['id'] . "'>";
                                echo "<div class='". $hideDel ."'>";
                                echo "<button class='delete-btn' type='submit' name='delete' onclick='return confirm(\"Are you sure you want to delete this article?\");'>Delete Article</button>";
                                echo "</div>";echo "</form>";
                                echo "</div>";
                            echo "</div>";
                        }
                    }
                echo "</div>";
            ?>




            <div class="col2">
                <img src="uefa.webp" alt="foto" class="foto2">
                <div id="t">
                    <h3>Matches of the day</h3>
                </div>
                    <div class="matches">  
                        <div class="box2">
                            <div class="match">
                                <div class="photobox">
                                    <img src="celticc.webp" alt="foto" class="photomatch">
                                    <img src="lazio.webp" alt="foto" class="photomatch">
                                </div>
                                <h3>Celtic &#8226; 18:45 &#8226; Lazio</h3> 
                            </div>
                        </div>

                        <div class="box2">
                            <div class="match">
                                <div class="photobox">
                                    <img src="partis.webp" alt="foto" class="photomatch">
                                    <img src="newcastle.webp" alt="foto" class="photomatch">
                                </div>
                                <h3>Paris &#8226; 21:00 &#8226; Newcastle</h3>

                            </div>
                        </div>

                        <div class="box2">
                            <div class="match">
                                <div class="photobox">
                                    <img src="milan.webp" alt="foto" class="photomatch">
                                    <img src="dortmund.webp" alt="foto" class="photomatch">
                                </div>
                                <h3>Milan &#8226; 21:00 &#8226; Dortmund</h3>
                            </div>
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
                <a href="" class="a"><img src="../Faqja e pare/facebook.png" alt=""></a>
                <a href="" class="a"><img src="../Faqja e pare/twitter.png" alt=""></a>
                <a href="" class="a"><img src="../Faqja e pare/instagram.png" alt=""></a>
                <a href="" class="a"><img src="../Faqja e pare/pinterest.png" alt=""></a>
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
    




</body>
</html>
