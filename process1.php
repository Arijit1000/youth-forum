<?php
	require_once('config.php');
	require 'mailer/PHPMailer-master/src/Exception.php';
	require 'mailer/PHPMailer-master/src/PHPMailer.php';
	require 'mailer/PHPMailer-master/src/SMTP.php';
	?>
<?php

if(isset($_POST))
	{
		$name 		= $_POST['name'];
		$email 		= $_POST['email'];
		$phonenumber 	= $_POST['phonenumber'];
		$collegename	= $_POST['collegename'];
		$occupation	= $_POST['occupation'];
		$remarks	= $_POST['remarks'];
		$refid 		= $_POST['refid'];


		$mail = new PHPMailer();
		$mail->isSMTP();
		$mail->Host = 'example.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'aditi.motekar@gmail.com';
		$mail->Password = 'chinu1999';
		$mail->setFrom('aditi.motekar@gmail.com');
		$mail->addAddress($email);
		$mail->Subject = 'Here is the subject';
		$mail->Body    = 'This is the body.';
		$mail->send();


		$sql = "INSERT INTO trial(name, email, phonenumber, collegename, occupation, remarks, refid) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$name, $email, $phonenumber, $collegename, $occupation, $remarks, $refid]);

		if($result)
			{
				echo 'Successfully saved.';
			}	
		else
			{
				echo 'There were erros while saving the data.';
			}
	}
else	
	{
		echo 'No data';
	}