<?php
// Start the session to use session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsunami</title>
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


    <!-- Tsunami Information Section -->
    <div class="container my-5">
        <h1 class="section-heading text-center mb-4">Tsunami</h1>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="images/tsunami.jpg" alt="Tsunami" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <div class="disaster-details">
                    <h3>Causes</h3>
                    <p>Tsunamis are often caused by underwater earthquakes, volcanic eruptions, or landslides. These events displace large volumes of water, generating powerful waves that can travel across the ocean.</p>

                    <h3>Precautions</h3>
                    <ul>
                        <li>Immediately move to higher ground if you are near the coast and feel strong shaking or hear a tsunami warning.</li>
                        <li>Do not wait for an official warning; tsunamis can arrive quickly.</li>
                        <li>Stay away from the beach and do not go to the shore to watch a tsunami.</li>
                        <li>Follow evacuation routes and local authority instructions.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="additional-info">
            <h3>Effects of Tsunamis</h3>
            <p>Tsunamis can cause catastrophic damage to coastal communities. Their massive waves can destroy homes, roads, and infrastructure, leading to significant loss of life and economic damage.</p>

            <h3>How to Prepare</h3>
            <ul>
                <li>Have an emergency plan and know evacuation routes for your area.</li>
                <li>Keep an emergency kit with food, water, first aid, and important documents.</li>
                <li>Know the warning signs of a tsunami, such as rapidly receding water and strong ocean currents.</li>
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
