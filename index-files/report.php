<?php
// Start the session to use session variables
session_start();
require 'connect.php'; // Include the database connection file

// Handle form submission for reporting disasters
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $location = $_POST['location'];
    $description = $_POST['description'];
    $severity = $_POST['severity'];

    // Insert the disaster report into the database
    $sql = "INSERT INTO disasters (location, description, severity) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sss', $location, $description, $severity);

    if ($stmt->execute()) {
        echo "<script>alert('Disaster reported successfully!');</script>";
    } else {
        echo "<script>alert('Error reporting disaster. Please try again.');</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="temp.css">
    <style>/* Custom Styles for Disaster Reporting Page */

/* Navbar Styles */
.navbar {
    border-bottom: 1px solid #ccc;
}

/* Container Styles */
.container {
    padding: 20px;
}

/* Section Heading */
.section-heading {
    font-size: 1.5rem;
    margin-bottom: 20px;
    font-weight: bold;
}

/* Form Styles */
.form-group label {
    font-weight: bold;
}

/* Button Styles */
.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

/* Disaster Description */
textarea.form-control {
    resize: none;
}

/* Live Disasters List */
.live-disasters {
    background-color: #f8f9fa;
    padding: 15px;
    border-radius: 5px;
}

.list-group-item {
    border: 1px solid #ddd;
    border-radius: 5px;
    margin-bottom: 10px;
    padding: 10px;
    background-color: #fff;
}

.list-group-item:nth-child(odd) {
    background-color: #f1f1f1;
}

/* Alert Styles */
.alert {
    margin: 15px 0;
}

.alert-success {
    background-color: #d4edda;
    border-color: #c3e6cb;
    color: #155724;
}

.alert-danger {
    background-color: #f8d7da;
    border-color: #f5c6cb;
    color: #721c24;
}
</style>
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
    <div class="container mt-5">
        <div class="bg-primary text-white text-center py-5">
            <h2 class="text-center">Report a Disaster</h2>
            <p class="text-center">Help Us Keep Track of Recent Disasters</p>
        </div>
<br>
        <div class="row">
            <!-- Report a Disaster Form -->
            <div class="col-md-6">
                <h2 class="section-heading mb-3">Report a Disaster</h2>
                <form method="POST" action="report.php">
                    <div class="form-group">
                        <label for="disasterLocation">Location</label>
                        <input type="text" class="form-control" id="disasterLocation" name="location" required placeholder="Enter the location of the disaster">
                    </div>
                    <div class="form-group">
                        <label for="disasterDescription">Description</label>
                        <textarea class="form-control" id="disasterDescription" name="description" rows="5" required placeholder="Provide details about the disaster"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="disasterSeverity">Severity</label>
                        <select class="form-control" id="disasterSeverity" name="severity" required>
                            <option value="Low">Low</option>
                            <option value="Moderate">Moderate</option>
                            <option value="High">High</option>
                            <option value="Critical">Critical</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <!-- Live Disasters Section -->
            <div class="col-md-6">
                <h2 class="section-heading mb-3">Live Disasters</h2>
                <div class="live-disasters">
                    <ul class="list-group">
                        <?php
                        // Fetch live disasters from the database
                        $result = $conn->query("SELECT location, severity, description FROM disasters ORDER BY created_at DESC LIMIT 5");
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo '<li class="list-group-item">' . $row['location'] . ' - Severity: ' . $row['severity'] . '<br>Description: ' . $row['description'] . '</li>';
                            }
                        } else {
                            echo '<li class="list-group-item">No live disasters reported</li>';
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>