<?php
// Database Configuration
define('DB_HOST', 'localhost');   // Database Host
define('DB_NAME', 'niharikasofttech_db');      // Database Name
define('DB_USER', 'root');        // Database Username
define('DB_PASS', '');            // Database Password
define('DB_PORT', 3306); // Inside Docker, MySQL uses the internal port


// Base URL for the project
define('BASE_URL', 'http://localhost/');

// Start a session
session_start();

// Display Errors (Set to 0 in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);
