<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Creating Web Application" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="Kieran Spanner" />
    <link rel="stylesheet" href="styles/style.css" />
    <title>Quiz</title>
  </head>
  <body>

  <?php include 'header.inc'; ?>

    <header> Search Engine Quiz </header>

    <form method="post" action="markquiz.php" novalidate="novalidate">
      <fieldset>
        <legend>Student Details</legend>
        <p class="marginbottom">
          <label for="studentid">StudentID</label>
          <input type="text" name="studentid" id="Studentid" pattern="" size="10" required="required" class="white"/>
        </p>
        &nbsp; 

        <p>
          <label for="firstname">Given Name</label>
          <input type="text" name="firstname" id="firstname" maxlength="15" size="10" required="required" class="white"/>
          
        <label for="lastname">Family Name</label>
          <input type="text" name="lastname" id="lastname" maxlength="15" size="10" required="required" class="white"/>
        </p>
      </fieldset>

      <fieldset>
        
        <legend>Question 1</legend>

        <p> <label> What year was the first search engine created? </label> </p>
        
        <p>
          <label for="a">1995</label>
          <input type="radio" id="a" name="question1" value="a" />
          
          <label for="b">1986</label>
          <input type="radio" id="b" name="question1" value="b" />
          
          <label for="c">1972</label>
          <input type="radio" id="c" name="question1" value="c" />
          
          <label for="d">1990</label>
          <input type="radio" id="d" name="question1" value="d" /> 
          </p>
        
      </fieldset>

      <fieldset>
        <legend>Question 2</legend>
        <p>
         <label for="question2">What does WWW mean?</label>
        </p>
        <p>
          <select name="question2" id="question2" required="required" class="white">
            <option value="">Please Select</option>
            <option value="a">Welcome Windows Wall</option>
            <option value="b">Water Wave Way</option>
            <option value="c">World Way Web</option>
            <option value="d">World Wide Web</option>
            <option value="e">World Wide Websites</option>
          </select>
        </p>
      </fieldset>

      <fieldset>
        <legend>Question 3</legend>
        <p>
          
        <p>
         <label>What makes a true search enigine? (Select all correct answers)</label>
        </p>
        
        <p>
          <input type="checkbox" id="a" name="question3" value="a" />
          <label for="a">A database of web documents</label>
        </p>
        
        <p>
          <input type="checkbox" id="b" name="question3" value="b" />
           <label for="b">Databases gather webpages into index</label>
        </p>
        
        <p>    
          <input type="checkbox" id="c" name="question3" value="c" />
          <label for="c">A search engine operating on that database</label>
        </p>
        
        <p>
          <input type="checkbox" id="d" name="question3" value="d" />
          <label for="d">A series of programs that determine how search results are displayed</label>
        </p>
        
        </p>
      </fieldset>

      <fieldset>
        <legend>Question 4</legend>

        <p><label for="textquestion">What was the first search engine called?</label></p>
        
        <p>
          <textarea class="white" id="textquestion" name="question4" rows="4" cols="40" placeholder="Write the anwser to the question here...."></textarea>
        </p>
      </fieldset>
    
    <fieldset>
        <legend>Question 5</legend>
        <p>
          <label for="a">Is a search engine the same as a web browser? (Y or N answer only)</label>
      </p>
      <p>
         <input type="text" name="question5" id="a" maxlength="1" required="required" class="white"/>
        </p>
      </fieldset>

      
      <p>
        <button type="submit" value="Submit" class="button" style="vertical-align: middle">
        <span>Submit</span>
        </button>
        
        <button type="reset" value="Reset form" class="button" style="vertical-align: middle">
        <span>Rest</span>
        </button>
      </p>
      
    </form>
    
    <?php
     include 'footer.inc';
  ?>
  </body>
</html>

