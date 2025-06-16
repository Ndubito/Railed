<?php
session_start();
// Ensure the path to the database connection script is correct
require_once __DIR__ . '/../connect.php';

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

    // --- If no validation errors, proceed with authentication ---
    if (empty($errors)) {
        // Prepare a statement to select the user by email
        // We now select 'username' to store in the session
        $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // Verify the submitted password against the hashed password in the database
            if (password_verify($password, $user['password'])) {
                // Login successful!
                // Start a session and store user information.
                $_SESSION['user_id'] = $user['id'];
                // Storing username instead of first_name
                $_SESSION['user_name'] = $user['username']; 
                $_SESSION['loggedin'] = true;

                // Redirect to a dashboard or home page.
                header("Location: /index.php");
                exit();
            } else {
                // Passwords do not match
                $errors[] = "Invalid email or password.";
            }
        } else {
            // No user found with that email
            $errors[] = "Invalid email or password.";
        }
        $stmt->close();
    }

    // --- If there were any errors, redirect back with the errors ---
    if (!empty($errors)) {
        $_SESSION['login_errors'] = $errors;
        // Redirect back to the previous page (the one with the login form)
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

} else {
    // If the script was accessed without a POST request, redirect away
    header("Location: /index.php");
    exit();
}
?>
