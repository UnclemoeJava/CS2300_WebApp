<?php
  session_start(); // Starting Session
?>

<!DOCTYPE html>
<html xml:lang="en">

<head>
  <title>CS2300 Grading System</title>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
</head>

<body>
  <div id="main">
	
	<div id="menubar">
	  <div id="welcome">
	    <h1><font size="8">CS2300 Grading System</font></h1>
	  </div><!--close welcome-->
      <div id="menu_items">
	    <ul id="menu">
          <!-- <li><a href="index.html">Home</a></li> -->
          <li><a href="home.php">Home</a></li>
          
           <?php
            $hw_title = $_GET['hw_title'];
            print ("<li class='current'><a href='hw.php'>$hw_title</a></li>");

            $mysqli = new mysqli("localhost", "awesomesp16", "graderhelper", "info230_SP16_awesomesp16");
            $admin = $mysqli->query("SELECT * FROM user; ");
            //$row = $admin->fetch_assoc();
            //$row = mysql_fetch_row($admin);
            if(isset($_SESSION['login_user'])) {
              $flag = 0;
              while($row = $admin->fetch_assoc()) {
                $password_verify = password_verify($_SESSION['login_pass'], $row['HashedPassword']);
                if($_SESSION['login_user'] === $row['UserName'] && $password_verify) {
                  $flag = 1;
                    print ("<li><a href='create_rubric.php?hw_title=$hw_title'>Create Rubric</a></li>");
                    print ("<li><a href='edit_rubric.php?hw_title=$hw_title'>Edit Rubric</a></li>");
                }
              }
            }
          ?>
