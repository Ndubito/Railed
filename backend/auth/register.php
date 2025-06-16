<?php
session_start();
// Make sure this path is correct. It navigates up one directory from 'auth' and then into 'connect.php'
require_once __DIR__ . '/../connect.php'; 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data and sanitize it
    // Updated to get 'username' instead of 'fname' and 'lname'
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];
    $passwordConfirm = $_POST['password_confirm'];
    // Check if the terms checkbox was checked
    $terms = isset($_POST['terms']);

    // --- Validation ---
    $errors = [];

    if (empty($username)) {
        $errors[] = "Username is required.";
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
    
    // Validate that the terms and conditions checkbox was ticked
    if (!$terms) {
        $errors[] = "You must accept the terms and conditions.";
    }


    // --- Check if email or username already exists ---
    // This requires your 'users' table to have a 'username' column.
    if (empty($errors)) {
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ? OR username = ?");
        $stmt->bind_param("ss", $email, $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $errors[] = "An account with that email or username already exists.";
        }
        $stmt->close();
    }


    // --- If no errors, proceed with inserting user into database ---
    if (empty($errors)) {
        // Hash the password for security.
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare an SQL statement to prevent SQL injection.
        // NOTE: Make sure your 'users' table has a 'username' column.
        $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $hashedPassword);

        // Execute the statement and check for success.
        if ($stmt->execute()) {
            // Registration was successful. Set a success message and redirect to login page.
            $_SESSION['register_success'] = "Registration successful! You can now log in.";
            // Redirect to your main index or login page
            header("Location: /index.html"); // Or wherever your login form is
            exit();
        } else {
            $errors[] = "Registration failed due to a server error. Please try again.";
        }
        $stmt->close();
    }

    // --- If there were errors, store them in the session and redirect back ---
    if (!empty($errors)) {
        $_SESSION['register_errors'] = $errors;
        // Redirect back to the page with the form
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }

} else {
    // If the script was accessed directly without a POST request, redirect away.
    header("Location: /index.php");
    exit();
}
?>
