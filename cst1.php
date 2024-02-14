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
                <img src="img/cricket/darmasala.jpg" />
                <div class="card-content">
                    <h1>Darmasala</h1>
                    <p>Himachal Pradesh Cricket Association Stadium, Dharamsala, India</p>
                    <div class="property-gender">
                        <i class="fa-solid fa-person"></i>
                        <i class="fa-solid fa-person-dress"></i>
                        <i class="fa-solid fa-wheelchair-move"></i>
                    </div>
                    <div class="row no-gutters">
                        <div class="button-container col-6">
                            <a href="#" class="btn border-none btn-info">Book A Seat</a>
                        </div>
                    </div>
                    <p class="info">The stadium was opened in the year 2003 in Dharamsala, India.
                        Its geographical coordinates place it in Dharamsala, and it is situated near a river, with ends named "River End" and "College End."
                        The stadium has a capacity of 23,000 spectators.
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
                            <td>2003</td>
                            <td>23000</td>
                            <td>dharamsala,india</td>
                            <td>utc+05:30</td>
                            <td>Test, ODI, T20</td>
                            <td>yes</td>

                        </tr>
                    </table><br><br>
                    <h5>STATS-TEST</h5>
                    <table class="table table-bordered border-danger text-center custom">
                            <tr>
                                <th> Total matches :</th>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th> Matches won bowling first</th>
                                <td>1</td>
                            </tr>
                            <tr>
                                <th> Average 1st inns scores</th>
                                <td>300</td>
                            </tr>
                            <tr>
                                <th> Average 2nd inns scores</th>
                                <td>332</td>
                            </tr>
                            <tr>
                                <th> Average 3rd inns scores</th>
                                <td>137</td>
                            </tr>
                            <tr>
                                <th> Average 4th inns scores</th>
                                <td>106</td>
                            </tr>
                            <tr>
                                <th> Hightest total recorded</th>
                                <td>332/10(118.1 Ovs)by IND vs AUS</td>
                            </tr>
                            <tr>
                                <th> Lowest total recorded</th>
                                <td>137/10(53.5 Ovs)by AUS vs IND</td>
                            </tr>
                    
                    
                        </table><br><br>
                        <h5>STATS-ODI</h5>
                        <table class="table table-bordered border-danger text-center custom">
                            <tr>
                                <th> Total matches</th>
                                <td>9</td>
                            </tr>
                            <tr>
                                <th> Matches won batting first</th>
                                <td>9</td>
                            </tr>
                            <tr>
                                <th> Matches won bowling first</th>
                                <td>5</td>
                            </tr>
                            <tr>
                                <th> Average 1st inns scores</th>
                                <td>253</td>
                            </tr>
                            <tr>
                                <th> Average 2nd inns scores</th>
                                <td>228</td>
                            </tr>
                            <tr>
                                <th> Hightest total recorded</th>
                                <td>338/10(49.5 Ovs)by AUS vs NZ</td>
                            </tr>
                            <tr>
                                <th> Lowest total recorded</th>
                                <td>112/10(38.2 Ovs)by IND vs SL</td>
                            </tr>
                            <tr>
                                <th>Highest score chased</th>
                                <td>274/6(48 Ovs)by IND vs NZ</td>
                            </tr>
                            <tr>
                                <th>Lowest score chased</th>
                                <td>245/8(43 Ovs)by NED vs RSA</td>
                            </tr>
                    
                        </table><br><br>
                        <h5>STATS-T20</h5>
                        <table class="table table-bordered border-danger text-center custom">
                        <tr>
                            <th> Total matches</th>
                            <td>11</td>
                        </tr>
                        <tr>
                            <th> Matches won batting first</th>
                            <td>4</td>
                        </tr>
                        <tr>
                            <th> Matches won bowling first</th>
                            <td>6</td>
                        </tr>
                        <tr>
                            <th> Average 1st inns scores</th>
                            <td>137</td>
                        </tr>
                        <tr>
                            <th> Average 2nd inns scores</th>
                            <td>128</td>
                        </tr>
                        <tr>
                            <th> Hightest total recorded</th>
                            <td>200/3(19.4 Ovs)by RSA vs IND</td>
                        </tr>
                        <tr>
                            <th>Highest score chased</th>
                            <td>200/3(19.4 Ovs)by RSA vs IND</td>
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