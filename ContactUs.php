<?php
include_once 'DatabaseConnectionNews.php';
include_once 'Contact.php';
include_once 'ContactRepository.php';

if (isset($_POST['submitbtn'])) {


    $comment = $_POST['comment'];
    $email = $_POST['email'];
    
    $contact = new contact($comment, $email);

    $conrep = new ContactRepository;
    $conrep->insertComment($contact);
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Contact us | The Daily Gazette</title>
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
                <h2>Contact form</h2>
                <hr class="in">
        </div>
            
            <div class="first">
            
                <form id="subscribe" action="ContactUs.php" method="post" enctype="multipart/form-data">
                    <div class="sub">
                        <div class="input">
                            <h2><b>Contact us</b></h2>
                        </div>

                        <div class="name">
                            <div class="emri"><h4>Comment</h4>
                                <div class="input">
                                <textarea name="comment" rows="10" cols="40" placeholder="Write comment/complain" required></textarea>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="name">
                            <div class="emri"><h4>Email</h4>
                                <div class="input">
                                    <input type="text" name="email" id="name" placeholder="email" required>
                                </div>
                            </div>
                        </div>
                        

                    <p class="input"><input type="submit" value="Confirm" name="submitbtn"></p>
                    </div>
                </form>
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