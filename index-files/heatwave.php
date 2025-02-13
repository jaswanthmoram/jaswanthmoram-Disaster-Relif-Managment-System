<?php
// Start the session to use session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heatwave</title>
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

    <!-- Heatwave Information Section -->
    <div class="container my-5">
        <h1 class="section-heading text-center mb-4">Heatwave</h1>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="images/heatwave.jpg" alt="Heatwave" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <div class="disaster-details">
                    <h3>Causes</h3>
                    <p>Heatwaves occur when high pressure traps warm air in a region, leading to prolonged periods of excessive heat. Climate change has contributed to the increase in frequency and severity of heatwaves globally.</p>

                    <h3>Precautions</h3>
                    <ul>
                        <li>Stay hydrated by drinking plenty of water.</li>
                        <li>Avoid going outdoors during peak heat hours, usually between 10 AM and 4 PM.</li>
                        <li>Wear light-colored, loose-fitting clothes.</li>
                        <li>Use sunscreen and seek shade when outdoors.</li>
                        <li>Check on elderly neighbors and those at risk.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="additional-info">
            <h3>Effects of Heatwaves</h3>
            <p>Heatwaves can lead to heat-related illnesses such as heat stroke, dehydration, and respiratory issues. Extreme heat can also cause wildfires, power outages, and damage to crops, affecting food security.</p>

            <h3>How to Prepare</h3>
            <ul>
                <li>Install air conditioning or ensure proper ventilation in your home.</li>
                <li>Keep an emergency kit with cooling supplies like fans, cool packs, and water.</li>
                <li>Pay attention to heat advisories and warnings from local authorities.</li>
                <li>Plan outdoor activities during cooler parts of the day.</li>
            </ul>

            
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
