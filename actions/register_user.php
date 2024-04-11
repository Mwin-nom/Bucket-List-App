<?php

//Start session


// connection file
include "../settings/connection.php";







// Checking if form was submitted
if(isset($_POST['regButton'])){

    //Retriviving form data
    $firstname = mysqli_real_escape_string($connection, $_POST['fname']);
    $lastname = mysqli_real_escape_string($connection, $_POST['lname']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
    $password2 = mysqli_real_escape_string($connection, $_POST['password2']);
    
   
    
    
// Encrypt password  
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert Query for above variable
    $query = "INSERT INTO Users (fname,lname,email,password_hash) 
    VALUES ('$firstname', '$lastname','$email', '$hashedPassword')";

    

    //executing the query
    $result = mysqli_query($connection, $query);
    
   

    if ($result) {
        $success = 'Registeration was successfull!!';
        header("Location: ../login/login_view.php");
        exit();
    } else {
       
        $error = "Registration failed. Please try again.";
        echo $error;
        header("Location: ../login/register_view.php");
        exit();
    }

    


    
    
    
    
        
    

}else{
    echo "There is a problem";
}


mysqli_close($connection);

?>