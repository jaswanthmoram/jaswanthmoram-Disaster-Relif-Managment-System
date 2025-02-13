<?php
// Start the session to use session variables
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Disaster Management</title>
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
<!-- Banner Section -->
<div class="banner-section-bg-container d-flex justify-content-center flex-column">
        <div class="text-center">
            <h1 class="banner-heading mb-3">Disaster Management</h1>
            <p class="banner-caption mb-4">Relief Assistance</p>
            <button class="custom-button" onclick="document.getElementById('know-more-section').scrollIntoView({behavior: 'smooth'})">Know More</button>
            <button class="custom-outline-button" onclick="document.getElementById('features-section').scrollIntoView({behavior: 'smooth'})">Services</button>
        </div>
    </div>

    <!-- Know More Section (Disaster Info) -->
    <div id="know-more-section" class="container my-5">
        <h2 class="text-center mb-4">What is Disaster Management?</h2>
        <p>Disaster management is the process of preparing for, mitigating, responding to, and recovering from disasters. It involves a coordinated approach between various organizations, agencies, and communities to minimize the impact of disasters on life, property, and the environment.</p>

        <h3>Key Types of Disasters:</h3>
        <ul>
            <li><strong>Natural Disasters:</strong> These include earthquakes, tsunamis, floods, and hurricanes. They result from natural processes and phenomena.</li>
            <li><strong>Man-made Disasters:</strong> These include industrial accidents, terrorism, nuclear explosions, and fires, often caused by human actions or negligence.</li>
        </ul>

        <h3>Phases of Disaster Management:</h3>
        <ul>
            <li><strong>Preparedness:</strong> Planning and training to reduce risks before a disaster occurs.</li>
            <li><strong>Response:</strong> Actions taken during a disaster to protect lives and property.</li>
            <li><strong>Recovery:</strong> Efforts to restore normalcy after a disaster, including reconstruction.</li>
            <li><strong>Mitigation:</strong> Implementing measures to reduce the severity of future disasters.</li>
        </ul>
    </div>

    <!-- Key Features Section -->
    <div id="features-section" class="container my-5">
        <h2 class="text-center mb-4">Key Features of Our Website</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <h4>View Disaster Information</h4>
                <p>Get comprehensive information on past and current disasters, including causes, impacts, and prevention tips.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4>Live Disasters Update</h4>
                <p>Stay informed with real-time updates on ongoing disasters. Track affected areas, safety advisories, and emergency protocols.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4>Help Victims</h4>
                <p>Offer assistance to disaster-affected individuals by contributing resources like food, medical supplies, and shelter.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4>Report Disasters</h4>
                <p>Victims or witnesses can report new disasters, providing detailed information to emergency services and responders.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4>Ask for Help</h4>
                <p>Victims can request assistance during and after disasters, whether for immediate relief or post-disaster recovery.</p>
            </div>
            <div class="col-md-4 mb-4">
                <h4>Insurance Claims</h4>
                <p>Disaster-affected individuals can file insurance claims for damages. The platform offers a streamlined process to facilitate compensation.</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3">
        <p>&copy; 2024 Disaster Management System</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
