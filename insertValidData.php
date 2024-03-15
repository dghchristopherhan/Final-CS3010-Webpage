<?php
	if ($isValid) {
		try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname",
                $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = $conn->prepare("INSERT INTO registration (inputName, password, firstName, lastName,
			addressOne, addressTwo, city, state, zip, phone, email, gender, marital, 
			dob)
			VALUES (:inputName, :password, :firstName, :lastName, :addressOne,
			:addressTwo, :city, :state, :zip, :phone,:email, :gender, :marital, :dob)");
            $sql->bindParam(':inputName', $inputName);
            $sql->bindParam(':password', $userPassword);
            $sql->bindParam(':firstName', $firstName);
            $sql->bindParam(':lastName', $lastName);
            $sql->bindParam(':addressOne', $addressOne);
            $sql->bindParam(':addressTwo',$addressTwo);
            $sql->bindParam(':city', $city);
            $sql->bindParam(':state', $state);
            $sql->bindParam(':zip', $zip);
            $sql->bindParam(':phone', $phone);
            $sql->bindParam(':email', $email);
            $sql->bindParam(':gender', $gender);
            $sql->bindParam(':marital', $marital);
            $sql->bindParam(':dob', $dob);
            $sql->execute();

			$last_id = $conn->lastInsertId();
			$_SESSION["last_id"] = "$last_id";
			
			header("Location: confirmation.php");
		}
		catch(PDOException $e) {
			echo "Connection failed: " . $e->getMessage();
		} finally {
			$conn = null;
		}
	}
?>