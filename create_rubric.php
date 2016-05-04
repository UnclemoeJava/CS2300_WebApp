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
          <li><a href="hw1.php">hw1</a></li>
          <li class="current"><a href="create_rubric.php">Create Rubric</a></li>
          <li><a href="edit_rubric.php">Edit Rubric</a></li>
          <li><a href="start_grading.php">Start Grading</a></li>
          <!-- <li><a href="contact.html">Contact Us</a></li> -->
        </ul>
      </div><!--close menu-->
    </div><!--close menubar-->	
    <br><br><br><br><br><br>



	<div id="site_content">	


	  
        
	  <div id="content">
        <div class="content_item">
          	<h2><b>Grading Rubric:</b></h2>
            <textarea class="contact textarea" rows="8" cols="50" name="your_message"></textarea>
            <br><br>
			      <h2><b>Grading Template:</b></h2>

            <table id="myTable" class="table_rubric">
              <tr>
                <td width="80%"><font size="5" color="white"><b>Item</b></font></td>
                <td width="20%"><font size="5" color="white"><b>Max Score</b></font></td>
              </tr>
              <tr>
                <td><input class="contact" size="100" type="text" name="Item" value="" /> </td>
                <td><input class="contact" type="text" name="Max_Score" value="" /> </td>
              </tr>
            </table>

            <br>

            <button onclick="myFunction()">Add New Item</button>
            <button onclick="">Submit</button>

            <script>
            function myFunction() {
                var table = document.getElementById("myTable");
                var row = table.insertRow();
                var cell1 = row.insertCell(0);
                var cell2 = row.insertCell(1);
                cell1.innerHTML = "<input class='contact' size='100' type='text' name='Item' value='' />";
                cell2.innerHTML = "<input class='contact' type='text' name='Max_Score' value='' />";
            }
            </script>

		   
		    </div><!--close content_item-->
      </div><!--close content-->   

	 </div><!--close site_content--> 
  </div><!--close main-->
   

  
  </body>
</html>
