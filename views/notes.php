<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Page</title>
  <link rel="stylesheet" href="../css/notes.css">
  <link
      href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css"
      rel="stylesheet"
    />

<header>
    <!-- Header content goes here -->
</header>



<div id="notesContainer">

  
  <form id="noteForm" action="../actions/userNotes.php" method="post" onsubmit="return validateForm()">
  <button type="button" id="createNoteBtn" name="createNoteBtn" onclick="createNewNote()">Create Note</button>
  <button type="submit" id="save" name="save" >Save Note</button>
  <a href="oldNotes.php">
    <button type="button" id="retrieve" name="retrieve" >Old Notes</button>
    </a>  
    <textarea id="text" name="text" placeholder="Share your wildest dreams and craziest adventures here!"></textarea>

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

<script src="../js/notes.js"></script>
</body>
</html>
