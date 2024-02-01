<?php
  session_start();

    $hideWrite="";
    $hideDel="";
    $hideLS="";
    $hideCon="";

    if(empty($_SESSION['roli'])){
    header("location: ../Subscribe/Subscribe.php");
    }else{
        $hideLS="hideLS";
        if($_SESSION['roli'] == "admin"){
            $hideWrite = "";
            $hideDel="";
            $hideCon="hideCon";
        }else{
            $hideWrite = "hideWrite";
            $hideDel="hideDel";
            $hideCon="";
        }
    }

    include_once '../NewsRepository.php';

    $newsRepo = new NewsRepository();
    $newsList = $newsRepo->getAllNews();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Culture News</title>
        <link rel="stylesheet" href="culture.css">
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
                <li class="sek"><a href="Culture news.php">Culture</a></li>
                <li class="sek"><a href="../Sports News/Sports News.php">Sports</a></li>
            </ul>
            <ul class="login">
                <div class="<?php echo $hideLS ?>"><li class="log"><a href="../logIn.php">Log in</a></li></div>
                <div class="<?php echo $hideLS ?>"><li class="log"><a href="../Subscribe/Subscribe.php">Subscribe</a></li></div>
                <div class="<?php echo $hideWrite ?>"><li class="log"><a href="../WriteArticle/WriteArticle.php">Write Article</a></li></div>
                <div class="<?php echo $hideCon ?>"><li class="log"><a href="../ContactUs.php">Contact Us</a></li></div>
                <li class="log"><a href="../LogOut.php">Log Out</a></li>
            </ul>
            </div>
        </header>

        <main>
            <div class="title2">
                <hr class="in">
                <h2>Culture News</h2>
                <hr class="in">
            </div>

            <div class="first">
            <?php
            echo "<div class='col2'>";
                    foreach ($newsList as $newsItem) {            
                        if(!($newsItem['id'] %2 == 0) && $newsItem['category'] == 'culture'){
                        
                            echo "<div class='box2'>";
                                echo "<div class='box2sdi'>";
                                    echo "<h3>" . htmlspecialchars($newsItem['title']) . "</h3>";
                                    echo "<p>" . htmlspecialchars($newsItem['text']) . "</p>";
                                    echo "<div class='delete-btn2'>";
                                        echo"<span>";
                                            echo "<p>Author: " . htmlspecialchars($newsItem['name']) . " " . htmlspecialchars($newsItem['lastName']) . "</p>";
                                            echo "<p>Date: " . htmlspecialchars($newsItem['date']) . "</p>";
                                        echo"</span>";
                                        echo "<form method='POST' action='../WriteArticle/DeleteNews.php'>";
                                        echo "<input type='hidden' name='news_id' value='" . $newsItem['id'] . "'>";
                                        echo "<div class='". $hideDel ."'>";
                                        echo "<button class='delete-btn' type='submit' name='delete' onclick='return confirm(\"Are you sure you want to delete this article?\");'>Delete Article</button>";
                                        echo "</div>";
                                        echo "</form>";
                                    echo "</div>";
                                echo "</div>";

                                
                                if (!empty($newsItem['img'])) {
                                    echo "<img src='../WriteArticle/" . htmlspecialchars($newsItem['img']) . "' alt='News Images' class='foto2'>";
                                }else{
                                    echo "false qr";
                                }
                                
                                         
                            echo "</div>";
                        }
                    }
                echo "</div>";

                echo "<div class='col1'>";
                    foreach ($newsList as $newsItem) {
                        if($newsItem['id'] %2 ==0 && $newsItem['category'] == 'culture'){
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
<?php
?>