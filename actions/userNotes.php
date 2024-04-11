<?php
// Start session
session_start();

// connection file
include "../settings/connection.php";



// Checking if form was submitted
if(isset($_POST['save'])){
    // Retrieve form data
    $notes = mysqli_real_escape_string($connection, $_POST['text']);

    if(isset($_SESSION['user_id'])) {
        $user_id = $_SESSION['user_id']; // Assuming you stored the user_id in the session
    } else {
        
        echo "<script>alert('Please log in to save notes.')</script>";
        // Redirect the user to the login page or any other appropriate action
        echo "<script>window.location = 'login.php'</script>";
        exit(); // Exit script

    }
    
    // Get user_id from session 
  
    // Insert Query for BucketListItems
    $query = "INSERT INTO Notes (user_id, note_text) 
              VALUES ('$user_id', '$notes')";
   
    // Execute the query
    $result = mysqli_query($connection, $query);
    var_dump($result);
    
    // Check if insertion was successful
    if ($result) {
        $success = 'Item added to notes database successfully';
        header("Location: ../views/oldNotes.php");
    } else {
        $error = "Failed to add notes to database list";
        // Redirect or return error message
    }
} else {
    $error = "Invalid request method";
    // Redirect or return error message
}

// Close the database connection
mysqli_close($connection);








    
    
    
    
        