<!--           <li><a href="create_rubric.php">Create Rubric</a></li>
          <li><a href="edit_rubric.php">Edit Rubric</a></li> -->
          <!-- <li><a href="start_grading.php">Start Grading</a></li> -->
          <!-- <li><a href="contact.html">Contact Us</a></li> -->
        </ul>
      </div><!--close menu-->
    </div><!--close menubar-->	
    <br><br><br><br><br><br>



	<div id="site_content">	


	  
        
	  <div id="content">
        <div class="content_item">

        <?php 
          if($hw_title === "hw1") {
            ?>
            <h2><b>hw1 Introduction</b></h2>
            <p>As we've seen in class, JavaScript and jQuery are useful for allowing you to alter webpages in response to user input without needing to run PHP on the server. Remember, JavaScript is the language  used to write scripts in HTML, and jQuery is a JavaScript  library  that helps to simplify scripting syntax. In this homework, you will get a chance to exercise these skills.</p>
            <br><br>
            <h2><b>Requirement</b></h2>
            <p>In this homework, you will alter the appearance of the page via JavaScript/jQuery in response to user actions and input. You are given eight tasks and y  ou will only be modifying the javascript file to complete these tasks.</p><br>
            <p>1. You should modify the script.js file according to the 8 problems (some with multiple parts) in the comments. The only file you should change is scripts.js.</p><br>
            <p>2. Upload an “ evaluation.pdf ” file to  CMS , and briefly describe the following 3 points in the file, in around 200 to 300 words:</p>
            <p>a. What difficulties you encountered when doing this assignment?</p>
            <p>b. How did you solve them?</p>
            <p>c. What did you learn from this assignment?</p><br>
            <p>3. Your code should be well formatted and readable. Use proper nested indentation. Keep your code  efficient, neat, and organized  so that the TAs can easily read it and understand it.  Up to 5 points can be deducted for inefficient code. See example below. Values should use variables when possible rather than be hard-coded. Redundant code should be moved into a function.  Be sure to comment your JavaScript code.</p>
            <?php
          }
          else if($hw_title === "hw2") {
            ?>
            <h2><b>hw2 Introduction</b></h2>
            <p>Welcome to hw2. Here you will learn how to implement sql in real use. </p>
            <br><br>
            <h2><b>Requirement</b></h2>
            <p>Submit your homework 2 via a separate link, nothing should be submitted to CMS.</p><br>
            <p>1. Finish all 21 questions in the link.</p><br>
            <p>2. The 1 to 20 count 5 points each, total 100 points.</p><br>
            <p>3. The 21 is extra question which also worth 5 points.</p><br>
            <?php
            }
          else if($hw_title === "hw3") {
            ?>
            <h2><b>hw3 Introduction</b></h2>
            <p>As we've seen in class, JavaScript and jQuery are useful for allowing you to alter webpages in response to user input without needing to run PHP on the server. In this homework, we will use our JavaScript and PHP skills to create an AJAX (Asynchronous JavaScript and XML) based web application. AJAX allows for smoother user interaction and a better user experience. </p>
            <br><br>
            <h2><b>Requirement</b></h2>
            <p>Submit your homework 2 via a separate link, nothing should be submitted to CMS.</p><br>
            <p>1.  You should modify the goblet.js and goblet.php file in order to make the following changes to names that will be submitted to the database.</p>
            <p>a. Input Checking and Submission: Check the inputs to see if the name is already in the database. This is done for you as an example.</p>
            <p>b. Insert a new entry into the database. Don’t forget about input sanitization and to make sure the user knows if the input has succeeded.</p>
            <p>c. Drawing from the Goblet of Fire. </p><br>
            <p>2. You should modify the ajax.js and the ajax.php file to do the following. </p>
            <p>a. Retrieve the current storyline from your database, and populate the respective fields on the page.</p>
            <p>b. With the database, you can also update the embedded Google map to represent the location in the story.</p>
            <p>c. Playing the background music with the © Spotify API. </p><br>
            <p>3. You need to upload an “ evaluation.pdf” file to C MS, and briefly describe the following 3 points in the file, in around 200 to 300 words. </p>
            <p>a. What difficulties you encountered when doing this assignment? </p>
            <p>b. How did you solve them? </p>
            <p>c. What did you learn from this assignment? </p>
            <?php
            }
          else if($hw_title === "project1") {
            ?>
            <h2><b>project1 Introduction</b></h2>
            <p>Project 1 is your chance to demonstrate your knowledge of HTML, CSS, PHP, and to give us a chance to get to know you as well. Your first project for the course is to build a small 4‐5 page website about something that you are passionate or interested about. This is a chance to dive into more detail about something (or several related things) that you want to promote. It can be something that you do as a hobby, something related to your academic career, or something you just find enjoyable. Your site should include some basic information about what you are promoting (why you’re promoting it), and images to describe the item or thing that you are promoting. Examples include (but are not limited to) a sports team, clubs, organizations, individuals, items (technology, fashion/clothing, book), photography, music, yourself as a person, etc. </p>
            <br><br>
            <h2><b>Requirement</b></h2>
            <p>Your finished site must meet the following criteria:</p><br>
            <p>1. The site must demonstrate the PHP we’ve been using in lecture through February 3rd. </p><br>
            <p>2. The site must be stored on the 2300 server in the p1 folder. The main file should be either
index.html or index.php. If the folder p1 does not exist, make one. Put all your ready‐for‐grading files in p1. Remember, don’t make any change to the files in the p1 folder after the deadline, otherwise it looks like you were late. Y ou can create other folders, such as p1test, for development if you want. </p><br>
            <p>3. The site should have 4‐5 pages (at least 4 pages). You can have more than this, but we won’t necessarily look at more than 5. </p><br>
            <p>4. Every page that a user can access must be validated. This means that files that you include in the user‐accessible pages with PHP, such as header.php, do not need to validate on their own. </p><br>
            <p>5. The site should have at least 3 images. If you took the photograph or created the illustration, it must be noted in a comment in the HTML. If you acquired the image from any other source, a credit must appear near the image. When the scale of the image makes this impractical, a credit at the bottom of the page is acceptable. </p><br>
            <p>6. Your site should include at least one non‐trivial user defined PHP function that accepts input, then displays the output in a user‐readable way (table, HTML formatting tags h1, h2, etc.) or returns a result for use by the code that called it. Examples include the output of repeating elements in HTML forms or lists or making a particular calculation. </p><br>
            <p>7. The site should be well‐designed, have a consistent "look and feel," and have clear navigation. </p><br>
            <p>8. Your site should display reasonably well (not necessarily identically) across Firefox, Chrome,
and Safari browsers. We will check your website on any one of these browsers. </p><br>
            <p>9. Your code should be well formatted and readable. Use indentation to keep nested content
clear. Keep your code efficient, neat, and organized so that the TAs can easily read it and
understand it. The usage of explanatory comments in code is encouraged and expected. </p><br>
            <p>10. You should write a 2 paragraph design rationale (200 words max) explaining your target
audience, design choices, and PHP functionality. </p><br>
            <?php
          }
          else if($hw_title === "project2") {
            ?>
            <h2><b>project2 Introduction</b></h2>
            <p>Create a small catalog website that displays any collection of objects in your database. Instead of an actual database, however, you will be using your knowledge of file input/output in PHP to read and write information about your objects in a file (d ata.txt) on the server. </p>
            <br><br>
            <h2><b>Requirement</b></h2><br>
            <p>1. The Full Collection (10 pts)</p>
            <p>a. Your website must allow the user to view the entire collection of entries in your catalog at once, and your collection (in your d ata.txt file) should contain at least five (5) complete entries. </p>
            <p>b. Read the data for all entries into the template from data.txt.</p><br>
            <p>2. An Add Entry Form (15 pts) </p>
            <p>a. Use an HTML form that allows users to add an entry into your data file. An entry must have at least four (4) data fields associated with it. </p>
            <p>b. Remember, a source credit must display near each image unless you created the image yourself in which case the credit can be in an HTML comment. </p><br>
            <p>3. A Search Form (15 pts) </p>
            <p>a. Use another HTML form that allows users to search for specific entries in your collection. Your search functionality does not need to have complicated natural language processing, but it must allow for each of two types of searches. </p>
            <p>b. Your filtered results will probably display in a similar manner as the full collection. Make sure it is clear to your viewers when they are viewing the full collection and when they are viewing the results of a search. </p><br>
            <p>3. A Search Form (15 pts) </p>
            <p>a. Use another HTML form that allows users to search for specific entries in your collection. Your search functionality does not need to have complicated natural language processing, but it must allow for each of two types of searches. </p>
            <p>b. Your filtered results will probably display in a similar manner as the full collection. Make sure it is clear to your viewers when they are viewing the full collection and when they are viewing the results of a search. </p><br>
            <p>4. Form Checking and Data Validation (15 pts) </p>
            <p>a. Your code should contain a reasonable amount of input checking. We will test your input checking rigorously, so please think hard about what you will allow and not allow as user input, and have a good reason for what you decide. </p>
            <p>b. Think about what it is you are actually trying to match using regular expressions. There are many PHP functions that already exist for comparing strings against other strings or replacing specific parts of a string. Take a look at them and see if one already exists that meets your needs. </p><br>
            <p>5. Rationale (10 pts) </p>
            <p>a. A description of how you check user input and how you determine which data is valid. </p>
            <p>b. A justification of why you allow some types of data and not others. </p><br>
            <p>6. A Persistent Data File (10 pts) </p>
            <p>a. The data file (d ata.txt) on the server should always reflect the current state of your collection. If a user successfully submits a valid Add Entry form, then that new entry should appear in your data file even after the user closes and opens the browser again. The only exception to this is if the entry is a duplicate and you have explained why duplicates aren’t allowed in your collection. You should also fill this file with the first five (5) complete entries in your collection before submission. </p>
            <p>b. A frequent problem programmers encounter working with a read/write data file such as data.txt is a PHP error like this “W arning: fopen(data.txt) [function.fopen]: failed to open stream: Permission denied in ...” </p><br>
            <p>7. Appropriate Website Design (10 pts) </p>
            <p>a. The design of the site should appropriately match the theme of your catalog site. The site should have a consistent look and feel, with clear, easy-to-follow navigation. If you display results on multiple different pages, you should be able to travel back to the previous page using navigation links or breadcrumbs, instead of relying on the browser’s back button. Y our menu should be consistent on every page and indicate in some way what page is currently being viewed. </p>
            <p>b. For this project, the use of frameworks will not be allowed (see syllabus), but it is fine to use a preprocessor for your CSS as long as the output is legible to the grading TA. </p><br>
            <p>8. Good Practices (10 pts) </p>
            <p>a. All code should be easy to read and understand by anyone. Make use of comments to explain things that aren’t
obvious, and name your functions and variables appropriately. Your code should be indented properly so that it’s easy to see which lines belong to each element (HTML/CSS) or function (PHP/JavaScript). It’s also good practice to put all your CSS into external CSS files. Avoid using inline or embedded CSS unless you need to generate styles dynamically through PHP or JavaScript. </p>
            <p>b. Remember, a source credit must display near each image unless you created the image yourself in which case the credit can be in an HTML comment. </p>
            <p>c. When you upload your files to the server, keep them organized in appropriately named directories. CSS files should go into a c ss folder, image assets in an a ssets folder, and JavaScript files in a s cripts folder. These subfolders and your HTML/PHP pages should go into the project folder p 2. </p><br>
            <?php
          }
          else if($hw_title === "project3") {
            ?>
            <h2><b>project3 Introduction</b></h2>
            <p>Project 3 is designed to give you practice building and implementing a database b acked website from scratch. As you may have encountered in Project 2, text files can be very difficult to open, read, and write. Databases provide a clean, easy alternative for storing and organizing information. Your task is to develop a personal online image album, using PHP to interact with a MySQL database you will create and populate yourself. It needs to implement a m any to many relationship. One image can be on multiple albums and one album can have multiple images. </p>
            <br><br>
            <h2><b>Requirement</b></h2>
            <p>There are total 3 milestones here for you to complete. </p>
            <p>1. Milestone 1 ‐ Initial Design (Due Mar.15th)</p>
            <p>a. Set up the pages that you think you will need in your website (There is no minimum number of pages. If you do a single page site, you should set up the sections as the pages are described here). </p>
            <p>b. On each page, include a title and brief description of what will go on that page. </p>
            <p>c. Link your pages with a clear and consistent navigation. There should not be any
dead­end pages on your site that require the user to click the “back” button in order to
continue navigation. </p><br>
            <p>2. Milestone 2 ‐ More Functionality (Due March 22) </p>
            <p>a. Add another album and three more images. </p>
            <p>b. Display album list. </p>
            <p>c. Display user selected album. </p>
            <p>d. Add an album using the browser. </p>
            <p>e. Add an image from the browser. </p><br>
            <p>3. Milestone 3 ‐ The Finished Product (Due April 12) </p>
            <p>a. Search form. </p>
            <p>b. Image detail. </p>
            <p>c. Login functionality. </p>
            <p>d. Edit album. </p>
            <p>e. Edit image. </p>
            <p>f. Delete album. </p>
            <p>g. Delete image record. </p>
            <p>h. Populate your sites. </p><br>
            <?php
          }
        ?>
          	

		   
		</div><!--close content_item-->
      </div><!--close content-->   
      <br><br><br><br><br>


      <div id="content">
        <div class="content_item">
            <h2><b>Start Grading</b></h2>
            <p>Search by Student Netid:<input class="contact" size="10" type="text" name="Netid" value="" /></p>
            <button onclick="">Search</button><br><br><br><br>
            <!-- <p>Student Uploaded File:</p>
            <button onclick="">Download</button><br><br><br><br> -->

            <h2><b>Grading Form</b></h2>
            <table id="grading_table" class="table_rubric">
              <tr>
                <td width="40%"><font size="5" color="white"><b>Item</b></font></td>
                <td width="10%"><font size="5" color="white"><b>Max Score</b></font></td>
                <td width="10%"><font size="5" color="white"><b>Grading</b></font></td>
                <td width="40%"><font size="5" color="white"><b>Feed Back</b></font></td>
              </tr>
            </table><br><br>


            <button onclick="">Submit</button>
            <button onclick="">Export</button><br><br><br><br>


       
      </div><!--close content_item-->
    </div><!--close content-->   



	</div><!--close site_content--> 
  </div><!--close main-->
   

  
  </body>
</html>
