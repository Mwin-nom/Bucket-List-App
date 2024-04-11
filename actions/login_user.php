<?php
// Start the session
session_start();

include "../settings/connection.php";





if (isset($_POST['LoginButton'])) {
    //Collecting form data and storing in variables
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    
    
    

   


//query to select record from people table using email
    $emailQuery = "SELECT * FROM Users WHERE email = '$email'";

 

    
// Execute the query
    $emailResult = mysqli_query($connection, $emailQuery);
  
      
     
    
       

    


//Checking if any rows were returned
    if(mysqli_num_rows($emailResult) > 0) {
        // At least one row was returned
       //Fetching record
        $fetchedRecord= mysqli_fetch_assoc($emailResult);
        //Fetching password from record
        $hashedPasswordFromDb = $fetchedRecord['password_hash'];
        $user_id = $fetchedRecord['user_id'];

        

        //Checking if password is the same
        if (password_verify($password, $hashedPasswordFromDb)) {
            
            echo "Password verified. Login successful.";

            $_SESSION['user_id'] = $user_id;
            
           


            header("Location: ../views/dashboard.php");
            exit();
            
        } else {
            // Passwords don't match
            echo "Incorrect password. Try Again Or Register";
           
            
        
        }
    } else {
        // No rows were returned
        echo "No records found.";


    }
}

?>

       















    
