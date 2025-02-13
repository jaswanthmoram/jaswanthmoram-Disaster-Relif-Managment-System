<?php
// Start the session to use session variables
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volcano</title>
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
    
    <!-- Volcano Information Section -->
    <div class="container my-5">
        <h1 class="section-heading text-center mb-4">Volcano</h1>

        <div class="row mb-5">
            <div class="col-md-6">
                <img src="images/volcano.jpg" style="height:400px;" alt="Volcano" class="img-fluid rounded">
            </div>
            <div class="col-md-6">
                <div class="disaster-details">
                    <h3>Causes</h3>
                    <p>Volcanoes occur when molten rock, gases, and debris escape from beneath the Earth's crust through vents. Tectonic plate movements often trigger volcanic activity. Other factors include hotspots and subduction zones.</p>

                    <h3>Precautions</h3>
                    <ul>
                        <li>Evacuate immediately when volcanic activity is detected or warnings are issued.</li>
                        <li>Avoid low-lying areas where lava and ash may flow.</li>
                        <li>Wear protective gear like masks and goggles to protect from ashfall.</li>
                        <li>Stay indoors during ashfall and keep windows and doors closed.</li>
                        <li>Prepare an emergency kit with essential items like food, water, and first aid supplies.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="additional-info">
            <h3>Effects of Volcanoes</h3>
            <p>Volcanic eruptions can lead to lava flows, ashfall, pyroclastic flows, and volcanic gas emissions. These hazards can cause destruction of property, injury, and loss of life. Ash clouds can also disrupt air travel and lead to long-term environmental damage.</p>

            <h3>How to Prepare</h3>
            <ul>
                <li>Have an evacuation plan in place and familiarize yourself with local volcano hazard maps.</li>
                <li>Store emergency supplies, including masks to protect from ash inhalation.</li>
                <li>Listen to local authorities and heed warnings or evacuation orders promptly.</li>
                <li>If living near an active volcano, reinforce your home and ensure safe escape routes.</li>
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
