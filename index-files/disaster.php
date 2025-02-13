<?php
// Start the session to use session variables
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disasters</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="temp.css">
</head>

<body>
  <!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #dfefff; color: white;">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" class="food-munch-logo" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ml-auto">
                    <button><a class="nav-link active pl-2" id="navItem1" href="home.php">Home <span class="sr-only">(current)</span></a></button>
                    <button><a class="nav-link pl-2" href="disaster.php" id="navItem2">Disasters</a></button>
                    <button><a class="nav-link pl-2" href="report.php" id="navItem3">Report</a></button>
                    <button><a class="nav-link pl-2" href="victim.php" id="navItem4">Victims</a></button>
                    <button><a class="nav-link pl-2" href="victimhelp.php" id="navItem5">Help Victims</a></button>
                    <button><a class="nav-link pl-2" href="insurance.php" id="navItem5">Insurance Claim</a></button>
                    <button><a class="nav-link pl-2" href="awareness.php" id="navItem6">Awareness</a></button>

                    <!-- Conditional Login/Username Display -->
                    <?php if (isset($_SESSION['username'])): ?>
                        <button class="nav-link pl-2">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></button>
                        <button><a class="nav-link pl-2" href="logout.php" id="navItemLogout">Logout</a></button>
                    <?php else: ?>
                        <button><a class="nav-link pl-2" href="login.php" id="navItemLogin">Login</a></button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </nav>

    <!-- Disasters Section -->
    <div class="container my-5">
        <h1 class="text-center mb-5">Types of Disasters</h1>
        <div class="row">
            <!-- Earthquake -->
            <div class="col-md-4 mb-4">
                <div class="disaster-box">
                    <a href="earthquake.php">
                        <img src="images/earthquake.jpg" alt="Earthquake" class="disaster-image">
                        <h3 class="disaster-title">Earthquake</h3>
                    </a>
                    <p class="disaster-info">Earthquakes are caused by the shifting of tectonic plates beneath the Earth's surface, leading to intense ground shaking.</p>
                </div>
            </div>
            <!-- Flood -->
            <div class="col-md-4 mb-4">
                <div class="disaster-box">
                    <a href="flood.php">
                        <img src="images/flood.jpg" alt="Flood" class="disaster-image">
                        <h3 class="disaster-title">Flood</h3>
                    </a>
                    <p class="disaster-info">Floods occur when water overflows onto land, typically caused by heavy rain, overflowing rivers, or coastal storms.</p>
                </div>
            </div>
            <!-- Tsunami -->
            <div class="col-md-4 mb-4">
                <div class="disaster-box">
                    <a href="tsunami.php">
                        <img src="images/tsunami.jpg" alt="Tsunami" class="disaster-image">
                        <h3 class="disaster-title">Tsunami</h3>
                    </a>
                    <p class="disaster-info">Tsunamis are large ocean waves caused by underwater earthquakes, volcanic eruptions, or landslides.</p>
                </div>
            </div>
            <!-- Heatwave -->
            <div class="col-md-4 mb-4">
                <div class="disaster-box">
                    <a href="heatwave.php">
                        <img src="images/heatwave.jpg" alt="Heatwave" class="disaster-image">
                        <h3 class="disaster-title">Heatwave</h3>
                    </a>
                    <p class="disaster-info">A heatwave is a prolonged period of excessive heat, often accompanied by high humidity, posing serious health risks.</p>
                </div>
            </div>
            <!-- Volcano -->
            <div class="col-md-4 mb-4">
                <div class="disaster-box">
                    <a href="volcano.php">
                        <img src="images/volcano.jpg" alt="Volcano" class="disaster-image">
                        <h3 class="disaster-title">Volcano</h3>
                    </a>
                    <p class="disaster-info">Volcanic eruptions occur when molten rock, ash, and gases escape from beneath the Earth's surface, often causing widespread damage.</p>
                </div>
            </div>
            <!-- Cyclone -->
            <div class="col-md-4 mb-4">
                <div class="disaster-box">
                    <a href="cyclone.php">
                        <img src="images/cyclone.jpg" alt="Cyclone" class="disaster-image">
                        <h3 class="disaster-title">Cyclone</h3>
                    </a>
                    <p class="disaster-info">A cyclone is a large-scale air mass that rotates around a strong center of low atmospheric pressure, bringing heavy rains, strong winds, and storm surges.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer bg-dark text-white text-center py-3">
        <p>&copy; 2024 Disaster Management System</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>