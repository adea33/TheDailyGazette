<?php 
include_once('userRepository.php');
function startConnection(){
    try{

        $conn= new PDO("mysql:host=localhost;dbname=gazeta", "root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed " . $e->getMessage();
            return null;
        }
    }
    if(isset($_POST['loginbtn'])){
        if(empty($_POST['email']) || empty($_POST['password'])){
        echo "Fill all the required fields";

        }else{
        $email=$_POST['email'];
        $password=$_POST['password'];

        $con=startConnection();

        if($con){
            $query="SELECT * FROM user WHERE email='$email'";
            $statement= $con->prepare($query);
            $statement->execute();
            $user = $statement->fetch(PDO::FETCH_ASSOC);

            if($user['email'] == $email && $user['password'] == $password){
               
            
                session_start();
                $_SESSION['email'] = $email;
                $_SESSION['password'] = $password;
                $_SESSION['roli'] = $user['roli'];
                $_SESSION['loginTime'] = date("H:i:s");


                header("location:Faqja e pare/The Daily Gazette.php");
                exit();
            }else{
                echo "Incorrect Email or Password";
            }
    }else{
            echo "User not found";
        }
        $con=null;
    }
}
?>
<!DOCTYPE html>
<html>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width", initial-scale="1.0">
        <link rel="stylesheet" href="loginForm.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Vidaloka&display=swap" rel="stylesheet">
        <title>Log in | The Daily Gazette</title>
</head>
<body>
    <header>
        <div class="title"> 
            <a href="Faqja e pare/The Daily Gazette.php"><h1><i>The Daily Gazette</i></h1></a>
        </div>
        <div class="log"><a href="Subscribe/Subscribe.php">Subscribe</a></div>
    </header>

        <div class="margjina">
        <form action="logIn.php" method="POST" onsubmit="return validimi()">
            <h1>Log in</h1>
          
        <div class="tekstet">
            <h4><b>Username</b></h4>
            <p> <input type="text" placeholder="username" id="email" name="email"></p>
        </div>

        <div class="tekstet">
            <h4><b>Password</b></h4>
            <p><input type="password" placeholder="******" id="password" name="password"></p>
        </div>
            

        <div class="tekstet">
        <p><input type="submit" name="loginbtn"></p>
    </div>
        </form>
    </div>    
    <script>
      //  document.addEventListener("DOMContentLoaded", function() {});
//function validimi(){
    
   
  //  var username=document.getElementById('email').value;
    //var password=document.getElementById('password').value;

    
   // if((username.includes("@")) ){
     //   alert('Shkruani nje username valide!');
    //}
    //else{
      //  alert('Ju u loguat me sukses');
    //}
//}
    </script>
</body>
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
        <br>
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
</html>
