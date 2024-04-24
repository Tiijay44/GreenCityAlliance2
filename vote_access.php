<?php
// **Start user session:**
// - Initiate session management using session_start()
// **Enforce admin access:**
// - Check if a session variable named 'name' exists (indicating a logged-in user).
// - If 'name' is not set, it implies the user is not logged in or lacks admin privileges.
// **Redirect to admin login page for unauthorized access:**


// Check if user has admin priviledges
if (!isset($_SESSION['name'])) {
    header("Location: vote_Login.php");
    exit;
}
