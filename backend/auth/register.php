<?php
session_start();
require_once __DIR__ . '/../db/connect.php';

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

    // Check if email already exists
    $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    if ($result->num_rows > 0) {
        $errors[] = "Email already exists.";
    }

    // If there are no errors, proceed
    if (empty($errors)) {
        // --- Database Logic Would Go Here ---

        // 1. Connect to your database.
        // Example: $conn = new mysqli('localhost', 'username', 'password', 'database_name');

        // 2. Hash the password for security. NEVER store plain text passwords.
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // 3. Prepare an SQL statement to prevent injection.
        $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $firstName, $lastName, $email, $hashedPassword);

        // 4. Execute the statement and check for success.
        if ($stmt->execute()) {
            $_SESSION['register_success'] = "Registration successful! Please login.";
            header("Location: /frontend/auth/login.html");
            exit();
        } else {
            $errors[] = "Registration failed. Please try again.";
        }
        $stmt->close();
    }

    if (!empty($errors)) {
        $_SESSION['register_errors'] = $errors;
        header("Location: /frontend/auth/register.html");
        exit();
    }
} else {
    // If the form wasn't submitted, redirect back to the registration page
    header("Location: register.html");
    exit();
}
?>