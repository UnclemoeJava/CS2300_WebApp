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
              print ("<li><a href='hw.php?hw_title=$hw_title'>$hw_title</a></li>");
          ?>
          <li><a href="create_rubric.php?hw_title=<?php echo $hw_title; ?>">Create Rubric</a></li>
          <li class="current"><a href="edit_rubric.php?hw_title=<?php echo $hw_title; ?>">Edit Rubric</a></li>
          <!-- <li><a href="start_grading.php">Start Grading</a></li> -->
          <!-- <li><a href="contact.html">Contact Us</a></li> -->
        </ul>
      </div><!--close menu-->
    </div><!--close menubar-->	
    <br><br><br><br><br><br>



	<div id="site_content">	


	  
        
	  <div id="content">
        <div class="content_item">
          	
		   
		</div><!--close content_item-->
      </div><!--close content-->   

	</div><!--close site_content--> 
  </div><!--close main-->
   

  
  </body>
</html>
