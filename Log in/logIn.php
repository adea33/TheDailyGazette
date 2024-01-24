<?php
  if(isset($_POST['loginbtn'])){
    if(empty($_POST['username']) || empty($_POST['password'])){
      echo "Please fill the required fields!";
    }else{
        //validate
        $username = $_POST['username'];
        $password = $_POST['password'];

        include_once '../Users.php';
        $i=0;
        
        foreach($users as $user){
          if($user['username'] == $username && $user['password'] == $password){
            session_start();
      
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            $_SESSION['role'] = $user['role'];
            $_SESSION['loginTime'] = date("H:i:s");
            header("location: ../Faqja e pare/The Daily Gazette.php");
            exit();
          }else{
            $i++;
            if($i == sizeof($users)) {
              echo "Incorrect Username or Password!";
              exit();
            }
          }
        }
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
            <a href="../Faqja e pare/The Daily Gazette.php"><h1><i>The Daily Gazette</i></h1></a>
        </div>
        <div class="log"><a href="../Subscribe/Subscribe.php">Subscribe</a></div>
    </header>

        <div class="margjina">
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" onsubmit="return validimi()">
            <h1>Log in</h1>
          
        <div class="tekstet">
            <h4><b>Username</b></h4>
            <p> <input type="text" placeholder="username" id="username" name="username"></p>
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
        document.addEventListener("DOMContentLoaded", function() {});
function validimi(){
    
   
    var username=document.getElementById('username').value;
    var password=document.getElementById('password').value;

    
    if((username.includes("@")) ){
        alert('Shkruani nje username valide!');
    }
    else{
        alert('Ju u loguat me sukses');
    }
}
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