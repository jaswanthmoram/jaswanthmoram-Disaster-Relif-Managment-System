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
 <!-- Help Victims Section -->
 <div class="container mt-5">
        <div class="bg-primary text-white text-center py-5">
        <h2 class="text-center">Help Victims</h2>
        <p class="text-center">You can help disaster victims in two ways: by donating money or by providing essential items such as food, clothing, or shelter.</p>
    </div>
        <form id="helpForm" action="submit-help.php" method="POST">
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your full name">
            </div>

            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
            </div>

            <div class="form-group">
                <label for="helpType">How would you like to help?</label>
                <select class="form-control" id="helpType" name="helpType" required>
                    <option value="">Select type of help</option>
                    <option value="donation">Virtual Help (Monetary Donation)</option>
                    <option value="physical">Physical Help (Provide Items)</option>
                </select>
            </div>

            <!-- Donation Section (shows only when "Virtual Help" is selected) -->
            <div id="donationSection" class="form-group d-none">
                <label for="amount">Donation Amount (in INR)</label>
                <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter the amount you'd like to donate">
            </div>

            <!-- Physical Help Section (shows only when "Physical Help" is selected) -->
            <div id="physicalHelpSection" class="form-group d-none">
                <label for="items">What can you provide?</label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="food" name="items[]" value="food">
                    <label class="form-check-label" for="food">Food</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="clothes" name="items[]" value="clothes">
                    <label class="form-check-label" for="clothes">Clothing</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="shelter" name="items[]" value="shelter">
                    <label class="form-check-label" for="shelter">Shelter</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="medical" name="items[]" value="medical">
                    <label class="form-check-label" for="medical">Medical Supplies</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
    </div>

    <!-- Footer -->
    <footer class="footer bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2024 Disaster Management System</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Script to Toggle Donation/Physical Help Sections -->
    <script>
        document.getElementById('helpType').addEventListener('change', function() {
            var helpType = this.value;
            var donationSection = document.getElementById('donationSection');
            var physicalHelpSection = document.getElementById('physicalHelpSection');

            if (helpType === 'donation') {
                donationSection.classList.remove('d-none');
                physicalHelpSection.classList.add('d-none');
            } else if (helpType === 'physical') {
                physicalHelpSection.classList.remove('d-none');
                donationSection.classList.add('d-none');
            } else {
                donationSection.classList.add('d-none');
                physicalHelpSection.classList.add('d-none');
            }
        });
    </script>
</body>

</html>