<?php
  session_start();

    $hideDash="";
    $hideLog="";
    $hideWrite="";

    if(empty($_SESSION['role'])){
    $hideLog = "hideLog";
    $hideDash = "hideDash";
    $hideWrite = "hideWrite";

    }else{
        $hideLog = "";
        if($_SESSION['role'] == "admin"){
            $hideDash = "";
            $hideWrite = "";
        }else{
            $hideDash = "hideDash";
            $hideWrite = "hideWrite";
        }
    }
 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>International News</title>
        <link rel="stylesheet" href="international.css">
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
                <li class="sek"><a href="International News.php">International</a></li>
                <li class="sek"><a href="../Culture News/Culture news.php">Culture</a></li>
                <li class="sek"><a href="../Sports News/Sports News.php">Sports</a></li>
            </ul>
            <ul class="login">
                <li class="log"><a href="../Log in/logIn.php">Log in</a></li>
                <li class="log"><a href="../Subscribe/Subscribe.php">Subscribe</a></li>
                <div class="<?php echo $hideDash ?>"><li class="log"><a href="dashboard.php">Dashboard</a></li></div>
                <div class="<?php echo $hideWrite ?>"><li class="log"><a href="../WriteArticle/WriteArticle.php">Write Article</a></li></div>
                <div class="<?php echo $hideLog ?>"><li class="log"><a href="../Log in/LogOut.php">Log Out</a></li></div>
            </ul>
            </div>
        </header>

        <main>
            <div class="title2">
                <hr class="in">
                <h2>International News</h2>
                <hr class="in">
            </div>

            <div class="first">
                <div class="col1">
                    <div class="box">
                        <div class="sdi">
                            <h3>Was Peace Between Israelis and Palestinians Ever Possible?</h3>
                            <p id="text">Prime Minister Benjamin Netanyahu on Tuesday night called for the Israeli government to back a proposed deal to exchange some of the captives held in Gaza for Palestinian prisoners held by Israel, an agreement that would entail a brief pause in the 46-day war. “Tonight we stand before a difficult decision, but it is the right decision. All security organizations support it fully,” Mr. Netanyahu said in televised remarks on Tuesday night. He added, “The war has its stages, and the release of the hostages has its stages as well. But we won’t rest until we achieve total victory, and until we bring everyone back.”</p>
                        </div>
                        <img src="1.webp" alt="foto" class="foto1">
                    </div>
                    <div class="box">
                        <div class="sdi">
                            <h3>Sierra Leone declares nationwide curfew after gunmen attack military barracks</h3>
                            <p id="text">Sierra Leone’s president has declared a nationwide curfew after gunmen attacked the West African country's main military barracks in the capital and then broke into detention centers and abducted or freed the occupants.  Several gunmen attacked major detention centers in the Sierra Leonean capital city on Sunday and freed or abducted inmates, moments after targeting the country’s main military barracks, a government spokesman said. The detention centers, including the Pademba Road Prisons — holding more than 2,000 inmates — were attacked just as security forces fought to restore calm during sustained shootouts at the military barracks, according to Information Minister Chernor Bah. “The prisons were overrun (and) some prisoners were abducted by the assailants while many others were released,” Bah said. Security forces managed to “push back” the assailants to the outskirts of the city where fighting continues, he added.
                                Sierra Leone’s President Julius Maada Bio earlier declared a nationwide curfew in response to the attacks.”</p>
                        </div>
                        <img src="12.avif" alt="foto" class="foto1">
                    </div>
                    <div class="box">
                        <div class="sdi">
                            <h3>Inside the northern Ukraine training center where units learn to fight Russian drones</h3>
                            <p id="text">KYIV, Ukraine -- In a secret location in Northern Ukraine sits one of the country's biggest training centers for mobile air defense units.
                                In the large open-air area, soldiers train to shoot drones with machine and anti-aircraft guns mounted on pick-up trucks. Some of those weapons are at least two times older than the young Ukrainian soldiers who are learning to operate them.
                                "Everything we have, every help we get, we use it to create mobile fire groups to fill every inch of space here," Lieutenant General Serhii Nayev, responsible for Ukraine's Northern border defense, told ABC News during a recent visit to the training center.
                                 More than 600 miles long, the border touches both Belarus and Russia. With winter coming, here in the North, there is no fog of war, apart from half a million mines, according to Nayev. But the real threat comes from the air.
                                 Far from towns and prying eyes, Ukrainian instructors are launching dummy drones -- a central part of the training for mobile air defense crews. It is an imitation of defending against attacks from the Russian’s Iranian-made Shahed drones -- a daily routine for Ukrainian air defense forces.</p>
                        </div>
                        <img src="5.avif" alt="foto" class="foto1">
                    </div>
                    <div class="box" id="s">
                        <div class="subscribe">
                            <h3>Want to read more?</h3>
                            <h3>Subscribe to The Daily Gazette for <br>the best International, Culture and Sports news</h3>
                        </div>
                        <div><a href="../Subscribe/Subscribe.php" class="sub">Subscribe</a></div>
                    </div>
                </div>
                <div class="col2">
                    <div class="box2">
                        <img src="2.webp" alt="foto" class="foto2">
                        <div class="box2sdi">
                            <h3>Iceland volcano eruption likelihood remains high, possibly within 'just days'</h3>
                            <p>The likelihood that a volcanic eruption will engulf the fishing town of Grindavik, Iceland, is decreasing by the day, officials said on Friday, even as they continued to warn that an eruption could still occur.
                                Grindavik, with more than 3,000 people, was evacuated this month after it was determined that a nine-mile-long underground river of magma was moving beneath the town to the ocean.
                                Residents are now allowed to go home during the day to check on their properties and belongings but until scientists give the all-clear, people cannot permanently return, Jon Thor Viglundsson, a spokesman for Iceland’s Department of Civil Protection and Emergency Management, said.
                                Seismic activity has caused Grindavik to sink and has damaged the sewage system. As a result, the town cannot access cold water, he said. “Sewage is a problem, and sewage lines are ruptured,” he added.</p>
                        </div>
                    </div>
                    <div class="box2">
                        <img src="8.avif" alt="foto" class="foto2">
                        <div class="box2sdi">
                            <h3>Ecuador's newly sworn-in president repeals guidelines allowing people to carry limited drug amounts</h3>
                            <p>Less than 48 hours into his term, Ecuador President Daniel Noboa on Friday repealed controversial guidelines established by the country’s left a decade ago that eliminated penalties for people found carrying illegal drugs under certain amounts.
                                Noboa’s decision fulfilled a campaign promise to fight drug trafficking. Consequences of the illegal trade, particularly cocaine, have kept Ecuadorians on edge as killings, kidnappings, robberies, extortion and other crimes reached unprecedented levels.</p>
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