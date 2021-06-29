<?php
    session_start(); //enable karta hai session variable
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>शिक्षित करो</title>
    <!-- External css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/ok.css">
    <link rel="stylesheet" href="css/modal.css">
    
    <!-- Font Links -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Cardo' rel='stylesheet' type='text/css'>

    <!-- Fontawsome cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- Jquery cdn --> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body>

    <!-- Showing modals --> 
    <!-- form submit status success hoga to the ye run karega and iske under ka ok.php aayega -->
    <?php if(isset($_SESSION["status"])){ unset($_SESSION["status"]) ?>
        
        <div id="myModal" class="modal">

        <!-- Modal content -->
            <div class="modal-content">
                <div class="modal-header">
                    <span class="close">&times;</span>
                </div>
                <div class="modal-body" style="color: black;">
                    <?php
                            include './ok.php';
                    ?>
                </div>
            </div>
        </div>

        <script>
            // Get the modal
            var modal = document.getElementById("myModal"); 

            
            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            (function() {
            modal.style.display = "block";
            })();

            // // When the user clicks on <span> (x), close the modal
            // span.onclick = function() {
            // sessionStorage.setItem("status","");
            // modal.style.display = "none";
            // } no need delete

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modal) {
                modal.style.display = "none";
                }
            }
        </script>
            
    <?php } ?>


    <header class="main_h">

        <div class="row">
        <!-- anchor tag a hai.....link page add karne ke liye -->
            <a class="logo" href="#"> 
                <img src="images/logo.png" alt="logo" >
            </a>

            <div class="mobile-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav>
                <ul>
                <!-- .services mtlab aap 124 page pe class banaye jh...id hota to # use karte -->
                    <li><a href=".services">Services</a></li>
                    <li><a href=".our-team">Our Team</a></li>
                    <li><a href=".join-us">Join Us</a></li>
                    <li><a href=".footer">Contact Us</a></li>
                </ul>
            </nav>

        </div> <!-- / row -->

    </header>

    <div class="hero">

        <h1>
            <span>WELCOME TO शिक्षित करो</span>
            <br> 
            <q>Nobody can go back and start a new beginning, <br> but anyone can start today and make a new ending.</q> 
            <br> <br> — Maria Robinson
        </h1>

        <div class="mouse">
            <span></span>
        </div>

    </div>

    <div class="row content">
        
        <!-- SERVICES -->
        <h1 class="services sections-heading">SERVICES</h1>
        <div class=" sections services">
            <div class="cards">
                <div class="card">
                    <h2 class="card-title">Primary Education</h2>
                    <img src="images/serv1.jpg" alt="">
                    <p class="card-desc">Pinnipeds, commonly known as seals,[a] are a widely distributed and diverse clade of carnivorous, fin-footed, semiaquatic marine mammals. They comprise the extant families Odobenidae (whose only living member is the walrus), Otariidae (the eared seals: sea lions and fur seals), and Phocidae (the earless seals, or true seals).</p>
                </div>

                <div class="card">
                    <h2 class="card-title">Skill Development</h2>
                    <img src="images/serv2.jpg" alt="">
                    <p class="card-desc">Pinnipeds, commonly known as seals,[a] are a widely distributed and diverse clade of carnivorous, fin-footed, semiaquatic marine mammals. They comprise the extant families Odobenidae (whose only living member is the walrus), Otariidae (the eared seals: sea lions and fur seals), and Phocidae (the earless seals, or true seals).</p>
                </div>

                <div class="card">
                    <h2 class="card-title">Chilad Care</h2>
                    <img src="images/serv3.jpg" alt="">
                    <p class="card-desc">Pinnipeds, commonly known as seals,[a] are a widely distributed and diverse clade of carnivorous, fin-footed, semiaquatic marine mammals. They comprise the extant families Odobenidae (whose only living member is the walrus), Otariidae (the eared seals: sea lions and fur seals), and Phocidae (the earless seals, or true seals).</p>
                </div>

                <!-- <div class="card">
                    <h2 class="card-title">Art & Culture Education</h2>
                    <img src="images/serv4.jpg" alt="">
                    <p class="card-desc">Pinnipeds, commonly known as seals,[a] are a widely distributed and diverse clade of carnivorous, fin-footed, semiaquatic marine mammals. They comprise the extant families Odobenidae (whose only living member is the walrus), Otariidae (the eared seals: sea lions and fur seals), and Phocidae (the earless seals, or true seals).</p>
                </div> -->

            </div>
        </div>
        
        <!-- OUR TEAM -->
        <h1 class="sections-heading our-team">OUR TEAM</h1>
        <div class=" sections our-team">
            <div class="card">
                <img src="images/team1.png" alt="Chyno Deluxe">
                <h1>SRK</h1>
                <h2>King Khan</h2>
                <a class="button" href="#" target="_blank"><span>+</span> Follow</a>
            </div>

            <div class="card">
                <img src="images/team2.png" alt="Chyno Deluxe">
                <h1>Dr.Jehangir</h1>
                <h2>Doctor</h2>
                <a class="button" href="#" target="_blank"><span>+</span> Follow</a>
            </div>

            <div class="card">
                <img src="images/team3.png" alt="Chyno Deluxe">
                <h1>Gaurav</h1>
                <h2>King's Biggest Fan</h2>
                <a class="button" href="#" target="_blank"><span>+</span> Follow</a>
            </div>

            <div class="card">
                <img src="images/team4.png" alt="Chyno Deluxe">
                <h1>Mohan</h1>
                <h2>Front-end Developer</h2>
                <a class="button" href="#" target="_blank"><span>+</span> Follow</a>
            </div>

        </div>
        

        <!-- JOIN US -->
        <h1 class="sections-heading join-us">JOIN US</h1>
        <div class=" sections join-us-container">
            <form method="post" action="./validation.php" >
            <!-- form ka j0o data hai wo kaha jayega to action mai jayega -->
                <div class="segment">
                    <h1>Enter your details and submit this form to join us to give Free Education to Childrens.</h1>
                </div>
                
                <label>
                    <input type="text" name="name" placeholder="Name" required/>
                </label>
<!-- required ka mtlab chaiye hi chaiye -->
                <label>
                    <input type="text" name="email" placeholder="Email Address" required/>
                </label>

                <label>
                    <input type="tex" name="contact" placeholder="Contact Number" required/>
                </label>

                <select name="gender" id="gender" required>
                    <option value="" disabled selected>Gender</option> 
                    <!-- gender text store nai hoga ise liye disabled attribute -->
                    <option value="male">male</option>
                    <option value="female">Female</option>
                    <option value="others">others</option>
                </select>

                <label for="date-input"> D.O.B : 
                    <input id="date-input" name="date" type="date" required/>
                </label>

                <textarea name="msgbox" placeholder="What you will teach? or Any Contribution you want to give for Children."  required></textarea>
                
                <button class="red" type="submit" name="submit"> Submit</button>
            
            </form>
        </div> 
    </div>
        
    <!-- Footer -->
    <footer id="footer">
        <div class="footer container">
            <div class="brand"><h1>शिक्षित करो</h1></div>
            <h2>A Free Helping Hand</h2>
            <div class="social-media">
                <h1>FOLLOW US ON SOCIAL MEDIAS</h1>
                <div class="social-icons">
                    <a href="#" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
                    <a href="#" target="_blank" class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="#" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
                </div>
            </div>
            <p>Copyright © www.Shikshitkaro.com. All right reserved. 2021 Follow Shubham Gupta on social sites- @IamSRKShubh </p>
        </div>
    </footer>


    <script src="scripts/script.js"></script>
</body>
</html>