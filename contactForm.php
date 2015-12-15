<?php 
	echo "Woah! This page showed up!";
	/*variables from the form */
	Fname = $_POST["nameField"];
	Femail = $_POST["emailField"];
	Fsubject = $_POST["subjectField"];
	/* Open a connection to the server */
	$connect = mysqli_connect("localhost:8888/TauKappaWebsite/", "tkeFormData", "12pCmG", "contactUs");
	/* Check the connection */
	if (mysqli_connect_errno()) {
		echo "Failed to connect to database: " . mysqli_connect_errno();
	}
	/* The Query String */
	$sql = "INSERT INTO contactUS (name, email, subject, message) VALUES (Fname, Femail, Fsubject, "testing123worked!")";
	/* mysqli_query does a query on the database */
	if(mysqli_query($connect,$sql)) {
		echo "Form data has been submitted";
	}
	else 
		echo "Error!";
	/* Close the connection to the database */
	mysqli_close($connect);
?>

 