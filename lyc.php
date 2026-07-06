<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background: url(bg.png);
		}

	</style>
	<title>Registration Form_ Shop Manage Web App</title>
</head>
<body>
	<div id="form">
		<form method=POST>
<div id="labels">
	<label>Firstname</label>
	<input type="Text" name="Firstname"><br><br>
	<label>Lastname</label>
	<input type="Text" name="Lastname"><br><br>
	<label>Age</label>
	<input type="date" name="Birthdate"><br><br>
	<label>Sex</label>
	<input type="radio" name="Sex" checked>Male<input type="radio" name="Sex">Female<br><br>
	<label>Nationality</label>
	<input type="Text" name="Nationality"><br><br>
	<label>Nationality ID</label>
	<input type="Int" name="Nationality_ID"><br><br>
	<label>City</label>
	<input type="text" name="City"><br><br>
	<label>District</label>
	<input type="Text" name="District"><br><br>
	<label>Sector</label>
	<input type="Sector" name="Sector"><br><br>
	<label>Street</label>
	<input type="text" name="Street"><br><br>
	<label>Languages</label>
	<input type="Text" name="Languages"><br><br>
	<label>Shopname</label>
	<input type="Text" name="Shopname"><br><br>
	<label>Password</label>
	<input type="password" name="Password"><br><br>
	<label>Confrm Password</label>
	<input type="password" name="Confrm"><br><br>
	<div id="register">
		<input type="submit" value="Register" name="Register">
	</div>
</div>			
		</form>
		<?php
		$conn=new mysqli("Localhost","root","","shop_web_appp") or die("connection failed");
		if (isset($_POST['Register'])) {
			$first=$_POST['Firstname'];
			$second=$_POST['Lastname'];
			$birth=$_POST['Birthdate'];
			$sex=$_POST['Sex'];
			$country=$_POST['Nationality'];
			$N_ID=$_POST['Nationality_ID'];
			$city=$_POST['City'];
			$district=$_POST['District'];
			$sector=$_POST['Sector'];
			$street=$_POST['Street'];
			$languages=$_POST['Languages'];
			$shopname=$_POST['Shopname'];
			$password=$_POST['Password'];
		    $confrm=$_POST['Confrm'];
			$insert=$conn("INSERT INTO registration_form(Register,Firstname,Lastname,Birthdate,Sex,Nationality,Nationality_ID,City,District,Sector,Street,Languages,Shopname,Password,Confrm) VALUES($first,$second,$birth,$sex,$country,$N_ID,$city,$district,$sector,$street,$languages,$shopname,$password,$confrm)");
			if ($insert) {
				echo "Data Insert Is Successful";
			}
			else{
				echo "No Data Is Inserted";
			}
		}
		?>
	</div>

</body>
</html>