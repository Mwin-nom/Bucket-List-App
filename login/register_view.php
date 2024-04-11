<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MATERIAL DESIGN ICONIC FONT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    
    <!-- STYLE CSS -->
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <div class="wrapper" style="background-image: url('../css/Images/still-life-colorful-overloaded-bullet-journal.jpg');">
        <div class="inner">
            <form action="../actions/register_user.php" method="post" name="regForm" id="regForm" >
                <h3>Registration Form</h3>
                <div class="form-group">
                    <div class="form-wrapper">
                        <label for="">First Name</label>
                        <input type="text" class="form-control" name="fname" id="fname" required>
                    </div>
                    <div class="form-wrapper">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname" required>
                    </div>
                </div>
                <div class="form-wrapper">
                    <label for="">Email</label>
                    <input type="text" class="form-control" name="email" id="email" required>
                </div>
                <div class="form-wrapper">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required>
                </div>
                <div class="form-wrapper">
                    <label for="">Confirm Password</label>
                    <input type="password" class="form-control" name="password2" id="password2" required>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox"> I accept the Terms of Use & Privacy Policy.
                        <span class="checkmark"></span>
                    </label>
                </div>
                <button name="regButton">Register Now</button>
            </form>
        </div>
    </div>
</body>
</html>
