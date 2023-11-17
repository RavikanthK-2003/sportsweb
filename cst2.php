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
                <img src="img/cricket/lords.jpg" />
                <div class="card-content">
                    <h1>Lord's</h1>
                    <p>london Association Stadium, Lord's, India</p>
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
                    <p class="info">Lord's Cricket Ground, commonly known as Lord's, is a cricket venue in St John's Wood, London. 
                        Named after its founder, Thomas Lord, it is owned by Marylebone Cricket Club (MCC) and is the home of Middlesex County Cricket Club, 
                        the England and Wales Cricket Board (ECB), the European Cricket Council (ECC) and, until August 2005, the International Cricket Council (ICC).
                         Lord's is widely referred to as the Home of Cricket[2] and is home to the world's oldest sporting museum.[3]
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
                            <td>1814</td>
                            <td>30000</td>
                            <td>london,England</td>
                            <td>utc +01:00</td>
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
                                <td>334/4 (60 Ov) by ENG vs IND</td>
                            </tr>
                            <tr>
                                <th> Lowest total recorded</th>
                                <td>85/10 (39 Ov) by RSAW vs ENGW</td>
                            </tr>
                    
                    
                        </table><br><br>
                        <h5>STATS-ODI</h5>
                        <table class="table table-bordered border-danger text-center custom">
                            <tr>
                                <th> Total matches</th>
                                <td>85</td>
                            
                            </tr>
                            <tr>
                                <th> Matches won batting first</th>
                                <td>41</td>
                            </tr>
                            <tr>
                                <th> Matches won bowling first</th>
                                <td>39</td>
                            </tr>
                            <tr>
                                <th> Average 1st inns scores</th>
                                <td>231</td>
                            </tr>
                            <tr>
                                <th> Average 2nd inns scores</th>
                                <td>202</td>
                            </tr>
                            <tr>
                                <th> Hightest total recorded</th>
                                <td>Highest total recorded	334/4 (60 Ov) by ENG vs IND

                                </td>
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
                            <td>12</td>
                        </tr>
                        <tr>
                            <th> Matches won batting first</th>
                            <td>6</td>
                        </tr>
                        <tr>
                            <th> Matches won bowling first</th>
                            <td>5</td>
                        </tr>
                        <tr>
                            <th> Average 1st inns scores</th>
                            <td>151</td>
                        </tr>
                        <tr>
                            <th> Average 2nd inns scores</th>
                            <td>129</td>
                        </tr>
                        <tr>
                            <th> Hightest total recorded</th>
                            <td>	199/4 (20 Ov) by WI vs WXI

                            </td>
                        </tr>
                        <tr>
                            <th>Highest score chased</th>
                            <td>163/6 (20 Ov) by NED vs ENG</td>
                        </tr>
                        <tr>
                            <th>Lowest score chased</th>
                            <td>128/7 (20 Ov) by RSA vs NZ

                            </td>
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