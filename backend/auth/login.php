<?php
// This is a simple example for demonstration.
// For a real application, implement session management, proper password verification,
// and connect to a real database using prepared statements.

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get form data
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    // --- Basic Validation ---
    $errors = [];

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    }

    // If there are no errors, proceed with authentication logic
    if (empty($errors)) {
        // --- Database and Authentication Logic Would Go Here ---
        
        // 1. Connect to your database.
        // Example: $conn = new mysqli('localhost', 'username', 'password', 'database_name');

        // 2. Prepare a statement to get the user by email.
        // $stmt = $conn->prepare("SELECT id, password FROM users WHERE email = ?");
        // $stmt->bind_param("s", $email);
        // $stmt->execute();
        // $result = $stmt->get_result();

        // 3. Check if a user was found.
        // if ($result->num_rows === 1) {
        //     $user = $result->fetch_assoc();
            
        //     // 4. Verify the password.
        //     if (password_verify($password, $user['password'])) {
        //         // Login successful!
        //         // Start a session and store user info.
        //         session_start();
        //         $_SESSION['user_id'] = $user['id'];
        //         $_SESSION['loggedin'] = true;

        //         // Redirect to a dashboard or home page.
        //         header("Location: dashboard.php");
        //         exit();
        //     } else {
        //         // Incorrect password
        //         echo "<h1>Login Failed</h1><p>Invalid email or password.</p>";
        //         echo "<p><a href='login.html'>Try again</a></p>";
        //     }
        // } else {
        //     // No user found with that email
        //     echo "<h1>Login Failed</h1><p>Invalid email or password.</p>";
        //     echo "<p><a href='login.html'>Try again</a></p>";
        // }
        // $stmt->close();
        // $conn->close();

        // --- Placeholder for successful login ---
        // This is just for demonstration since we don't have a database.
        if ($email === "test@example.com" && $password === "password123") {
            echo "<h1>Login Successful!</h1>";
            echo "<p>Welcome back, " . htmlspecialchars($email) . "!</p>";
        } else {
            echo "<h1>Login Failed</h1>";
            echo "<p>Invalid email or password for this demo.</p>";
            echo "<p>Try using 'test@example.com' and 'password123'.</p>";
            echo "<p><a href='login.html'>Try again</a></p>";
        }

    } else {
        // Display errors
        echo "<h1>Error</h1>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
        echo "<p><a href='login.html'>Go back and try again</a></p>";
    }
} else {
    // If the form wasn't submitted, redirect back to the login page
    header("Location: login.html");
    exit();
}
?>
