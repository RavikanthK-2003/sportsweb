<?php
session_start();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="img/logo1.jpg"/>
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="css/common.css"/>
    <link rel="stylesheet" href="css/home.css"/>
    <title>Sports Web</title>
</head>
<body>
    <div class="container1">

        <nav>
            <a href="home.html">
                <img src="img/logo.jpg" class="logo"/>
              </a>
            <ul>
                <li><a href="home.html">Home</a></li>
                <li><a href="events.html">Events</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
            </ul>
            <button type="button" class="btn btn-primary shadow-none btn-sm custom" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Signin
            </button>
  
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Signin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="login-form" class="form" role="form" method="post" action="api/login_submit.php">
                            <div class="input-group form-group my-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email" required />
                            </div>

                            <div class="input-group form-group my-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required />
                            </div>

                            <div class="form-group my-4">
                                <button type="submit" class="btn btn-block btn-sm btn-primary">Login</button>
                            </div>
                        </form>
                    </div>

                    <div class="modal-footer">
                        <span>
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#signup-modal">Click here</a>
                            to register a new account
                        </span>
                    </div>
                </div>
                </div>
            </div>


            <button type="button" class="btn btn-primary shadow-none btn-sm custom" data-bs-toggle="modal" data-bs-target="#exampleModal2">
                Signup
            </button>
            <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Signup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form id="signup-form" class="form" role="form" method="post" action="api/signup_submit.php">
                            <div class="input-group form-group my-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required />
                            </div>
        
                            <div class="input-group form-group my-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required />
                            </div>
        
                            <div class="input-group form-group my-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email" required />
                            </div>
        
                            <div class="input-group form-group my-4">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required />
                            </div>
        
                            <div class="form-group my-4">
                                I'm a
                                <input type="radio" class="ml-3" id="gender-male" name="gender" value="male" />Male
                                <input type="radio" class="ml-3" id="gender-female" name="gender" value="female" />Female
                            </div>
        
                            <div class="form-group my-4">
                                <button type="submit" class="btn btn-block btn-sm btn-primary">Create Account</button>
                            </div>
                        </form>
                    </div>
        
                    <div class="modal-footer">
                        <span>Already have an account?
                            <a href="#" data-dismiss="modal" data-toggle="modal" data-target="exampleModal">Login</a>
                        </span>
                    </div>
                </div>
                </div>
            </div>
        </nav>

        <!-- Body of the page -->
    
        <div class="card-container">
            <div class="card">
                <img src="img/cricket.jpeg" />
                <div class="card-content">
                    <h1>Cricket</h1>
                    <p>Cricket is a popular bat-and-ball sport played between two teams, aiming to score more runs than the opposition. Known for its rich history and global appeal, it has produced legendary players and remains a source of national pride for many countries.</p>
                    <a href="stadium_list.html" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/football.jpg" />
                <div class="card-content">
                    <h1>Football</h1>
                    <p>Football, or soccer, is a globally beloved sport where two teams aim to score goals by putting the ball into the opposing team's net. Its rich history and iconic players make it a source of immense national pride for many countries.</p>
                    <a href="stadium_list.html" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/kabaddi.jpg" />
                <div class="card-content">
                    <h1>Kabaddi</h1>
                    <p>Kabaddi, a traditional South Asian team sport, involves raiding the opposing team's half to tag players while chanting "kabaddi." Its cultural significance and increasing global recognition make it a source of pride for many communities.</p>
                    <a href="stadium_list.html" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/volleyball.jpg" />
                <div class="card-content">
                    <h1>Volleyball</h1>
                    <p>Volleyball is a dynamic team sport where players aim to ground the ball on the opponent's side over a net, fostering teamwork and camaraderie. With its fast-paced action and widespread appeal, it remains a popular recreational and competitive sport globally.</p>
                    <a href="stadium_list.html" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/shuttle.jpg" />
                <div class="card-content">
                    <h1>Badminton</h1>
                    <p>Badminton is a racket sport played either in singles or doubles, where players use rackets to hit a shuttlecock back and forth over a net. Known for its quick-paced rallies and agility, it is enjoyed as a recreational activity and a competitive sport worldwide.</p>
                    <a href="stadium_list.html" class="card-button">Read more</a>
                </div>
            </div>
            <div class="card">
                <img src="img/hockey.jpg" />
                <div class="card-content">
                    <h1>Hockey</h1>
                    <p>Hockey is a dynamic team sport where players use sticks to score goals, captivating audiences with its fast-paced and intense gameplay. With its global popularity and competitive spirit, it continues to be a source of national pride for many countries.</p>
                    <a href="stadium_list.html" class="card-button">Read more</a>
                </div>
            </div>
        </div>

        <!-- footer of the page -->

        <footer>
            <div class="footer-container">
                <div class="social-icons">
                    <a href="#"><i class="fa-brands fa-facebook fa-lg"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram fa-xl"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter fa-lg"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube fa-lg"></i></a>
                </div>
                <div class="footer-nav">
                    <ul>
                        <li><a href="home.html">Home</a></li>
                        <li><a href="events.html">Events</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="contactus.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-bottom">
                    <p>Copyright &copy;2023; Designed by <span class="designer">Sportsweb</span>,all rights reserved</p>
                </div>
            </div>
        </footer>

    </div>        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>