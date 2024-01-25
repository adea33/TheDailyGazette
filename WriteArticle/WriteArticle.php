<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Write Article | The Daily Gazette</title>
        <link rel="stylesheet" href="write.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
    </head>
    <body >
    <header>
        <div class="title"> 
            <a href="../Faqja e pare/The Daily Gazette.php"><h1><i>The Daily Gazette</i></h1></a>
        </div>
        <div class="log"><a href="../Log in/LogOut.php">Log Out</a></div>
        
    </header>

        <main>
            
        <div class="title2">
                <hr class="in">
                <h2>Write a new article</h2>
                <hr class="in">
        </div>
            
            <div class="first">
            
                <form id="subscribe" onsubmit="return validimi()" enctype="multipart/form-data">
                    <div class="sub">
                        <div class="input">
                            <h4><b>Title</b></h4>
                            <p> <input type="text" placeholder="Title"  required></p>
                        </div>

                        <div class="name">
                            <div class="emri"><h4>Article text</h4>
                                <div class="input">
                                <textarea name="message" rows="10" cols="40" placeholder="Text article"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="name">
                            <div><h4>Article image</h4>
                                <div class="input">
                                <input class="foto-input" type="file" accept="image/*" />
                                </div>
                            </div>
                        </div>
                        <div class="name">
                            <div class="emri"><h4>First Name</h4>
                                <div class="input">
                                    <input type="text" name="" id="name" placeholder="first name" >
                                </div>
                            </div>
                            <div class="emri"> <h4>Last Name</h4>
                                <div class="input">
                                    <input type="text" id="lastname" placeholder="last name">
                                </div>
                            </div>
                        </div>
                    
                        <div class="date">
                            <h4>Date</h4>
                            <div class="data">
                                <select name="muaji" id="muaji">
                                    <option value="janar">Jan</option>
                                    <option value="shkurt">Feb</option>
                                    <option value="mars">Mar</option>
                                    <option value="prill">Apr</option>
                                    <option value="maj">May</option>
                                    <option value="qershor">Jun</option>
                                    <option value="korrik">Jul</option>
                                    <option value="gusht">Aug</option>
                                    <option value="shtator">Sep</option>
                                    <option value="tetor">Oct</option>
                                    <option value="nentor">Nov</option>
                                    <option value="dhjetor">Dec</option>
                                </select>
                                <div class="input">
                                    <select name="viti" id="viti">
                                        <option value="">2024</option>
                                        <option value="">2025</option>
                                        <option value="">2026</option>
                                        <option value="">2027</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    <p class="input"><input type="submit" value="Confirm"></p>
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