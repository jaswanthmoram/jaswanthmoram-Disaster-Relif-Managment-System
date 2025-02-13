<?php
// Start the session to use session variables
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Victims - Disaster Management</title>
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

    <!-- Victim Form Section -->
    <div class="container mt-5 ">
        <div class="bg-primary text-white text-center py-5">
        <h2 class="text-center ">Report Your Situation</h2>
        <p class="text-center">Please provide the details of the disaster you're affected by, and select your requirements.</p>
    </div>
    <br>
    <br>
        <form id="victimForm" action="submit-victim-report.php" method="POST">
            <div class="form-group">
                <label for="disasterType">Type of Disaster</label>
                <select class="form-control" id="disasterType" name="disasterType" required>
                    <option value="">Select Disaster Type</option>
                    <option value="earthquake">Earthquake</option>
                    <option value="flood">Flood</option>
                    <option value="tsunami">Tsunami</option>
                    <option value="heatwave">Heatwave</option>
                    <option value="volcano">Volcano</option>
                    <option value="cyclone">Cyclone</option>
                </select>
            </div>

            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control" id="location" name="location" placeholder="Enter your location" required>
            </div>

            <div class="form-group">
                <label for="requirements">Select your requirement</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="food" name="requirement[]" value="food">
                    <label class="form-check-label" for="food">
                        Food Assistance
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="rescue" name="requirement[]" value="rescue">
                    <label class="form-check-label" for="rescue">
                        Rescue Assistance
                    </label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Disaster Management System</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
