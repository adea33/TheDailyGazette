<?php
  session_start();

    $hideDash="";
    $hideWrite="";

    if(empty($_SESSION['role'])){
    header("location: ../Subscribe/Subscribe.php");
    }else{
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
                <li class="log"><a href="../Log in/logIn.php">Log in</a></li>
                <li class="log"><a href="../Subscribe/Subscribe.php">Subscribe</a></li>
                <div class="<?php echo $hideDash ?>"><li class="log"><a href="dashboard.php">Dashboard</a></li></div>
                <div class="<?php echo $hideWrite ?>"><li class="log"><a href="../WriteArticle/WriteArticle.php">Write Article</a></li></div>
                <li class="log"><a href="../Log in/LogOut.php">Log Out</a></li>
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
                <div class="col2">
                    <div class="box2">
                        <div class="sdi">
                            <h3>South Korea's City of Books</h3>
                            <p id="text">With some 900 book-related businesses, Paju Book City, northwest of Seoul, is an intentional and euphoric celebration of books and the bookmaking process.</p>
                        </div>
                        <img src="bc.jpg" alt="foto" class="foto2">
                    </div>
                    <div class="box2">
                        <div class="sdi">
                            <h3>Netflix’s ‘Squid Game: The Challenge’ turns dystopian drama into real-life competition — minus the death</h3>
                            <p id="text">When it was first announced, Netflix’s “Squid Game: The Challenge” faced backlash for its premise. Critics online called out the irony of creating a spinoff of the popular South Korean drama, which follows contestants who are burdened with immense debt as they risk death to participate in competitions that involve twisted and violent children’s games. 
                                But on Wednesday, when the competition debuted its first five episodes, the show was met with initial enthusiasm online from many viewers. Some online likened it to other popular competition shows, like the long-running CBS series “Survivor.” Others started posting about how they are already rooting for or against specific players.
                                While critics have pointed out an irony in the way the reality show capitalizes off of a series rooted in anti-capitalist commentary, some viewers say they just see it as a form of genuine entertainment. Reviewers described it as "downright addicting" and "pretty fun to watch."“I wasn’t there to just go sit in the corner and hope to win the $4 million,” said Bryton Constantin, 23, known as Player No. 432 on the show, 
                                who dropped out of his last semester of college in Clemson, South Carolina, to participate in the games.</p>
                        </div>
                        <img src="sg.webp" alt="foto" class="foto2">
                    </div>
                </div>
                <div class="col1">
                    <div class="box">
                        <img src="foto.webp" alt="foto" class="foto1">
                        <div>
                            <h3>See the photos that made National Geographic’s ‘Pictures of the Year’</h3>
                            <p>Some 165 photographers working on assignment for National Geographic shot more than 2.1 million images in 2023.
                                Now, 29 are featured in its annual “Pictures of the Year” retrospective.                      
                                The feature — published in the magazine’s December issue and online in November — contains “stunning photographs that unearth remarkable, rarely seen moments,” according to National Geographic.                              
                                The full collection shows moments of joy and silence, celebrations of tradition and science, and the exploration of Earth and outer space. He photographed this one in its “final stage of life,” according to National Geographic — after it had reproduced and lost hundreds of tentacles, which are said to resemble a lion’s mane.</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="ts.jpg" alt="foto" class="foto1">
                        <div class="sdi">
                            <h3>Taylor Swift announces ’1989 (Taylor’s Version)’ is coming. Here’s what we know</h3>
                            <p>Taylor Swift’s re-release of her “1989” album is officially on its way to your ears.
                                The multi-hyphenate musician announced on Aug. 9 during a concert at SoFi Stadium in Inglewood, California, that the next “Taylor’s Version” re-recording will be of her “1989” album, which was originally released in October 2014.                       
                                During the surprise song portion of the show, at 11:09 pm PT, Swift announced to the audience that she was going to re-release the “1989” album, before launching into a rendition of “New Romantics.”
                                She gestured to the screen behind her, which showed the new art for the record and added that it will drop on Oct. 27.
                                A few minutes later, Swift’s official social media accounts shared the news as well.</p>
                        </div>
                    </div>
                    <div class="box">
                        <img src="ai.jpg" alt="foto" style="height: 390px; width: 300px; margin: 10px;">
                        <div>
                            <h3>Why graphic designers think generative A.I. needs them as much as they need it</h3>
                            <p>As generative artificial intelligence programs producing images, such as OpenAI’s DALL-E, Midjourney and Adobe
                                ’s Firefly take off, graphic designers — many of whom operate as sole proprietorships — can’t ignore the usefulness of a tool that helps them to better meet the endless demand for visual content. But amid fears that AI will supplant creative professionals, they are exploiting a current limitation in the technology: the results are only as good as the human mind prompting the A.I. programs.
                                “The advances in AI affecting the world of graphic design are much of the same advances we’re seeing elsewhere,” said Nicola Hamilton, president of the Association of Registered Graphic Designers. “ChatGPT is becoming increasingly capable of doing our writing and planning, while Midjourney and DALL-E are creating pretty advanced artwork when given the right prompts,” she said.
                                For Hamilton, and many graphic designers, dealing with new technology is nothing new — it’s core to the evolution of their creative profession, dating back all the way to the democratization of printing, through the introduction of computers, the birth of the internet, and the prevalence of social media. “Graphic design is a fairly young profession. Originally we were tradespeople (printers, typesetters, sign painters) and our common understanding of design is tightly tied to both the popularization of advertising and the technological revolution,” Hamilton said.</p>
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
<?php
?>