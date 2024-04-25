<?php
// Database connection credentials
$host = 'localhost';
$dbname = 'wad';
$username = 'your_username'; // Replace with your database username
$password = 'your_password'; // Replace with your database password

// Create a connection to the database
$connection = new mysqli($host, $username, $password, $dbname);

// Check if the connection was successful
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data using the $_POST array
    $email = $_POST['email'] ?? ''; // Retrieve the email input
    $contactNumber = $_POST['contact'] ?? ''; // Retrieve the contact number input
    $message = $_POST['message'] ?? ''; // Retrieve the message input

    // Prepare an SQL statement to insert the data into the database
    $stmt = $connection->prepare("INSERT INTO credentials (email, contact_number, message) VALUES (?, ?, ?)");
    
    // Bind the form data to the SQL statement
    $stmt->bind_param('sss', $email, $contactNumber, $message);

    // Execute the SQL statement
    if ($stmt->execute()) {
        echo "Data submitted successfully and stored in the database.";
    } else {
        echo "Error storing data: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    // Display an error message if the form was not submitted using the POST method
    echo "Error: Form not submitted correctly.";
}

// Close the database connection
$connection->close();
?>
