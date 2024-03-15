<?php
	try {
		$last_id = $_SESSION["last_id"];
		//echo "<br/>ID: $last_id<br/>";
		$conn = new PDO("mysql:host=$servername;dbname=$dbname",
            $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt = $conn->prepare("SELECT inputName, password, firstName, lastName,
			addressOne, addressTwo,  city, state, zip, phone, email, gender, marital, 
			dob".
		" FROM registration WHERE id = :last_id");
		$stmt->bindParam(':last_id', $last_id);
		$stmt->execute();

		// set the resulting array to associative
		$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
		//var_dump($stmt->fetchAll()[0]);
		$assocArray = $stmt->fetchAll()[0];
		$inputName = $assocArray["inputName"];
        $userPassword = $assocArray["password"];
        $firstName = $assocArray["firstName"];
        $lastName = $assocArray["lastName"];
        $addressOne = $assocArray["addressOne"];
        $addressTwo = $assocArray["addressTwo"];
        $city = $assocArray["city"];
        $state = $assocArray["state"];
        $zip= $assocArray["zip"];
        $phone = $assocArray["phone"];
        $email = $assocArray["email"];
        $gender = $assocArray["gender"];
        $marital = $assocArray["marital"];
        $dob = $assocArray["dob"];
	}
	catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	} finally {
		$conn = null;
	}
?>
