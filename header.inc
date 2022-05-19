<?php
echo'<div class="navbar">
  <a href="index.php" class="hey" id="active">Index</a>
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
  <a href="enhancements.php" class="hey" id="active">Enhancements</a>
    </div>';
  ?>