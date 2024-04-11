<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Page</title>
  <link rel="stylesheet" href="../css/feedback.css">
  <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet">
</head>
<body>

<header>
  <!-- Header content goes here -->
</header>

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

<h2>Feedback</h2>
<div class="mb-4 small">
  Please provide your feedback in the form below
</div>
<form action="../actions/feedbackEmail.php" name="feedback_form" id="feedback_form" method="post">
  <label>How do you rate your overall experience?</label>
  <div class="mb-3 d-flex flex-row py-1">
    <div class="form-check mr-3">
      <input class="form-check-input" type="radio" name="rating" id="rating_bad" value="bad">
      <label class="form-check-label" for="rating_bad">Bad</label>
    </div>
    <div class="form-check mx-3">
      <input class="form-check-input" type="radio" name="rating" id="rating_good" value="good">
      <label class="form-check-label" for="rating_good">Good</label>
    </div>
    <div class="form-check mx-3">
      <input class="form-check-input" type="radio" name="rating" id="rating_excellent" value="excellent">
      <label class="form-check-label" for="rating_excellent">Excellent!</label>
    </div>
  </div>
  <div class="mb-4">
    <label class="form-label" for="feedback_comments">Comments:</label>
    <textarea class="form-control" required rows="6" name="comments" id="feedback_comments"></textarea>
  </div>
  <div class="row">
    <div class="col">
      <label class="form-label" for="feedback_name">Your Name:</label>
      <input type="text" required name="name" class="form-control" id="feedback_name"/>
    </div>
    <div class="col mb-4">
      <label class="form-label" for="feedback_email">Email:</label>
      <input type="email" name="email" required class="form-control" id="feedback_email"/>
    </div>
  </div>
  <button type="submit" name="feedbackButton" id="feedbackButton" class="btn btn-success btn-lg">Post</button>
</form>

<section class="overlay"></section>

<script src="../js/feedback.js"></script>
</body>
</html>
