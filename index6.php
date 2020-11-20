<?php
require_once ('config.php');
?>
<!DOCTYPE html><html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="logo.ico" />
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="form.6a0b7b35.css">
<link rel="stylesheet" href="css.84c01e97.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700,800,900" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet" type="text/css">
<title>Youth Speak Forum 2020 Registration</title>
<h3> Hi there !!
We appreciate your interest in the forum.

Youth Speak Forum powered by AIESEC is an event that empowers young people through short and powerful talks and sparks interest in self-development through skills-building workshops. 
Unleash the hidden qualities within you !!

Contact details : 
Nischal Topno 
Core Committee Vice President (Delegate Services):- +91 8789383496
Swastik Barua
Core Committee Vice President (Delegate Services):- +91 8240609897 </h3>

</head>
<body> 
<div class="hero-container"> 
<img class="hero-container__image" src="background.5e7bc339.svg" alt="register page"> 
</div> 
<div class="container"> 
	<div class="form-container">
		<div class="form-container__header"> 
			<div class="form-container__header-child"> 
			<span class="center">
			<img src="oyes-black-logo (1).webp" height="50" alt="">
			</span> 
				<div>
					<h3 style= "font-family:'Montserrat', sans-serif; text-align:center">Deep Learning Webinar Registartion Form</h3>
				</div> 
			</div> 
		</div> 
	<hr> 
	<div class="form-container__body"> 
	<form id="registerForm" action="#"> 
		<div class="form-slider"> 
			<div class="form-slider__box"> 
				<input class="custom-input" type="text" name="name" id="name"placeholder="Name" required> 
				<input class="custom-input" type="email" name="email" id="email" placeholder="Email ID" required> 
				<input class="custom-input email" type="number" name="phonenumber" id="phonenumber" placeholder="Phone Number (What's App)" required><input class="custom-input" type="text" name="collegename" id="collegename" placeholder="College Name" required> 
			</div> 
		<div class="form-slider__box"> 
			<input class="custom-input" type="text" name="occupation" id="occupation" placeholder="Occupation" required> 
	<?php 
                    if(isset($_GET['refid']))
			{
                    		echo '<input type="hidden" id="refid" name="refid" value="'.$_GET['refid'].'"/>';	
                    		$refid = $_GET['refid'];
                    	/*$connect = mysqli_connect("localhost:3306", "oyesters", "Oyesters@1234", "oyesters_plesk_");
                    	$sql1 = "SELECT * FROM ambassador_data WHERE id = '$refid'";
                    	$rs = mysqli_query($connect, $sql1);
                    	$row = mysqli_fetch_array($rs);
                    	$clicks = $row['clicks'] + 1;
                    	$sql2 = "UPDATE ambassador_data SET clicks=$clicks WHERE id='$refid'";
                    	$rs1 = mysqli_query($connect, $sql2);*/
                    	}
                    else
			{
                    	echo '<input type="hidden" id="refid" name="refid" value="nothing"/>';
			}
			?> 
			<textarea name="remarks" id="remarks" name="remarks" class="custom-input" placeholder="Remarks" cols="30" rows="5"></textarea> 
			</div> 
			</div> 
			</form> 
		</div> 
		<hr> 
		<div class="form-container__footer"> 
		<button class="btn prev">Previous</button> 
		<button class="btn next">Next</button> 
		<button class="btn success submit" id="register" name="submit" href="https://rzp.io/l/LHrB7A2" onclick="window.location.href='https://rzp.io/l/LHrB7A2'"  type="submit"> Submit </button> 
		</div>
   	</div> 
</div> 
<div class="footer"> 
	<div class="footer__left"> 
	<a href="https://m.facebook.com/OyestersTraining/" class="footer__link"> <img class="icon" src="facebook.a2592ace.svg" alt="facebook link"> </a> 
	<a href="https://www.instagram.com/oyesters_trainings/?hl=en" class="footer__link"> <img class="icon" src="instagram.745b925c.svg" alt="instagram link"> </a> 
	<a href="https://www.linkedin.com/company/oyesterstrainings" class="footer__link"> <img class="icon" src="linkedin.009d98ac.svg" alt="linkedin link"> </a> 
	</div> 
	<div class="footer__right"> 
	<h6 style="text-align:end;"> Copyright &copy; Oyesters Training 2020 </h6> 
	<h6> Made with &hearts; by <a target="_blank" style="text-decoration:none;color:inherit;" href="https://niel.netlify.app/">Neil</a> </h6> 
	</div> 
</div> 
<div class="message-container">
</div> 
<script src="js.14b56eff.js"></script> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
<script type="text/javascript">
	$(function()
	{
		$('#register').click(function(e)
		{
			// button is outside of form
			// var valid = this.form.checkValidity(); 

			// get form and
			var valid = document.getElementById('registerForm').checkValidity();
			console.log($('#refid').val());

			if(valid)
			{
				var name 		= $('#name').val();
				var email		= $('#email').val();
				var phonenumber 	= $('#phonenumber').val();
				var collegename		= $('#collegename').val();
				var occupation		= $('#occupation').val();
				var remarks 		= $('#remarks').val();
				var phonenumber 	= $('#phonenumber').val();
				var refid				= $('#refid').val();
				
				e.preventDefault();	

				$.ajax(
				{
					type: 'POST',
					url: 'process1.php',
					data: {name: name,email: email,phonenumber: phonenumber,collegename: collegename,occupation: occupation,remarks: remarks,phonenumber: phonenumber, refid:refid},
					success: function(data)
					{
						console.log("Success: " + data);
						Swal.fire
						({
							'title': 'Successful',
							'text': data,
							'type': 'success',
						})			
					},
					error: function(data)
					{
						console.log("Error: " + data);
						Swal.fire
						({
							'title': 'Errors',
							'text': 'There were errors while saving the data.',
							'type': 'error'
						})
					}
					});	
			}
			else
			{
				
			}
		});		
	
	});	
</script>
</body>
</html>