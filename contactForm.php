<?php

	/* Test echo */
	echo "Woah! This page showed up!";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		/*variables from the form */
		$Fname = $_POST["nameField"];
		$Femail = $_POST["emailField"];
		$Fsubject = $_POST["subjectField"];
		$Fmessage = $_POST["commentField"];
	}

	/*Variable for if form area is left blank*/
	$nameError = "";
	$emailError = "";
	$subjectError = "";
	$messageError = "";

	/* Some form validation to make sure all form areas are full */
	if (empty(Fname)) {
		$nameError = "Name is required!";
	} else {
		$Fname = retestInput($_POST["nameField"]);
	}
	if (empty(Femail)) {
		$emailError = "Email is required!";
	} else {
		$Femail = retestInput($_POST["emailField"]);
	}
	if (empty(Fsubject)) {
		$subjectError = "Subject is required!";
	} else {
		$Fsubject = retestInput($_POST["subjectField"]);
	}
	if (empty(Fmessage)) {
		$messageError = "Can't leave this region empty!"
	} else {
		$Fmessage = retestInput($_POST["commentField"]);
	}

	//function to return the newly entered text by the user
	function retestInput($newInput) {
		//trim removes unnecessary white space
		$newInput = trim($newInput);
		return $newInput;
	}

	/* Open a connection to the server */
	$connect = mysqli_connect("localhost:8888/TauKappaWebsite/", "tkeFormData", "12pCmG", "contactUs");

	/* Check the connection */
	if (mysqli_connect_errno()) {
		echo "Failed to connect to database: " . mysqli_connect_errno();
	}

	/* The Query String */
	$sql = "INSERT INTO contactUS (name, email, subject, message) VALUES (Fname, Femail, Fsubject, Fmessage)";

	/* mysqli_query does a query on the database */
	if(mysqli_query($connect,$sql)) {
		echo "Form data has been submitted";
	}
	else 
		echo "Error!";

	/* Close the connection to the database */
	mysqli_close($connect);
?>

 