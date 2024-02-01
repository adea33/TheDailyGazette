<?php
include_once 'user.php';
include_once 'userRepository.php';

if (isset($_POST['submitbtn'])) {
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmpassword = $_POST['confirmpassword'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $cardnumber = $_POST['cardnumber'];
    $cvc = $_POST['cvc'];
    $muaji = $_POST['muaji'];
    $viti = $_POST['viti'];

    $useri = new user($email, $password, $confirmpassword, $firstname, $lastname, $cardnumber, $cvc, $muaji, $viti);

    $userrep = new userRepository();
    $userrep->insertUser($useri);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Subscribe | The Daily Gazette</title>
        <link rel="stylesheet" href="subscribe.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
    </head>
    <body >
    <header>
        <div class="title"> 
            <a href="../Faqja e pare/The Daily Gazette.php"><h1><i>The Daily Gazette</i></h1></a>
        </div>
        <div class="log"><a href="../logIn.php">Log in</a></div>
        
    </header>

        <main>
            
            <div class="title2">
                <hr class="in">
                <h2>Subscribe</h2>
                <hr class="in">
            </div>
            <div class="row">
            <div class="first">
            <div class="sub">
                <form id="subscribe" onsubmit="return validimi()" action="Subscribe.php" method="post">
                    <div class="input">
                        <h4><b>Email</b></h4>
                        <p> <input type="text" placeholder="email"  id="email" name="email" required></p>
                    </div>
            
                    <div class="input">
                        <h4><b>Password</b></h4>
                        <p><input type="password" placeholder="******"   id="password" name="password" required></p>
                        <h4><b>Confirm Password</b></h4>
                        <p><input type="password" placeholder="******"   id="confirmpassword"  name="confirmpassword" required></p>
                    </div>
            
                <div class="name">
                    <div class="emri"><h4>First Name</h4>
                   
                    
                    <div class="input">
                    <input type="text"  id="name" placeholder="first name" name="firstname" >
                    </div>
                    </div>
                    <div class="emri"> <h4>Last Name</h4>
                        <div class="input">
                            <input type="text" id="lastname" placeholder="last name" name="lastname">
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="emri"><h4>Card numer</h4>
                    <div class="input">
                        <input type="number" placeholder="card number" id="cardNumber" name="cardnumber" required>
                    </div>
                    </div>
                    <div class="emri"><h4>CVC</h4>
                    <div class="input">
                        <input type="password" placeholder="CVC" id="cvc" name="cvc" required>
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
                                <option value="2024">2024</option>
                                <option value="2025">2025</option>
                                <option value="2026">2026</option>
                                <option value="2027">2027</option>
                            </select>
                        </div>
                    </div>
                    <div class="kartelat">
                        <img src="master.webp" alt="">
                        <img src="visa.webp" alt="">
                        <img src="paypal.webp" alt="">
                    </div>
                </div>

                <p class="input"><input type="submit" value="Confirm" name="submitbtn"></p>
            </div>
            </form>


            </div>
            <div class="col2">
                <div class="box">
                    <h6>Order Summary</h6>
                    <h3>All Access Subscription</h3>
                    <p><b>Subscribe</b> for unlimited digital access to The Daily Gazette</p>
                </div>
                <div class="box">
                    <p>Welcome offer           <b>0.50€</b> for the first month</p>
                    <p><b>Total due every month 2.00€</b> </p>
                </div>
                <div class="box">
                   <h6><u><a href="">See Details</a></u></h6> 
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
        <script src="subscribe.js">

        </script>


    </body>
</html>