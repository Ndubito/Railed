<?php
session_start();
require_once __DIR__ . '/../db/connect.php';

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
        $stmt = $conn->prepare("SELECT id, password, first_name FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // 4. Verify the password.
            if (password_verify($password, $user['password'])) {
                // Login successful!
                // Start a session and store user info.
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['user_name'] = $user['first_name'];
                $_SESSION['loggedin'] = true;

                // Redirect to a dashboard or home page.
                header("Location: /index.php");
                exit();
            } else {
                $errors[] = "Invalid email or password.";
            }
        } else {
            $errors[] = "Invalid email or password.";
        }
    }

    if (!empty($errors)) {
        $_SESSION['login_errors'] = $errors;
        header("Location: /frontend/auth/login.html");
        exit();
    }
} else {
    // If the form wasn't submitted, redirect back to the login page
    header("Location: login.html");
    exit();
}
?>