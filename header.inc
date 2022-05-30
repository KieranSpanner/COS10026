<?php
echo'<div class="navbar">
  <a href="index.php" class="hey">Index</a>
  <a href="quiz.php" class="hey">Quiz</a>
    <div class="dropdown">
   <a href="topic.php"> <button class="dropbtn">Topics
      <i class="fa fa-caret-down"></i>
     </button> </a>
    <div class="dropdown-content">
      <a class="hey" href="topic.php#history">History</a>
      <a class="hey" href="topic.php#ff">Functions/Features</a>
      <a class="hey" href="topic.php#rt">Related tech</a>
      <a class="hey" href="topic.php#future">The Future</a>
    </div>
  </div>
  <a href="enhancments.php" class="hey">Enhancements</a>
  <a href="phpenhancments.php" class="hey">PHPEnhancements</a>
  <a href="manageattempts.php" class="hey">Manage</a>
    </div>';
  ?>