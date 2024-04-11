<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Old Notes</title>
    <link rel="stylesheet" href="../css/oldNotes.css">
    <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
</head>
<body>

<div class="notes-container">
    <?php
    // Include the function file here if it's not already included
    include "../actions/test.php";

    // Call the function to get all notes
        $notes = getAllNotes();

        // Display the notes as a list
    echo "<ul>";
    foreach ($notes as $note) {
        echo "<li>{$note['note_text']}</li>";
}
    echo "</ul>";
    ?>
</div>


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
              <span class="link">Feedback</span>
            </a>
          </li>
          
        </ul>

        <div class="bottom-content">
          <ul class="lists">
            
            <li class="list">
              <a href="../login/logout_view.php" class="nav-link">
                <i class="bx bx-log-out icon"></i>
                <span class="link">Logout</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>


  <section class="overlay"></section>

<script src="../js/oldNotes.js"></script>
</body>
</html>
