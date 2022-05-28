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
  <?php
     include 'header.inc';
  ?>
    <header> Search Engine Quiz </header>
    <form
      action="http://mercury.swin.edu.au/it000000/formtest.php"
      method="post"
    >
      <fieldset>
        <legend>Student Details</legend>
        <p class="marginbottom">
          <label for="StudentID">StudentID</label>
          <input
            type="text"
            name="StudentID"
            id="StudentID"
            pattern="\d{7,10}"
            size="10"
            required="required"
                 class="white"     
          />
        </p>
        &nbsp;  
        <p>
          <label for="GivenName">Given Name</label>
          <input
            type="text"
            name="GivenName"
            id="GivenName"
            maxlength="15"
            size="10"
            required="required"
            class="white"     
          />
          <label for="FamilyName">Family Name</label>
          <input
            type="text"
            name="FamilyName"
            id="FamilyName"
            maxlength="15"
            size="10"
            required="required"
                 class="white"     
          />
        </p>
      </fieldset>

      <fieldset>
        
        <legend>Question 1</legend>

        <p>
          <label> What year was the first search engine created? </label>
        </p>
        
        <p>
          <label for="Question1.1">1995</label>
          <input type="radio" id="Question1.1" name="Question 1" value="Incorrect" />
          
          <label for="Question1.2">1986</label>
          <input type="radio" id="Question1.2" name="Question 1" value="Incorrect" />
          
          <label for="Question1.3">1972</label>
          <input type="radio" id="Question1.3" name="Question 1" value="Incorrect" />
          
          <label for="Question1.4">1990</label>
          <input type="radio" id="Question1.4" name="Question 1" value="Correct" /> 
          </p>
        
      </fieldset>

      <fieldset>
        <legend>Question 2</legend>
        <p>
         <label for="Question2">What does WWW mean?</label>
        </p>
        <p>
          <select name="Question 2" id="Question2" required="required" class="white">
            <option value="">Please Select</option>
            <option value="Correct">Welcome Windows Wall</option>
            <option value="Correct">Water Wave Way</option>
            <option value="Correct">World Way Web</option>
            <option value="Incorrect">World Wide Web</option>
            <option value="Correct">World Wide Websites</option>
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
          <input type="checkbox" id="Question3.1" name="Question 3" value="Correct" />
          <label for="Question3.1">A database of web documents</label>
        </p>
        
        <p>
          <input type="checkbox" id="Question3.2" name="Question 3" value="Incorrect" />
           <label for="Question3.2">Databases gather webpages into index</label>
        </p>
        
        <p>    
          <input type="checkbox" id="Question3.3" name="Question 3" value="Correct" />
          <label for="Question3.3">A search engine operating on that database</label>
        </p>
        
        <p>
          <input type="checkbox" id="Question3.4" name="Question 3" value="Correct" />
          <label for="Question3.4">A series of programs that determine how search results are displayed</label>
        </p>
        
        </p>
      </fieldset>

      <fieldset>
        <legend>Question 4</legend>

        <p><label for="question4">What was the first search engine called?</label></p>
        
        <p>
          <textarea class="white" id="question4" name="Question 4" rows="4" cols="40" placeholder="Write the anwser to the question here...."></textarea>
        </p>
      </fieldset>
    
    <fieldset>
        <legend>Question 5</legend>
        <p>
          <label for="Question5">Is a search engine the same as a web browser? (Y or N answer only)</label>
      </p>
      <p>
         <input
            type="text"
            name="Question 5"
            id="Question5"
            maxlength="1"
            required="required"
            class="white"     
          />
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

