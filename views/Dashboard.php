 <?php
session_start();

?> 

<html>
	<head>
		<link rel="stylesheet" href="dashboard.css">	
	</head>
	<body>
		<div class="welcome">
			<h3>Welcome <?php echo $_SESSION["loggedinuser"]; ?></h3>
		</div>
	 
		<div class="dropdown1">
  			<button onclick="myFunction1()" class="dropbtn1">Student</button>
 		 	<div id="myDropdown1" class="dropdown-content1">
   				<a href="StudentRegistration.php">Add Student</a>
    			<a href="Check-Student.php">Check Students</a>
  			</div>
		</div>

		<div class="dropdown2">
  			<button onclick="myFunction2()" class="dropbtn2">Instructor</button>
 		 	<div id="myDropdown2" class="dropdown-content2">
			  	<a href="InstructorRegistration.php">Add Instructor</a>
    			<a href="Check-Instructor.php">Check Instructors</a>
  			</div>
		</div>

		<div class="dropdown3">
  			<button onclick="myFunction3()" class="dropbtn3">Co-ordinator</button>
 		 	<div id="myDropdown3" class="dropdown-content3">
			  	<a href="CoordinatorRegistration.php">Add Co-ordinator</a>
    			<a href="Check-Co-ordinator.php">Check Co-ordinators</a>
  			</div>
		</div>
		<input type="text" id = "search" name="search">
		<button id ="searchbtn" class="searchbtn">Search</button>

		<a href="Logout.php"><button class="logout">Logout</button></a>
	
		<button id="load" class="ajax">Show Student Info</button>
		<div id="main" class="table">
		</div>
		<script src="jquery.js"></script>
		<script src="dropdown.js"></script>
		<script>
			$(document).ready(function(){
				$("#load").on("click",function(e){
					$.ajax({
						url:"userInfo.php",
						type:"post",
						success:function(data){
							$("#main").html(data);
						}
					});
				});
			});
		</script>
		<script>
			const string = document.getElementById('search')
			$(document).find(function(){
				$("#searchbtn").on("click",function(e){
					$.ajax({
						url:"userInfo.php",
						type:"post",
						success:function(data){
							$("#main").html(data);
						}
					});
				});
			});
		</script>
	</body>
</html>