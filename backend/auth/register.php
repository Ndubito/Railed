<?php
// This is a simple example and does not include database connection or proper security.
// For a real application, you should use prepared statements to prevent SQL injection
// and hash passwords securely.

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data and sanitize it
    $firstName = filter_input(INPUT_POST, 'fname', FILTER_SANITIZE_STRING);
    $lastName = filter_input(INPUT_POST, 'lname', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];

    // --- Basic Validation ---
    $errors = [];

    if (empty($firstName)) {
        $errors[] = "First name is required.";
    }

    if (empty($lastName)) {
        $errors[] = "Last name is required.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    if ($password !== $passwordConfirm) {
        $errors[] = "Passwords do not match.";
    }
    
    // If there are no errors, proceed
    if (empty($errors)) {
        // --- Database Logic Would Go Here ---
        
        // 1. Connect to your database.
        // Example: $conn = new mysqli('localhost', 'username', 'password', 'database_name');
        
        // 2. Hash the password for security. NEVER store plain text passwords.
        // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // 3. Prepare an SQL statement to prevent injection.
        // $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        // $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);
        
        // 4. Execute the statement and check for success.
        // if ($stmt->execute()) {
        //     // Registration successful, redirect to login page
        //     header("Location: login.html?status=success");
        //     exit();
        // } else {
        //     // Handle database error
        //     echo "Error: Could not register user.";
        // }
        // $stmt->close();
        // $conn->close();

        // --- Placeholder for successful registration ---
        echo "<h1>Registration Successful!</h1>";
        echo "<p>First Name: " . htmlspecialchars($firstName) . "</p>";
        echo "<p>Last Name: " . htmlspecialchars($lastName) . "</p>";
        echo "<p>Email: " . htmlspecialchars($email) . "</p>";
        echo "<p><a href='login.html'>Click here to login</a></p>";

    } else {
        // Display errors
        echo "<h1>Error</h1>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
        echo "<p><a href='register.html'>Go back and try again</a></p>";
    }
} else {
    // If the form wasn't submitted, redirect back to the registration page
    header("Location: register.html");
    exit();
}
?>
