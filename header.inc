<?php
echo'<div class="navbar">
  <a href="index.html" class="hey" id="active">Index</a>
  <a href="quiz.html" class="hey">Quiz</a>
    <div class="dropdown">
   <a href="topic.html"> <button class="dropbtn">Topics
      <i class="fa fa-caret-down"></i>
     </button> </a>
    <div class="dropdown-content">
      <a class="hey" href="topic.html#history">History</a>
      <a class="hey" href="topic.html#ff">Functions/Features</a>
      <a class="hey" href="topic.html#rt">Related tech</a>
      <a class="hey" href="topic.html#future">The Future</a>
    </div>
  </div>';
  ?>