<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="css/stadium_list.css"/>
    <title>Sports Web</title>
</head>
<body>
    <div class="contain">

        <?php
        include "includes/header.php";
        ?>

        <!-- Body of the page -->

        <div class="page-container"> 
            <div class="banner-container">
                <h2 class="white pb-3">Find your stadium and Book your seats</h2>
        
                <form id="search-form" action="" method="GET">
                    <div class="input-group city-search">
                        <input type="text" class="form-control input-city" id='city' name='city' placeholder="Enter your country to search for Stadiums" />
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

            <h2 class="ha">Top Rated Stadiums</h2>
            
            
            <div class="property-card row">
                <div class="image-container col-md-4">
                    <img src="img/cricket/darmasala.jpg" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="star-container" title="">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                        </div>
                        <div class="interested-container">
                                <i class="fas fa-heart"></i>
                            <div class="interested-text">Interested</div>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="property-name">Darmasala</div>
                        <div class="property-address">Himachal Pradesh Cricket Association Stadium, Dharamsala, India</div>
                        <div class="property-gender">
                            <i class="fa-solid fa-person"></i>
                            <i class="fa-solid fa-person-dress"></i>
                            <i class="fa-solid fa-wheelchair-move"></i>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="button-container col-6">
                            <a href="cst1.php" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
            </div>




            <div class="property-card row">
                <div class="image-container col-md-4">
                    <img src="img/cricket/lords.jpg" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="star-container" title="">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    <i class="far fa-star"></i>
                        </div>
                        <div class="interested-container">
                            <i class="fa-regular fa-heart"></i>
                            <div class="interested-text">Interested</div>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="property-name">Lords</div>
                        <div class="property-address">Marylebone Cricket Club, Middlesex, London</div>
                        <div class="property-gender">
                            <i class="fa-solid fa-person"></i>
                            <i class="fa-solid fa-person-dress"></i>
                            <i class="fa-solid fa-wheelchair-move"></i>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="button-container col-6">
                            <a href="cst2.php" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
            </div>






            <div class="property-card row">
                <div class="image-container col-md-4">
                    <img src="img/cricket/chinnaswamy.jpg" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="star-container" title="">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                    
                        </div>
                        <div class="interested-container">
                                <i class="fas fa-heart"></i>
                            <div class="interested-text">Interested</div>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="property-name">Chinnaswamy</div>
                        <div class="property-address">Karnataka State Cricket Association Stadium, Bengaluru, India</div>
                        <div class="property-gender">
                            <i class="fa-solid fa-person"></i>
                            <i class="fa-solid fa-person-dress"></i>
                            <i class="fa-solid fa-wheelchair-move"></i>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="button-container col-6">
                            <a href="cst3.php" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
            </div>






            <div class="property-card row">
                <div class="image-container col-md-4">
                    <img src="img/cricket/melborne.jpg" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="star-container" title="">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                        </div>
                        <div class="interested-container">
                                <i class="fas fa-heart"></i>
                            <div class="interested-text">Interested</div>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="property-name">Melbourne</div>
                        <div class="property-address">Melbourne Cricket Ground, Melbourne, Australia</div>
                        <div class="property-gender">
                            <i class="fa-solid fa-person"></i>
                            <i class="fa-solid fa-person-dress"></i>
                            <i class="fa-solid fa-wheelchair-move"></i>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="button-container col-6">
                            <a href="cst4.php" class="btn btn-info">View</a>
                        </div>
                    </div>
                </div>
            </div>
                        
            
            <div class="property-card row">
                <div class="image-container col-md-4">
                    <img src="img/cricket/karachi.jpg" />
                </div>
                <div class="content-container col-md-8">
                    <div class="row no-gutters justify-content-between">
                        <div class="star-container" title="">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                        </div>
                        <div class="interested-container">
                                <i class="fas fa-heart"></i>
                            <div class="interested-text">Interested</div>
                        </div>
                    </div>
                    <div class="detail-container">
                        <div class="property-name">Newlands</div>
                        <div class="property-address">New lands, Cape Town, South Africa</div>
                        <div class="property-gender">
                            <i class="fa-solid fa-person"></i>
                            <i class="fa-solid fa-person-dress"></i>
                            <i class="fa-solid fa-wheelchair-move"></i>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="button-container col-6">
                            <a href="cst5.php" class="btn btn-info">View</a>
                        </div>
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