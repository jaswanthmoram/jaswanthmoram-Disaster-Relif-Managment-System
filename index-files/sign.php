<?php
    include 'connect.php';
// Assuming you have established a connection to the database already, e.g. $conn

if (isset($_POST['signIn'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $Phone = $_POST['Phone'];
    $Address = $_POST['Address'];

    // Check if username already exists
    $checkUsername = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($checkUsername);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Username Already Exists!";
    } else {
        // Insert new user into the database
        $insertQuery = "INSERT INTO users (username, password, phone, address) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($insertQuery);
        $stmt->bind_param("ssss", $username, $password, $Phone, $Address);

        if ($stmt->execute()) {
            // Redirect to home.html upon successful registration
            header("Location: login.php");
            exit(); // Ensure no further code is executed after redirection
        } else {
            echo "Error: " . $conn->error;
        }
    }
    $stmt->close();
}

    if(isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
        $result = $conn->query($sql);
        if($result->num_rows>0) {
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['username'] = $row['username'];
            header("Location: home.php");
            exit();
        }
        else {
            echo "Incorrect Username or Password";
        }
    }
?>