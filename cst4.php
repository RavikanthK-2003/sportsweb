<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include "includes/head_links.php";
    ?>
    <link rel="stylesheet" href="css/stadium_detail.css"/>
    <title>Sports Web</title>
</head>
<body>
    <div class="contain">

        <?php
        include "includes/header.php";
        ?>

        <!-- Body of the page -->


        <div class="card-container">
            <div class="card">                    
                <img src="img/cricket/melborne.jpg" />
                <div class="card-content">
                    <h1>Melbourne  Ground</h1>
                    <p>Melbourne Cricket Ground, Melbourne,Australia</p>
                    <div class="property-gender">
                        <i class="fa-solid fa-person"></i>
                        <i class="fa-solid fa-person-dress"></i>
                        <i class="fa-solid fa-wheelchair-move"></i>
                    </div>
                    <div class="row no-gutters">
                        <div class="button-container col-6">
                            <a href="#" class="btn btn-info">Book A Seat</a>
                        </div>
                    </div>
                    <p class="info">
                        <p class="info">The Melbourne Cricket Ground (MCG), also known locally as The 'G,[5] is an Australian sports stadium located in Yarra Park, Melbourne, Victoria.
                            [6] Founded and managed by the Melbourne Cricket Club, it is the largest stadium in the Southern Hemisphere, the 11th largest globally, and the second-largest cricket ground by capacity, 
                            after the Narendra Modi Stadium. The MCG is within walking distance of the city centre and is served by Richmond and Jolimont railway stations, as well as the route 70, route 75, and route 48 trams.
                             It is adjacent to Melbourne Park and is part of the Melbourne Sports and Entertainment Precinct.[7]
                        It is equipped with floodlights, allowing for day-night matches.</p>
                    <table class="table align-middle table-bordered border-dark text-center text-capitalize">
                        <tr class="table-dark table-active text-uppercase text-white">
                            <td>opened</td>
                            <td>capacity</td>
                            <td>location</td>
                            <td>time zone</td>
                            <td>formats</td>
                            <td>Floodlights</td>
                        </tr>
                        <tr class="table table-info">
                            <td>1854</td>
                            <td>100000 </td>
                            <td>Melbourne, Australia</td>
                            <td>UTC +11:00</td>
                            <td>Test, ODI, T20</td>
                            <td>yes</td>

                        </tr>
                    </table><br><br>
                    <h5>STATS-TEST</h5>
                    <table class="table table-bordered border-danger text-center custom">
                            <tr>
                                <th> Total matches :</th>
                                <td>116</td>
                            </tr>
                            <tr>
                                <th> Matches won batting first</th>
                                <td>56</td>
                            </tr>
                            <tr>
                                <th> Matches won bowling first</th>
                                <td>42</td>
                            </tr>
                            <tr>
                                <th> Average 1st inns scores</th>
                                <td>307</td>
                            </tr>
                            <tr>
                                <th> Average 2nd inns scores</th>
                                <td>313</td>
                            </tr>
                            <tr>
                                <th> Average 3rd inns scores</th>
                                <td>252</td>
                            </tr>
                            <tr>
                                <th> Average 4th inns scores</th>
                                <td>171</td>
                            </tr>
                            <tr>
                                <th> Hightest total recorded</th>
                                <td>624/8 (142 Ov) by AUS vs PAK</td>
                            </tr>
                            <tr>
                                <th> Lowest total recorded</th>
                                <td>36/10 (23.2 Ov) by RSA vs AUS</td>
                            </tr>
                    
                    
                        </table><br><br>
                        <h5>STATS-ODI</h5>
                        <table class="table table-bordered border-danger text-center custom">
                            <tr>
                                <th> Total matches</th>
                                <td>158</td>
                            
                            </tr>
                            <tr>
                                <th> Matches won batting first</th>
                                <td>78</td>
                            </tr>
                            <tr>
                                <th> Matches won bowling first</th>
                                <td>75</td>
                            </tr>
                            <tr>
                                <th> Average 1st inns scores</th>
                                <td>222</td>
                            </tr>
                            <tr>
                                <th> Average 2nd inns scores</th>
                                <td>194</td>
                            </tr>
                            <tr>
                                <th> Hightest total recorded</th>
                                <td>334/4 (60 Ov) by ENG vs IND

                                </td>
                            </tr>
                            <tr>
                                <th> Lowest total recorded</th>
                                <td>94/10 (31.7 Ov) by ENG vs AUS</td>
                            </tr>
                            <tr>
                                <th>Highest score chased</th>
                                <td>308/5 (48.5 Ov) by ENG vs AUS</td>
                            </tr>
                            <tr>
                                <th>Lowest score chased</th>
                                <td>169/6 (57 Ov) by AUSW vs ENGW</td>
                            </tr>
                    
                        </table><br><br>
                        <h5>STATS-T20</h5>
                        <table class="table table-bordered border-danger text-center custom">
                        <tr>
                            <th> Total matches</th>
                            <td>27</td>
                        </tr>
                        <tr>
                            <th> Matches won batting first</th>
                            <td>11</td>
                        </tr>
                        <tr>
                            <th> Matches won bowling first</th>
                            <td>15</td>
                        </tr>
                        <tr>
                            <th> Average 1st inns scores</th>
                            <td>141</td>
                        </tr>
                        <tr>
                            <th> Average 2nd inns scores</th>
                            <td>124</td>
                        </tr>
                        <tr>
                            <th> Hightest total recorded</th>
                            <td>199/4 (20 Ov) by WI vs WXI

                            </td>
                        </tr>
                        <tr>
                            <th>Highest score chased</th>
                            <td>163/6 (20 Ov) by NED vs ENG</td>
                        </tr>
                        <tr>
                            <th>Lowest score chased</th>
                            <td>169/6 (57 Ov) by AUSW vs ENGW</td>
                        </tr>
                    
                    </table>
                    <br><br>
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