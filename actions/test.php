<?php

include_once('../settings/connection.php');

// Function to get all notes
function getAllNotes() {
    global $connection; // Access the database connection within the function

    // select all notes query 
    $query = "SELECT * FROM Notes";
    $result = mysqli_query($connection, $query);
    $rows = array(); // Initialize an empty array to store rows

    // Check if the query was successful
    if ($result) {
        // Loop through the result and store each row in the array
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row; // Add each row to the array
        }
    }

    // Return the array containing all rows
    return $rows;
}


?>
