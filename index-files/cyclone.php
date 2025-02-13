<?php
// Start the session to use session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyclone</title>
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

    <!-- Cyclone Information Section -->
    <div class="container my-5">
        <h1 class="section-heading text-center mb-4">Cyclone</h1>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="images/cyclone.jpg" style="height:400px;" alt="Cyclone" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <div class="disaster-details">
                    <h3>Causes</h3>
                    <p>Cyclones are intense circular storms that originate over warm tropical waters, characterized by low atmospheric pressure, high winds, and heavy rain. The main driving force behind cyclones is the evaporation of warm seawater, which fuels the storm's energy.</p>

                    <h3>Precautions</h3>
                    <ul>
                        <li>Evacuate if instructed by local authorities.</li>
                        <li>Stay indoors and away from windows during the cyclone.</li>
                        <li>Prepare an emergency kit with food, water, and essential supplies.</li>
                        <li>Secure outdoor objects that can become projectiles in high winds.</li>
                        <li>Monitor weather updates and warnings from official sources.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="additional-info">
            <h3>Effects of Cyclones</h3>
            <p>Cyclones can cause extensive damage due to high winds, heavy rainfall, and storm surges, leading to flooding, destruction of homes, uprooting of trees, and loss of life. The aftermath may include water contamination, disease outbreaks, and long-term disruption to local infrastructure.</p>

            <h3>How to Prepare</h3>
            <ul>
                <li>Have a family evacuation plan and identify safe shelters in advance.</li>
                <li>Install storm shutters on windows to prevent damage.</li>
                <li>Keep important documents and valuables in a waterproof container.</li>
                <li>Stock up on essential supplies, including food, water, and first aid materials.</li>
                <li>Unplug electrical appliances to prevent damage from power surges.</li>
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
