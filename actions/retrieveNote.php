<?php
// Start session
session_start();

// Include database connection file
include "../settings/connection.php";

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // Get user ID from session
    $user_id = $_SESSION['user_id'];
    
    // Select notes from the database for the current user
    $query = "SELECT * FROM Notes WHERE user_id = '$user_id'";
    
    // Execute the query
    $result = mysqli_query($connection, $query);
    
    // Check if there are any notes for the user
    if (mysqli_num_rows($result) > 0) {
       
        // Fetch notes from the result set
        while ($row = mysqli_fetch_assoc($result)) {
            // Add each note to the array
            $notes[] = $row['note_text'];
        }
        
        // Return the notes array (you can JSON encode it if needed)
        echo json_encode($notes);
    } else {
        // No notes found for the user
        echo "No notes found for the user.";
    }
} else {
    // User is not logged in
    echo "User is not logged in.";
}

// Close the database connection
mysqli_close($connection);
?>
