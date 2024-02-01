<?php

include_once 'ContactRepository.php';

    $commentRepo = new ContactRepository();
    $commentList = $commentRepo->getAllComments();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Comments | The Daily Gazette</title>
        <link rel="stylesheet" href="contact.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
    </head>
    <body >
    <header>
        <div class="title"> 
            <a href="Faqja e pare/The Daily Gazette.php"><h1><i>The Daily Gazette</i></h1></a>
        </div>
        <div class="log"><a href="LogOut.php">Log Out</a></div>
        
    </header>

        <main>
            
        <div class="title2">
            <hr class="in">
            <h2>Comments</h2>
            <hr class="in">
        </div>
            
        <div class="first">
            <div class="sub">
                <?php
                    echo "<div class=''>";
                        foreach ($commentList as $commentItem) {
                            echo "<div class='comment-box'>";
                                echo "<p>" . htmlspecialchars($commentItem['comment']) . "</h3>";
                                echo "<p>" . htmlspecialchars($commentItem['email']) . "</p>";
                            echo "</div>";
                        }
                    echo "</div>";
                ?>
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
        <script src="subscribe.js">

        </script>
    </body>
</html>