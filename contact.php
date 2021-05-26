
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<body style="background-color: #fff">
	<div class="navbar navbar-expand-lg bg-dark navbar-green">	 
			<div class="collapse navbar-collapse" id="collapsibleNavbar">
				 <ul class="navbar-nav">		
						<li class="nav-item">
							<a class="nav-link" href="./index.php">Home</a>
						</li>
				    	<li class="nav-item">
				      		<a class="nav-link" href="./services.php">Services</a>
				    	</li>
				    	<li class="nav-item">
				      		<a class="nav-link" href="./abt.php">About Us</a>
				    	</li>
				    	<!-- <li class="nav-item">
				      		<a class="nav-link" href="./news.php">News</a>
				    	</li> -->
				    	<li class="nav-item">
				      		<a class="nav-link" href="./contact.php">Contact Us</a>
				    	</li>
				    	

			 	</ul>
		 	</div>
	 	<form class="form-inline my-2 my-lg-0">
	 		<!-- <a href="#" class="bk-btn">Sign Up</a> -->
      		<a class="nav-link" style="color: white;"><span style="color: gold;">Date: </span>2021/05/25      </a>
	 	</form>
	</div>

	<hr>
	<div class="contact-us">
        <p style="text-align: center; font-size: 50px; font-weight: bold;">CONTACT US <img src="pics/mdlogo.PNG" style="width: 120px; height: 120px;"><h3 style="text-align: center;"> Email: medicare@gmail.com <span style="border-left: 2px solid black; height: 10px;"></span> Phone: 0774 353 608 <span style="border-left: 2px solid black; height: 10px;"></span> Address: Michenzani </h3></p>
  	</div>
  	<hr>

  	
  		<table style="border: solid black 0px; width: 100%; height: 300px;">
  			<tr style="border: solid black 0px;">
  				<td style="text-align: center;">
				 <div class="container">
				  <form action="action_page.php" style="text-align: left;">

				    <label for="fname">First Name</label>
				    <input type="text" id="fname" name="firstname" placeholder="Your name..">

				    <label for="lname">Last Name</label>
				    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

				    <label for="country">Country</label>
				    <select id="country" name="country">
				      <option value="Tanzania">Tanzania</option>
				      <option value="Kenya">Kenya</option>
				      <option value="Uganda">Uganda</option>
				    </select>

				    <label for="subject">Subject</label>
				    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

				    <input type="submit" value="Submit">

				  </form>

				  <style type="text/css">					
							input[type=text], select, textarea {
							  width: 100%;
							  padding: 12px;
							  border: 1px solid #ccc;
							  border-radius: 4px;
							  box-sizing: border-box;
							  margin-top: 6px;
							  margin-bottom: 16px;
							  
							}

							
							input[type=submit] {
							  background-color: #04AA6D;
							  color: white;
							  padding: 12px 20px;
							  border: none;
							  border-radius: 4px;
							  cursor: pointer;
							}
							input[type=submit]:hover {
							  background-color: #45a049;
							}

							.container {
							  border-radius: 5px;
							  background-color: #f2f2f2;
							  padding: 20px;
							}
				  </style>
				</div>
  				</td>
  			</tr>
  		</table>


	<footer class="page-footer font-small indigo" style="background-color: #333333">

          
          <div class="footer-copyright text-center py-3"><span style="color: white;">© 2021 Copyright:</span>
            <a href="https://medicare.com/"> www.medicare.com</a>
          </div>
          
    </footer>

    	<style type="text/css">
    		.page-footer {
    			position: all;
    			bottom: 0;
    			width: 100%;
    		}
    	</style>

</body>
</html>
