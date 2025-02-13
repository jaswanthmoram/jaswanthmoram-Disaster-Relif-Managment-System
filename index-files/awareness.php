<?php
// Start the session to use session variables
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disaster Awareness</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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

    <!-- Header Section -->
    <header class="bg-primary text-white text-center py-5">
        <h1>Awareness on Natural Disasters</h1>
        <p>Learn about the causes, effects, and ways to prepare for natural disasters.</p>
    </header>

    <!-- Main Content Section -->
    <div class="container my-5">
        <!-- Preparedness Section -->
        <div class="row mt-5">
            <div class="col-md-8">
                <h2>How to Prepare for Disasters</h2>
                <p>To reduce the impact of natural disasters, it is crucial to have a disaster preparedness plan in place. This includes:</p>
                <ul>
                    <li>Understanding the risks in your area.</li>
                    <li>Preparing an emergency kit with essential supplies.</li>
                    <li>Creating a communication plan with family and friends.</li>
                    <li>Following evacuation orders and knowing safe routes.</li>
                </ul>
            </div>
            <div class="col-md-4">
              <br> <br>
              <img src="images/Economic-Losses-and-Insured-Losses-due-to-Natural-Disasters.png" width="350px" height="200px" alt="Graph of Share of Deaths from Natural Disasters" >
             </div>
        </div>
        <br><br>
        <div class="container my-5">
            <!-- Statistics Section -->
            <div class="row">
                <!-- Card 1: People Suffering -->
                <div class="col-md-4">
    <div class="card text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: transform 0.3s;">
        <div class="card-body">
            <h5 class="card-title">People Suffering</h5>
            <p class="card-text">
                <span style="font-size: 2rem;">50,000+</span><br>
                People are currently affected by natural disasters worldwide.
            </p>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: transform 0.3s;">
        <div class="card-body">
            <h5 class="card-title">People Dying</h5>
            <p class="card-text">
                <span style="font-size: 2rem;">2,500+</span><br>
                Deaths from natural disasters recorded this year.
            </p>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card text-center" style="box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); transition: transform 0.3s;">
        <div class="card-body">
            <h5 class="card-title">Ongoing Disasters</h5>
            <p class="card-text">
                <span style="font-size: 2rem;">15</span><br>
                Major disasters currently affecting the world.
            </p>
        </div>
    </div>
</div>

<script>
    const cards = document.querySelectorAll('.card');
    cards.forEach(card => {
        card.addEventListener('mouseover', () => {
            card.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.3)';
            card.style.transform = 'scale(1.05)';
        });
        card.addEventListener('mouseout', () => {
            card.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.2)';
            card.style.transform = 'scale(1)';
        });
    });
</script>
        </div>
        <br>
        <br>
        <div class="row">
            <!-- Left Content - Information -->
            <div class="col-md-8">
                <h2>Types of Natural Disasters</h2>
                <p>Natural disasters include a range of catastrophic events such as earthquakes, floods, hurricanes, and wildfires. These events have the potential to cause significant damage, including loss of life, environmental degradation, and economic losses.</p>
                
                <h3>Earthquakes</h3>
                <p>Earthquakes occur due to the sudden release of energy from the Earth's crust. The magnitude of an earthquake can lead to massive destruction in the form of building collapses, landslides, and tsunamis.</p>
                
                <h3>Floods</h3>
                <p>Floods can occur from heavy rainfall, river overflows, or rapid snowmelt. Flooding leads to property damage, loss of agricultural crops, and displacement of communities.</p>

                <h3>Wildfires</h3>
                <p>Wildfires spread rapidly in dry areas and can result from both natural and human causes. They destroy forests, wildlife habitats, and sometimes human settlements.</p>
                
                <h3>Hurricanes</h3>
                <p>Hurricanes are powerful tropical storms that form over warm ocean waters. They bring strong winds, torrential rain, and storm surges that can inundate coastal areas.</p>
            </div>

            <!-- Right Content - Images and Graphs -->
            <div class="col-md-4">
                <!-- Awareness Image -->

                <!-- Graph Placeholder -->
                <div class="mb-4">
                    <h4>Global Disaster Occurrences</h4>
                    <br>
                    <img src="images/Screenshot 2024-09-15 195020.png" class="img-fluid" alt="Graph of Disaster Fatalities">
                    <br>
                </div>

                <!-- Another Graph -->
                <div>
                    <h4>Economic Losses from Disasters</h4>
                    <br>
                    <img src="images/12379.jpeg" class="img-fluid" alt="Graph of Economic Losses">
                </div>
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
