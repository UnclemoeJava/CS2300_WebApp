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
          <li class="current"><a href="home.php">Home</a></li>
          <li><a href="https://drive.google.com/open?id=0B44jxboQTMAfaWdDdFB4WVY4LXM">Course Syllabus</a></li>
          <li><a href="https://piazza.com/class/ijnq2dr6rxg57">Piazza</a></li>
          <!-- <li><a href="contact.html">Contact Us</a></li> -->
        </ul>
      </div><!--close menu-->
    </div><!--close menubar-->	
    <br><br><br><br><br><br>


	<div id="site_content">	

      <?php
	    $mysqli = new mysqli("localhost", "awesomesp16", "graderhelper", "info230_SP16_awesomesp16");
	    $admin = $mysqli->query("SELECT * FROM user; ");
	    //$row = $admin->fetch_assoc();
	    // $row = mysql_fetch_row($admin);
	    if(isset($_SESSION['login_user'])) {
	        $flag = 0;
	        while($row = $admin->fetch_assoc()) {
	        	$password_verify = password_verify($_SESSION['login_pass'], $row['HashedPassword']);
	        	if($_SESSION['login_user'] === $row['UserName'] && $password_verify) {
	        		$flag = 1;
		          	print ("<h2 style = 'color: red;'>You are logged in as Steve or a Head TA</h2>");
		        }
	        }
	        if($flag === 0) {
	          print ("<h2 style = 'color: red;'>You are logged in as a TA</h2>");
	        }
	      }
	  ?>

   
	  <div class="sidebar_container">       
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Instructor</h2>
            <p>Steve Mohlke</p>
            <p>Email: sm68@cornell.edu</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->     		
		<div class="sidebar">
          <div class="sidebar_item">
            <h2>Head Teaching Assistant</h2>
            <p>Xiying Wang  -- xw282@cornell.edu</p>   
            <p>Nitesh Goyal  -- ng323@cornell.edu</p>
            <p>Leo Kang  -- lk424@cornell.edu</p>
            <p>Thomas Perz  -- tjp59@cornell.edu</p>
		  </div><!--close sidebar_item--> 
        </div><!--close sidebar--> 		
      </div><!--close sidebar_container-->		    
        
	  <div id="content">
        <div class="content_item">
          <h2><b>Course Info</b></h2>
			<p>Course: INFO/CS 2300</p>
			<p>Spring 2016: 3 credits</p>
			<p>Lectures: MW 2:30 ­ 3:20 Klarman Hall KG70</p>
			<p>Course details and forum ­ Piazza: <a href="https://piazza.com/class/ijnq2dr6rxg57">Link</a> </p>
			<p>Course web hosting: <a href="http://info2300.coecis.cornell.edu/">Link</a></p>
			<p>Grades, etc.: https://cms.csuglab.cornell.edu/</p>
			<p>Schedule, staff, office hours: See Piazza</p>
			<p>Prerequisites: INFO / CS 1300 or equivalent</p>

		    <div class="content_container">
		      <p>Description</p>   
		      <p>Time and Location</p>
		      <p>Grading Criteria</p>
		    	<div class="button_small">
		        <a href="https://drive.google.com/open?id=0B44jxboQTMAfaWdDdFB4WVY4LXM">Read more</a>
		      </div><!--close button_small-->
		    </div><!--close content_container-->
            <div class="content_container">
		      <p>Home Work</p>   
		      <p>Lecture Notes</p>
		      <p>Section Handouts + Activities</p>       
		    	<div class="button_small">
		        <a href="https://piazza.com/cornell/spring2016/infocs2300/resources">Read more</a>
		        </div><!--close button_small-->		  
		    </div><!--close content_container-->				
		</div><!--close content_item-->
      </div><!--close content-->   
	  







	  <div id="content_blue">
	    <div class="content_blue_container_box_table">
		  <h4>Home Work and Project List (Click to Start Grading)</h4>
		  	<table style="width:100%" class="table_home">
			  <tr>
			    <td width="30%"><font size="5" color="black"><b>Title</b></font></td>
			    <td width="35%"><font size="5" color="black"><b>Due</b></font></td>		
			    <td width="35%"><font size="5" color="black"><b>Grading Due</b></font></td>
			  </tr>
			  <tr>
			    <td><a href="hw.php?hw_title=<?php echo 'hw1'; ?>">hw1</a>(Click)</td>
			    <td>March 1, 2016 5:00PM</td>		
			    <td>March 3, 2016 23:59PM</td>
			  </tr>
			  <tr>
			  	<td><a href="hw.php?hw_title=<?php echo 'hw2'; ?>">hw2</a>(Click)</td>
			    <td>March 8, 2016 5:00PM</td>		
			    <td>March 10, 2016 23:59PM</td>
			  </tr>
			  <tr>
			  	<td><a href="hw.php?hw_title=<?php echo 'hw3'; ?>">hw3</a>(Click)</td>
			    <td>April 5, 2016 5:00PM</td>		
			    <td>April 7, 2016 23:59PM</td>
			  </tr>
			  <tr>
			  	<td><a href="hw.php?hw_title=<?php echo 'project1'; ?>">project1</a>(Click)</td>
			    <td>February 9, 2016 5:00PM</td>		
			    <td>February 11, 2016 23:59PM</td>
			  </tr>
			  <tr>
			  	<td><a href="hw.php?hw_title=<?php echo 'project2'; ?>">project2</a>(Click)</td>
			    <td>February 23, 2016 5:00PM</td>		
			    <td>February 25, 2016 23:59PM</td>
			  </tr>
			  <tr>
			  	<td><a href="hw.php?hw_title=<?php echo 'project3'; ?>">project3</a>(Click)</td>
			    <td>April 12, 2016 5:00PM</td>		
			    <td>April 14, 2016 23:59PM</td>
			  </tr>
			</table>

	    </div><!--close content_blue_container_box-->
      </div><!--close content_blue--> 	
	</div><!--close site_content--> 
  </div><!--close main-->
   

  
  </body>
</html>
