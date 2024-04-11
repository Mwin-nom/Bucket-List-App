<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bucket List Feedback</title>
  <link rel="stylesheet" href="../css/feedbackPopup.css">
  <link rel="stylesheet" href="../css/dashboard.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />
</head>
<body style="background-image: url(../css/Images/12-may-inscription-with-blank-paper.jpg);">



<nav>
      <div class="logo">
        <i class="bx bx-menu menu-icon"></i>
        <span class="logo-name">BucketIt</span>
      </div>

      <div class="sidebar">
        <div class="logo">
          <i class="bx bx-menu menu-icon"></i>
          <span class="logo-name">BucketIt</span>
        </div>

        <div class="sidebar-content">
          <ul class="lists">
            <li class="list">

              <a href="dashboard.php" class="nav-link">
                <i class="bx bx-home-alt icon"></i>
                <span class="link">Dashboard</span>
              </a>

            </li>
    
            <li class="list">

              <a href="notes.php" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">Create Notes</span>
              </a>

            </li>
            </li>

             <li class="list">

              <a href="oldNotes.php" class="nav-link">
                <i class="bx bx-bell icon"></i>
                <span class="link">View Notes</span>
              </a>

            </li>


            <li class="list">

              <a href="feedback.php" class="nav-link">
                <i class="bx bx-message-rounded icon"></i>
                <span class="link">FeedBack</span>
              </a>

            
           
          </ul>

          <div class="bottom-cotent">
            
            <li class="list">
              <a href="../login/logout_view.php" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </div>
        </div>
      </div>
</nav>

<div class="popup-box">
      <div class="popup">
        <div class="content">
          <header>
            <p></p>
            <i class="uil uil-times"></i>
          </header>
          <form action="../actions/bucketItems.php" method="post">
            <div class="row title">
              <label>Title</label>
              <input type="text" spellcheck="false" name="title" id=" title">
            </div>
            <div class="row description">
              <label>Description</label>
              <textarea spellcheck="false" name="description" id="description"></textarea>
            </div>  
            <button type="submit" name="add" id="add"></button>
          </form>
        </div>
      </div>
    </div>
    <div class="wrapper">
      <li class="add-box">
        <div class="icon"><i class="uil uil-plus"></i></div>
        <p>Add new note</p>
        
      </li>
    </div>

    <script>
// Define getUserId function
function getUserId() {
  <?php
  session_start();

  // Check if the user is logged in
  if(isset($_SESSION['user_id'])) {
    // Set the JavaScript variable with the user's ID
    echo "var userId = '" . $_SESSION['user_id'] . "';";
  } else {
    // If user is not logged in, set userId to null
    echo "var userId = null;";
  }
  ?>
  
  // Return the userId variable
  return userId;
}
</script>


   

    <section class="overlay"></section>

 
<script src="../js/dashboard.js"></script>
</body>
</html>
