<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php
        include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="css/home.css"/>
    <title>Sports Web</title>
</head>
<body>
    <div class="container1">

        <?php
        include "includes/header.php";
        ?>

        <!-- Body of the page -->
    
        <div class="card-container">
            <div class="card">
                <img src="img/cricket.jpeg" />
                <div class="card-content">
                    <h1>Cricket</h1>
                    <p>Cricket is a popular bat-and-ball sport played between two teams, aiming to score more runs than the opposition. Known for its rich history and global appeal, it has produced legendary players and remains a source of national pride for many countries.</p>
                    <a href="stadium_list.php" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/football.jpg" />
                <div class="card-content">
                    <h1>Football</h1>
                    <p>Football, or soccer, is a globally beloved sport where two teams aim to score goals by putting the ball into the opposing team's net. Its rich history and iconic players make it a source of immense national pride for many countries.</p>
                    <a href="stadium_list2.php" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/kabaddi.jpg" />
                <div class="card-content">
                    <h1>Kabaddi</h1>
                    <p>Kabaddi, a traditional South Asian team sport, involves raiding the opposing team's half to tag players while chanting "kabaddi." Its cultural significance and increasing global recognition make it a source of pride for many communities.</p>
                    <a href="stadium_list3.php" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/volleyball.jpg" />
                <div class="card-content">
                    <h1>Volleyball</h1>
                    <p>Volleyball is a dynamic team sport where players aim to ground the ball on the opponent's side over a net, fostering teamwork and camaraderie. With its fast-paced action and widespread appeal, it remains a popular recreational and competitive sport globally.</p>
                    <a href="stadium_list4.php" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/shuttle.jpg" />
                <div class="card-content">
                    <h1>Badminton</h1>
                    <p>Badminton is a racket sport played either in singles or doubles, where players use rackets to hit a shuttlecock back and forth over a net. Known for its quick-paced rallies and agility, it is enjoyed as a recreational activity and a competitive sport worldwide.</p>
                    <a href="stadium_list5.php" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/hockey.jpg" />
                <div class="card-content">
                    <h1>Hockey</h1>
                    <p>Hockey is a dynamic team sport where players use sticks to score goals, captivating audiences with its fast-paced and intense gameplay. With its global popularity and competitive spirit, it continues to be a source of national pride for many countries.</p>
                    <a href="stadium_list6.php" class="card-button">Read more</a>
                </div>
            </div>
        </div>

        <?php
        include "includes/signup_modal.php";
        include "includes/login_modal.php";
        include "includes/footer.php";
        ?>

    </div>        
    
</body>
</html>