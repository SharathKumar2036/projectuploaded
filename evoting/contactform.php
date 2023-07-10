<?php
if(isset($_POST['Submit'])) 
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$emails=$_POST['emails'];
		$country=$_POST['country'];
		$subject=$_POST['subject'];
	

		$emails_from = "sharathnandyala6@gmail.com";
		$emails_subject = "New Form Submission";
		$emails_body = "Username: $fname.\n".
							"User Email: $emails.\n";
								"User Message: $subject.\n";

		$to = "o162098@rguktrkv.ac.in";
		$headers = "From: $emails_from \r\n";
		$headers = "Reply To: $emails \r\n";


		mail($to,$emails_subject,$emails_body,$headers);
		header("Location: contact.php");
	}
?>