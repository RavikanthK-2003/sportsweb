<div class="header sticky-top">
    <nav class="navbar navbar-light">
        <a class="navbar-brand" href="home.php">
            <img class="logo" src="img/logo.jpg" />
        </a>

        <?php
        //Check if user is loging or not
        if (!isset($_SESSION["user_id"])) {
        ?>
            <li class="nav-item su">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#signup-modal">
                    <i class="fas fa-user"></i>&nbsp;Signup
                </a>
            </li>
            <div class="nav-vl"></div>
            <li class="nav-item si">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#login-modal">
                    <i class="fas fa-sign-in-alt"></i>&nbsp;Login
                </a>
            </li>
        <?php
        } else {
        ?>
            <div class='nav-name'>
                Hi, <?php echo $_SESSION["full_name"] ?>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-user"></i>Dashboard
                </a>
            </li>
            <div class="nav-vl"></div>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i class="fas fa-sign-out-alt"></i>Logout
                </a>
            </li>
        <?php
        }
        ?>


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
            <ul class="navbar-nav">

                <li><a href="home.php">Home</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contactus.php">Contact Us</a></li>

            </ul>
        </div>
    </nav>
</div>

<div id="loading">
</div>
