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
                <img src="img/cricket/chinnaswamy.jpg" />
                <div class="card-content">
                    <h1>M Chinnaswamy</h1>
                    <p>M Chinnaswamy Cricket Association Stadium, Bengaluru, India</p>
                    <div class="property-gender">
                        <i class="fa-solid fa-person"></i>
                        <i class="fa-solid fa-person-dress"></i>
                        <i class="fa-solid fa-wheelchair-move"></i>
                    </div>
                    <div class="row no-gutters">
                        <div class="button-container col-6">
                            <a href="#" class="btn btn-info">Book A Seat</a>
                        </div>
                    </div>The M. Chinnaswamy Stadium is a cricket stadium in Bangalore, Karnataka, India.
                     It is owned by Government of Karnataka and operated by Karnataka State Cricket Association (KSCA).[2]
                     It is the first cricket stadium in the world to use solar panels to generate a bulk of the electricity needed to run the stadium.
                     [5] The panels were procured through the "Go Green" initiative of the KSCA.[6][7] In 2016 a water purification plant was added,
                      [8] and by January 2017 a system of aeration and drainage was in place to avoid matches being curtailed due to a wet outfield.[9]
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
                            <td>1969</td>
                            <td>40000</td>
                            <td>Bengalore,india</td>
                            <td>utc+05:30</td>
                            <td>Test, ODI, T20</td>
                            <td>yes</td>

                        </tr>
                    </table><br><br>
                    <h5>STATS-TEST</h5>
                    <table class="table table-bordered border-danger text-center custom">
                            <tr>
                                <th> Total matches :</th>
                                <td>25</td>
                            </tr>
                            <tr>
                                <th> Matches won bowling first</th>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th> Average 1st inns scores</th>
                                <td>354</td>
                            </tr>
                            <tr>
                                <th> Average 2nd inns scores</th>
                                <td>304</td>
                            </tr>
                            <tr>
                                <th> Average 3rd inns scores</th>
                                <td>206</td>
                            </tr>
                            <tr>
                                <th> Average 4th inns scores</th>
                                <td>174</td>
                            </tr>
                            <tr>
                                <th> Hightest total recorded</th>
                                <td>626/10 (150.2 Ov) by IND vs PAK</td>
                            </tr>
                            <tr>
                                <th> Lowest total recorded</th>
                                <td>103/10 (38.4 Ov) by AFG vs IND</td>
                            </tr>
                    
                    
                        </table><br><br>
                        <h5>STATS-ODI</h5>
                        <table class="table table-bordered border-danger text-center custom">
                            <tr>
                                <th> Total matches</th>
                                <td>41</td>
                            </tr>
                            <tr>
                                <th> Matches won batting first</th>
                                <td>15</td>
                            </tr>
                            <tr>
                                <th> Matches won bowling first</th>
                                <td>22</td>
                            </tr>
                            <tr>
                                <th> Average 1st inns scores</th>
                                <td>237</td>
                            </tr>
                            <tr>
                                <th> Average 2nd inns scores</th>
                                <td>216</td>
                            </tr>
                            <tr>
                                <th> Hightest total recorded</th>
                                <td>401/6 (50 Ov) by NZ vs PAK</td>
                            </tr>
                            <tr>
                                <th> Lowest total recorded</th>
                                <td>114/10 (38.5 Ov) by INDW vs RSAW</td>
                            </tr>
                            <tr>
                                <th>Highest score chased</th>
                                <td>329/7 (49.1 Ov) by IRE vs ENG</td>
                            </tr>
                            <tr>
                                <th>Lowest score chased</th>
                                <td>166/4 (22 Ov) by IND vs ENG</td>
                            </tr>
                    
                        </table><br><br>
                        <h5>STATS-T20</h5>
                        <table class="table table-bordered border-danger text-center custom">
                        <tr>
                            <th> Total matches</th>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th> Matches won batting first</th>
                            <td>6</td>
                        </tr>
                        <tr>
                            <th> Matches won bowling first</th>
                            <td>9</td>
                        </tr>
                        <tr>
                            <th> Average 1st inns scores</th>
                            <td>135</td>
                        </tr>
                        <tr>
                            <th> Average 2nd inns scores</th>
                            <td>130</td>
                        </tr>
                        <tr>
                            <th> Hightest total recorded</th>
                            <td>202/6 (20 Ov) by IND vs ENG</td>
                        </tr>
                        <tr>
                            <th>Highest score chased</th>
                            <td>99/10 (19.3 Ov) by RSAW vs NZW</td>
                        </tr>
                        <tr>
                            <th>Lowest score chased</th>
                            <td>59/5(6 Ovs)by NED vs IRE</td>
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