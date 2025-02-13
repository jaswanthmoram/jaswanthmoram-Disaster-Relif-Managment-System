<?php
// Start the session to use session variables
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earthquake</title>
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

    <!-- Earthquake Information Section -->
    <div class="container my-5">
        <h1 class="section-heading text-center mb-4">Earthquake</h1>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="images/earthquake.jpg" alt="Earthquake" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <div class="disaster-details">
                    <h3>Causes</h3>
                    <p>Earthquakes are caused by the movement of tectonic plates beneath the Earth's surface. This movement generates seismic waves, resulting in the shaking of the ground.</p>

                    <h3>Precautions</h3>
                    <ul>
                        <li>Drop, cover, and hold on during shaking.</li>
                        <li>Stay away from windows, doorways, and heavy objects.</li>
                        <li>If indoors, stay indoors; if outdoors, move to an open area.</li>
                        <li>Do not use elevators.</li>
                        <li>Be prepared for aftershocks.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="additional-info">
            <h3>Effects of Earthquakes</h3>
            <p>Earthquakes can cause extensive damage to buildings and infrastructure, leading to injuries and loss of life. Secondary effects may include landslides, tsunamis, and fires.</p>

            <h3>How to Prepare</h3>
            <ul>
                <li>Secure heavy objects and furniture to walls.</li>
                <li>Have an emergency kit with essential supplies.</li>
                <li>Create and practice a family emergency plan.</li>
            </ul>

    </div>

    <footer class="footer bg-dark text-white text-center py-3">
        <p>&copy; 2024 Disaster Management System</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>