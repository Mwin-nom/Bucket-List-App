<?php
require '/Applications/XAMPP/xamppfiles/htdocs/Bucket List App/PHPMailer /PHPMailerAutoload.php';

// Check if form is submitted
if (isset($_POST['feedbackButton'])) {
    // Retrieve form data
    $feedbackDetails = array(
        'rating' => $_POST['rating'],
        'comments' => $_POST['comments'],
        'name' => $_POST['name'],
        'email' => $_POST['email']
    );

    // Create a new PHPMailer instance
    $mail = new PHPMailer;

    // Set up SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'bucketit38@gmail.com';
    $mail->Password = 'qvcrisqtbdmpirht';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Set up email content
    $mail->setFrom($feedbackDetails['email'], $feedbackDetails['name']);
    $mail->addAddress('bucketit38@gmail.com', 'BucketIt Feedback');
    $mail->isHTML(true);
    $mail->Subject = 'New Feedback Received';
    $mail->Body = '<html><body>';
    $mail->Body .= '<p><strong>Comments:</strong> ' . $feedbackDetails['comments'] . '</p>';
    $mail->Body .= '<p><strong>Rating:</strong> ' . $feedbackDetails['rating'] . '</p>';
    $mail->Body .= '<p><strong>Name:</strong> ' . $feedbackDetails['name'] . '</p>';
    $mail->Body .= '<p><strong>Email:</strong> ' . $feedbackDetails['email'] . '</p>';
    $mail->Body .= '</body></html>';

    // Send the email
    if(!$mail->send()) {
        echo 'Failed to send feedback: ' . $mail->ErrorInfo;
    } else {
        echo 'Thank you for your feedback!';
        header("Location: ../views/thankyou.html");
        exit();
    }
}
?>
