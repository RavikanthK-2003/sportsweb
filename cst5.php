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
                <img src="img/cricket/karachi.jpg" />
                <div class="card-content">
                    <h1>Newlands, Cape Town</h1>
                    <p>Newlands, Cape Town, South Africa</p>
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
                    <p class="info">Newlands Cricket Ground (known as Six Gun Grill Newlands for sponsorship reasons)
                            in Cape Town is a South African cricket ground. It is the home of the Western Province and MI Cape Town. 
                            It is also a venue for Test matches, ODIs and T20Is. Newlands is regarded as one of the most beautiful cricket grounds 
                            in the world, being overlooked by Table Mountain and Devil's Peak. It is close to Newlands Stadium, which was a rugby union and football venue.
                            The cricket ground opened in 1888. In March 2019, it was announced that the owners of Newlands Cricket Ground, the Western Province Cricket Association,
                            went into partnership with Sanlam, to form a new office-block development as part of the cricket ground.[2]
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
                            <td>25,000 </td>
                            <td>Cape Town, South Africa</td>
                            <td>UTC +02:00</td>
                            <td>Test, ODI, T20</td>
                            <td>yes</td>

                        </tr>
                    </table><br><br>
                    <h5>STATS-TEST</h5>
                    <table class="table table-bordered border-danger text-center custom">
                            <tr>
                                <th> Total matches :</th>
                                <td>60</td>
                            </tr>
                            <tr>
                                <th> Matches won batting first</th>
                                <td>23</td>
                            </tr>
                            <tr>
                                <th> Matches won bowling first</th>
                                <td>25</td>
                            </tr>
                            <tr>
                                <th> Average 1st inns scores</th>
                                <td>325</td>
                            </tr>
                            <tr>
                                <th> Average 2nd inns scores</th>
                                <td>292</td>
                            </tr>
                            <tr>
                                <th> Average 3rd inns scores</th>
                                <td>234</td>
                            </tr>
                            <tr>
                                <th> Average 4th inns scores</th>
                                <td>163</td>
                            </tr>
                            <tr>
                                <th> Hightest total recorded</th>
                                <td>651/10 (154.3 Ov) by RSA vs AUS</td>
                            </tr>
                            <tr>
                                <th> Lowest total recorded</th>
                                <td>35/10 (22.4 Ov) by RSA vs ENG </td>
                            </tr>
                    
                    
                        </table><br><br>
                        <h5>STATS-ODI</h5>
                        <table class="table table-bordered border-danger text-center custom">
                            <tr>
                                <th> Total matches</th>
                                <td>47</td>
                            
                            </tr>
                            <tr>
                                <th> Matches won batting first</th>
                                <td>30</td>
                            </tr>
                            <tr>
                                <th> Matches won bowling first</th>
                                <td>16</td>
                            </tr>
                            <tr>
                                <th> Average 1st inns scores</th>
                                <td>233</td>
                            </tr>
                            <tr>
                                <th> Average 2nd inns scores</th>
                                <td>188</td>
                            </tr>
                            <tr>
                                <th> Hightest total recorded</th>
                                <td>367/5 (50 Ov) by RSA vs SL

                                </td>
                            </tr>
                            <tr>
                                <th> Lowest total recorded</th>
                                <td>43/10 (19.5 Ov) by PAK vs WI
                                    </td>
                            </tr>
                            <tr>
                                <th>Highest score chased</th>
                                <td>308/5 (48.5 Ov) by ENG vs AUS</td>
                            </tr>
                            <tr>
                                <th>Lowest score chased</th>
                                <td>140/9 (50 Ov) by RSA vs WI</td>
                            </tr>
                    
                        </table><br><br>
                        <h5>STATS-T20</h5>
                        <table class="table table-bordered border-danger text-center custom">
                        <tr>
                            <th> Total matches</th>
                            <td>38</td>
                        </tr>
                        <tr>
                            <th> Matches won batting first</th>
                            <td>15</td>
                        </tr>
                        <tr>
                            <th> Matches won bowling first</th>
                            <td>21</td>
                        </tr>
                        <tr>
                            <th> Average 1st inns scores</th>
                            <td>151</td>
                        </tr>
                        <tr>
                            <th> Average 2nd inns scores</th>
                            <td>138</td>
                        </tr>
                        <tr>
                            <th> Hightest total recorded</th>
                            <td>213/5 (20 Ov) by ENGW vs PAKW

                            </td>
                        </tr>
                        <tr>
                            <th>Highest score chased</th>
                            <td>1192/1 (17.4 Ov) by ENG vs RSA</td>
                        </tr>
                        <tr>
                            <th>Lowest score chased</th>
                            <td>119/3 (20 Ov) by RSAW vs WIW</td>
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